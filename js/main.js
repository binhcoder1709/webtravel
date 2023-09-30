const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
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
})