<!DOCTYPE html>
<html>
<head>
  <title>Panchangam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.mtop5p { margin-top: 5px; }
.mtop10p { margin-top: 10px; }
.mtop15p { margin-top: 15px; }
.mbot15p { margin-bottom: 15px; }
.mtop35p { margin-top: 35px; }
.mbot35p { margin-bottom:35px; }
.mtop45p { margin-top:45px; }
.mtop65p { margin-top:85px; }
 hr { margin-bottom: 10px; }
.hr-red { border-color: red; }
.pad0 { padding: 0px; }
.hide-block { display: none; }
.font-red { color: red; }
.font-grey { color:#555; }
.font-mdm-grey { color:#666; }
.font-lgt-grey { color:#ccc; }
.bg-grey { background-color:#f5f5f5; }
code { font-weight: bold;font-size: 11px; }
table>thead>tr { background-color:#eee; }
</style>
</head>
<body>
<script>
function load_chartStyle_northIndia(id){
var chart = document.getElementById(id);
var drawChart = chart.getContext("2d");
drawChart.beginPath();

drawChart.rect(5,5,315,315);
drawChart.stroke();

drawChart.moveTo(5,5);
drawChart.lineTo(320,320);
drawChart.stroke();

drawChart.moveTo(5,320);
drawChart.lineTo(320,5);
drawChart.stroke();

drawChart.moveTo(5,155);
drawChart.lineTo(155,5);
drawChart.stroke();

drawChart.moveTo(155,5);
drawChart.lineTo(320,155);
drawChart.stroke();

drawChart.moveTo(320,155);
drawChart.lineTo(155,320);
drawChart.stroke();

drawChart.moveTo(155,320);
drawChart.lineTo(5,155);
drawChart.stroke();

drawChart.font="11px Arial";
drawChart.fillText("1",150,40);

drawChart.font="11px Arial";
drawChart.fillText("2",80,20);

drawChart.font="11px Arial";
drawChart.fillText("3",15,50);

drawChart.font="11px Arial";
drawChart.fillText("4",78,100);

drawChart.font="11px Arial";
drawChart.fillText("5",10,180);

drawChart.font="11px Arial";
drawChart.fillText("6",80,260);

drawChart.font="11px Arial";
drawChart.fillText("7",160,185);

drawChart.font="11px Arial";
drawChart.fillText("8",235,255);

drawChart.font="11px Arial";
drawChart.fillText("9",305,190);

drawChart.font="11px Arial";
drawChart.fillText("10",235,110);

drawChart.font="11px Arial";
drawChart.fillText("11",300,50);

drawChart.font="11px Arial";
drawChart.fillText("12",235,20);
}
var SIC_H_P_INDEX=[0,0,0,0,0,0,0,0,0,0,0,0,0];
var SIC = { rec:  { x:1, y:1, w:317, h:351 },
						 box:[{ from_x:79, from_y:1, to_x:79, to_y:351, desc:"" }, // X-axis
							  { from_x:237, from_y:1, to_x:237, to_y:351, desc:"" }, // X-Axis
							  { from_x:1, from_y:87.5, to_x:351, to_y:87.5, desc:"" }, // Y-Axis
							  { from_x:1, from_y:262.5, to_x:351, to_y:262.5, desc:"" }, // Y-Axis
							  { from_x:158, from_y:1, to_x:158, to_y:87.5, desc:"" }, // X-Axis
							  { from_x:158, from_y:262.5, to_x:158, to_y:351, desc:"" }, // X-Axis
							  { from_x:1, from_y:175, to_x:79, to_y:175, desc:"" }, // Y-Axis
							  { from_x:237, from_y:175, to_x:351, to_y:175, desc:"" } // Y-Axis
							  ],
						planetsIntro: [{ x:11, y:378, x_pad:4,y_pad:381,icon:"Su",borderColor:"#e43a05",bgColor:"#e43a05",fontColor:"white", label:"Sun",label_x:24, label_y:383 }, // Sun
									   { x:126, y:378, x_pad:118,y_pad:381,icon:"Mo",borderColor:"black",bgColor:"white",fontColor:"black",label:"Moon",label_x:142, label_y:382 }, // Mo
									   { x:245, y:378, x_pad:238,y_pad:381,icon:"Ma",borderColor:"#c50345",bgColor:"#c50345",fontColor:"white",label:"Mars",label_x:260, label_y:382 }, // Ma
									   { x:11, y:408, x_pad:4,y_pad:411,icon:"Sa",borderColor:"black",bgColor:"black",fontColor:"white",label:"Saturn",label_x:24, label_y:413 }, // Sa
									   { x:126, y:408, x_pad:119,y_pad:411,icon:"Ju",borderColor:"black",bgColor:"yellow",fontColor:"black",label:"Jupiter",label_x:142, label_y:413 }, // Ju
									   { x:245, y:408, x_pad:238,y_pad:411,icon:"Ra",borderColor:"#0e24a0",bgColor:"#0e24a0",fontColor:"white",label:"Rahu",label_x:260, label_y:413 }, // Ra
									   { x:11, y:438, x_pad:4,y_pad:441,icon:"Me",borderColor:"green",bgColor:"green",fontColor:"white",label:"Mercury",label_x:24, label_y:444 }, // Me
									   { x:126, y:438, x_pad:119,y_pad:441,icon:"Ke",borderColor:"#717070",bgColor:"#717070",fontColor:"white",label:"Ketu",label_x:142, label_y:444 }, // Ke
									   { x:245, y:438, x_pad:239,y_pad:442,icon:"Ve",borderColor:"black",bgColor:"white",fontColor:"black", label:"Venus",label_x:260, label_y:444}], // Ve
						houses:[{id:1,label:"1",x:115,y:13},
								{id:2,label:"2",x:193.75,y:13},
								{id:3,label:"3",x:272.75,y:13},
								{id:4,label:"4",x:272.75,y:99},
								{id:5,label:"5",x:272.75,y:186},
								{id:6,label:"6",x:272.75,y:274},
								{id:7,label:"7",x:190,y:274},
								{id:8,label:"8",x:115,y:274},
								{id:9,label:"9",x:40,y:274},
								{id:10,label:"10",x:36,y:186},
								{id:11,label:"11",x:36,y:99},
								{id:12,label:"12",x:36,y:13}],
						planets:{"12":[
									   { x:41, y:50, label_x:35,label_y:53 }, // Ju
									   { x:41, y:26, label_x:34,label_y:29 }, // Sun
									   { x:16, y:26, label_x:9,label_y:30 }, // Mo
									   { x:65, y:26, label_x:58,label_y:29 }, // Ma
									   { x:16, y:73, label_x:9,label_y:76 }, // Me
									   { x:41, y:73, label_x:35,label_y:76 }, // Ke
									   { x:66, y:73, label_x:60,label_y:76 }, // Ve
									   { x:16, y:50, label_x:9,label_y:53 }, // Sa
									   { x:66, y:50, label_x:60,label_y:53 }], // Ra
									   
								  "1":[{ x:119, y:50, label_x:113,label_y:53 }, // Ju
									   { x:119, y:26, label_x:112,label_y:29 }, // Sun
									   { x:94, y:26, label_x:87,label_y:30 }, // Mo
									   { x:143, y:26, label_x:136,label_y:29 }, // Ma
									   { x:94, y:73, label_x:87,label_y:76 }, // Me
									   { x:119, y:73, label_x:113,label_y:76 }, // Ke
									   { x:144, y:73, label_x:138,label_y:76 }, // Ve
									   { x:94, y:50, label_x:87,label_y:53 }, // Sa
									   { x:144, y:50, label_x:138,label_y:53 }], // Ra
									   
								  "2":[{ x:197, y:50, label_x:191,label_y:53 }, // Ju
									   { x:197, y:26, label_x:190,label_y:29 }, // Sun
									   { x:172, y:26, label_x:165,label_y:30 }, // Mo
									   { x:221, y:26, label_x:214,label_y:29 }, // Ma
									   { x:172, y:73, label_x:165,label_y:76 }, // Me
									   { x:197, y:73, label_x:191,label_y:76 }, // Ke
									   { x:222, y:73, label_x:216,label_y:76 }, // Ve
									   { x:172, y:50, label_x:165,label_y:53 }, // Sa
									   { x:222, y:50, label_x:216,label_y:53 }], // Ra
									   
								  "3":[
									   { x:277, y:50, label_x:271,label_y:53 }, // Ju
									   { x:277, y:26, label_x:270,label_y:29 }, // Sun
									   { x:251, y:26, label_x:244,label_y:30 }, // Mo
									   { x:302, y:26, label_x:295,label_y:29 }, // Ma
									   { x:251, y:73, label_x:244,label_y:76 }, // Me
									   { x:277, y:73, label_x:271,label_y:76 }, // Ke
									   { x:304, y:73, label_x:298,label_y:76 }, // Ve
									   { x:251, y:50, label_x:244,label_y:53 }, // Sa
									   { x:303, y:50, label_x:297,label_y:53 }], // Ra
									   
								  "4":[
									   { x:277, y:135, label_x:271,label_y:138 }, // Ju
									   { x:277, y:112, label_x:270,label_y:115 }, // Sun
									   { x:251, y:113, label_x:244,label_y:116 }, // Mo
									   { x:302, y:112, label_x:295,label_y:115 }, // Ma
									   { x:251, y:159, label_x:244,label_y:162 }, // Me
									   { x:277, y:158, label_x:271,label_y:161 }, // Ke
									   { x:304, y:158, label_x:298,label_y:161 }, // Ve
									   { x:251, y:136, label_x:244,label_y:139 }, // Sa
									   { x:303, y:135, label_x:297,label_y:138 }], // Ra
									   
								  "5":[
									   { x:277, y:223, label_x:271,label_y:226 }, // Ju
									   { x:277, y:200, label_x:270,label_y:203 }, // Sun
									   { x:251, y:201, label_x:244,label_y:204 }, // Mo
									   { x:302, y:200, label_x:295,label_y:203 }, // Ma
									   { x:251, y:247, label_x:244,label_y:250 }, // Me
									   { x:277, y:246, label_x:271,label_y:249 }, // Ke
									   { x:304, y:246, label_x:298,label_y:249 }, // Ve
									   { x:251, y:224, label_x:244,label_y:227 }, // Sa
									   { x:303, y:223, label_x:297,label_y:226 }], // Ra
									   
								  "11":[
									   { x:41, y:135, label_x:35,label_y:138 }, // Ju
									   { x:41, y:112, label_x:34,label_y:115 }, // Sun
									   { x:16, y:113, label_x:9,label_y:116 }, // Mo
									   { x:65, y:112, label_x:58,label_y:115 }, // Ma
									   { x:16, y:159, label_x:9,label_y:162 }, // Me
									   { x:41, y:158, label_x:35,label_y:161 }, // Ke
									   { x:66, y:158, label_x:60,label_y:161 }, // Ve
									   { x:16, y:136, label_x:9,label_y:139 }, // Sa
									   { x:66, y:135, label_x:60,label_y:138 }], // Ra
									   
								  "10":[
									   { x:41, y:223, label_x:35,label_y:226 }, // Ju
									   { x:41, y:200, label_x:34,label_y:203 }, // Sun
									   { x:16, y:201, label_x:9,label_y:204 }, // Mo
									   { x:65, y:200, label_x:58,label_y:203 }, // Ma
									   { x:16, y:247, label_x:9,label_y:250 }, // Me
									   { x:41, y:246, label_x:35,label_y:249 }, // Ke
									   { x:66, y:246, label_x:60,label_y:249 }, // Ve
									   { x:16, y:224, label_x:9,label_y:227 }, // Sa
									   { x:66, y:223, label_x:60,label_y:226 }], // Ra
								  
								  
								  
								  "9":[
									   { x:41, y:312, label_x:35,label_y:315 }, // Ju
									   { x:41, y:288, label_x:34,label_y:291 }, // Sun
									   { x:16, y:288, label_x:9,label_y:292 }, // Mo
									   { x:65, y:288, label_x:58,label_y:291 }, // Ma
									   { x:16, y:335, label_x:9,label_y:338 }, // Me
									   { x:41, y:335, label_x:35,label_y:338 }, // Ke
									   { x:66, y:335, label_x:60,label_y:338 }, // Ve
									   { x:16, y:312, label_x:9,label_y:315 }, // Sa
									   { x:66, y:312, label_x:60,label_y:315 }], // Ra
									   
								  "8":[
									   { x:119, y:312, label_x:113,label_y:315 }, // Ju
									   { x:119, y:288, label_x:112,label_y:291 }, // Sun
									   { x:94, y:288, label_x:87,label_y:292 }, // Mo
									   { x:143, y:288, label_x:136,label_y:291 }, // Ma
									   { x:94, y:335, label_x:87,label_y:338 }, // Me
									   { x:119, y:335, label_x:113,label_y:338 }, // Ke
									   { x:144, y:335, label_x:138,label_y:338 }, // Ve
									   { x:94, y:312, label_x:87,label_y:315 }, // Sa
									   { x:144, y:312, label_x:138,label_y:315 }], // Ra
									   
								  "7":[
									   { x:197, y:312, label_x:191,label_y:315 }, // Ju
									   { x:197, y:288, label_x:190,label_y:291 }, // Sun
									   { x:172, y:288, label_x:165,label_y:292 }, // Mo
									   { x:221, y:288, label_x:214,label_y:291 }, // Ma
									   { x:172, y:335, label_x:165,label_y:338 }, // Me
									   { x:197, y:335, label_x:191,label_y:338 }, // Ke
									   { x:222, y:335, label_x:216,label_y:338 }, // Ve
									   { x:172, y:312, label_x:165,label_y:315 }, // Sa
									   { x:222, y:312, label_x:216,label_y:315 }], // Ra
									   
								  "6":[
									   { x:277, y:312, label_x:271,label_y:315 }, // Ju
									   { x:277, y:288, label_x:270,label_y:291 }, // Sun
									   { x:251, y:288, label_x:244,label_y:292 }, // Mo
									   { x:302, y:288, label_x:295,label_y:291 }, // Ma
									   { x:251, y:335, label_x:244,label_y:338 }, // Me
									   { x:277, y:335, label_x:271,label_y:338 }, // Ke
									   { x:304, y:335, label_x:298,label_y:338 }, // Ve
									   { x:251, y:312, label_x:244,label_y:315 }, // Sa
									   { x:303, y:312, label_x:297,label_y:315 }], // Ra
									 
								}
					   };
					   
function planetsIntro(chart){
 
	 for(var index=0;index<SIC.planetsIntro.length;index++){
	 console.log("planetsIntro-Length:"+SIC.planetsIntro.length);
	var box12planet01 = chart.getContext("2d");
	 box12planet01.beginPath();
	 box12planet01.arc(SIC.planetsIntro[index].x, SIC.planetsIntro[index].y, 10, 0, 2 * Math.PI,false);
	 box12planet01.fillStyle   = SIC.planetsIntro[index].bgColor;
	 box12planet01.fill();
	 box12planet01.strokeStyle = SIC.planetsIntro[index].borderColor;
	 box12planet01.stroke();
	 box12planet01.font = "bold 11px Arial";
	 box12planet01.fillStyle   = SIC.planetsIntro[index].fontColor;
	 box12planet01.fillText(SIC.planetsIntro[index].icon,SIC.planetsIntro[index].x_pad,SIC.planetsIntro[index].y_pad);
	 box12planet01.font = "bold 14px Arial";
	 box12planet01.fillStyle   = SIC.planetsIntro[index].borderColor;
	 box12planet01.fillText(': '+SIC.planetsIntro[index].label,SIC.planetsIntro[index].label_x,SIC.planetsIntro[index].label_y);
	 
	}

}

function planetplaceInHouse(chart,house,planet, bgColor, fontColor){
 var index = SIC_H_P_INDEX[house-1];
 var box12planet01 = chart.getContext("2d");
	 box12planet01.beginPath();
	 box12planet01.arc(SIC.planets[house.toString()][index].x, SIC.planets[house.toString()][index].y, 10, 0, 2 * Math.PI,false);
	 box12planet01.fillStyle   = bgColor;
	 box12planet01.fill();
	 box12planet01.strokeStyle = bgColor;
	 box12planet01.stroke();
	 box12planet01.font = "bold 11px Arial";
	 box12planet01.fillStyle   = fontColor;
	 box12planet01.fillText(planet,SIC.planets[house.toString()][index].label_x,SIC.planets[house.toString()][index].label_y);
 SIC_H_P_INDEX[house-1]=index+1;
}

function load_chartStyle_southIndia(id){
 var chart = document.getElementById(id);
 var drawChart = chart.getContext("2d");
	 drawChart.beginPath();
	 drawChart.rect(SIC.rec.x,SIC.rec.y,SIC.rec.w,SIC.rec.h);
	 drawChart.fillStyle   = "#03a9f4";
	 drawChart.fill();
	 drawChart.stroke();

 for(var index=0;index<SIC.box.length;index++){
	 drawChart.moveTo(SIC.box[index].from_x,SIC.box[index].from_y);
	 drawChart.lineTo(SIC.box[index].to_x,SIC.box[index].to_y);
	 drawChart.stroke();
 }
  
  /* Font */
  drawChart.font="bold 11px Arial";
  drawChart.fillStyle   = "black";
  for(var index=0;index<SIC.houses.length;index++){
	drawChart.fillText(SIC.houses[index].label,SIC.houses[index].x,SIC.houses[index].y);
  }

  setTimeout(function(){ planetplaceInHouse(chart,12,"Su","#e43a05","white"); }, 1000);
  setTimeout(function(){ planetplaceInHouse(chart,12,"Ra","#0e24a0","white"); }, 2000);
  setTimeout(function(){ planetplaceInHouse(chart,12,"Mo","white","black"); }, 3000);
  setTimeout(function(){ planetplaceInHouse(chart,12,"Ve","white","black"); }, 4000);
  setTimeout(function(){ planetplaceInHouse(chart,12,"Sa","black","white"); }, 5000);
  setTimeout(function(){ planetplaceInHouse(chart,12,"Ke","#717070","white"); }, 6000);
  setTimeout(function(){ planetplaceInHouse(chart,12,"Ma","#c50345","white"); }, 7000);
  setTimeout(function(){ planetplaceInHouse(chart,12,"Me","green","white");  }, 8000);
  setTimeout(function(){ planetplaceInHouse(chart,12,"Ju","yellow","black"); }, 9000);
  setTimeout(function(){ planetplaceInHouse(chart,12,"Ve","white","black"); }, 10000);
  
  planetsIntro(chart);
}

$(document).ready(function(){
load_chartStyle_northIndia("chart-style-northIndia");
load_chartStyle_southIndia("chart-style-southIndia");
});

</script>
<div class="container-fluid">
  <div class="row">
   <div class="col-sm-12">
	<span class="label label-primary"></span>
   </div><!--/.col-sm-12 -->
  </div><!---/.row -->
  <div class="row">
    <div class="col-sm-3">
	<!-- -->
	<div class="list-group">
	<div class="list-group-item">
	<ol>
	 <li>Introduction to Panchangam</li>
	 <li>Vaara (Week)</li>
	 <li>Thithi (Day)</li>
	 <li>Nakshatra (Star)</li>
	 <li>Yoga</li>
	 <li>Karana</li>
	</ol>
	<!-- -->
	</div>
	</div>
	</div><!--/.col-sm-4 -->
    <div class="col-sm-9">
	<!-- -->
	<?php include_once 'templates/panchanga/introduction.php' ?>
	<!-- -->
	</div><!--/.col-sm-9 -->
  </div>
</div>
</body>
</html>
