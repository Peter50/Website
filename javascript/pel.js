var i=0;

function enjoliver(){
	var j=0;
	var v = document.getElementsByClassName("ablog");
	for (var iter = 0; iter < v.length; iter++) {
		if(i==0){
			j=1;
			v[iter].style.color='#000000';
			v[iter].style.background='#FFFFFF';
		}	
		else{
			j=0;
			v[iter].style.color='#45528D';
			v[iter].style.background='#8089B6';

		}
	}

	if(j==1){
		i=1;
	}
	else{
		i=0;
	}
}