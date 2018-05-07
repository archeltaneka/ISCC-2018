<nav class="navOverlay">
	<div class="navLinks">	
		<a href="/">home</a>
		<a href="/about.php">about</a>
		<a href="/competition.php">competition</a>
		<a href="/partners.php">partners</a>
		<a href="/contact.php">contact</a>
	</div>
</nav>
<div class="navTrigger">
	<button class="hamburger hamburger--collapse" onclick="toggleNav()" id="trigger">
		<span class="hamburger-box">
			<span class="hamburger-inner"></span>
		</span>
	</button>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
<script>
	done = true;
	scroll = true;
	var keys = {32:1, 33: 1, 34: 1, 35: 1, 36: 1, 37: 1, 38: 1, 39: 1, 40: 1};
	function preventDefault(e) {
		e = e || window.event;
		if (e.preventDefault){
			e.preventDefault();
		}
		e.returnValue = false;  
	}
	function preventDefaultForScrollKeys(e) {
		if (keys[e.keyCode]) {
			preventDefault(e);
			return false;
		}
	}
	function disableScroll() {
		if (window.addEventListener){
			window.addEventListener('DOMMouseScroll', preventDefault, false);
		}
		window.onwheel = preventDefault;
		window.onmousewheel = document.onmousewheel = preventDefault;
		window.ontouchmove  = preventDefault;
		document.onkeydown  = preventDefaultForScrollKeys;
	}
	function enableScroll() {
		if (window.removeEventListener){
			window.removeEventListener('DOMMouseScroll', preventDefault, false);
		}
		window.onmousewheel = document.onmousewheel = null; 
		window.onwheel = null; 
		window.ontouchmove = null;  
		document.onkeydown = null;  
	}
	function toggleNav(){
		if(done){
			document.getElementById("trigger").classList.toggle("is-active");
			if(scroll){
				disableScroll();
				scroll = false;
			} else {
				enableScroll();
				scroll = true;
			}
			done = false;
			overlay = $(".navOverlay");
			links = $(".navLinks");
			event.stopPropagation();
			if(overlay.hasClass("active")){
				overlay.fadeOut({ duration: 500, queue: false });
				links.css({"top": "75px"});
			} else{
				overlay.fadeIn({ duration: 500, queue: false });
				links.css({"top": "100px"});
			}
			overlay.toggleClass("active");
			setTimeout(function(){ done = true; }, 500);
		}
	}
</script>