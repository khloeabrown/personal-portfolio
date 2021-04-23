var btn = document.getElementById("btn__scroll-top");
btn.addEventListener("click", scrollTopFunc);
function scrollTopFunc(){
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}