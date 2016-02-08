function invisible(id){
	document.getElementById(id).style.visibility='hidden';
	document.getElementById(id).style.display='none';
}

function effacerTout(){
	invisible('cv');
	invisible('accueil');
	invisible('blog');
	invisible('contact');
	invisible('portefolio');
}

function visible(section){
	document.getElementById(section).style.visibility='visible';
	document.getElementById(section).style.display='inline';
}
