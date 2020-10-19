class ViewProfiles {
 unPublishedProfile(response){
  return('<div class="list-group" style="cursor:pointer;">'
  
		+'<div class="list-group-item pad0">'
		
		+'<div style="margin-top:4px;">'
		+'<span style="text-transform:uppercase;letter-spacing:0.5px;font-weight:bold;background-color:#630062;padding:5px;color:#fff;font-size:10px;">'
		+'Not Published</span>'
		+'</div>'
		
		+'<div class="container-fluid mbot15p">'
		+'<div class="row">'
		+'<div class="col-sm-12">'
		
		+'<div><h5><b>SurName FirstName LastName</b></h5></div>'
		+'<div style="color:#777;"><span class="label label-default" style="padding:5px;letter-spacing:0.8px;">Your Profile</span></div>'
		+'<div class="mtop15p" align="right" style="color:#777;">&nbsp;Profile created on 06 October 2020, 12:30 PM</div>'
		
		+'</div>'
		+'</div>'
		+'</div>'
		
		+'</div>'
		
		+'<div class="list-group-item pad0">'
		
		+'<div class="container-fluid mbot15p">'
		+'<div class="row">'
		+'<div class="col-sm-12">'
		
		+'<div class="row mtop15p">'
		+'<div class="col-sm-7">'
		
		+'<div class="progress" style="height:5px;margin-top:5px;margin-bottom:0px;background-color:#a965b5;">'
		+'<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"'
		+'style="width:70%;line-height:15px;font-size:10px;font-weight:bold;background-color:#630062;color:#000;">'
		
		+'</div>'
		+'</div>'
		
		+'</div>'
		
		+'<div class="col-sm-5"><b>70% Completed</b></div>'
		
		+'</div>'
		
		+'</div>'
		+'</div>'
		+'</div>'
		
		+'</div>'
		+'</div>');
 }
}
var viewProfiles = new ViewProfiles();