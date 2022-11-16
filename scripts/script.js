var button_menu = document.getElementById("button_menu");
var menu_list = document.getElementsByClassName("menu_list")[0];
var main = document.getElementsByClassName("main")[0];

a = 0;

button_menu.onclick = function(){
	if (a == 0)
	{
		menu_list.style.display = "block";
		button_menu.classList.add("active");
		a = 1;
	}
	else
	{
		menu_list.style.display = "none";
		button_menu.classList.remove("active");
		a = 0;
	}
}

main.onclick = function() {
	if (a == 1)
	{
		menu_list.style.display = "none";
		button_menu.classList.remove("active");
		a = 0;
	}
}