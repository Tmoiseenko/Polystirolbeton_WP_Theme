
// poster frame click event
$(document).on('click','.js-videoPoster',function(ev) {
    ev.preventDefault();
    var $poster = $(this);
    var $wrapper = $poster.closest('.js-videoWrapper');
    videoPlay($wrapper);
});

// play the targeted video (and hide the poster frame)
function videoPlay($wrapper) {
    var $iframe = $wrapper.find('.js-videoIframe');
    var src = $iframe.data('src');
    // hide poster
    $wrapper.addClass('videoWrapperActive');
    // add iframe src in, starting the video
    $iframe.attr('src',src);
}

// stop the targeted/all videos (and re-instate the poster frames)
function videoStop($wrapper) {
    // if we're stopping all videos on page
    if (!$wrapper) {
        var $wrapper = $('.js-videoWrapper');
        var $iframe = $('.js-videoIframe');
        // if we're stopping a particular video
    } else {
        var $iframe = $wrapper.find('.js-videoIframe');
    }
    // reveal poster
    $wrapper.removeClass('videoWrapperActive');
    // remove youtube link, stopping the video from playing in the background
    $iframe.attr('src','');
}



$('[data-toggle="tooltip"]').tooltip()

$('.choose-city').on('click', function(){
    var cur_city = $(this).children()[0];
    var choose_text = $(this).children()[1];
    $('.city-current').html(cur_city.innerHTML);
    $('.geo-choose-city').html(choose_text.innerHTML);
});

//слайдер товара 1
var sccetslideer=0
var slide1Count = ($('.slider-1-line-smal').length * 100) - 100;
var slide2Count = ($('.slider-2-line-smal').length * 100) - 100;

$('.right-btn-sl1').on('click',function(){
    sccetslideer=sccetslideer+100
    if(sccetslideer>slide1Count){
        sccetslideer=slide1Count;
    }
    $('.slider1-line').css({
        'margin-left':-sccetslideer+'%'
    });
});

$('.left-btn-sl1').on('click',function(){
    sccetslideer=sccetslideer-100
    if(sccetslideer<0){
        sccetslideer= 0;
    }
    $('.slider1-line').css({
        'margin-left':-sccetslideer+'%'
    });
});

$(".slider-1").swipe( {
    swipeLeft:leftSwipe,
    swipeRight:rightSwipe,
    threshold:0
});
function rightSwipe(event){
    sccetslideer=sccetslideer-100
    if(sccetslideer<0){
        sccetslideer= 0;
    }
    $('.slider1-line').css({
        'margin-left':-sccetslideer+'%'
    });
}
function leftSwipe(event){
    sccetslideer=sccetslideer+100
    if(sccetslideer>slide1Count){
        sccetslideer=slide1Count;
    }
    $('.slider1-line').css({
        'margin-left':-sccetslideer+'%'
    });
}

//слайдер товара 2
var sccetslideer2=0
$('.right-btn-sl2').on('click',function(){
    sccetslideer2=sccetslideer2+100
    if(sccetslideer2>slide2Count){
        sccetslideer2=slide2Count;
    }
    $('.slider2-line').css({
        'margin-left':-sccetslideer2+'%'
    });
});

$('.left-btn-sl2').on('click',function(){
    sccetslideer2=sccetslideer2-100
    if(sccetslideer2<0){
        sccetslideer2= 0;
    }
    $('.slider2-line').css({
        'margin-left':-sccetslideer2+'%'
    });
});


$(".slider-2").swipe( {
    swipeLeft:leftSwipe1,
    swipeRight:rightSwipe1,
    threshold:0
});
function rightSwipe1 (event){
    sccetslideer2=sccetslideer2-100
    if(sccetslideer2<0){
        sccetslideer2= 0;
    }
    $('.slider2-line').css({
        'margin-left':-sccetslideer2+'%'
    });
}
function leftSwipe1 (event){
    sccetslideer2=sccetslideer2+100
    if(sccetslideer2>slide2Count){
        sccetslideer2=slide2Count;
    }
    $('.slider2-line').css({
        'margin-left':-sccetslideer2+'%'
    });
}



// open sidebar
$('.mmnav2').on('click',function(){
	if(window.matchMedia('(max-width: 800px)').matches){
		$('.site-bar').css({
		'margin-left':'0'
	});
	$('.hjiiii').css({
		'display':'block'
	});
	
	}
	
});


$('.ic-mobmeny').on('click',function(){
	if(window.matchMedia('(max-width: 800px)').matches){
		$('.site-bar').css({
		'margin-left':'0'
	});
	$('.hjiiii').css({
		'display':'block'
	});
	
	}
	
});


if(window.matchMedia('(min-width: 555px)').matches){
$('.close-ic').on('click',function(){
	$('.hjiiii').css({
		'display':'none'
	});
	$('.site-bar').css({
		'margin-left':'-40%'
	});
	
});
}
else{
	$('.close-ic').on('click',function(){
	$('.hjiiii').css({
		'display':'none'
	});
	$('.site-bar').css({
		'margin-left':'-80%'
	});
	$('.icarowaside').css({
		'transform': 'rotate(180deg)'
	});
});
}


var jjjg=0;
$('.box-pokaza').on('click',function(){
	jjjg=jjjg+1;
	if(jjjg>1){
		jjjg=0;
		$('.sg215gsg').css({
			'background': '#adadad'
		});
		$('.conteiner-aside-categor').hide(600);
		$('.plasic').css({
			'transform': 'rotate(0deg)'
		});
	}
	else{
		$('.sg215gsg').css({
			'background': '#EE9503'
		});
		$('.plasic').css({
			'transform': 'rotate(45deg)'
		});
		$('.conteiner-aside-categor').show(600);
	}
	
	    
});

// поап звонка

$('.dfdff4').on('click',function(){
    $('.phoneabsolyte').css({
	    'display':'flex'
    });
});

$('.close-box-phone').on('click',function(){
    $('.phoneabsolyte').css({
	    'display':'none'
    });
});

// big photo

$(document).ready(function() { // Ждём загрузки страницы
	
	$(".frrr").click(function(){
       if(window.matchMedia('(min-width: 500px)').matches){
       	// Событие клика на маленькое изображение
	  	var img = $(this);	// Получаем изображение, на которое кликнули
		var src = img.attr('src'); // Достаем из этого изображения путь до картинки
		$("body").append("<div class='popup'>"+ //Добавляем в тело документа разметку всплывающего окна
						 "<div class='popup_bg'></div>"+ // Блок, который будет служить фоном затемненным
						 "<img src="+src+" class='popup_img' />"+ // Само увеличенное фото
						 "</div>"); 
		$(".popup").fadeIn(800); // Медленно выводим изображение
		$(".popup_bg").click(function(){	// Событие клика на затемненный фон	   
			$(".popup").fadeOut(800);	// Медленно убираем всплывающее окно
			setTimeout(function() {	// Выставляем таймер
			  $(".popup").remove(); // Удаляем разметку высплывающего окна
			}, 800);
		});
       }
		
	});
	
});


// bau clic open
$('.buy-click').on('click',function(){
	$('.one-clickbuy').css({
		'display':'block'
	});
});
$('.line-closebay').on('click',function(){
	$('.one-clickbuy').css({
		'display':'none'
	});
});




var wrap = $('.columnaside'); // все элементы с классом на странице
wrap.find('h3').click(function(){
    // здесь нужно идти отродителя с классом wrap

  var ghg1= $(this).closest('.columnaside').find('h3');
   

    $(this).closest('.columnaside').find('.conteiner-aside-categor').slideToggle(1000,function(){
     if ($(this).is(':visible')){
       ghg1.find('.plasic').css({
       	
       	 'transform':' rotate(45deg)'
       });
    
}
    else{
    	ghg1.find('.plasic').css({
     
       	 'transform':' rotate(0deg)'
       });
           
    }
    });
});



// прокрутка плавная
jQuery(function($){


$(".geo-metka-icon").click(function () { 
  $(".address-select").toggleClass('show');
});
$(".city-ok-button").click(function () { 
  $(".address-select").removeClass('show');
});


$(".contacti .phonebox").click(function () { 
  $(".phoneabsolyte").addClass('show');
});
$(".close-box-phone").click(function () { 
  $(".phoneabsolyte").removeClass('show');
});


$(".city-select-link").click(function () { 
  $(".select-overlay").addClass('show');
  $(".city-select").addClass('show');
});
$(".city-select .close-link").click(function () { 
  $(".select-overlay").removeClass('show');
  $(".city-select").removeClass('show');
});
$(".cities-list a").click(function () { 
  $(".select-overlay").removeClass('show');
  $(".city-select").removeClass('show');
});






$("#psd-side .hide-click").click(function () { 
  $(this).parent().children( ".content").toggleClass('show', 1000, "easeInOutQuad");
});
$("#psd-side .transparent-click").click(function () { 
  $(this).parent().children( ".content").toggleClass('transparent', 1000, "easeInOutQuad");
});



$('.ic-mobmeny').on('click', function () {
	$('.desc-menu').toggle();
});
$('.mmnav2').on('click', function () {
		$('.desc-menu').toggle();
});
$('.mmnav2').on('click', function () {
		$('.sub-menu').parent().hover( function () {
			$('.sub-menu').toggle();
		});
});

$('.selected-address').hide();
$('.val-0').show();

$('#check-city').on('change', function () {
    var val = ".val-" + $(this).val();
    console.log(val);
    $('.selected-address').hide();
    $(val).show();
})




$('a[href*="#"]').on('click.smoothscroll', function( e ){
var hash    = this.hash, _hash   = hash.replace(/#/,''), theHref = $(this).attr('href').replace(/#.*/, '');
if( theHref && location.href.replace(/#.*/,'') != theHref ) return;
var $target = _hash === '' ? $('body') : $( hash + ', a[name="'+ _hash +'"]').first();
if( ! $target.length ) return;
e.preventDefault();
$('html, body').stop().animate({ scrollTop: $target.offset().top - 0 }, 1300, 'swing', function(){
window.location.hash = hash;
});
});
});

jQuery(function($){
    var orderBonus = $('#order_bonus');
    document.cookie = "check_order_bonus="+orderBonus.prop('checked')+"; path=/; ";
    orderBonus.on('change', function () {
        document.cookie = "check_order_bonus="+orderBonus.prop('checked')+"; path=/; ";
    });
});

$('#brick-size').on('click', function () {
    var imgurl = 'http://polystirolbeton.loc/wp-content/themes/polystirolbeton/img/bricks/kirpich_'+$(this).val()+'.jpg';
    $('#kirpich-img').attr('src', imgurl);

});

$('#brick-brickwork').on('click', function () {
    var imgurl = 'http://polystirolbeton.loc/wp-content/themes/polystirolbeton/img/bricks/'+$(this).val()+'.jpg';
    $('#brickwork-img').attr('src', imgurl);
});

$('#bricks-frontons').on('click', function () {
    var imgurl = 'http://polystirolbeton.loc/wp-content/themes/polystirolbeton/img/bricks/'+$(this).val()+'.jpg';
    $('#frontons-img').attr('src', imgurl);
});

$('#bricks-fronton').on('click', function () {
    var check = $('#bricks-fronton:checked');
    if(check.length === 1){
        $('#frontons-box').css('display', 'flex');
    }else {
        $('#frontons-box').hide();
    }
});

$('#bricks-windoors').on('click', function () {
    var check = $('#bricks-windoors:checked');
    if(check.length === 1){
        $('#windoor-box').css('display', 'flex');
    }else {
        $('#windoor-box').hide();
    }
});

$('#bricks-aperture').on('click', function () {
    var check = $('#bricks-aperture:checked');
    console.log(check);
    if(check.length === 1){
        $('#aperture-box').css('display', 'flex');
    }else {
        $('#aperture-box').hide();
    }
});

