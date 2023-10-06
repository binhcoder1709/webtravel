let button = document.getElementById('btn-drop');
let button_drop = document.getElementById('function-dropdown-content');
// var on = 	button_drop.style.display = "flex";
button.addEventListener('click', () =>
{
	if(button_drop.style.display==="flex")
	{
		button_drop.style.display="none";
	}
	else
	{
		button_drop.style.display="flex";
	}
});