// slider
jQuery(function($){

		$(document).ready(function(){
		$('.main-top').not('.slick-initialized').slick({
			autoplay: true,
			autoplaySpeed: 2500,
			dots: true,
			arrows: false,
			fade: true
		});
	});

});

// Select main
var staffsel = function () {
	var staffselHeader = document.querySelectorAll('.staffsel__header');
	var staffselItem = document.querySelectorAll('.staffsel__item');

	staffselHeader.forEach( item=> {
		item.addEventListener('click', selectToggle)
	});

	staffselItem.forEach( item=> {
		item.addEventListener('click', staffselChoose)
	});

	function selectToggle() {
		this.parentElement.classList.toggle('is-active');
	}

	$(".staffsel__item").click(function(e) {
		e.preventDefault();
		$(".staffsel__item").removeClass('hidden');
		$(this).addClass('hidden');
})

	function staffselChoose() {
		var text = this.innerText,
			 staffsel = this.closest('.staffsel'),
			 currentText = this.closest('.staffsel').querySelector('.staffsel__current');
		currentText.innerText = text;
		staffsel.classList.remove('is-active');
	}
};

staffsel();

// Position select

var positionsel = function () {
	var positionselHeader = document.querySelectorAll('.positionsel__header');
	var positionselItem = document.querySelectorAll('.positionsel__item');

	positionselHeader.forEach( item=> {
		item.addEventListener('click', selectToggle)
	});

	positionselItem.forEach( item=> {
		item.addEventListener('click', positionselChoose)
	});

	function selectToggle() {
		this.parentElement.classList.toggle('is-active');
	}

	$(".positionsel__item").click(function(e) {
		e.preventDefault();
		$(".positionsel__item").removeClass('hidden');
		$(this).addClass('hidden');
})

	function positionselChoose() {
		var text = this.innerText,
			 positionsel = this.closest('.positionsel'),
			 currentText = this.closest('.positionsel').querySelector('.positionsel__current');
		currentText.innerText = text;
		positionsel.classList.remove('is-active');
	}
};

positionsel();

// Schedule select

var schedulesel = function () {
	var scheduleselHeader = document.querySelectorAll('.schedulesel__header');
	var scheduleselItem = document.querySelectorAll('.schedulesel__item');

	scheduleselHeader.forEach( item=> {
		item.addEventListener('click', selectToggle)
	});

	scheduleselItem.forEach( item=> {
		item.addEventListener('click', scheduleselChoose)
	});

	function selectToggle() {
		this.parentElement.classList.toggle('is-active');
	}

	$(".schedulesel__item").click(function(e) {
		e.preventDefault();
		$(".schedulesel__item").removeClass('hidden');
		$(this).addClass('hidden');
})

	function scheduleselChoose() {
		var text = this.innerText,
			 schedulesel = this.closest('.schedulesel'),
			 currentText = this.closest('.schedulesel').querySelector('.schedulesel__current');
		currentText.innerText = text;
		schedulesel.classList.remove('is-active');
	}
};

schedulesel();

// Resume select

var resumesel = function () {
	var resumeselHeader = document.querySelectorAll('.resumesel__header');
	var resumeselItem = document.querySelectorAll('.resumesel__item');

	resumeselHeader.forEach( item=> {
		item.addEventListener('click', selectToggle)
	});

	resumeselItem.forEach( item=> {
		item.addEventListener('click', resumeselChoose)
	});

	function selectToggle() {
		this.parentElement.classList.toggle('is-active');
	}

	$(".resumesel__item").click(function(e) {
		e.preventDefault();
		$(".resumesel__item").removeClass('hidden');
		$(this).addClass('hidden');
})

	function resumeselChoose() {
		var text = this.innerText,
			 resumesel = this.closest('.resumesel'),
			 currentText = this.closest('.resumesel').querySelector('.resumesel__current');
		currentText.innerText = text;
		resumesel.classList.remove('is-active');
	}
};

resumesel();

// Open forms on click

 $('.application').on('click', function(){
 	$('.form__application').toggle("swing");
 });
 $('.resume').on('click', function(){
 	$('.form__resume').toggle("swing");
 });

// Hiding the form by clicking on the screen

 jQuery(function($){
 	$(document).mouseup(function (e){ 
 		let div = $(".application,.form__application"); 
 		if (!div.is(e.target) 
 			&& div.has(e.target).length === 0) {
 			$('.form__application').hide("swing");
 		}
 	});
 });

 jQuery(function($){
 	$(document).mouseup(function (e){ 
 		let div = $(".resume,.form__resume"); 
 		if (!div.is(e.target) 
 		    && div.has(e.target).length === 0) {
 			$('.form__resume').hide("swing");
 		}
 	});
 });

//show submenu
var submenu = $('.submenu'),
    timeoutId;
$('.staff').hover(function(){
    clearTimeout(timeoutId);
    submenu.show("swing");
}, function(){
    timeoutId = setTimeout($.proxy(submenu,'hide'), 1000)
});
submenu.mouseenter(function(){
    clearTimeout(timeoutId); 
}).mouseleave(function(){
    submenu.hide("swing");
}); 


// Give current value


var btnapp = document.querySelector('input[name="submit"]');
var curpos = document.querySelector('.cur_pos');
var inppos = document.querySelector('input[name="user_position"]');
btnapp.addEventListener('click', function(){
	inppos.value = curpos.textContent;
})
var cursched = document.querySelector('.cur_sched');
var inpsched = document.querySelector('input[name="user_schedule"]');
btnapp.addEventListener('click', function(){
	inpsched.value = cursched.textContent;
})

var btnres = document.querySelector('input[name="submitres"]');
var ressel = document.querySelector('.res_sel');
var inpres = document.querySelector('input[name="user_positionsel"]');
btnres.addEventListener('click', function(){
	inpres.value = ressel.textContent;
})