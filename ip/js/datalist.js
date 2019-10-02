function fn(){

//alert(document.getElementById('cp1').selectedIndex);
for(i=1;i<4;i++){
if (document.getElementById('cp1').selectedIndex == 0)
{ 
	document.getElementById('idisec'+i).required = true;
	document.getElementById('ihrc'+i).required = false;
	document.getElementById('iarab'+i).required = false;
	document.getElementById('isecurity'+i).required = false;
	document.getElementById('iaippm'+i).required = false;
	document.getElementById('itc'+i).required = false;
    document.getElementById('iaippm'+i).style.display="none";
    document.getElementById('itc'+i).style.display="none";
	document.getElementById('isecurity'+i).style.display="none";
    document.getElementById('idisec'+i).style.display="inline-block";
    document.getElementById('ihrc'+i).style.display="none";
    document.getElementById('iarab'+i).style.display="none";
    document.getElementById('coun-pre-'+i).innerHTML="Country Preference "+i;
} 
if (document.getElementById('cp1').selectedIndex == 1){

	document.getElementById('idisec'+i).required = false;
	document.getElementById('iarab'+i).required = false;
	document.getElementById('ihrc'+i).required = true;
	document.getElementById('isecurity'+i).required = false;
	document.getElementById('iaippm'+i).required = false;
	document.getElementById('itc'+i).required = false;
    document.getElementById('iaippm'+i).style.display="none";
    document.getElementById('itc'+i).style.display="none";
	document.getElementById('isecurity'+i).style.display="none";
	document.getElementById('ihrc'+i).style.display="inline-block";
	document.getElementById('idisec'+i).style.display="none";
	document.getElementById('iarab'+i).style.display="none";
	document.getElementById('coun-pre-'+i).innerHTML="Country Preference "+i;
}
if (document.getElementById('cp1').selectedIndex == 2){
	//alert("a");
	document.getElementById('idisec'+i).required = false;
	document.getElementById('ihrc'+i).required = false;
	document.getElementById('iarab'+i).required = false;
	document.getElementById('isecurity'+i).required = true;
		document.getElementById('iaippm'+i).required = false;
	document.getElementById('itc'+i).required = false;
    document.getElementById('iaippm'+i).style.display="none";
    document.getElementById('itc'+i).style.display="none";
	document.getElementById('iarab'+i).style.display="none";
	document.getElementById('isecurity'+i).style.display="inline-block";
	document.getElementById('idisec'+i).style.display="none";
	document.getElementById('ihrc'+i).style.display="none";
	document.getElementById('coun-pre-'+i).innerHTML="Country Preference "+i;
}
if (document.getElementById('cp1').selectedIndex == 3)
{ 
	document.getElementById('idisec'+i).required = false;
	document.getElementById('ihrc'+i).required = false;
	document.getElementById('iarab'+i).required = false;
	document.getElementById('isecurity'+i).required = false;
	document.getElementById('iaippm'+i).required = true;
	document.getElementById('itc'+i).required = false;
    document.getElementById('iaippm'+i).style.display="inline-block";
    document.getElementById('itc'+i).style.display="none";
	document.getElementById('isecurity'+i).style.display="none";
    document.getElementById('idisec'+i).style.display="none";
    document.getElementById('ihrc'+i).style.display="none";
    document.getElementById('iarab'+i).style.display="none";
    document.getElementById('coun-pre-'+i).innerHTML="Candidate Preference "+i;
} 
if (document.getElementById('cp1').selectedIndex == 4)
{ 
	document.getElementById('idisec'+i).required = false;
	document.getElementById('ihrc'+i).required = false;
	document.getElementById('iarab'+i).required = false;
	document.getElementById('isecurity'+i).required = false;
	document.getElementById('iaippm'+i).required = false;
	document.getElementById('itc'+i).required = true;
    document.getElementById('iaippm'+i).style.display="none";
    document.getElementById('itc'+i).style.display="inline-block";
	document.getElementById('isecurity'+i).style.display="none";
    document.getElementById('idisec'+i).style.display="none";
    document.getElementById('ihrc'+i).style.display="none";
    document.getElementById('iarab'+i).style.display="none";
    document.getElementById('coun-pre-'+i).innerHTML="Candidate Preference "+i;
} 
if (document.getElementById('cp1').selectedIndex == 5){
	document.getElementById('idisec'+i).required = false;
	document.getElementById('ihrc'+i).required = false;
	document.getElementById('iarab'+i).required = true;
	document.getElementById('isecurity'+i).required = false;
	document.getElementById('iaippm'+i).required = false;
	document.getElementById('itc'+i).required = false;
    document.getElementById('iaippm'+i).style.display="none";
    document.getElementById('itc'+i).style.display="none";
	document.getElementById('isecurity'+i).style.display="none";
	document.getElementById('iarab'+i).style.display="inline-block";
	document.getElementById('idisec'+i).style.display="none";
	document.getElementById('ihrc'+i).style.display="none";
	document.getElementById('coun-pre-'+i).innerHTML="Country Preference "+i;
}
}
}


function fn1(){

for(i=1;i<4;i++){
alert("aasd");
document.getElementById('idisec'+i).required = false;
	document.getElementById('iarab'+i).required = false;
	document.getElementById('ihrc'+i).required = true;
	document.getElementById('isecurity'+i).required = false;
	document.getElementById('iaippm'+i).required = false;
	document.getElementById('itc'+i).required = false;
    document.getElementById('iaippm'+i).style.display="none";
    document.getElementById('itc'+i).style.display="none";
	document.getElementById('isecurity'+i).style.display="none";
	document.getElementById('ihrc'+i).style.display="inline-block";
	document.getElementById('idisec'+i).style.display="none";
	document.getElementById('iarab'+i).style.display="none";
	document.getElementById('coun-pre-'+i).innerHTML="Country Preference "+i;

}

}