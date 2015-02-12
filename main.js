


var  breakingUpdate = function() { 
	console.log('hit');
	document.getElementById('blackBackground').style.display = 'block';
	document.getElementById('breaking').style.display = 'block';
};

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

var submitclick = function(){
	document.getElementById('emailForm').submit();
	document.getElementById('blackBackground').style.display = 'none';
	document.getElementById('register').style.display = 'none';
};

var checkcookie = function(){
	var cookie = getCookie("breakingUpdate");
	if(cookie !=""){
		console.log('has cookie',cookie);
		//loggedin
	}
	else{
		console.log('doesnt have cookie');
		//log in
		breakingUpdate();
		document.cookie="breakingUpdate=TEMP";
	}
}

var clearCookies = function(){
	console.log('killed the cookie');
		document.cookie = "breakingUpdate=DEAD; expires=Thu, 01 Jan 1970 00:00:00 UTC";
}


//FROM W3
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}


// Cache selectors outside callback for performance. 
/**var $window = $(window);
$window.scroll(function() {
    $('nav').toggleClass('sticky', $window.scrollTop() > 30);
});**/

