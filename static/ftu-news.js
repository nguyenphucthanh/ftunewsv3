// JavaScript Document
var curSlide, nSlide, widSlide;
window.onload = function() {
	curSlide = 0;
	nSlide = 5;
	widSlide = document.getElementById("slides-container").getElementsByTagName("div").item(0).clientWidth+1;
}
function prevSlide() {
	if (curSlide==0) return;
	var s = document.getElementById("slides-container");
	curSlide--;
	s.style.transform = 'translateX(' + curSlide*(-widSlide) + 'px)';
}
function nextSlide() {
	if (curSlide+1==nSlide) return;
	var s = document.getElementById("slides-container");
	curSlide++;
	s.style.transform = 'translateX(' + (curSlide*(-widSlide)-1) + 'px)';
}

