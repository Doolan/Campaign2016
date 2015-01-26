

joinclick = function(){
	document.getElementById('blackBackground').style.display = 'block';
	document.getElementById('register').style.display = 'block';
}
hideclick = function(){
	document.getElementById('blackBackground').style.display = 'none';
	document.getElementById('register').style.display = 'none';
}
submitclick = function(){
	document.getElementById('emailForm').submit();
	document.getElementById('blackBackground').style.display = 'none';
	document.getElementById('register').style.display = 'none';
}

/**document.getElementById('joinUs').click(function(){
	document.getElementById('blackBackground').show();
	document.getElementById('register').show();
});
document.getElementById('submitButton').click(function(){
	//send data to php
	document.getElementById('blackBackground').hide();
	document.getElementById('register').hide();
});**/