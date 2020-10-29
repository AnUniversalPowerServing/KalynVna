class Commons {
  pageHeadingTitle(title){
	return ('<div><h5 style="border-bottom:2px solid #000;padding-bottom:10px;"><b>'+title+'</b></h5></div>');
  }
}

class ViewProfiles {
 unPublishedProfile(response){
  return('<div class="list-group" style="cursor:pointer;">'
  
		+'<div class="list-group-item pad0" style="background-color:#fff8f8;border:1px solid #f44336;">'
		
		+'<div style="margin-top:4px;">'
		+'<span style="text-transform:uppercase;letter-spacing:0.5px;font-weight:bold;background-color:#f44336;;padding:5px;color:#fff;font-size:10px;">'
		+'Not Published</span>'
		+'</div>'
		
		+'<div class="container-fluid mbot15p">'
		+'<div class="row">'
		+'<div class="col-sm-12">'
		
		+'<div><h5><b>SurName FirstName LastName</b></h5></div>'
		+'<div style="color:#777;"><span style="padding:5px;letter-spacing:0.5px;"><i>Your Profile</i></span></div>'
		
		+'<div align="right" class="mtop15p">'
		+'<div style="color:#777;">&nbsp;Profile created on 06 October 2020, 12:30 PM</div>'
		+'<div style="color:#777;">&nbsp;Waiting to publish ...</div>'
		+'</div>'
		
		+'</div>'
		+'</div>'
		+'</div>'
		
		+'</div>'
		
		+'<div class="list-group-item pad0" style="background-color:#ffebe9;border:1px solid #f44336;">'
		
		+'<div class="container-fluid mbot10p">'
		+'<div class="row">'
		+'<div class="col-sm-12">'
		
		+'<div class="row mtop10p">'
		+'<div class="col-sm-7">'
		
		+'<div class="progress" style="height:5px;margin-top:5px;margin-bottom:0px;background-color:#ccc;">'
		+'<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"'
		+'style="width:70%;line-height:15px;font-size:10px;font-weight:bold;background-color:#777;color:#000;">'
		
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
 publishedProfile(response){
  return('<div class="list-group" style="cursor:pointer;">'
  
		+'<div class="list-group-item pad0" style="background-color:#f4fff4;border:1px solid #009688;">'
		
		+'<div style="margin-top:4px;">'
		+'<span style="text-transform:uppercase;letter-spacing:0.5px;font-weight:bold;background-color:#21a726;padding:5px;color:#fff;font-size:10px;">'
		+'Published</span>'
		+'</div>'
		
		+'<div class="container-fluid mbot15p">'
		+'<div class="row">'
		+'<div class="col-sm-12">'
		
		+'<div><h5 style="color:#000;"><b>SurName FirstName LastName</b></h5></div>'
		+'<div style="color:#777;"><span style="padding:5px;letter-spacing:0.5px;"><i>Your Profile</i></span></div>'
		
		+'<div align="right" class="mtop15p">'
		+'<div style="color:#777;">&nbsp;Profile published on 06 October 2020, 12:30 PM</div>'
		+'<div style="color:#777;">&nbsp;Profile deactivates on 06 October 2020, 12:30 PM</div>'
		+'</div>'
		
		+'</div>'
		+'</div>'
		+'</div>'
		+'</div>'
		+'<div class="list-group-item pad0" style="background-color:#d6ffd7;border:1px solid #009688;">'
		
		+'<div class="container-fluid mtop5p mbot8p">'
		+'<div class="row">'
		+'<div align="center" class="col-sm-2">'
		+'<i class="fa fa-2x fa-thumbs-up" style="color:#777;" aria-hidden="true"></i>'
		+'</div>'
		+'<div align="center" class="col-sm-2"><span style="color:#777;font-size:18px;">0</span></div>'
		+'<div align="center" class="col-sm-2">'
		+'<i class="fa fa-2x fa-balance-scale" style="color:#777;" aria-hidden="true"></i>'
		+'</div>'
		+'<div align="center" class="col-sm-2"><span style="color:#777;font-size:18px;">0</span></div>'
		+'<div align="center" class="col-sm-2">'
		+'<i class="fa fa-2x fa-area-chart" style="color:#777;" aria-hidden="true"></i>'
		+'</div>'
		+'<div align="center" class="col-sm-2"><span style="color:#777;font-size:18px;">0</span></div>'
		+'</div>'
		+'</div>'
		
		+'</div>'
		
		+'</div>');
 }
 simpleProfile(response){
 /***
   =================
   TEST DATA:
   =================
   [{"account_Id":"CA1218751586147","logo":"images\/men.jpg","name":"Rakesh",
     "gender":"Male","motherTongue":"Telugu","status":"UnMarried","ft_hgt":"5",
	 "inch_hgt":"9","highDegree":"B-TECH ","occupation":"Software engineer",
	 "occupationType":"Private Company","living_status":"Living in India",
	 "exp_highDegree":"B-TECH \/ M-TECH \/ MCA \/ MBA","exp_occupation":" Govt. emplopyee \/ Software engineer ",
	 "exp_occupationType":"Government \/ Public Secto","exp_motherTongue":"Telugu",
	 "exp_living_status":"Living in India"}]
   -----------------
  **/
  var account_Id = response.account_Id;
  var name = response.name;
  var profile_pic = response.logo;
  var gender = response.gender;
  var motherTongue = response.motherTongue;
  var status = response.status;
  var favourites = response.favourites;
  var ft_hgt = response.ft_hgt;
  var inch_hgt = response.inch_hgt;
  var highDegree = response.highDegree;
  var occupation = response.occupation;
  var occupationType = response.occupationType;
  var living_status = response.living_status;
  var exp_highDegree = response.exp_highDegree;
  var exp_occupation = response.exp_occupation;
  var exp_occupationType = response.exp_occupationType;
  var exp_motherTongue = response.exp_motherTongue;
  var exp_living_status = response.exp_living_status;
  
  var content='<div class="col-sm-4">';
      content+='<div id="viewprofile'+account_Id+'" class="list-group">';
	  content+='<div class="list-group-item pad0">';
	  content+='<div class="container-fluid">';
	  // If Admin 
  if(ACCOUNT_TYPE.length>0 && ACCOUNT_TYPE==='ADMINISTRATOR'){
	  content+='<div class="row">';
	  content+='<div align="right" class="col-sm-12" style="color:#aaa;">';
	  content+='<i class="fa fa-edit" aria-hidden="true" ';
	  content+='onclick="javascript:urlTransfer(\''+PROJECT_URL+'customer/editprofile/'+account_Id+'\')"></i></a>&nbsp;';
	  content+='<i class="fa fa-close" aria-hidden="true" onclick="javascript:deleteAprofile(\''+account_Id+'\');"></i>';
	  content+='</div>';
	  content+='</div>';
  } else if(ACCOUNT_TYPE.length>0 && ACCOUNT_TYPE==='CUSTOMER'){
	  content+='<div class="row">';
	  content+='<div align="right" class="col-sm-12" style="color:#aaa;">';
	  if(favourites==undefined || favourites==='NO'){
	  content+='<i id="browseMatrimony-fav-'+account_Id+'" class="fa fa-star-o" aria-hidden="true" ';
	  content+='onclick="javascript:userBrowseMatrimonyFav(\''+account_Id+'\');"></i>&nbsp;';
      } else {
	  content+='<i id="browseMatrimony-fav-'+account_Id+'" class="fa fa-star" aria-hidden="true" ';
	  content+='style="color:#ff9800;" onclick="javascript:userBrowseMatrimonyFav(\''+account_Id+'\');"></i>&nbsp;';
      }
	  content+='</div>';
	  content+='</div>';
  }
	  // If Admin 
	  content+='<div class="row">';
	  content+='<div align="center" class="col-sm-6">';
	  content+='<img src="'+profile_pic+'" class="profile_pic_img mtop45p"/>';
	  content+='</div>';
	  content+='<div  align="center" class="col-sm-6 pad0">';
	 
	  content+='<div class="list-group mbot10p">';
	  content+='<div class="list-group-item bg-purple-dark" style="border:0px;padding:5px;border-top-left-radius:0px;"><b>SCAN AND VIEW</b></div>';
	  content+='<div class="list-group-item pad0" style="border:0px;background-color:#f8dbfd;border-top-left-radius:0px;border-bottom-right-radius:0px;">';
	 
	  content+='<div style="padding:5px;"><b>User Media Gallery at</b></div>';
	  content+='<img src="qrcode/'+account_Id+'" style="margin-top:-2px;"/>';
	  content+='<div style="padding:5px;"><b>Kalyanaveena.com <br/>MOBILE APP</b></div>';
	  content+='</div>';
	 
	  content+='</div>';
	  content+='</div>';
	 
	  content+='</div>';
	  content+='</div>';
	 
	  content+='</div>';
	  content+='<div align="center" class="list-group-item">';
	  content+='<b>'+name.toUpperCase()+'</b>'; 
	  content+='</div>';
	  content+='<div class="list-group-item pad0">';
	  content+='<div class="container-fluid mtop15p">';
	  content+='<div class="row">';
	  content+='<div align="center" class="col-sm-12">';
	  content+='<div class="table-responsive">';
	  content+='<table class="table">';
	  content+='<thead style="background-color:#e7e7e7;">';
	  content+='<tr>';
	  content+='<th>General</th>';
	  content+='<th>Details</th>';
	  content+='</tr>';
	  content+='</thead>';
	  content+='<tbody>';
	  content+='<tr><td><b>Gender</b></td><td>'+gender+'</td></tr>';
	  content+='<tr><td><b>Mother Tongue</b></td><td>'+motherTongue+'</td></tr>';
	  content+='<tr><td><b>Status</b></td><td>'+status+'</td></tr>';
	  content+='<tr><td><b>Highest Degree</b></td><td>'+highDegree+'</td></tr>';
	  content+='<tr><td><b>Occupation</b></td><td>'+occupation+'</td></tr>';
	  content+='<tr><td><b>Occupation Type</b></td><td>'+occupationType+'</td></tr>';
	  content+='<tr><td><b>Living Status</b></td><td>'+living_status+'</td></tr>';
	  content+='</tbody>';
	  content+='</table>';
	  content+='</div>';
      content+='</div>';
	  content+='</div>';
	  content+='</div>';
	  content+='</div>';
	  content+='<div align="center" class="list-group-item pad0" style="background-color:#e7e7e7;">';
	  content+='<h5><b>';
	  if(gender==='Male'){
	  content+='HE';
	  } else {
	  content+='SHE';
	  }
	  content+=' IS LOOKING FOR</b></h5>';
	  content+='</div>';
	  content+='<div align="center" class="list-group-item pad0">';
	  content+='<div class="container-fluid mtop15p">';
	  content+='<div class="row">';
	  content+='<div align="center" class="col-sm-12">';
	  content+='<div class="table-responsive">';        
	  content+='<table class="table">';
	  content+='<thead style="background-color:#e7e7e7;">';
	  content+='<tr><th>General</th><th>Details</th></tr>';
	  content+='</thead>';
	  content+='<tbody>';
	  content+='<tr><td><b>Mother Tongue</b></td><td>'+exp_motherTongue+'</td></tr>';
	  content+='<tr><td><b>Highest Degree</b></td><td>'+exp_highDegree+'</td></tr>';
	  content+='<tr><td><b>Occupation</b></td><td>'+exp_occupation+'</td></tr>';
	  content+='<tr><td><b>Occupation Type</b></td><td>'+exp_occupationType+'</td></tr>';
	  content+='<tr><td><b>Living Status</b></td><td>'+exp_living_status+'</td></tr>';
	  content+='</tbody>';
	  content+='</table>';
	  content+='</div>';
      content+='</div>';
	  content+='</div>';
	  content+='</div>';
	  content+='</div>';
	  content+='<div align="center" class="list-group-item pad0">';
	  content+='<div class="container-fluid pad0">';
	  content+='<div class="row">';
	  content+='<div class="col-sm-12">';
	  content+='<a href="'+PROJECT_URL+'app/user/'+account_Id+'">';
	  content+='<button class="btn btn-primary form-control"><b>View Profile</b></button>';
	  content+='</a>';
	  content+='</div>';
	  content+='</div>';
	  content+='</div>';
	  content+='</div>';
	  content+='</div>';
	  content+='</div>';	
  return content;
 }
}

class Dashboard {
 display(){
   return ('<div class="container-fluid mtop15p">'+
		   '<div class="row">'+
		   '<div class="col-md-12 col-xs-12">'+commons.pageHeadingTitle('My Dashboard')+'</div>'+
		   '</div>'+
		   '<div class="row mtop15p">'+
		   '<div class="col-md-3 col-xs-12">'+dashboard.menu()+'</div>'+
		   '<div class="col-md-9 col-xs-12">'+
		   '<div id="">'+dashboard.summaryContent()+'</div>'+
		   '</div>'+
		   '</div>'+
		   '</div>');
 }
 menu(){
   return ('<style>'+
		   '.nav-pills>li>a { border:1px solid #630062;color:#630062;background-color:#fff; }'+
		   '.nav-pills>li>a:hover { background-color:#e91e63;border:1px solid #e91e63;color:#fff;font-weight:bold; }'+
		   '</style>'+
		   '<ul class="nav nav-pills nav-stacked">'+
		   '<li class="active"><a href="#"><b>Summary</b></a></li>'+
		   '<li><a href="#"><b>Your Watched List</b></a></li>'+
		   '<li><a href="#"><b>Our Match Suggestions</b></a></li>'+
		   '<li><a href="#"><b>People watched you</b></a></li>'+
		   '</ul>'); 
 }
 summaryContent(){
   return ('<div>'+
		   '<div class="row">'+
		   '<div class="col-md-3 col-xs-12">'+dashboard.summary_display_creditBal()+'</div>'+
		   '<div class="col-md-4 col-xs-12">'+dashboard.summary_display_statistics_today()+'</div>'+
		   '<div class="col-md-4 col-xs-12">'+dashboard.summary_display_statistics_overall()+'</div>'+
           '</div>'+ 
		   '<div class="row">'+
		   '<div class="col-md-12 col-xs-12">'+commons.pageHeadingTitle('My Profiles')+'</div>'+
		   '</div>'+
		   '<div class="row mtop15p">'+
		   '<div class="col-md-4 col-xs-12">'+viewProfiles.publishedProfile('')+'</div>'+
		   '<div class="col-md-4 col-xs-12">'+viewProfiles.unPublishedProfile('')+'</div>'+
		   '</div>'+
		   '</div>');
 }
 summary_display_creditBal(){
   return ('<div>'+
		   '<div class="list-group">'+
		   '<div class="list-group-item" style="background-color:#f6fbc4;border:1px solid #bbce05;">'+
		   '<div>'+'<b>Your Balance</b>'+'</div>'+
		   '<div align="right">'+'<h4><b>1000 <span class="fs12">bucks</span></b></h4>'+'</div>'+
		   '</div>'+
		   '</div>'+
		   '<div class="list-group">'+
		   '<div class="list-group-item" style="background-color:#ffebaf;border:1px solid #ff9800;">'+
		   '<div>'+'<b>You can view complete details of profile you interested. But, to get Contact Details of it - You need Bucks</b>'+'</div>'+
		   '<div align="right"><button class="btn btn-default btn-xs"><b>Buy Bucks Now</b></button></div>'+
		   '</div>'+
		   '</div>'+
		   '</div>'
		   ); 
 }
 summary_display_horoscopeMatches(){
   return ('<div class="list-group">'+
		   '<div class="list-group-item">'+
		   '<div>'+'<b>Your Horoscope Matches</b>'+'</div>'+
		   '<div align="right">'+'<h4><b>1000 <span class="fs12">profiles</span></b></h4>'+'</div>'+
		   '</div>'+
		   '</div>'); 
 }
 summary_display_statistics_today(){
   return ('<div class="list-group">'+
		   '<div class="list-group-item" style="background-color:#ebceef;border:1px solid #673ab7;">'+'<b>Your Today\'s Statistics</b>'+'</div>'+
		   '<div class="list-group-item pad0" style="background-color:#f8e6fb;border:1px solid #673ab7;">'+
		   '<div>'+
		   '<table class="table mbot0">'+
		   '<tbody>'+
		   '<tr>'+
		   '<td><b>New Profile Created</b></td>'+
		   '<td>0</td>'+
		   '</tr>'+
		   '<tr>'+
		   '<td><b>Profiles you watched today</b></td>'+
		   '<td>0</td>'+
		   '</tr>'+
		   '<tr>'+
		   '<td><b>Your Horoscope matched profiles</b></td>'+
		   '<td>0</td>'+
		   '</tr>'+
		   '<tr>'+
		   '<td><b>People watched you</b></td>'+
		   '<td>0</td>'+
		   '</tr>'+
		   '<tr>'+
		   '<td><b>Bucks Spent</b></td>'+
		   '<td>0</td>'+
		   '</tr>'+
		   '</tbody>'+
		   '</table>'+
		   '</div>'+
		   '</div>'+
		   '</div>');  
 }
 summary_display_statistics_overall(){
   return ('<div class="list-group">'+
		   '<div class="list-group-item" style="background-color:#b4e5fb;border: 1px solid #2196F3;">'+'<b>Overall Statistics</b>'+'</div>'+
		   '<div class="list-group-item pad0" style="border: 1px solid #2196F3;background-color:#edf6fb;">'+
    
		   '<div>'+
		   '<table class="table mbot0">'+
		   '<tbody>'+
		   '<tr>'+
		   '<td><b>Profile Created</b></td>'+
		   '<td>0</td>'+
		   '</tr>'+
		   '<tr>'+
		   '<tr>'+
		   '<td><b>Profiles you watched today</b></td>'+
		   '<td>0</td>'+
		   '</tr>'+
		   '<tr>'+
		   '<td><b>Your Horoscope matched profiles</b></td>'+
		   '<td>0</td>'+
		   '</tr>'+
		   '<tr>'+
		   '<td><b>People watched you</b></td>'+
		   '<td>0</td>'+
		   '</tr>'+
		   '<tr>'+
		   '<td><b>Bucks Spent</b></td>'+
		   '<td>0</td>'+
		   '</tr>'+
		   '</tbody>'+
		   '</table>'+
		   '</div>'+
		   '</div>'+
		   '</div>');  
 } 
}

var commons = new Commons();
var viewProfiles = new ViewProfiles();
var dashboard = new Dashboard();