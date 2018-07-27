var RAASI_LIST=[];
    RAASI_LIST[0]="Aries (Mesha Raasi)";
	RAASI_LIST[1]="Taurus (Vrushabha Raasi)";
	RAASI_LIST[2]="Gemini (Midhuna Raasi)";
	RAASI_LIST[3]="Cancer (Karkataka Raasi)";
	RAASI_LIST[4]="Leo (Simha Raasi)";
	RAASI_LIST[5]="Virgo (Kanya Raasi)";
	RAASI_LIST[6]="Libra (Thula Raasi)";
	RAASI_LIST[7]="Scorpio (Vruchika Raasi)";
	RAASI_LIST[8]="Saggitarius (Dhanur Raasi)";
	RAASI_LIST[9]="Capricorn (Makara Raasi)";
	RAASI_LIST[10]="Aquarius (Khumbha Raasi)";
	RAASI_LIST[11]="Pisces (Meena Raasi)";
var NAKSHATRAM_LIST=[];
	NAKSHATRAM_LIST["Aries (Mesha Raasi)"]=["Ashwini Nakshatram 1st Padam","Ashwini Nakshatram 2nd Padam",
											"Ashwini Nakshatram 3rd Padam","Ashwini Nakshatram 4th Padam",
											"Bharani Nakshatram 1st Padam","Bharani Nakshatram 2nd Padam",
											"Bharani Nakshatram 3rd Padam","Bharani Nakshatram 4th Padam",
											"Kruthika Nakshatram 1st Padam"];
	NAKSHATRAM_LIST["Taurus (Vrushabha Raasi)"]=["Kruthika Nakshatram 2nd Padam","Kruthika Nakshatram 3rd Padam",
												 "Kruthika Nakshatram 4th Padam","Rohini Nakshatram 1st Padam",
												 "Rohini Nakshatram 2nd Padam","Rohini Nakshatram 3rd Padam",
												 "Rohini Nakshatram 4th Padam","Mrugasira Nakshatram 1st Padam",
												 "Mrugasira Nakshatram 2nd Padam"];
	NAKSHATRAM_LIST["Gemini (Midhuna Raasi)"]=["Mrugasira Nakshatram 3rd Padam","Mrugasira Nakshatram 4th Padam",
											   "Aarudhra Nakshatram 1st Padam","Aarudhra Nakshatram 2nd Padam",
											   "Aarudhra Nakshatram 3rd Padam", "Aarudhra Nakshatram 4th Padam",
											   "Punarvasu Nakshatram 1st Padam","Punarvasu Nakshatram 2nd Padam",
											   "Punarvasu Nakshatram 3rd Padam"];
	NAKSHATRAM_LIST["Cancer (Karkataka Raasi)"]=["Punarvasu Nakshatram 4th Padam","Pushyami Nakshatram 1st Padam",
												 "Pushyami Nakshatram 2nd Padam","Pushyami Nakshatram 3rd Padam",
												 "Pushyami Nakshatram 4th Padam","Aslesha Nakshatram 1st Padam",
												 "Aslesha Nakshatram 2nd Padam","Aslesha Nakshatram 3rd Padam",
												 "Aslesha Nakshatram 4th Padam"];
	NAKSHATRAM_LIST["Leo (Simha Raasi)"]=["Makha Nakshatram 1st Padam","Makha Nakshatram 2nd Padam",
										  "Makha Nakshatram 3rd Padam","Makha Nakshatram 4th Padam",
										  "Pubbha Nakshatram 1st Padam","Pubbha Nakshatram 2nd Padam",
										  "Pubbha Nakshatram 3rd Padam","Pubbha Nakshatram 4th Padam",
										  "Uthara Nakshatram 1st Padam"];
	NAKSHATRAM_LIST["Virgo (Kanya Raasi)"]=["Uthara Nakshatram 2nd Padam","Uthara Nakshatram 3rd Padam",
											"Uthara Nakshatram 4th Padam","Hastha Nakshatram 1st Padam",
											"Hastha Nakshatram 2nd Padam","Hastha Nakshatram 3rd Padam",
											"Hastha Nakshatram 4th Padam","Chitha Nakshatram 1st Padam",
											"Chitha Nakshatram 2nd Padam"];
	NAKSHATRAM_LIST["Libra (Thula Raasi)"]=["Chitha Nakshatram 3rd Padam","Chitha Nakshatram 4th Padam",
											"Swathi Nakshatram 1st Padam","Swathi Nakshatram 2nd Padam",
											"Swathi Nakshatram 3rd Padam","Swathi Nakshatram 4th Padam",
											"Vishaka Nakshatram 1st Padam","Vishaka Nakshatram 2nd Padam",
											"Vishaka Nakshatram 3rd Padam"];
	NAKSHATRAM_LIST["Scorpio (Vruchika Raasi)"]=["Vishaka Nakshatram 4th Padam","Anuradha Nakshatram 1st Padam",
												 "Anuradha Nakshatram 2nd Padam","Anuradha Nakshatram 3rd Padam",
												 "Anuradha Nakshatram 4th Padam","Jeshta Nakshatram 1st Padam",
												 "Jeshta Nakshatram 2nd Padam","Jeshta Nakshatram 3rd Padam",
												 "Jeshta Nakshatram 4th Padam"];
	NAKSHATRAM_LIST["Saggitarius (Dhanur Raasi)"]=["Moola Nakshatram 1st Padam","Moola Nakshatram 2nd Padam",
												   "Moola Nakshatram 3rd Padam","Moola Nakshatram 4th Padam",
												   "Purvashada Nakshatram 1st Padam","Purvashada Nakshatram 2nd Padam",
												   "Purvashada Nakshatram 3rd Padam","Purvashada Nakshatram 4th Padam",
												   "Utharashada Nakshatram 1st Padam"];
	NAKSHATRAM_LIST["Capricorn (Makara Raasi)"]=["Utharashada Nakshatram 2nd Padam","Utharashada Nakshatram 3rd Padam",
												 "Utharashada Nakshatram 4th Padam","Shravana Nakshatram 1st Padam",
												 "Shravana Nakshatram 2nd Padam","Shravana Nakshatram 3rd Padam",
												 "Shravana Nakshatram 4th Padam","Dhanista Nakshatram 1st Padam",
												 "Dhanista Nakshatram 2nd Padam"];
	NAKSHATRAM_LIST["Aquarius (Khumbha Raasi)"]=["Dhanista Nakshatram 3rd Padam","Dhanista Nakshatram 4th Padam",
												 "Sathabisham Nakshatram 1st Padam","Sathabisham Nakshatram 2nd Padam",
												 "Sathabisham Nakshatram 3rd Padam","Sathabisham Nakshatram 4th Padam",
												 "Purvabhadhra Nakshatram 1st Padam","Purvabhadhra Nakshatram 2nd Padam",
												 "Purvabhadhra Nakshatram 3rd Padam"];
	NAKSHATRAM_LIST["Pisces (Meena Raasi)"]=["Purvabhadhra Nakshatram 4th Padam","Utharabhadra Nakshatram 1st Padam",
											 "Utharabhadra Nakshatram 2nd Padam","Utharabhadra Nakshatram 3rd Padam",
											 "Utharabhadra Nakshatram 4th Padam","Revathi Nakshatram 1st Padam",
											 "Revathi Nakshatram 2nd Padam","Revathi Nakshatram 3rd Padam",
											 "Revathi Nakshatram 4th Padam"];
var GOTRAS=["Agastya","Alambani","Angirasa","Atreya","Atri","Bhakdi","Bhardwaj","Bharadvajasa","Bhargava",
"Chandilya","Charora","Chikitasa","Dalabhya","Darbhas","Dhananjaya","Dhanvantari","Galvasaya","Garga","Gargheyasa",
"Gaubhilya","Gautam","Gautamasa","Harita","Haritasa","Hukman Bhal","Jamadagni","Jatukarna","Kalabodhana","Kalaboudha",
"Kalabhavasa","Kamakayana Vishwamitra","Kanva","Kapi","Kapil","Kashyapa","Katyayana","Kaundinya","Kaunsh","Kaushal",
"Kaushalas","Kushal","Kaushika","Kausyagasa","Krishnatriya","Krishnatreeya","Kutsa","Kutsasa","Lakhi","Lohit","Lohita-Kowsika",
"Lomasha","Mandavya","Matanga","Mauna Bhargava","Moudgalya","Mudgala (Maudgalya, Moudgil, Modgil, Mudgal)","Nithunthana",
"Nrisimhadevara","Nydravakashyapa","Parashara","Parthivasa","Pouragutsya","Purang","Ratheetarasa","Rathitara","Rohinya",
"Roushayadana","Rowshayadana","Saankritya (Sakarawar)","Saawarna","Saharia Joshi","Salankayana","Sandilyasa","Sangar",
"Sankrithi (Sankrityayan)","Sankyanasa","Sathamarshana","Shaktri","Shandelosya","Shandilya, sanas","Shaunaka","Somnasser",
"Soral","Srivatsa","Sumarkanth","Suryadhwaja","Tugnait","Upadhyay","Upamanyu","Utsasya","Vadula","Vaidya/Baidya","Valmiki",
"Vardhulasa","Vardhviyasa","Vardhyswasa","Vashishta","Vatsa","Veetahavya","Vishnu","Vishnuvardhana","Viswamitra","Yaska"];
var SHAKHA=["Niyogi Brahmins","Vaidika Brahmins"];
var UPASHAKHA=[];
	UPASHAKHA["Niyogi Brahmins"]=["Aruvela Niyogi","Nandavarika Niyogi","Niyogi Pradamashakha","Karanakamma Niyogi",
								  "Velanati Niyogi","Telaganya Niyogi","Dravida Niyogi","Karanalu",
								  "SristiKaranalu / SistuKaranalu / SistaKaranalu","Kasalanati Niyogi","Pakanati Niyogi"];
	UPASHAKHA["Vaidika Brahmins"]=["Vaishnava","Dravidulu","Madhvulu","Velanati Vaidikulu","Telaganyulu / Telaganadu Vaidikis",
								   "Venginati Vaidikulu","Kasalnati Vaidikulu","Muraknati Vaidikulu"];

function display_list_Raasi(raasiElementId){
 var options='<option value="">Select your Raasi</option>';
 for(var index=0;index<RAASI_LIST.length;index++){
   options+='<option value="'+RAASI_LIST[index]+'">'+RAASI_LIST[index]+'</option>';
 }
 document.getElementById(raasiElementId).innerHTML=options;
}

function display_list_Nakshatra(raasiElementId,nakshatraElementId){
  var sel_Raasi=document.getElementById(raasiElementId).value;
  var options='<option value="">Select your Star (Nakshatra)</option>';
  for(var index=0;index<NAKSHATRAM_LIST[sel_Raasi].length;index++){
   options+='<option value="'+NAKSHATRAM_LIST[sel_Raasi][index]+'">'+NAKSHATRAM_LIST[sel_Raasi][index]+'</option>';
  }
  document.getElementById(nakshatraElementId).innerHTML=options;
}

function display_list_gothram(gothramElementId){
  var options='<option value="">Select your Gothram</option>';
  for(var index=0;index<GOTRAS.length;index++){
   options+='<option value="'+GOTRAS[index]+'">'+GOTRAS[index]+'</option>';
  }
  document.getElementById(gothramElementId).innerHTML=options; 
}
function display_list_shakha(shakhaElementId){
  var options='<option value="">Select your Shakha</option>';
  for(var index=0;index<SHAKHA.length;index++){
   options+='<option value="'+SHAKHA[index]+'">'+SHAKHA[index]+'</option>';
  }
  document.getElementById(shakhaElementId).innerHTML=options; 
}

function display_list_upaShakha(shakhaElementId,upaShakhaElementId){
  var sel_shakha=document.getElementById(shakhaElementId).value;
  var options='<option value="">Select your UpaShakha</option>';
  for(var index=0;index<UPASHAKHA[sel_shakha].length;index++){
   options+='<option value="'+UPASHAKHA[sel_shakha][index]+'">'+UPASHAKHA[sel_shakha][index]+'</option>';
  }
  document.getElementById(upaShakhaElementId).innerHTML=options; 
}