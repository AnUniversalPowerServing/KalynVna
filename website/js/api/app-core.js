function sentenceCase(str) {
 var response='';
  for(var index=0;index<str.length;index++){
    if(index==0){ response+=str.charAt(index).toUpperCase(); }
	else { response+=str.charAt(index).toLowerCase();  }
  }
 return response;
}