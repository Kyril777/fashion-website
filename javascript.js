/* Loads script to contents. */
$(document).ready(function(){
	// initial
	$('#content').load('content/index.php');
	
	// handle menu clicks
	$('ul.sb-icon-list li a').click(function() {
		var page = $(this).attr('href');
		$('#content').load('content/' + page + '.php');
		return false;
	});

});


/* Validates form in contact us page..*/
function validateName()
{
	var name = document.getElementById("commentName").value;
	
	if(name.length == 0)
	{
		producePrompt("Name is Required", "commentNamePrompt", "red");
		return false;
	}
	
	if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/))
	{
		producePrompt("First and Last Name Please", "commentNamePrompt", "red");
		return false;
	}
	
	producePrompt("Welcome " + name, "commentNamePrompt", "green");
	return true;
}

function validatePhone()
{
	var phone = document.getElementById("commentPhone").value;
	
	if(phone.length == 0)
	{
		producePrompt("Phone Number is Required", "commentPhonePrompt", "red");
		return false;
	}
	if(phone.length != 10)
	{
		producePrompt("Phone Number Must Include Area Code", "commentPhonePrompt", "red")
		return false;
	}
	if(!phone.match(/^[0-9]{10}$/))
	{
		producePrompt("Please Only Include Digits", "commentPhonePrompt", "red");
		return false;
	}
	
	producePrompt("Valid Number", "commentPhonePrompt", "green");
	return true;
}

function validateEmail()
{
	var email = document.getElementById("commentEmail").value;
	
	if(email.length == 0)
	{
		producePrompt("Email is Required", "commentEmailPrompt", "red");
		return false;
	}
	if(!email.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/))
	{
		producePrompt("Email Address Invalid", "commentEmailPrompt", "red");
		return false;
	}
	
	producePrompt("Valid Email Address", "commentEmailPrompt", "green");
	return true;
}

function validateComment()
{
	var comment = document.getElementById("commentMessage").value;
	var required = 30;
	var left = required - comment.length;
	
	if(left > 0)
	{
		producePrompt(left + " Characters Required", "commentMessagePrompt", "red");
		return false;
	}
	
	producePrompt("Valid Comment", "commentMessagePrompt", "green");
	return true;
}

function jsShow(id)
{
	document.getElementById(id).style.display = "block";
}

function jsHide(id)
{
	document.getElementById(id).style.display = "none";
}


function producePrompt(message, promptLocation, color)
{
	document.getElementById(promptLocation).innerHTML = message;
	document.getElementById(promptLocation).style.color = color;	
}

function validateCommentForm()
{
	if(!validateName() || !validatePhone() || !validateEmail() || !validateComment())
	{

	}
	else
		submitCommentForm();
}

/* Initiates countdown. */
function updateTimer(deadline){
	var time = deadline - new Date();
	return{
		'days': Math.floor( time/(1000*60*60*24) ),
		'hours': Math.floor( (time/(1000*60*60)) % 24 ),
		'minutes': Math.floor( time/(1000*60) % 60 ),
		'seconds': Math.floor( time/(1000) % 60 ),
		'total' : time
	};
}

function animateClock(span){
	span.className = "turn";
	setTimeout(function(){
		span.className = "";
	}, 700);
}

function startTimer(id, deadline){
	var timerInterval = setInterval(function(){
		var clock = document.getElementById(id);
		var timer = updateTimer(deadline);
		
	clock.innerHTML = '<span>' + timer.days + '</span>'
					+ '<span>' + timer.hours + '</span>'
					+ '<span>' + timer.minutes + '</span>'
					+ '<span>' + timer.seconds + '</span>';
					
	// Animations.
		var spans = clock.getElementsByTagName("span");
		animateClock(spans[3]);
		if(timer.seconds == 5) animateClock(spans[2]);
		if(timer.minutes == 59 && timer.seconds == 59) animateClock(spans[1]);
		if(timer.hours == 23 && timer.minutes == 59 && timer.seconds ==59) animateClock(spans[0]);
					
	// Checks for the end of the timer.
	if(timer.total < 1){
		clearInterval(timerInterval);
		clock.innerHTML = '<span>0</span><span>0</span><span>0</span><span>0</span>';
	}
	
	}, 1000);
}

window.onload = function(){
	var deadline = new Date("August 15, 2017 17:15:00");
	startTimer("clock", deadline);
};
