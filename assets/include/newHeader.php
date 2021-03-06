<header>
<style>
.nav_toggle {
    display: block;
    position: relative;
    width: 1.75rem;
    height: 1.5rem;
}
.nav_toggle i {
    display: block;
    width: 100%;
    height: 2px;
    background-color: #333;
    position: absolute;
    transition: transform .5s, opacity .5s;
}
.nav_toggle i:nth-child(1) {
    top: 0;
}
.nav_toggle i:nth-child(2) {
    top: 0;
    bottom: 0;
    margin: auto;
}
.nav_toggle i:nth-child(3) {
    bottom: 0;
}
.nav_toggle.show i:nth-child(1) {
    transform: translateY(10px) rotate(-45deg);
}
.nav_toggle.show i:nth-child(2) {
    opacity: 0;
}
.nav_toggle.show i:nth-child(3) {
    transform: translateY(-12px) rotate(45deg);
}
nav {
    position: fixed;
    top: 3rem;
    left: 0;
    bottom: 0;
    padding: 1rem;
    opacity: 0;
	width: 20%;
    visibility: hidden;
    transition: opacity .5s, visibility .5s;
}
.nav.show {
    opacity: 1;
    visibility: visible;
	background-color: #fff;
}

</style>
<div class="nav-background">
<span class="nav_toggle">
    <i></i>
    <i></i>
    <i></i>
</span>
<nav class="nav">
    <ul class="nav_menu_ul">
        <li class="nav_menu_li"><a href="#">TOP</a></li>
        <li class="nav_menu_li"><a href="#">ABOUT</a></li>
        <li class="nav_menu_li"><a href="#">BLOG</a></li>
        <li class="nav_menu_li"><a href="#">CONTACT</a></li>
    </ul>
</nav>
</div>
<script>
$(function(){
	$('.nav_toggle').on('click', function () {
		$('.nav_toggle, .nav').toggleClass('show');
	});
})
</script>
</header>