//function for sliding navbar
const navSlide = () =>{
	const btnNav = document.querySelector(".btn-nav");
	const nav = document.querySelector(".main-nav");
	const navLinks = document.querySelectorAll('.main-nav li');
	const eventZone = document.querySelectorAll('.eventZone');

	//link animations
	const animateLinks = ()=>{
		navLinks.forEach((link, index)=>{
			if (link.style.animation){
				link.style.animation = '';
			}else{
				link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + .5}s`;
			}
		});
	}

	eventZone.forEach(i => i.addEventListener('click', () => {	
		if (window.innerWidth < 960){
			//toggle nav
			nav.classList.toggle('nav-active');
			//nav button animation
			btnNav.classList.toggle('toggle');	
			animateLinks();
		}
	}));
	//escape functionality
	document.addEventListener('keyup', (e)=>{
		if(e.key === 'Escape' && nav.classList.contains('nav-active')){
			nav.classList.toggle('nav-active');
			btnNav.classList.toggle('toggle');	
			animateLinks();
		}
	});
}
//function for modal images
const modal = () =>{
	const img = document.querySelectorAll(".gallery img");
	const body = document.querySelector("body");
	const btnClose = document.querySelector(".btn-close");

	//toggle modal image
	function toggleModal(e){
		if(e.type !== 'click' && e.key !== 'Enter') return;
		this.classList.toggle('modalImg');
		nonSelectedIMG = document.querySelectorAll(".gallery img:not(.modalImg)");
		//if 1 picture is transformed, make the other 3 unclickable
		if (nonSelectedIMG.length == 3){
			nonSelectedIMG.forEach(i => i.classList.add('unclickable'));
			btnClose.classList.add('btn-active');
		//if no pictures are transformed, make them all clickable
		}else if (nonSelectedIMG.length == 4){
			nonSelectedIMG.forEach(i => i.classList.remove('unclickable'));
			btnClose.classList.remove('btn-active');
		}
	}
	//close modal image
	function closeAll(e){
		if(e.type !== 'click' && e.key !== 'Escape') return;
		img.forEach(i => i.classList.remove('modalImg'));
		img.forEach(i => i.classList.remove('unclickable'));
		btnClose.classList.remove('btn-active');
	}

	img.forEach( i => i.addEventListener('click', toggleModal));
	img.forEach( i => i.addEventListener('keyup', toggleModal));
	btnClose.addEventListener('click', closeAll);
	document.addEventListener('keyup', closeAll);

}
//function for message upon newsletter signup	
const signupMsg = ()=>{
	if (window.location.href === "http://localhost/wp/?signup=success"){
		setTimeout(()=>{
			alert("Thank you for subscribing to our newsletter!");
			window.location.href = "http://localhost/wp/";
		},500);
	}
}
//function to give body no transitions shortly after window resize
const transitionTimeout = () =>{
	const classes = document.body.classList;
	
	let timer = 0;
	window.addEventListener('resize', function () {
	    if (timer) {
	        clearTimeout(timer);
	        timer = null;
	    }else{
	        classes.add('stop-transitions');
	    }
	    timer = setTimeout(() => {
	        classes.remove('stop-transitions');
	        timer = null;
	    }, 100);
	});
}

transitionTimeout();
signupMsg();
navSlide();
modal();






			