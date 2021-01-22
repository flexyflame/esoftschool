$(document).foundation();


window.onload = page_load();

function page_load() {
	var session_hidden = document.getElementById('session_hidden');
	var btn_logout = document.getElementById('btn_logout');

	if (session_hidden.value == 1) {
		btn_logout.classList.remove("hide");
	} else {
		btn_logout.classList.add("hide");
	}
}


