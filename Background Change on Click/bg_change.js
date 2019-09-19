var element_id = document.getElementById("element_id");
var i;

element_id.addEventListener("click", function() {

  this.classList.toggle("new_bg_class");
	var current_item_sidebar = document.getElementsByClassName("new_bg_class");
	current[0].className = current[0].className.replace("new_bg_class", "");
      
	this.className += "new_bg_class";
});
