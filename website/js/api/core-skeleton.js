function build_countryOption(country_Id){
 js_ajax("GET",PROJECT_URL+'/backend/config/'+USR_LANG+'/countries/countries.json',{},
 function(response){ 
   var countryElement=document.getElementById(country_Id);
   // Delete previous Options 
   for(var index=countryElement.length;index>0;index--) { countryElement.remove(index); }
   // Add Countries
   for(var index=0;index<response.countries.length;index++) {
     var option = document.createElement("option");
	     option.text = response.countries[index].countryName;
	     option.value = response.countries[index].countryValue;
     countryElement.add(option);
   }
 });
}

function build_stateOption(country_Id,state_Id){ /* Build's Dynamic State Options */
 var country=document.getElementById(country_Id).value;
 js_ajax("GET",PROJECT_URL+'/backend/config/'+USR_LANG+'/countries/'+country+'/viewAllStates.json',{},
 function(response){ 
  var stateElement=document.getElementById(state_Id);
  /* Delete previous Options */
   for(var index=stateElement.length;index>0;index--) { stateElement.remove(index); }
  /* Add States */
  for(var index=0;index<response.states.length;index++) {
	var option = document.createElement("option");
		option.text = response.states[index].stateName;
		option.value = response.states[index].stateValue;
	stateElement.add(option);
  }
 });
}

function build_locationOption(country_Id,state_Id,location_Id) { /* Build's Dynamic Location Options */ 
 var country=document.getElementById(country_Id).value;
 var state=document.getElementById(state_Id).value;
 js_ajax("GET",PROJECT_URL+'backend/config/'+USR_LANG+'/countries/'+country+'/'+state+'/viewAllLocations.json',
 {},function(response){ 
  var locationElement=document.getElementById(location_Id);
  /* Delete previous Options */
  for(var index=locationElement.length;index>0;index--) { locationElement.remove(index); }
  /* Add Locations related to State Selected */
  for(var index=0;index<response.location.length;index++) {
	  var option = document.createElement("option");
		  option.text = response.location[index].locationName;
		  option.value = response.location[index].locationValue;
	  locationElement.add(option);
   }
 });
}

function build_minlocationOption(country_Id,state_Id,location_Id,locality_Id){ /* Build's Dynamic Locality Options */	 
 var country=document.getElementById(country_Id).value;
 var state=document.getElementById(state_Id).value;
 var location=document.getElementById(location_Id).value;
 js_ajax("GET",PROJECT_URL+'backend/config/'+USR_LANG+'/countries/'+country+'/'+state+'/'+location+'/ViewAllMinLocations.json',
 {},function(response){ 
	var localityElement=document.getElementById(locality_Id);
	/* Delete previous Options */
	  for(var index=localityElement.length;index>0;index--) { localityElement.remove(index); }
	/* Adding Locality related to Location Selected*/
	  for(var index=0;index<response.minLocations.length;index++) {
		 var option = document.createElement("option");
			 option.text = response.minLocations[index].minlocationName;
			 option.value = response.minLocations[index].minlocationValue;
		 localityElement.add(option);
	  }
 });
}
