timeLeft = 15;

function countdown() {
	timeLeft--;
	document.getElementById("seconds").innerHTML = String( timeLeft );
	if (timeLeft > 0) {
		setTimeout(countdown, 1500);
	}
};

setTimeout(countdown, 1500);