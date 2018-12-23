<?php session_start(); 
include_once 'templates/api_params.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>KalyanaVeena</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/api/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <script src="js/api/bootstrap-switch.js"></script>
  <script src="js/api/brahim-core.js"></script>
  <link href="styles/api/bootstrap-switch.css" rel="stylesheet">
<style>
.pad5-10 { padding:5px 10px; }
</style>
  <script type="text/javascript">
  $(document).ready(function(){
    kvHeaderMenu('kvHeaderMenu-matchCalculator');
	display_list_Raasi("match_boy_raasi");
	display_list_Raasi("match_girl_raasi");
  });

function varnamCalculator(match_boy_raasi, match_girl_raasi){
  var varnaRanking =[];
      varnaRanking["Shudra"]=0;
	  varnaRanking["Vaishya"]=1;
	  varnaRanking["Kshattriya"]=2;
	  varnaRanking["Brahmin"]=3;  
  var boyVarnamVarna = VARANAM[match_boy_raasi].varna;
  var boyVarnamElement = VARANAM[match_boy_raasi].element;
  var girlVarnamVarna = VARANAM[match_girl_raasi].varna;
  var girlVarnamElement = VARANAM[match_boy_raasi].element;
  var varnaPoints=0;
  if(varnaRanking[girlVarnamVarna]<=varnaRanking[boyVarnamVarna]){
   varnaPoints=1;
  }
  var varnaResults = { "boyVarnamVarna": boyVarnamVarna, "boyVarnamElement": boyVarnamElement, 
  "girlVarnamVarna": girlVarnamVarna, "girlVarnamElement": girlVarnamElement, "varnaPoints": varnaPoints,
  "total_points":1};
  return varnaResults;
}
function vasyaCalculator(match_boy_nakshatram,match_girl_nakshatram){
 var vashyaKootamiBoy=VASHYA_KOOTAMI[match_boy_nakshatram];
 var vashyaKootamiGirl=VASHYA_KOOTAMI[match_girl_nakshatram];
 var vashyaKootamiPoints = VASHYA_BRIDE[vashyaKootamiGirl][vashyaKootamiBoy];
  console.log(vashyaKootamiPoints);
 var vashyaRanking = VASHYA_SCORE[vashyaKootamiPoints];
 var vashyaResults = { "vashyaKootamiBoy":vashyaKootamiBoy, "vashyaKootamiGirl":vashyaKootamiGirl,
 "vashyaKootamiPoints": vashyaKootamiPoints, "vashyaRanking": vashyaRanking,"total_points":2 };
 return vashyaResults;
}

function tarabhalamCalculator(match_boy_nakshatram,match_girl_nakshatram){
var tarabhalam=["Ashwini","Bharani","Kruthika","Rohini","Mrugasira","Aarudhra","Punarvasu","Pushyami","Aslesha",
"Makha","Pubbha","Uthara","Hastha","Chitha","Swathi","Vishaka","Anuradha","Jeshta","Moola","Purvashada","Utharashada",
"Shravana","Dhanista","Sathabisham","Purvabhadhra","Utharabhadra","Revathi"];
var boy_tarabhalam_index=0;var boy_recogniser=false;
var girl_tarabhalam_index=0;var girl_recogniser=false;
for(var index=0;index<tarabhalam.length;index++){
  if(match_boy_nakshatram.startsWith(tarabhalam[index])){ boy_tarabhalam_index=index+1;boy_recogniser=true; }
  if(match_girl_nakshatram.startsWith(tarabhalam[index])){ girl_tarabhalam_index=index+1;girl_recogniser=true; }
  if(boy_recogniser && girl_recogniser){ break; }
}
var taraScore=0;
var calculation1=false;
var calculation2=false;
if(boy_tarabhalam_index<girl_tarabhalam_index){
  if(((((girl_tarabhalam_index-boy_tarabhalam_index)+1) % 9) %2)===0) { calculation1=true; }
  if(((((girl_tarabhalam_index-1)+(27-boy_tarabhalam_index)) % 9) %2)===0) { calculation2=true; }
} else {
  if(((((boy_tarabhalam_index-girl_tarabhalam_index)+1) % 9) %2)===0) { calculation1=true; }
  if(((((boy_tarabhalam_index-1)+(27-girl_tarabhalam_index)) % 9) %2)===0) { calculation2=true; }
}
       if(calculation1  && calculation2){ taraScore=3; }
  else if((!calculation1  && calculation2) || (calculation1  && !calculation2)){ taraScore=1.5; }
  var tarabhalamResults={ "taraScore":taraScore, "total_points":3 };
  return tarabhalamResults;
}

function yoniCalculator(match_boy_nakshatram,match_girl_nakshatram){
var yoniAnimals=[{"star":"Ashwini","animal":"Horse (Ashwa)"},{"star":"Bharani","animal":"Elephant (Gaja)"},
{"star":"Kruthika","animal":"Ram (Mesha)"},{"star":"Rohini","animal":"Serpent (Sarpa)"},
{"star":"Mrugasira","animal":"Serpent (Sarpa)"},{"star":"Aarudhra","animal":"Dog (Swah)"},
{"star":"Punarvasu","animal":"Cat (Marjarah)"},{"star":"Pushyami","animal":"Ram (Mesha)"},
{"star":"Aslesha","animal":"Cat (Marjarah)"},{"star":"Makha","animal":"Rat (Mushika)"},
{"star":"Pubbha","animal":"Rat (Mushika)"},{"star":"Uthara","animal":"Cow (Gau)"},{"star":"Hastha","animal":"Buffalo (Mahisha)"},
{"star":"Chitha","animal":"Tiger (Vyagrah)"},{"star":"Swathi","animal":"Buffalo (Mahisha)"},
{"star":"Vishaka","animal":"Tiger (Vyagrah)"},{"star":"Anuradha","animal":"Deer (Mriga)"},
{"star":"Jeshta","animal":"Deer (Mriga)"},{"star":"Moola","animal":"Dog (Swah)"},
{"star":"Purvashada","animal":"Monkey (Vanara)"},{"star":"Utharashada","animal":"Mongoose (Nakula)"},
{"star":"Shravana","animal":"Monkey (Vanara)"},{"star":"Dhanista","animal":"Lion (Singha)"},
{"star":"Sathabisham","animal":"Horse (Ashwa)"},{"star":"Purvabhadhra","animal":"Lion (Singha)"},
{"star":"Utharabhadra","animal":"Cow (Gau)"},{"star":"Revathi","animal":"Elephant (Gaja)"}];

var yoniMapper=[];
yoniMapper["Horse (Ashwa)"]=[];
yoniMapper["Horse (Ashwa)"]["Horse (Ashwa)"]=4;
yoniMapper["Horse (Ashwa)"]["Elephant (Gaja)"]=2;
yoniMapper["Horse (Ashwa)"]["Ram (Mesha)"]=2;
yoniMapper["Horse (Ashwa)"]["Serpent (Sarpa)"]=3;
yoniMapper["Horse (Ashwa)"]["Dog (Swah)"]=2;
yoniMapper["Horse (Ashwa)"]["Cat (Marjarah)"]=2;
yoniMapper["Horse (Ashwa)"]["Rat (Mushika)"]=2;
yoniMapper["Horse (Ashwa)"]["Cow (Gau)"]=1;
yoniMapper["Horse (Ashwa)"]["Buffalo (Mahisha)"]=0;
yoniMapper["Horse (Ashwa)"]["Tiger (Vyagrah)"]=1;
yoniMapper["Horse (Ashwa)"]["Deer (Mriga)"]=1;
yoniMapper["Horse (Ashwa)"]["Monkey (Vanara)"]=3;
yoniMapper["Horse (Ashwa)"]["Mongoose (Nakula)"]=2;
yoniMapper["Horse (Ashwa)"]["Lion (Singha)"]=1;

yoniMapper["Elephant (Gaja)"]=[];
yoniMapper["Elephant (Gaja)"]["Horse (Ashwa)"]=2;
yoniMapper["Elephant (Gaja)"]["Elephant (Gaja)"]=4;
yoniMapper["Elephant (Gaja)"]["Ram (Mesha)"]=3;
yoniMapper["Elephant (Gaja)"]["Serpent (Sarpa)"]=3;
yoniMapper["Elephant (Gaja)"]["Dog (Swah)"]=2;
yoniMapper["Elephant (Gaja)"]["Cat (Marjarah)"]=2;
yoniMapper["Elephant (Gaja)"]["Rat (Mushika)"]=2;
yoniMapper["Elephant (Gaja)"]["Cow (Gau)"]=2;
yoniMapper["Elephant (Gaja)"]["Buffalo (Mahisha)"]=3;
yoniMapper["Elephant (Gaja)"]["Tiger (Vyagrah)"]=1;
yoniMapper["Elephant (Gaja)"]["Deer (Mriga)"]=2;
yoniMapper["Elephant (Gaja)"]["Monkey (Vanara)"]=3;
yoniMapper["Elephant (Gaja)"]["Mongoose (Nakula)"]=2;
yoniMapper["Elephant (Gaja)"]["Lion (Singha)"]=0;

yoniMapper["Ram (Mesha)"]=[];
yoniMapper["Ram (Mesha)"]["Horse (Ashwa)"]=2;
yoniMapper["Ram (Mesha)"]["Elephant (Gaja)"]=3;
yoniMapper["Ram (Mesha)"]["Ram (Mesha)"]=4;
yoniMapper["Ram (Mesha)"]["Serpent (Sarpa)"]=3;
yoniMapper["Ram (Mesha)"]["Dog (Swah)"]=2;
yoniMapper["Ram (Mesha)"]["Cat (Marjarah)"]=2;
yoniMapper["Ram (Mesha)"]["Rat (Mushika)"]=2;
yoniMapper["Ram (Mesha)"]["Cow (Gau)"]=2;
yoniMapper["Ram (Mesha)"]["Buffalo (Mahisha)"]=3;
yoniMapper["Ram (Mesha)"]["Tiger (Vyagrah)"]=1;
yoniMapper["Ram (Mesha)"]["Deer (Mriga)"]=2;
yoniMapper["Ram (Mesha)"]["Monkey (Vanara)"]=3;
yoniMapper["Ram (Mesha)"]["Mongoose (Nakula)"]=2;
yoniMapper["Ram (Mesha)"]["Lion (Singha)"]=0;

yoniMapper["Serpent (Sarpa)"]=[];
yoniMapper["Serpent (Sarpa)"]["Horse (Ashwa)"]=3;
yoniMapper["Serpent (Sarpa)"]["Elephant (Gaja)"]=3;
yoniMapper["Serpent (Sarpa)"]["Ram (Mesha)"]=2;
yoniMapper["Serpent (Sarpa)"]["Serpent (Sarpa)"]=4;
yoniMapper["Serpent (Sarpa)"]["Dog (Swah)"]=2;
yoniMapper["Serpent (Sarpa)"]["Cat (Marjarah)"]=1;
yoniMapper["Serpent (Sarpa)"]["Rat (Mushika)"]=1;
yoniMapper["Serpent (Sarpa)"]["Cow (Gau)"]=1;
yoniMapper["Serpent (Sarpa)"]["Buffalo (Mahisha)"]=1;
yoniMapper["Serpent (Sarpa)"]["Tiger (Vyagrah)"]=2;
yoniMapper["Serpent (Sarpa)"]["Deer (Mriga)"]=2;
yoniMapper["Serpent (Sarpa)"]["Monkey (Vanara)"]=2;
yoniMapper["Serpent (Sarpa)"]["Mongoose (Nakula)"]=0;
yoniMapper["Serpent (Sarpa)"]["Lion (Singha)"]=2;

yoniMapper["Dog (Swah)"]=[];
yoniMapper["Dog (Swah)"]["Horse (Ashwa)"]=2;
yoniMapper["Dog (Swah)"]["Elephant (Gaja)"]=2;
yoniMapper["Dog (Swah)"]["Ram (Mesha)"]=1;
yoniMapper["Dog (Swah)"]["Serpent (Sarpa)"]=2;
yoniMapper["Dog (Swah)"]["Dog (Swah)"]=4;
yoniMapper["Dog (Swah)"]["Cat (Marjarah)"]=2;
yoniMapper["Dog (Swah)"]["Rat (Mushika)"]=1;
yoniMapper["Dog (Swah)"]["Cow (Gau)"]=2;
yoniMapper["Dog (Swah)"]["Buffalo (Mahisha)"]=2;
yoniMapper["Dog (Swah)"]["Tiger (Vyagrah)"]=1;
yoniMapper["Dog (Swah)"]["Deer (Mriga)"]=0;
yoniMapper["Dog (Swah)"]["Monkey (Vanara)"]=2;
yoniMapper["Dog (Swah)"]["Mongoose (Nakula)"]=1;
yoniMapper["Dog (Swah)"]["Lion (Singha)"]=1;

yoniMapper["Cat (Marjarah)"]=[];
yoniMapper["Cat (Marjarah)"]["Horse (Ashwa)"]=2;
yoniMapper["Cat (Marjarah)"]["Elephant (Gaja)"]=2;
yoniMapper["Cat (Marjarah)"]["Ram (Mesha)"]=2;
yoniMapper["Cat (Marjarah)"]["Serpent (Sarpa)"]=1;
yoniMapper["Cat (Marjarah)"]["Dog (Swah)"]=2;
yoniMapper["Cat (Marjarah)"]["Cat (Marjarah)"]=4;
yoniMapper["Cat (Marjarah)"]["Rat (Mushika)"]=0;
yoniMapper["Cat (Marjarah)"]["Cow (Gau)"]=2;
yoniMapper["Cat (Marjarah)"]["Buffalo (Mahisha)"]=2;
yoniMapper["Cat (Marjarah)"]["Tiger (Vyagrah)"]=1;
yoniMapper["Cat (Marjarah)"]["Deer (Mriga)"]=3;
yoniMapper["Cat (Marjarah)"]["Monkey (Vanara)"]=3;
yoniMapper["Cat (Marjarah)"]["Mongoose (Nakula)"]=2;
yoniMapper["Cat (Marjarah)"]["Lion (Singha)"]=1;

yoniMapper["Rat (Mushika)"]=[];
yoniMapper["Rat (Mushika)"]["Horse (Ashwa)"]=2;
yoniMapper["Rat (Mushika)"]["Elephant (Gaja)"]=2;
yoniMapper["Rat (Mushika)"]["Ram (Mesha)"]=1;
yoniMapper["Rat (Mushika)"]["Serpent (Sarpa)"]=1;
yoniMapper["Rat (Mushika)"]["Dog (Swah)"]=1;
yoniMapper["Rat (Mushika)"]["Cat (Marjarah)"]=0;
yoniMapper["Rat (Mushika)"]["Rat (Mushika)"]=4;
yoniMapper["Rat (Mushika)"]["Cow (Gau)"]=2;
yoniMapper["Rat (Mushika)"]["Buffalo (Mahisha)"]=2;
yoniMapper["Rat (Mushika)"]["Tiger (Vyagrah)"]=2;
yoniMapper["Rat (Mushika)"]["Deer (Mriga)"]=2;
yoniMapper["Rat (Mushika)"]["Monkey (Vanara)"]=2;
yoniMapper["Rat (Mushika)"]["Mongoose (Nakula)"]=1;
yoniMapper["Rat (Mushika)"]["Lion (Singha)"]=2;

yoniMapper["Cow (Gau)"]=[];
yoniMapper["Cow (Gau)"]["Horse (Ashwa)"]=1;
yoniMapper["Cow (Gau)"]["Elephant (Gaja)"]=2;
yoniMapper["Cow (Gau)"]["Ram (Mesha)"]=3;
yoniMapper["Cow (Gau)"]["Serpent (Sarpa)"]=1;
yoniMapper["Cow (Gau)"]["Dog (Swah)"]=2;
yoniMapper["Cow (Gau)"]["Cat (Marjarah)"]=2;
yoniMapper["Cow (Gau)"]["Rat (Mushika)"]=2;
yoniMapper["Cow (Gau)"]["Cow (Gau)"]=4;
yoniMapper["Cow (Gau)"]["Buffalo (Mahisha)"]=3;
yoniMapper["Cow (Gau)"]["Tiger (Vyagrah)"]=0;
yoniMapper["Cow (Gau)"]["Deer (Mriga)"]=3;
yoniMapper["Cow (Gau)"]["Monkey (Vanara)"]=2;
yoniMapper["Cow (Gau)"]["Mongoose (Nakula)"]=2;
yoniMapper["Cow (Gau)"]["Lion (Singha)"]=1;

yoniMapper["Buffalo (Mahisha)"]=[];
yoniMapper["Buffalo (Mahisha)"]["Horse (Ashwa)"]=0;
yoniMapper["Buffalo (Mahisha)"]["Elephant (Gaja)"]=3;
yoniMapper["Buffalo (Mahisha)"]["Ram (Mesha)"]=3;
yoniMapper["Buffalo (Mahisha)"]["Serpent (Sarpa)"]=1;
yoniMapper["Buffalo (Mahisha)"]["Dog (Swah)"]=2;
yoniMapper["Buffalo (Mahisha)"]["Cat (Marjarah)"]=2;
yoniMapper["Buffalo (Mahisha)"]["Rat (Mushika)"]=2;
yoniMapper["Buffalo (Mahisha)"]["Cow (Gau)"]=3;
yoniMapper["Buffalo (Mahisha)"]["Buffalo (Mahisha)"]=4;
yoniMapper["Buffalo (Mahisha)"]["Tiger (Vyagrah)"]=1;
yoniMapper["Buffalo (Mahisha)"]["Deer (Mriga)"]=2;
yoniMapper["Buffalo (Mahisha)"]["Monkey (Vanara)"]=2;
yoniMapper["Buffalo (Mahisha)"]["Mongoose (Nakula)"]=2;
yoniMapper["Buffalo (Mahisha)"]["Lion (Singha)"]=2;

yoniMapper["Tiger (Vyagrah)"]=[];
yoniMapper["Tiger (Vyagrah)"]["Horse (Ashwa)"]=1;
yoniMapper["Tiger (Vyagrah)"]["Elephant (Gaja)"]=1;
yoniMapper["Tiger (Vyagrah)"]["Ram (Mesha)"]=1;
yoniMapper["Tiger (Vyagrah)"]["Serpent (Sarpa)"]=2;
yoniMapper["Tiger (Vyagrah)"]["Dog (Swah)"]=1;
yoniMapper["Tiger (Vyagrah)"]["Cat (Marjarah)"]=1;
yoniMapper["Tiger (Vyagrah)"]["Rat (Mushika)"]=2;
yoniMapper["Tiger (Vyagrah)"]["Cow (Gau)"]=0;
yoniMapper["Tiger (Vyagrah)"]["Buffalo (Mahisha)"]=1;
yoniMapper["Tiger (Vyagrah)"]["Tiger (Vyagrah)"]=4;
yoniMapper["Tiger (Vyagrah)"]["Deer (Mriga)"]=1;
yoniMapper["Tiger (Vyagrah)"]["Monkey (Vanara)"]=1;
yoniMapper["Tiger (Vyagrah)"]["Mongoose (Nakula)"]=2;
yoniMapper["Tiger (Vyagrah)"]["Lion (Singha)"]=1;

yoniMapper["Deer (Mriga)"]=[];
yoniMapper["Deer (Mriga)"]["Horse (Ashwa)"]=1;
yoniMapper["Deer (Mriga)"]["Elephant (Gaja)"]=2;
yoniMapper["Deer (Mriga)"]["Ram (Mesha)"]=2;
yoniMapper["Deer (Mriga)"]["Serpent (Sarpa)"]=2;
yoniMapper["Deer (Mriga)"]["Dog (Swah)"]=0;
yoniMapper["Deer (Mriga)"]["Cat (Marjarah)"]=3;
yoniMapper["Deer (Mriga)"]["Rat (Mushika)"]=2;
yoniMapper["Deer (Mriga)"]["Cow (Gau)"]=3;
yoniMapper["Deer (Mriga)"]["Buffalo (Mahisha)"]=2;
yoniMapper["Deer (Mriga)"]["Tiger (Vyagrah)"]=1;
yoniMapper["Deer (Mriga)"]["Deer (Mriga)"]=4;
yoniMapper["Deer (Mriga)"]["Monkey (Vanara)"]=2;
yoniMapper["Deer (Mriga)"]["Mongoose (Nakula)"]=2;
yoniMapper["Deer (Mriga)"]["Lion (Singha)"]=1;

yoniMapper["Monkey (Vanara)"]=[];
yoniMapper["Monkey (Vanara)"]["Horse (Ashwa)"]=3;
yoniMapper["Monkey (Vanara)"]["Elephant (Gaja)"]=3;
yoniMapper["Monkey (Vanara)"]["Ram (Mesha)"]=0;
yoniMapper["Monkey (Vanara)"]["Serpent (Sarpa)"]=2;
yoniMapper["Monkey (Vanara)"]["Dog (Swah)"]=2;
yoniMapper["Monkey (Vanara)"]["Cat (Marjarah)"]=3;
yoniMapper["Monkey (Vanara)"]["Rat (Mushika)"]=2;
yoniMapper["Monkey (Vanara)"]["Cow (Gau)"]=2;
yoniMapper["Monkey (Vanara)"]["Buffalo (Mahisha)"]=2;
yoniMapper["Monkey (Vanara)"]["Tiger (Vyagrah)"]=1;
yoniMapper["Monkey (Vanara)"]["Deer (Mriga)"]=2;
yoniMapper["Monkey (Vanara)"]["Monkey (Vanara)"]=4;
yoniMapper["Monkey (Vanara)"]["Mongoose (Nakula)"]=3;
yoniMapper["Monkey (Vanara)"]["Lion (Singha)"]=2;

yoniMapper["Mongoose (Nakula)"]=[];
yoniMapper["Mongoose (Nakula)"]["Horse (Ashwa)"]=2;
yoniMapper["Mongoose (Nakula)"]["Elephant (Gaja)"]=2;
yoniMapper["Mongoose (Nakula)"]["Ram (Mesha)"]=3;
yoniMapper["Mongoose (Nakula)"]["Serpent (Sarpa)"]=0;
yoniMapper["Mongoose (Nakula)"]["Dog (Swah)"]=1;
yoniMapper["Mongoose (Nakula)"]["Cat (Marjarah)"]=2;
yoniMapper["Mongoose (Nakula)"]["Rat (Mushika)"]=1;
yoniMapper["Mongoose (Nakula)"]["Cow (Gau)"]=2;
yoniMapper["Mongoose (Nakula)"]["Buffalo (Mahisha)"]=2;
yoniMapper["Mongoose (Nakula)"]["Tiger (Vyagrah)"]=2;
yoniMapper["Mongoose (Nakula)"]["Deer (Mriga)"]=2;
yoniMapper["Mongoose (Nakula)"]["Monkey (Vanara)"]=3;
yoniMapper["Mongoose (Nakula)"]["Mongoose (Nakula)"]=4;
yoniMapper["Mongoose (Nakula)"]["Lion (Singha)"]=2;

yoniMapper["Lion (Singha)"]=[];
yoniMapper["Lion (Singha)"]["Horse (Ashwa)"]=1;
yoniMapper["Lion (Singha)"]["Elephant (Gaja)"]=0;
yoniMapper["Lion (Singha)"]["Ram (Mesha)"]=1;
yoniMapper["Lion (Singha)"]["Serpent (Sarpa)"]=2;
yoniMapper["Lion (Singha)"]["Dog (Swah)"]=1;
yoniMapper["Lion (Singha)"]["Cat (Marjarah)"]=1;
yoniMapper["Lion (Singha)"]["Rat (Mushika)"]=2;
yoniMapper["Lion (Singha)"]["Cow (Gau)"]=1;
yoniMapper["Lion (Singha)"]["Buffalo (Mahisha)"]=2;
yoniMapper["Lion (Singha)"]["Tiger (Vyagrah)"]=1;
yoniMapper["Lion (Singha)"]["Deer (Mriga)"]=1;
yoniMapper["Lion (Singha)"]["Monkey (Vanara)"]=2;
yoniMapper["Lion (Singha)"]["Mongoose (Nakula)"]=2;
yoniMapper["Lion (Singha)"]["Lion (Singha)"]=4;

var yoniBehaviour=["Sworn Enemy Yoni","Enemy yoni","Neutral Yoni","Friendly Yoni","Swabhava Yoni"];
var yoniBoyAnimal="";var yoniGirlAnimal="";
var yoniBoyAnimalRecognizer=false;var yoniGirlAnimalRecognizer=false;
for(var index=0;index<yoniAnimals.length;index++){
 if(match_boy_nakshatram.startsWith(yoniAnimals[index].star)){ 
   yoniBoyAnimal=yoniAnimals[index].animal;yoniBoyAnimalRecognizer=true; 
 }
 if(match_girl_nakshatram.startsWith(yoniAnimals[index].star)){ 
   yoniGirlAnimal=yoniAnimals[index].animal;yoniGirlAnimalRecognizer=true; 
 }
 if(yoniBoyAnimalRecognizer && yoniGirlAnimalRecognizer){ break; }
}
var yoniPoints=yoniMapper[yoniGirlAnimal][yoniBoyAnimal];
var yoniResults={ "yoniBoyAnimal":yoniBoyAnimal,"yoniGirlAnimal":yoniGirlAnimal,"yoniPoints":yoniPoints,"total_points":4,
"yoniBehaviour": yoniBehaviour[yoniPoints] }
return yoniResults;
}

function grahaKutamiCalculator(match_boy_raasi, match_girl_raasi){
  var graham_boy=RAASI_GRAHA_LIST[match_boy_raasi];
  var graham_girl=RAASI_GRAHA_LIST[match_girl_raasi];
  console.log("graham_boy: "+graham_boy+" graham_girl: "+graham_girl);
  var grahaMytri_points=GRAHA_MYTHRIKUTAMI_LIST[graham_girl][graham_boy];
  var grahaMytri_phalam=GRAHAMYTRI_PHALAM[grahaMytri_points];
  console.log("grahaMytri_phalam: "+grahaMytri_points);
  var grahaMytriResults={"boyGraham":graham_boy,"girlGraham":graham_girl,
			"grahaMytripoints":grahaMytri_points,"total_points":5,"grahaMytriphalam":grahaMytri_phalam}
  return grahaMytriResults;
}

function ganaCalculator(match_boy_nakshatram,match_girl_nakshatram){
var ganaNashatram=[];
ganaNashatram["Ashwini"]="Devata";
ganaNashatram["Bharani"]="Manusha";
ganaNashatram["Kruthika"]="Rakshasa";
ganaNashatram["Rohini"]="Manusha";
ganaNashatram["Mrugasira"]="Devata";
ganaNashatram["Aarudhra"]="Manusha";
ganaNashatram["Punarvasu"]="Devata";
ganaNashatram["Pushyami"]="Devata";
ganaNashatram["Aslesha"]="Rakshasa";
ganaNashatram["Makha"]="Rakshasa";
ganaNashatram["Pubbha"]="Manusha";
ganaNashatram["Uthara"]="Manusha";
ganaNashatram["Hastha"]="Devata";
ganaNashatram["Chitha"]="Rakshasa";
ganaNashatram["Swathi"]="Devata";
ganaNashatram["Vishaka"]="Rakshasa";
ganaNashatram["Anuradha"]="Devata";
ganaNashatram["Jeshta"]="Rakshasa";
ganaNashatram["Moola"]="Rakshasa";
ganaNashatram["Purvashada"]="Manusha";
ganaNashatram["Utharashada"]="Manusha";
ganaNashatram["Shravana"]="Devata";
ganaNashatram["Dhanista"]="Rakshasa";
ganaNashatram["Sathabisham"]="Rakshasa";
ganaNashatram["Purvabhadhra"]="Manusha";
ganaNashatram["Utharabhadra"]="Manusha";
ganaNashatram["Revathi"]="Devata";

var ganaScore=[];
    ganaScore["Devata"]=[]; 
	ganaScore["Devata"]["Devata"]={"ganapoints":6,"compatibility":"Best"}; /*Bride, Groom */
	ganaScore["Devata"]["Manusha"]={"ganapoints":3,"compatibility":"Average"}; /*Bride, Groom*/
	ganaScore["Devata"]["Rakshasa"]={"ganapoints":1,"compatibility":"Bad"};; /*Bride, Groom*/
	ganaScore["Manusha"]=[];
	ganaScore["Manusha"]["Devata"]={"ganapoints":5,"compatibility":"Good"}; /*Bride, Groom */
	ganaScore["Manusha"]["Manusha"]={"ganapoints":6,"compatibility":"Best"}; /*Bride, Groom*/
	ganaScore["Manusha"]["Rakshasa"]={"ganapoints":3,"compatibility":"Average"}; /*Bride, Groom*/
	ganaScore["Rakshasa"]=[];
	ganaScore["Rakshasa"]["Devata"]={"ganapoints":0,"compatibility":"Very Bad"}; /*Bride, Groom */
	ganaScore["Rakshasa"]["Manusha"]={"ganapoints":0,"compatibility":"Very Bad"}; /*Bride, Groom*/
	ganaScore["Rakshasa"]["Rakshasa"]={"ganapoints":6,"compatibility":"Best"}; /*Bride, Groom*/
	
 var boy_gana = ganaNashatram[match_boy_nakshatram.substring(0, match_boy_nakshatram.indexOf(" "))];
 var girl_gana = ganaNashatram[match_girl_nakshatram.substring(0, match_girl_nakshatram.indexOf(" "))];
 var boyGirlGanaScore = ganaScore[girl_gana][boy_gana];
 var ganaResult = { "boy_gana": boy_gana, "girl_gana": girl_gana, "boyGirlGanaScore": boyGirlGanaScore,"total_points":6 };
 return ganaResult;
}

function bhakootCalculator(match_boy_raasi, match_girl_raasi){
 var bhakootScore=[];
 bhakootScore["Aries (Mesha Raasi)"]=[];
 bhakootScore["Aries (Mesha Raasi)"]["Aries (Mesha Raasi)"]=7;
 bhakootScore["Aries (Mesha Raasi)"]["Taurus (Vrushabha Raasi)"]=0;
 bhakootScore["Aries (Mesha Raasi)"]["Gemini (Midhuna Raasi)"]=7;
 bhakootScore["Aries (Mesha Raasi)"]["Cancer (Karkataka Raasi)"]=7;
 bhakootScore["Aries (Mesha Raasi)"]["Leo (Simha Raasi)"]=0;
 bhakootScore["Aries (Mesha Raasi)"]["Virgo (Kanya Raasi)"]=0;
 bhakootScore["Aries (Mesha Raasi)"]["Libra (Thula Raasi)"]=7;
 bhakootScore["Aries (Mesha Raasi)"]["Scorpio (Vruchika Raasi)"]=0;
 bhakootScore["Aries (Mesha Raasi)"]["Saggitarius (Dhanur Raasi)"]=0;
 bhakootScore["Aries (Mesha Raasi)"]["Capricorn (Makara Raasi)"]=7;
 bhakootScore["Aries (Mesha Raasi)"]["Aquarius (Khumbha Raasi)"]=7;
 bhakootScore["Aries (Mesha Raasi)"]["Pisces (Meena Raasi)"]=0;
 
 bhakootScore["Taurus (Vrushabha Raasi)"]=[];
 bhakootScore["Taurus (Vrushabha Raasi)"]["Aries (Mesha Raasi)"]=0;
 bhakootScore["Taurus (Vrushabha Raasi)"]["Taurus (Vrushabha Raasi)"]=7;
 bhakootScore["Taurus (Vrushabha Raasi)"]["Gemini (Midhuna Raasi)"]=0;
 bhakootScore["Taurus (Vrushabha Raasi)"]["Cancer (Karkataka Raasi)"]=7;
 bhakootScore["Taurus (Vrushabha Raasi)"]["Leo (Simha Raasi)"]=7;
 bhakootScore["Taurus (Vrushabha Raasi)"]["Virgo (Kanya Raasi)"]=0;
 bhakootScore["Taurus (Vrushabha Raasi)"]["Libra (Thula Raasi)"]=0;
 bhakootScore["Taurus (Vrushabha Raasi)"]["Scorpio (Vruchika Raasi)"]=7;
 bhakootScore["Taurus (Vrushabha Raasi)"]["Saggitarius (Dhanur Raasi)"]=0;
 bhakootScore["Taurus (Vrushabha Raasi)"]["Capricorn (Makara Raasi)"]=0;
 bhakootScore["Taurus (Vrushabha Raasi)"]["Aquarius (Khumbha Raasi)"]=7;
 bhakootScore["Taurus (Vrushabha Raasi)"]["Pisces (Meena Raasi)"]=7;
 
 bhakootScore["Gemini (Midhuna Raasi)"]=[];
 bhakootScore["Gemini (Midhuna Raasi)"]["Aries (Mesha Raasi)"]=7;
 bhakootScore["Gemini (Midhuna Raasi)"]["Taurus (Vrushabha Raasi)"]=0;
 bhakootScore["Gemini (Midhuna Raasi)"]["Gemini (Midhuna Raasi)"]=7;
 bhakootScore["Gemini (Midhuna Raasi)"]["Cancer (Karkataka Raasi)"]=0;
 bhakootScore["Gemini (Midhuna Raasi)"]["Leo (Simha Raasi)"]=7;
 bhakootScore["Gemini (Midhuna Raasi)"]["Virgo (Kanya Raasi)"]=7;
 bhakootScore["Gemini (Midhuna Raasi)"]["Libra (Thula Raasi)"]=0;
 bhakootScore["Gemini (Midhuna Raasi)"]["Scorpio (Vruchika Raasi)"]=0;
 bhakootScore["Gemini (Midhuna Raasi)"]["Saggitarius (Dhanur Raasi)"]=7;
 bhakootScore["Gemini (Midhuna Raasi)"]["Capricorn (Makara Raasi)"]=0;
 bhakootScore["Gemini (Midhuna Raasi)"]["Aquarius (Khumbha Raasi)"]=0;
 bhakootScore["Gemini (Midhuna Raasi)"]["Pisces (Meena Raasi)"]=7;
 
 bhakootScore["Cancer (Karkataka Raasi)"]=[];
 bhakootScore["Cancer (Karkataka Raasi)"]["Aries (Mesha Raasi)"]=7;
 bhakootScore["Cancer (Karkataka Raasi)"]["Taurus (Vrushabha Raasi)"]=7;
 bhakootScore["Cancer (Karkataka Raasi)"]["Gemini (Midhuna Raasi)"]=0;
 bhakootScore["Cancer (Karkataka Raasi)"]["Cancer (Karkataka Raasi)"]=7;
 bhakootScore["Cancer (Karkataka Raasi)"]["Leo (Simha Raasi)"]=0;
 bhakootScore["Cancer (Karkataka Raasi)"]["Virgo (Kanya Raasi)"]=7;
 bhakootScore["Cancer (Karkataka Raasi)"]["Libra (Thula Raasi)"]=7;
 bhakootScore["Cancer (Karkataka Raasi)"]["Scorpio (Vruchika Raasi)"]=0;
 bhakootScore["Cancer (Karkataka Raasi)"]["Saggitarius (Dhanur Raasi)"]=0;
 bhakootScore["Cancer (Karkataka Raasi)"]["Capricorn (Makara Raasi)"]=7;
 bhakootScore["Cancer (Karkataka Raasi)"]["Aquarius (Khumbha Raasi)"]=0;
 bhakootScore["Cancer (Karkataka Raasi)"]["Pisces (Meena Raasi)"]=0;
 
 bhakootScore["Leo (Simha Raasi)"]=[];
 bhakootScore["Leo (Simha Raasi)"]["Aries (Mesha Raasi)"]=0;
 bhakootScore["Leo (Simha Raasi)"]["Taurus (Vrushabha Raasi)"]=7;
 bhakootScore["Leo (Simha Raasi)"]["Gemini (Midhuna Raasi)"]=7;
 bhakootScore["Leo (Simha Raasi)"]["Cancer (Karkataka Raasi)"]=0;
 bhakootScore["Leo (Simha Raasi)"]["Leo (Simha Raasi)"]=7;
 bhakootScore["Leo (Simha Raasi)"]["Virgo (Kanya Raasi)"]=0;
 bhakootScore["Leo (Simha Raasi)"]["Libra (Thula Raasi)"]=7;
 bhakootScore["Leo (Simha Raasi)"]["Scorpio (Vruchika Raasi)"]=7;
 bhakootScore["Leo (Simha Raasi)"]["Saggitarius (Dhanur Raasi)"]=0;
 bhakootScore["Leo (Simha Raasi)"]["Capricorn (Makara Raasi)"]=0;
 bhakootScore["Leo (Simha Raasi)"]["Aquarius (Khumbha Raasi)"]=7;
 bhakootScore["Leo (Simha Raasi)"]["Pisces (Meena Raasi)"]=0;
 
 bhakootScore["Virgo (Kanya Raasi)"]=[];
 bhakootScore["Virgo (Kanya Raasi)"]["Aries (Mesha Raasi)"]=0;
 bhakootScore["Virgo (Kanya Raasi)"]["Taurus (Vrushabha Raasi)"]=0;
 bhakootScore["Virgo (Kanya Raasi)"]["Gemini (Midhuna Raasi)"]=7;
 bhakootScore["Virgo (Kanya Raasi)"]["Cancer (Karkataka Raasi)"]=7;
 bhakootScore["Virgo (Kanya Raasi)"]["Leo (Simha Raasi)"]=0;
 bhakootScore["Virgo (Kanya Raasi)"]["Virgo (Kanya Raasi)"]=7;
 bhakootScore["Virgo (Kanya Raasi)"]["Libra (Thula Raasi)"]=0;
 bhakootScore["Virgo (Kanya Raasi)"]["Scorpio (Vruchika Raasi)"]=7;
 bhakootScore["Virgo (Kanya Raasi)"]["Saggitarius (Dhanur Raasi)"]=7;
 bhakootScore["Virgo (Kanya Raasi)"]["Capricorn (Makara Raasi)"]=0;
 bhakootScore["Virgo (Kanya Raasi)"]["Aquarius (Khumbha Raasi)"]=0;
 bhakootScore["Virgo (Kanya Raasi)"]["Pisces (Meena Raasi)"]=7;
 
 bhakootScore["Libra (Thula Raasi)"]=[];
 bhakootScore["Libra (Thula Raasi)"]["Aries (Mesha Raasi)"]=7;
 bhakootScore["Libra (Thula Raasi)"]["Taurus (Vrushabha Raasi)"]=0;
 bhakootScore["Libra (Thula Raasi)"]["Gemini (Midhuna Raasi)"]=0;
 bhakootScore["Libra (Thula Raasi)"]["Cancer (Karkataka Raasi)"]=7;
 bhakootScore["Libra (Thula Raasi)"]["Leo (Simha Raasi)"]=7;
 bhakootScore["Libra (Thula Raasi)"]["Virgo (Kanya Raasi)"]=0;
 bhakootScore["Libra (Thula Raasi)"]["Libra (Thula Raasi)"]=7;
 bhakootScore["Libra (Thula Raasi)"]["Scorpio (Vruchika Raasi)"]=0;
 bhakootScore["Libra (Thula Raasi)"]["Saggitarius (Dhanur Raasi)"]=7;
 bhakootScore["Libra (Thula Raasi)"]["Capricorn (Makara Raasi)"]=7;
 bhakootScore["Libra (Thula Raasi)"]["Aquarius (Khumbha Raasi)"]=0;
 bhakootScore["Libra (Thula Raasi)"]["Pisces (Meena Raasi)"]=0;
 
 bhakootScore["Scorpio (Vruchika Raasi)"]=[];
 bhakootScore["Scorpio (Vruchika Raasi)"]["Aries (Mesha Raasi)"]=0;
 bhakootScore["Scorpio (Vruchika Raasi)"]["Taurus (Vrushabha Raasi)"]=7;
 bhakootScore["Scorpio (Vruchika Raasi)"]["Gemini (Midhuna Raasi)"]=0;
 bhakootScore["Scorpio (Vruchika Raasi)"]["Cancer (Karkataka Raasi)"]=0;
 bhakootScore["Scorpio (Vruchika Raasi)"]["Leo (Simha Raasi)"]=7;
 bhakootScore["Scorpio (Vruchika Raasi)"]["Virgo (Kanya Raasi)"]=7;
 bhakootScore["Scorpio (Vruchika Raasi)"]["Libra (Thula Raasi)"]=0;
 bhakootScore["Scorpio (Vruchika Raasi)"]["Scorpio (Vruchika Raasi)"]=7;
 bhakootScore["Scorpio (Vruchika Raasi)"]["Saggitarius (Dhanur Raasi)"]=0;
 bhakootScore["Scorpio (Vruchika Raasi)"]["Capricorn (Makara Raasi)"]=7;
 bhakootScore["Scorpio (Vruchika Raasi)"]["Aquarius (Khumbha Raasi)"]=7;
 bhakootScore["Scorpio (Vruchika Raasi)"]["Pisces (Meena Raasi)"]=0;
 
 bhakootScore["Saggitarius (Dhanur Raasi)"]=[];
 bhakootScore["Saggitarius (Dhanur Raasi)"]["Aries (Mesha Raasi)"]=0;
 bhakootScore["Saggitarius (Dhanur Raasi)"]["Taurus (Vrushabha Raasi)"]=0;
 bhakootScore["Saggitarius (Dhanur Raasi)"]["Gemini (Midhuna Raasi)"]=7;
 bhakootScore["Saggitarius (Dhanur Raasi)"]["Cancer (Karkataka Raasi)"]=0;
 bhakootScore["Saggitarius (Dhanur Raasi)"]["Leo (Simha Raasi)"]=0;
 bhakootScore["Saggitarius (Dhanur Raasi)"]["Virgo (Kanya Raasi)"]=7;
 bhakootScore["Saggitarius (Dhanur Raasi)"]["Libra (Thula Raasi)"]=7;
 bhakootScore["Saggitarius (Dhanur Raasi)"]["Scorpio (Vruchika Raasi)"]=0;
 bhakootScore["Saggitarius (Dhanur Raasi)"]["Saggitarius (Dhanur Raasi)"]=7;
 bhakootScore["Saggitarius (Dhanur Raasi)"]["Capricorn (Makara Raasi)"]=0;
 bhakootScore["Saggitarius (Dhanur Raasi)"]["Aquarius (Khumbha Raasi)"]=7;
 bhakootScore["Saggitarius (Dhanur Raasi)"]["Pisces (Meena Raasi)"]=7;
 
 bhakootScore["Capricorn (Makara Raasi)"]=[];
 bhakootScore["Capricorn (Makara Raasi)"]["Aries (Mesha Raasi)"]=7;
 bhakootScore["Capricorn (Makara Raasi)"]["Taurus (Vrushabha Raasi)"]=0;
 bhakootScore["Capricorn (Makara Raasi)"]["Gemini (Midhuna Raasi)"]=0;
 bhakootScore["Capricorn (Makara Raasi)"]["Cancer (Karkataka Raasi)"]=7;
 bhakootScore["Capricorn (Makara Raasi)"]["Leo (Simha Raasi)"]=0;
 bhakootScore["Capricorn (Makara Raasi)"]["Virgo (Kanya Raasi)"]=0;
 bhakootScore["Capricorn (Makara Raasi)"]["Libra (Thula Raasi)"]=7;
 bhakootScore["Capricorn (Makara Raasi)"]["Scorpio (Vruchika Raasi)"]=7;
 bhakootScore["Capricorn (Makara Raasi)"]["Saggitarius (Dhanur Raasi)"]=0;
 bhakootScore["Capricorn (Makara Raasi)"]["Capricorn (Makara Raasi)"]=7;
 bhakootScore["Capricorn (Makara Raasi)"]["Aquarius (Khumbha Raasi)"]=0;
 bhakootScore["Capricorn (Makara Raasi)"]["Pisces (Meena Raasi)"]=7;
 
 bhakootScore["Aquarius (Khumbha Raasi)"]=[];
 bhakootScore["Aquarius (Khumbha Raasi)"]["Aries (Mesha Raasi)"]=7;
 bhakootScore["Aquarius (Khumbha Raasi)"]["Taurus (Vrushabha Raasi)"]=7;
 bhakootScore["Aquarius (Khumbha Raasi)"]["Gemini (Midhuna Raasi)"]=0;
 bhakootScore["Aquarius (Khumbha Raasi)"]["Cancer (Karkataka Raasi)"]=7;
 bhakootScore["Aquarius (Khumbha Raasi)"]["Leo (Simha Raasi)"]=7;
 bhakootScore["Aquarius (Khumbha Raasi)"]["Virgo (Kanya Raasi)"]=0;
 bhakootScore["Aquarius (Khumbha Raasi)"]["Libra (Thula Raasi)"]=0;
 bhakootScore["Aquarius (Khumbha Raasi)"]["Scorpio (Vruchika Raasi)"]=7;
 bhakootScore["Aquarius (Khumbha Raasi)"]["Saggitarius (Dhanur Raasi)"]=7;
 bhakootScore["Aquarius (Khumbha Raasi)"]["Capricorn (Makara Raasi)"]=0;
 bhakootScore["Aquarius (Khumbha Raasi)"]["Aquarius (Khumbha Raasi)"]=7;
 bhakootScore["Aquarius (Khumbha Raasi)"]["Pisces (Meena Raasi)"]=0;
 
 bhakootScore["Pisces (Meena Raasi)"]=[];
 bhakootScore["Pisces (Meena Raasi)"]["Aries (Mesha Raasi)"]=0;
 bhakootScore["Pisces (Meena Raasi)"]["Taurus (Vrushabha Raasi)"]=7;
 bhakootScore["Pisces (Meena Raasi)"]["Gemini (Midhuna Raasi)"]=7;
 bhakootScore["Pisces (Meena Raasi)"]["Cancer (Karkataka Raasi)"]=0;
 bhakootScore["Pisces (Meena Raasi)"]["Leo (Simha Raasi)"]=0;
 bhakootScore["Pisces (Meena Raasi)"]["Virgo (Kanya Raasi)"]=7;
 bhakootScore["Pisces (Meena Raasi)"]["Libra (Thula Raasi)"]=0;
 bhakootScore["Pisces (Meena Raasi)"]["Scorpio (Vruchika Raasi)"]=0;
 bhakootScore["Pisces (Meena Raasi)"]["Saggitarius (Dhanur Raasi)"]=7;
 bhakootScore["Pisces (Meena Raasi)"]["Capricorn (Makara Raasi)"]=7;
 bhakootScore["Pisces (Meena Raasi)"]["Aquarius (Khumbha Raasi)"]=0;
 bhakootScore["Pisces (Meena Raasi)"]["Pisces (Meena Raasi)"]=7;

  var bhakootBoyScore=bhakootScore[match_girl_raasi][match_boy_raasi];
  return { "bhakootBoyScore":bhakootBoyScore, "total_points":7 };
}

function nadiCalculator(match_boy_nakshatram,match_girl_nakshatram){
 var nadiPoints=0;
 var boyNadi=NADI_LIST[match_boy_nakshatram];
 var girlNadi=NADI_LIST[match_girl_nakshatram];
 if(boyNadi!==girlNadi){ nadiPoints=8; }
 var nadiResults={"boyNadi":boyNadi,"girlNadi":girlNadi,"nadiPoints":nadiPoints,"total_points":8};
 return nadiResults;
}

function calculateBoyAndGirlMatch(){
  var match_boy_raasi=document.getElementById("match_boy_raasi").value;
  var match_boy_nakshatram=document.getElementById("match_boy_nakshatram").value;
  var match_girl_raasi=document.getElementById("match_girl_raasi").value;
  var match_girl_nakshatram=document.getElementById("match_girl_nakshatram").value;
  var zodaicInfo ={ "match_boy_raasi": match_boy_raasi, "match_boy_nakshatram": match_boy_nakshatram,
  "match_girl_raasi":match_girl_raasi, "match_girl_nakshatram":match_girl_nakshatram };
  /* Calculate Varnam Koota (1) */
   var varnaResults = varnamCalculator(match_boy_raasi, match_girl_raasi);
  /* Calculate Vasya Koota (2) */
   var vashyaResults = vasyaCalculator(match_boy_nakshatram,match_girl_nakshatram);
  /* Calculate Tara Koota (3) */
   var tarabhalamResults = tarabhalamCalculator(match_boy_nakshatram,match_girl_nakshatram);
  /* Calculate Yoni Koota (4) */
   var yoniResults = yoniCalculator(match_boy_nakshatram,match_girl_nakshatram);
  /* Calculate GrahaKutami (5) */
  var grahaMytriResults = grahaKutamiCalculator(match_boy_raasi, match_girl_raasi);
  /* Calculate Gana (6) */
  var ganaResult = ganaCalculator(match_boy_nakshatram,match_girl_nakshatram);
  /* Calculate BhaKoot (7) */
  var bhakootResult =  bhakootCalculator(match_boy_raasi, match_girl_raasi);
  /* Calculate Nadi (8) */
  var nadiResults = nadiCalculator(match_boy_nakshatram,match_girl_nakshatram);
  
  var calculationResults={"zodaicInfo":zodaicInfo, "varnaResults": varnaResults, "vashyaResults": vashyaResults, 
               "tarabhalamResults":tarabhalamResults, "yoniResults": yoniResults,
               "grahaMytriResults":grahaMytriResults, "ganaResult":ganaResult, "bhakootResult":bhakootResult, 
               "nadiResults":nadiResults};
  console.log(JSON.stringify(calculationResults));
  return calculationResults;
}

function matchCalculator(){
 var calculationResults = calculateBoyAndGirlMatch();
 displayMatchResults(calculationResults);
}

function displayMatchResults(calculationResults){
var match_boy_raasi = calculationResults.zodaicInfo.match_boy_raasi;
var match_boy_nakshatram = calculationResults.zodaicInfo.match_boy_nakshatram;
var match_girl_raasi = calculationResults.zodaicInfo.match_girl_raasi;
var match_girl_nakshatram = calculationResults.zodaicInfo.match_girl_nakshatram;

var boyVarnamVarna = calculationResults.varnaResults.boyVarnamVarna;
var boyVarnamElement = calculationResults.varnaResults.boyVarnamElement;
var girlVarnamVarna = calculationResults.varnaResults.girlVarnamVarna;
var girlVarnamElement = calculationResults.varnaResults.girlVarnamElement;
var varnaPoints = calculationResults.varnaResults.varnaPoints; 
var varnaTotalPoints = calculationResults.varnaResults.total_points;

var vashyaKootamiBoy = calculationResults.vashyaResults.vashyaKootamiBoy;
var vashyaKootamiGirl = calculationResults.vashyaResults.vashyaKootamiGirl;
var vashyaRanking = calculationResults.vashyaResults.vashyaRanking;
var vashyaKootamiPoints = calculationResults.vashyaResults.vashyaKootamiPoints;
var vashyaKootamiTotalPoints = calculationResults.vashyaResults.total_points;

var taraPoints = calculationResults.tarabhalamResults.taraScore;
var taraTotalPoints = calculationResults.tarabhalamResults.total_points;

var yoniBoyAnimal = calculationResults.yoniResults.yoniBoyAnimal;
var yoniGirlAnimal = calculationResults.yoniResults.yoniGirlAnimal;
var yoniBehaviour = calculationResults.yoniResults.yoniBehaviour;
var yoniPoints = calculationResults.yoniResults.yoniPoints;
var yoniTotalPoints = calculationResults.yoniResults.total_points;

var boyGraham = calculationResults.grahaMytriResults.boyGraham;
var girlGraham = calculationResults.grahaMytriResults.girlGraham;
var grahaMytriphalam = calculationResults.grahaMytriResults.grahaMytriphalam;
var grahaMytriPoints = calculationResults.grahaMytriResults.grahaMytripoints;
var grahaMytriTotalPoints = calculationResults.grahaMytriResults.total_points;

var boy_gana = calculationResults.ganaResult.boy_gana;
var girl_gana = calculationResults.ganaResult.girl_gana;
var gana_compatibility = calculationResults.ganaResult.boyGirlGanaScore.compatibility;
var ganaPoints = calculationResults.ganaResult.boyGirlGanaScore.ganapoints;
var ganaTotalPoints = calculationResults.ganaResult.total_points;

var bhakootBoyPoints = calculationResults.bhakootResult.bhakootBoyScore;
var bhakootBoyTotalPoints = calculationResults.bhakootResult.total_points;

var boyNadi = calculationResults.nadiResults.boyNadi;
var girlNadi = calculationResults.nadiResults.girlNadi;
var nadiPoints = calculationResults.nadiResults.nadiPoints;
var nadiTotalPoints = calculationResults.nadiResults.total_points;

var userScored=varnaPoints+vashyaKootamiPoints+taraPoints+yoniPoints+grahaMytriPoints+ganaPoints+bhakootBoyPoints+nadiPoints;
var totalKhutamiScore=varnaTotalPoints+vashyaKootamiTotalPoints+taraTotalPoints+yoniTotalPoints+grahaMytriTotalPoints+ganaTotalPoints+bhakootBoyTotalPoints+nadiTotalPoints;

var content='<div class="container-fluid">';
    content+='<div class="row">';
	content+='<div align="center" class="col-xs-12">';
	content+='<h5><b>KUNDALINI MATCHING</b></h5>';
	content+='</div>';
	if(userScored>=18) {
	content+='<div align="center" class="col-xs-12">';
	content+='<h5 style="color:#4caf50;"><b>Kundalini of Boy and Girl Matches.</b></h5>';
	content+='</div>';
	} else {
	content+='<div align="center" class="col-xs-12">';
	content+='<h5 style="color:#ff5722;"><b>Kundalini of Boy and Girl doesn\'t Match.</b></h5>';
	content+='</div>';
	}
	content+='</div>';
	content+='</div>';
    content+='<div class="table-responsive">';    
    content+='<table class="table">';
    content+='<thead>';
    content+='<tr><th>#</th><th>Horoscope</th><th>Score</th></tr>';
    content+='</thead>';
    content+='<tbody>';
    content+='<tr><td>1</td><td>Varna Kutami</td><td>'+varnaPoints+'/'+varnaTotalPoints+'</td></tr>';
	content+='<tr><td>2</td><td>Vashya Kutami</td><td>'+vashyaKootamiPoints+'/'+vashyaKootamiTotalPoints+'</td></tr>';
	content+='<tr><td>3</td><td>Tarabhalam Kutami</td><td>'+taraPoints+'/'+taraTotalPoints+'</td></tr>';
	content+='<tr><td>4</td><td>Yoni Kutami</td><td>'+yoniPoints+'/'+yoniTotalPoints+'</td></tr>';
	content+='<tr><td>5</td><td>Graha Mythri</td><td>'+grahaMytriPoints+'/'+grahaMytriTotalPoints+'</td></tr>';
	content+='<tr><td>6</td><td>Gana Kutami</td><td>'+ganaPoints+'/'+ganaTotalPoints+'</td></tr>';
	content+='<tr><td>7</td><td>Bhakoot Kutami</td><td>'+bhakootBoyPoints+'/'+bhakootBoyTotalPoints+'</td></tr>';
	content+='<tr><td>8</td><td>Nadi Kutami</td><td>'+nadiPoints+'/'+nadiTotalPoints+'</td></tr>';
	if(userScored>=18) {
	content+='<tr style="color:#4caf50;"><td></td><td><b>TOTAL</b></td><td><b>'+userScored+'/'+totalKhutamiScore+'</b></td></tr>';
	} else {
	content+='<tr style="color:#ff5722;"><td></td><td><b>TOTAL</b></td><td><b>'+userScored+'/'+totalKhutamiScore+'</b></td></tr>';   
	}
    content+='</tbody>';
    content+='</table>';
    content+='</div>';
	content+='<div class="container-fluid">';
    content+='<div class="row">';
	content+='<div align="center" class="col-xs-12">';
	content+='<h5><b>KUNDALINI MATCHING DESCRIPTION</b></h5>';
	content+='</div>'; 
	content+='<div class="container-fluid">';
    content+='<div class="row">';
	content+='<div class="col-xs-12">';
	content+='<div class="list-group">';
	//
	content+='<div class="list-group-item" data-toggle="collapse" data-target="#div_boyAndGirlVarna"  style="padding:2px 15px;background-color:#f5f5f5;">';
	content+='<h5><b>1. Varna Khutami</b><span class="glyphicon glyphicon-chevron-down pull-right"></span></h5>';
	content+='</div>';
	content+='<div id="div_boyAndGirlVarna" class="collapse">';
	content+='<div class="list-group-item">';
    content+='<div class="table-responsive">';         
    content+='<table class="table">';
    content+='<tbody>';
	content+='<tr align="center" style="background-color:#ccc;"><td><b>Boy</b></td><td><b>Girl</b></td></tr>';
	content+='<tr>';
	content+='<td><table class="table">';
	content+='<tr style="background-color:#f5f5f5;"><td><b>Varnam</b></td><td>'+boyVarnamVarna+'</td></tr>';
	content+='<tr style="background-color:#e7e7e7;"><td><b>Varnam Element</b></td><td>'+boyVarnamElement+'</td></tr>';
	content+='</table>';
	content+='</td>';
	content+='<td><table class="table">';
	content+='<tr style="background-color:#f5f5f5;"><td><b>Varnam</b></td><td>'+girlVarnamVarna+'</td></tr>';
	content+='<tr style="background-color:#e7e7e7;"><td><b>Varnam Element</b></td><td>'+girlVarnamElement+'</td></tr>';
	content+='</table>';
	content+='</td>';
	content+='</tr>';
    content+='</tbody>';
    content+='</table>';
    content+='</div>';
	content+='<div class="container-fluid">';
	content+='<div class="row">';
	content+='<div class="col-xs-12" align="right"><b>SCORE:</b><h4><b>'+varnaPoints+'/'+varnaTotalPoints+'</b></h4></div>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	//
	content+='<div class="list-group-item" data-toggle="collapse" data-target="#div_boyAndGirlvashya" style="padding:2px 15px;background-color:#f5f5f5;">';
	content+='<h5><b>2. Vashya Khutami</b><span class="glyphicon glyphicon-chevron-down pull-right"></span></h5>';
	content+='</div>';
	content+='<div id="div_boyAndGirlvashya" class="collapse">';
	content+='<div class="list-group-item">';
    content+='<div class="table-responsive">';
    content+='<table class="table">';
    content+='<tbody>';
	content+='<tr align="center" style="background-color:#ccc;"><td><b>Boy</b></td><td><b>Girl</b></td></tr>';
	content+='<tr>';
	content+='<td><table class="table">';
	content+='<tr style="background-color:#f5f5f5;"><td><b>VashyaKootami</b></td><td>'+vashyaKootamiBoy+'</td></tr>';
	content+='</table>';
	content+='</td>';
	content+='<td><table class="table">';
	content+='<tr style="background-color:#f5f5f5;"><td><b>VashyaKootami</b></td><td>'+vashyaKootamiGirl+'</td></tr>';
	content+='</table>';
	content+='</td>';
	content+='</tr>';
    content+='</tbody>';
    content+='</table>';
    content+='</div>';
	content+='<div class="container-fluid">';
	content+='<div class="row">';
	content+='<div class="col-xs-6" align="left"><b>RANKING:</b><h4><b>'+vashyaRanking+'</b></h4></div>';
	content+='<div class="col-xs-6" align="right"><b>SCORE:</b><h4><b>'+vashyaKootamiPoints+'/'+vashyaKootamiTotalPoints+'</b></h4></div>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	//
	content+='<div class="list-group-item" data-toggle="collapse" data-target="#div_boyAndGirltarabhalam" style="padding:2px 15px;background-color:#f5f5f5;">';
	content+='<h5><b>3. Tarabhalam Khutami</b><span class="glyphicon glyphicon-chevron-down pull-right"></span></h5>';
	content+='</div>';
	content+='<div id="div_boyAndGirltarabhalam" class="collapse">';
	content+='<div class="list-group-item">';
    content+='<div class="table-responsive">';      
    content+='<table class="table">';
    content+='<tbody>';
	content+='<tr align="center" style="background-color:#ccc;"><td><b>Boy</b></td><td><b>Girl</b></td></tr>';
	content+='<tr>';
	content+='<td><table class="table">';
	content+='<tr style="background-color:#f5f5f5;"><td><b>Tara</b></td><td>'+match_boy_nakshatram+'</td></tr>';
	content+='</table>';
	content+='</td>';
	content+='<td><table class="table">';
	content+='<tr style="background-color:#f5f5f5;"><td><b>Tara</b></td><td>'+match_girl_nakshatram+'</td></tr>';
	content+='</table>';
	content+='</td>';
	content+='</tr>';
    content+='</tbody>';
    content+='</table>';
    content+='</div>';
	content+='<div class="container-fluid">';
	content+='<div class="row">';
	content+='<div class="col-xs-12" align="right"><b>SCORE:</b><h4><b>'+taraPoints+'/'+taraTotalPoints+'</b></h4></div>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	//
	content+='<div class="list-group-item" data-toggle="collapse" data-target="#div_boyAndGirlyoni" style="padding:2px 15px;background-color:#f5f5f5;">';
	content+='<h5><b>4. Yoni Khutami</b><span class="glyphicon glyphicon-chevron-down pull-right"></span></h5>';
	content+='</div>';
	content+='<div id="div_boyAndGirlyoni" class="collapse">';
	content+='<div class="list-group-item">';
    content+='<div class="table-responsive">';
    content+='<table class="table">';
    content+='<tbody>';
	content+='<tr align="center" style="background-color:#ccc;"><td><b>Boy</b></td><td><b>Girl</b></td></tr>';
	content+='<tr>';
	content+='<td><table class="table">';
	content+='<tr style="background-color:#f5f5f5;"><td><b>Animal</b></td><td>'+yoniBoyAnimal+'</td></tr>';
	content+='</table>';
	content+='</td>';
	content+='<td><table class="table">';
	content+='<tr style="background-color:#f5f5f5;"><td><b>Animal</b></td><td>'+yoniGirlAnimal+'</td></tr>';
	content+='</table>';
	content+='</td>';
	content+='</tr>';
    content+='</tbody>';
    content+='</table>';
    content+='</div>';
	content+='<div class="container-fluid">';
	content+='<div class="row">';
	content+='<div class="col-xs-6" align="left"><b>BEHAVIOUR:</b><h4><b>'+yoniBehaviour+'</b></h4></div>';
	content+='<div class="col-xs-6" align="right"><b>SCORE:</b><h4><b>'+yoniPoints+'/'+yoniTotalPoints+'</b></h4></div>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	//
	content+='<div class="list-group-item" data-toggle="collapse" data-target="#div_boyAndGirlgrahamythri" style="padding:2px 15px;background-color:#f5f5f5;">';
	content+='<h5><b>5. Graha Mythri</b><span class="glyphicon glyphicon-chevron-down pull-right"></span></h5>';
	content+='</div>';
	content+='<div id="div_boyAndGirlgrahamythri" class="collapse">';
	content+='<div class="list-group-item">';
    content+='<div class="table-responsive">';        
    content+='<table class="table">';
    content+='<tbody>';
	content+='<tr align="center" style="background-color:#ccc;"><td><b>Boy</b></td><td><b>Girl</b></td></tr>';
	content+='<tr>';
	content+='<td><table class="table">';
	content+='<tr style="background-color:#f5f5f5;"><td><b>Graham</b></td><td>'+boyGraham+'</td></tr>';
	content+='</table>';
	content+='</td>';
	content+='<td><table class="table">';
	content+='<tr style="background-color:#f5f5f5;"><td><b>Graham</b></td><td>'+girlGraham+'</td></tr>';
	content+='</table>';
	content+='</td>';
	content+='</tr>';
    content+='</tbody>';
    content+='</table>';
    content+='</div>';
	content+='<div class="container-fluid">';
	content+='<div class="row">';
	content+='<div class="col-xs-6" align="left"><b>PHALAM:</b><h4><b>'+grahaMytriphalam+'</b></h4></div>';
	content+='<div class="col-xs-6" align="right"><b>SCORE:</b><h4><b>'+grahaMytriPoints+'/'+grahaMytriTotalPoints+'</b></h4></div>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	//
	content+='<div class="list-group-item" data-toggle="collapse" data-target="#div_boyAndGirlgana" style="padding:2px 15px;background-color:#f5f5f5;">';
	content+='<h5><b>6. Gana Khutami</b><span class="glyphicon glyphicon-chevron-down pull-right"></span></h5>';
	content+='</div>';
	content+='<div id="div_boyAndGirlgana" class="collapse">';
    content+='<div  class="list-group-item">';
    content+='<div class="table-responsive">';
    content+='<table class="table">';
    content+='<tbody>';
	content+='<tr align="center" style="background-color:#ccc;"><td><b>Boy</b></td><td><b>Girl</b></td></tr>';
	content+='<tr>';
	content+='<td><table class="table">';
	content+='<tr style="background-color:#f5f5f5;"><td><b>Gana</b></td><td>'+boy_gana+'</td></tr>';
	content+='</table>';
	content+='</td>';
	content+='<td><table class="table">';
	content+='<tr style="background-color:#f5f5f5;"><td><b>Gana</b></td><td>'+girl_gana+'</td></tr>';
	content+='</table>';
	content+='</td>';
	content+='</tr>';
    content+='</tbody>';
    content+='</table>';
    content+='</div>';
	content+='<div class="container-fluid">';
	content+='<div class="row">';
	content+='<div class="col-xs-6" align="left"><b>COMPATIBILITY:</b><h4><b>'+gana_compatibility+'</b></h4></div>';
	content+='<div class="col-xs-6" align="right"><b>SCORE:</b><h4><b>'+ganaPoints+'/'+ganaTotalPoints+'</b></h4></div>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	//
	content+='<div class="list-group-item" data-toggle="collapse" data-target="#div_boyAndGirlBhakoot" style="padding:2px 15px;background-color:#f5f5f5;">';
	content+='<h5><b>7. Bhakoot Khutami</b><span class="glyphicon glyphicon-chevron-down pull-right"></span></h5>';
	content+='</div>';
	content+='<div id="div_boyAndGirlBhakoot" class="collapse">';
	content+='<div class="list-group-item">';
    content+='<div class="table-responsive">';
    content+='<table class="table">';
    content+='<tbody>';
	content+='<tr align="center" style="background-color:#ccc;"><td><b>Boy</b></td><td><b>Girl</b></td></tr>';
	content+='<tr>';
	content+='<td><table class="table">';
	content+='<tr style="background-color:#f5f5f5;"><td><b>Rasi</b></td><td>'+match_boy_raasi+'</td></tr>';
	content+='</table>';
	content+='</td>';
	content+='<td><table class="table">';
	content+='<tr style="background-color:#f5f5f5;"><td><b>Rasi</b></td><td>'+match_girl_raasi+'</td></tr>';
	content+='</table>';
	content+='</td>';
	content+='</tr>';
    content+='</tbody>';
    content+='</table>';
    content+='</div>';
	content+='<div class="container-fluid">';
	content+='<div class="row">';
	content+='<div class="col-xs-12" align="right"><b>SCORE:</b><h4><b>'+bhakootBoyPoints+'/'+bhakootBoyTotalPoints+'</b></h4></div>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	//
    content+='<div class="list-group-item" data-toggle="collapse" data-target="#div_boyAndGirlNadi" style="padding:2px 15px;background-color:#f5f5f5;">';
	content+='<h5><b>8. Nadi Khutami</b><span class="glyphicon glyphicon-chevron-down pull-right"></span></h5>';
	content+='</div>';
	content+='<div id="div_boyAndGirlNadi" class="collapse">';
	content+='<div class="list-group-item">';
    content+='<div class="table-responsive">';       
    content+='<table class="table">';
    content+='<tbody>';
	content+='<tr align="center" style="background-color:#ccc;"><td><b>Boy</b></td><td><b>Girl</b></td></tr>';
	content+='<tr>';
	content+='<td><table class="table">';
	content+='<tr style="background-color:#f5f5f5;"><td><b>Nadi</b></td><td>'+boyNadi+'</td></tr>';
	content+='</table>';
	content+='</td>';
	content+='<td><table class="table">';
	content+='<tr style="background-color:#f5f5f5;"><td><b>Nadi</b></td><td>'+girlNadi+'</td></tr>';
	content+='</table>';
	content+='</td>';
	content+='</tr>';
    content+='</tbody>';
    content+='</table>';
    content+='</div>';
	content+='<div class="container-fluid">';
	content+='<div class="row">';
	content+='<div class="col-xs-12" align="right"><b>SCORE:</b><h4><b>'+nadiPoints+'/'+nadiTotalPoints+'</b></h4></div>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	//
	content+='</div>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	
	
  document.getElementById("boyAndGirlMatchResults").innerHTML=content;  
}
  </script>
<style>
</style>
</head>
<body>
 <?php include_once 'templates/api_header.php'; ?>
 <div class="container-fluid mtop15p">
   <div class="col-sm-4">
     <div class="list-group">
	    <div align="center" class="list-group-item">
		  <h5><b>MATCH CALCULATOR</b></h5>
		</div>
		<div class="list-group-item">
		   <div align="center"><h5><b>BOY</b></h5></div>
		   <div class="form-group"> 
		     <label>Raasi</label>
			 <select id="match_boy_raasi" class="form-control" 
			 onchange="javascript:display_list_Nakshatra('match_boy_raasi','match_boy_nakshatram');">
			    <option value="">Select Raasi</option>
			 </select>
		   </div>
		   <div class="form-group"> 
		     <label>Nakshatram</label>
			 <select id="match_boy_nakshatram" class="form-control">
			    <option value="">Select your Star (Nakshatram)</option>
			 </select>
		   </div>
		</div>
		<div class="list-group-item">
		   <div align="center"><h5><b>GIRL</b></h5></div>
		   <div class="form-group"> 
		     <label>Raasi</label>
			 <select id="match_girl_raasi" class="form-control"
			   onchange="javascript:display_list_Nakshatra('match_girl_raasi','match_girl_nakshatram');">
			    <option value="">Select Raasi</option>
			 </select>
		   </div>
		   <div class="form-group"> 
		     <label>Nakshatram</label>
			 <select id="match_girl_nakshatram" class="form-control">
			    <option value="">Select your Star (Nakshatram)</option>
			 </select>
		   </div>
		</div>
		<div class="list-group-item">
		  <button class="btn btn-primary form-control" onclick="javascript:matchCalculator();"><b>Calculate Match</b></button>
		</div>
	 </div>
   </div>
   <div id="boyAndGirlMatchResults" class="col-sm-8">
    
   </div>
 </div>
</body>
</html>