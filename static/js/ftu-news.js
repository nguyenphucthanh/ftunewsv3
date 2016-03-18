// JavaScript Document

var heiPic = 0;
function setHeight() {
	heiPic = window.innerHeight-30;
	document.getElementById("big-pic").style.height = heiPic+"px";
}
window.onload = setHeight;
window.onresize = setHeight;

var Hou, Min, AP, Dat, Mon, Yea;
var aMon = ["một","hai","ba","bốn","năm","sáu","bảy","tám","chín","mười","mười một","mười hai"];
function updateTime() {
	$('.index-time').innerHTML = Hou + " : " + Min + " " + AP;
	$('.index-dat').innerHTML = Dat;
	$('.index-month').innerHTML = "tháng<br>"+aMon[Mon];
	$('.index-year').innerHTML = Yea;
}
updateTime();
setInterval(updateTime, 1000);

// menu effects
$('.ShowSideMenu').click(function() {
	$('.index-sidemenu').css('transform', 'translateX(0px)');
});
$('.HideSideMenu').click(function() {
	$('.index-sidemenu').css('transform', 'translateX(-256px)');
});