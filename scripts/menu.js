var isShowing = false;
var menuItem = null;

function show(id){
	hide();
	console.log("Show");
	menuItem = document.getElementById(id);
	if(menuItem != null){
		menuItem.style.visibility = 'visible';
		isShowing = true;
	}
}

function hide(){
	if (isShowing) 
		menuItem.style.visibility = 'hidden';
	isShowing = false;
}