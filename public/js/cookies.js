var msgCookies = document.getElementById('modal-cookies');
	
function aceitar() {
	document.cookie = "cookie_consent_user_accepted=true; expires=Wed, 31 Dec 2025 12:00:00 UTC; path=/;";
	document.cookie = "cookie_consent_level=strictly-necessary; expires=Wed, 31 Dec 2025 12:00:00 UTC; path=/;";
	msgCookies.classList.remove('mostrar');
}

function getCookie(name) {
	const value = `; ${document.cookie}`;
	const parts = value.split(`; ${name}=`);
	if (parts.length === 2) return parts.pop().split(';').shift();
	return null;
}

if (getCookie("cookie_consent_user_accepted") === "true") {
	msgCookies.classList.remove('mostrar');
} else {
	msgCookies.classList.add('mostrar');
}

