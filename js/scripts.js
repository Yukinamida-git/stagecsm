// Mobile Nav Drawer Animation
function openNav() {
	document.getElementById('nav').style.height = 'auto';
    document.getElementById('nav-open').style.display = 'none';
	document.getElementById('nav-close').style.display = 'block';
}
function closeNav() {
	document.getElementById('nav').style.height = '0';
	document.getElementById('nav-open').style.display = 'block';
	document.getElementById('nav-close').style.display = 'none';
}
