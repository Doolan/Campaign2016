

window.onload = function() { 
	console.log('hit');
	document.getElementById('blackBackground').style.display = 'block';
};
/**var hideclick1 = function(){
	document.getElementById('blackBackground').style.display = 'none';
	document.getElementById('breaking').style.display = 'none';
	console.log('hit hide');
};**/

var hideclickAll = function(){
	document.getElementById('blackBackground').style.display = 'none';
	document.getElementById('register').style.display = 'none';
	document.getElementById('breaking').style.display = 'none';
	console.log('hit hide all');
}

var joinclick = function(){
	document.getElementById('blackBackground').style.display = 'block';
	document.getElementById('register').style.display = 'block';
};
/**var hideclick = function(){
	document.getElementById('blackBackground').style.display = 'none';
	document.getElementById('register').style.display = 'none';
};**/
var submitclick = function(){
	document.getElementById('emailForm').submit();
	document.getElementById('blackBackground').style.display = 'none';
	document.getElementById('register').style.display = 'none';
};

/**document.getElementById('joinUs').click(function(){
	document.getElementById('blackBackground').show();
	document.getElementById('register').show();
});
document.getElementById('submitButton').click(function(){
	//send data to php
	document.getElementById('blackBackground').hide();
	document.getElementById('register').hide();
});**/

// Cache selectors outside callback for performance. 
/**var $window = $(window);
$window.scroll(function() {
    $('nav').toggleClass('sticky', $window.scrollTop() > 30);
});**/

