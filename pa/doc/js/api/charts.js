function buildIcon(id,data){
 $('.'+id).each(function() {
 var box12planet01 = this.getContext("2d");
	 box12planet01.beginPath();
	 box12planet01.arc(11, 15, 10, 0, 2 * Math.PI,false);
	 box12planet01.fillStyle   = data.bgColor;
	 box12planet01.fill();
	 box12planet01.strokeStyle = data.borderColor;
	 box12planet01.stroke();
	 box12planet01.font = "bold 11px Arial";
	 box12planet01.fillStyle   = data.fontColor;
	 box12planet01.fillText(data.icon,4,18);
 });
}
function buildSun(){
 buildIcon('chart-style-sun',{ icon:"Su",borderColor:"#e43a05",bgColor:"#e43a05",fontColor:"white" });
}

function buildMoon(){
 buildIcon('chart-style-moon',{ icon:"Mo",borderColor:"black",bgColor:"white",fontColor:"black" });
}

function buildMars(){
 buildIcon('chart-style-mars',{ icon:"Ma",borderColor:"#c50345",bgColor:"#c50345",fontColor:"white" });
}

function buildMercury(){
 buildIcon('chart-style-mercury',{ icon:"Me",borderColor:"green",bgColor:"green",fontColor:"white" });
}

function buildJupiter(){
 buildIcon('chart-style-jupiter',{ icon:"Ju",borderColor:"black",bgColor:"yellow",fontColor:"black" });
}

function buildVenus(){
 buildIcon('chart-style-venus',{ icon:"Ve",borderColor:"black",bgColor:"white",fontColor:"black" });
}

function buildSaturn(){
 buildIcon('chart-style-saturn',{ icon:"Sa",borderColor:"black",bgColor:"black",fontColor:"white" });
}

function buildRahu(){
 buildIcon('chart-style-rahu',{ icon:"Ra",borderColor:"#0e24a0",bgColor:"#0e24a0",fontColor:"white" });
}

function buildKetu(){
 buildIcon('chart-style-ketu',{ icon:"Ke",borderColor:"#717070",bgColor:"#717070",fontColor:"white" });
}
