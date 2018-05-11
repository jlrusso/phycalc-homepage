window.onbeforeunload = function () {
	window.scrollTo(0, 0);
}
$(document).ready(function(){
	$("#get-started-btn").click(function() {
    $('html,body').animate({
        scrollTop: $("#featured-topic-heading").offset().top - 60
    }, 'slow');
	});

	$("#contact-btn").click(function(){
		$('html,body').animate({
			scrollTop: $("#contact-container").offset().top
		}, 'slow')
	})

	$("#vert-contact-btn").click(function(){
		$("html, body").animate({
			scrollTop: $("#contact-container").offset().top
		}, "slow")
	})

	$("#calculator-btn").click(function(){
		$("html, body").animate({
			scrollTop: $("#calculator-container").offset().top - 60
		}, "slow");
	})

	$("#vert-calculator-btn").click(function(){
		$("html, body").animate({
			scrollTop: $("#calculator-container").offset().top - 60
		}, "slow");
	})

	$("#conversion-btn").click(function(){
		$('html, body').animate({
			scrollTop: $("#conversion-container").offset().top - 60
		}, 'slow')
	})

	$("#vert-conversion-btn").click(function(){
		$("html, body").animate({
			scrollTop: $("#conversion-container").offset().top - 60
		}, "slow")
	})

	$("#go-up-btn").click(function(){
		$("html, body").animate({
			scrollTop: 0
		}, "slow")
	});

	$(window).scroll(function(){
		if($(window).scrollTop() > 600){
			$("#go-up-container").css("opacity", "1");
		} else {
			$("#go-up-container").css("opacity", "0");
		}
	})

});

// window.onload = function(){
// 	var preLoader = document.getElementById("pre-loader");
// 			imageOne = document.getElementsByClassName("load-image")[3];
// 			imageTwo = document.getElementsByClassName("load-image")[2];
// 			imageThree = document.getElementsByClassName("load-image")[1];
// 			imageFour = document.getElementsByClassName("load-image")[0];
// 	setTimeout(() =>{
// 		imageOne.classList.add("rotate-y");
// 	}, 400);
// 	setTimeout(() =>{
// 		imageTwo.classList.add("rotate-x");
// 	}, 800);
// 	setTimeout(() =>{
// 		imageThree.classList.add("rotate-y");
// 	}, 1200);
// 	setTimeout(() =>{
// 		imageFour.classList.add("rotate-x");
// 	}, 1600);
// 	setTimeout(() => {
// 		preLoader.style.top = "-100vh";
// 	}, 2000);
// 	setTimeout(() => {
// 		preLoader.style.display = "none";
// 	}, 2500);
// }

var navBar = document.getElementsByTagName("nav")[0],
		searchSection  = document.getElementById("search-section"),
		searchBar = document.getElementById("search-bar"),
		closeSearchBtn = document.getElementById("close-search-btn"),
		caseList = document.getElementById("search-case-list"),
		banner = document.getElementsByClassName("banner")[0],
		hiwSection = document.getElementsByClassName("how-it-works-section")[0],
		mainContent = document.getElementById("main-content");

searchBar.addEventListener("input", showList);

function showList() {
	if (searchBar.value.length > 0){
		caseList.classList.add('show');
		showAnchors();
	} else {
		caseList.classList.remove('show');
	}
}
function showAnchors(){
	var inputValue = searchBar.value.toUpperCase(),
	 		anchors = caseList.getElementsByTagName('a'),
	 		anchorsLength = anchors.length,
			anchorCounter;
	for (var anchorCounter = 0; anchorCounter < anchorsLength; anchorCounter++){
		let a = anchors[anchorCounter];
		if (a.textContent.toUpperCase().indexOf(inputValue) > -1){
			anchors[anchorCounter].style.display = "";
		} else {
			anchors[anchorCounter].style.display = "none";
		}
	}
}

document.onclick = (e) => {
	if(caseList.classList.contains("show")){
		if(!e.target.matches("#search-bar")){
			caseList.classList.remove("show");
		}
	}
}

/*--- Toggle Hamburger Menu ---*/
var icon = document.getElementById("icon");
var clickBox = document.getElementById("click-box");
var verticalNav = document.getElementsByClassName("vertical-nav")[0];

clickBox.addEventListener("click", function(){
	icon.classList.toggle("active");
	verticalNav.classList.toggle("show-vertical-nav");
})

window.onclick = function(e){
	if(window.innerWidth < 650){
		if(!e.target.matches("#click-box")){
			if(icon.classList.contains("active")){
				icon.classList.remove("active");
				verticalNav.classList.remove("show-vertical-nav");
			}
		}
	}
}

/*--- Conversion Table JS ---*/
var userInput = document.getElementById('unit-input-field'),
    unitOutput = document.getElementById('unit-output-field'),
		unitC = document.getElementById('unit-converter');

if(userInput){
	userInput.addEventListener('input', convertUnit);
}
if(unitC){
	unitC.addEventListener('change', convertUnit);
}

function convertUnit() {
	if (userInput.value < 0){
		alert("Please enter a value greater or equal to zero");
		userInput.value = "";
	} else {
		switch(true) {
			case document.getElementById('millimetersToCentimeters').selected:
				unitOutput.value = (userInput.value / 10) + " cm";
				break;
			case document.getElementById('centimetersToMillimeters').selected:
				unitOutput.value = (userInput.value * 10) + " mm";
				break;
			case document.getElementById('centimetersToMeters').selected:
				unitOutput.value = (userInput.value / 100) + " m";
				break;
			case document.getElementById('metersToCentimeters').selected:
				unitOutput.value = (userInput.value * 100) + " cm";
				break;
			case document.getElementById('metersTokilometers').selected:
				unitOutput.value = (userInput.value / 1000) + " km";
				break;
			case document.getElementById('kilometersToMeters').selected:
				unitOutput.value = (userInput.value * 1000) + " m";
				break;
			case document.getElementById('metersToMiles').selected:
				unitOutput.value = (userInput.value / 1609.34) + " mi";
				break;
			case document.getElementById('milesToMeters').selected:
				unitOutput.value = (userInput.value * 1609.34) + " m";
				break;
			case document.getElementById('milesToKilometers').selected:
				unitOutput.value = (userInput.value * 1.60934) + " km";
				break;
			case document.getElementById('kilometersToMiles').selected:
				unitOutput.value = (userInput.value * 0.621371) + " mi";
				break;
			case document.getElementById('feetToYards').selected:
				unitOutput.value = (userInput.value / 3) + " yds";
				break;
			case document.getElementById('yardsToFeet').selected:
				unitOutput.value = (userInput.value * 3) + " ft";
				break;
			case document.getElementById('feetToMeters').selected:
				unitOutput.value = (userInput.value * 0.3048) + " m";
				break;
			case document.getElementById('metersToFeet').selected:
				unitOutput.value = (userInput.value * 3.28084) + " ft";
				break;
			case document.getElementById('centimetersToInches').selected:
				unitOutput.value = (userInput.value * 0.393701) + " in";
				break;
			case document.getElementById('inchesToCentimeters').selected:
				unitOutput.value = (userInput.value * 2.54) + " cm";
				break;
			case document.getElementById('milligramsToGrams').selected:
				unitOutput.value = (userInput.value / 1000) + " g";
				break;
			case document.getElementById('gramsToMilligrams').selected:
				unitOutput.value = (userInput.value * 1000) + " mg";
				break;
			case document.getElementById('gramsToKilograms').selected:
				unitOutput.value = (userInput.value / 1000) + " kg";
				break;
			case document.getElementById('kilogramsToGrams').selected:
				unitOutput.value = (userInput.value * 1000) + " g";
				break;
			case document.getElementById('poundsToKilograms').selected:
				unitOutput.value = (userInput.value / 2.20462) + " kg";
				break;
			case document.getElementById('kilogramsToPounds').selected:
				unitOutput.value = (userInput.value * 2.20462) + " lbs";
				break;
			case document.getElementById('squareMetersToKilometersSquared').selected:
				unitOutput.value = (userInput.value / 1000000).toExponential(2) + " km²";
				break;
			case document.getElementById('kilometerSquaredToSquareMeters').selected:
				unitOutput.value = (userInput.value * 1000000).toExponential(2) + " m²";
				break;
		}
	}
}
