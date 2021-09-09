//SCROLL REVEAL
window.sr = ScrollReveal({ reset: false });

	//SLIDE UP
	sr.reveal(".portfolio_image, .portfolio_information, .grid_segments, .featured, .more_projects, .about, .contact", {
		delay: 50, useDelay: 'onload', origin: 'bottom', distance: '100%', duration: 1500
	});

	//ZOOM
	sr.reveal(".intro, .about_image", {
		delay: 20, useDelay: 'onload', scale: 0.9, duration: 1000
	});

	//SLIDE LEFT
	sr.reveal(".previous_project", {
		delay: 100, useDelay: 'onload', origin: 'left', distance: '100%', duration: 1500
	});

	//SLIDE RIGHT
	sr.reveal(".next_project", {
		delay: 100, useDelay: 'onload', origin: 'right', distance: '100%', duration: 1500
	});


//NAVBAR SHRINK
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
    document.getElementById("navbar").style.padding = "0.5em 0em 0.5em 0em";
    document.getElementById("logo").style.fontSize = "0.7em";
    document.getElementsByClassName("label").style.lineHeight = "3em"; //HOW DO I ADJUST THE HAMBURGER MENU LINE-HEIGHT SO IT ALIGNS WITH THE LOGO?

  } else {
    document.getElementById("navbar").style.padding = "5em 0em 2em 0em";
    document.getElementById("logo").style.fontSize = "1em";
  }
}