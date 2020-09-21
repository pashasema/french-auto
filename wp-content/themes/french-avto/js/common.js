$(function() {
  formSend();
  // youtube();
  // dropdown();
  // resizePopupImg();

  $('input[name=utm]').val(window.location);

  maskInput();

  map();

  popup();

  topBackgroundOwl();

  pricesOwl();

  openList();

  changeService();

  deleteHref();

  mobilemenu();

});

function maskInput(){
  $("input[type='tel']").mask("+7(999)999-99-99",{
    autoclear: false
  });
  jQuery.validator.addMethod("checkMask", function(value, element) {
    return /\+\d{1}\(\d{3}\)\d{3}-\d{2}-\d{2}/g.test(value) &&
    !/\+\d\((\d){3}\)\1{3}-\1{2}-\1{2}/g.test(value);
  });
}

function mobilemenu(){
  $( ".menu-toggle" ).on( "click", function(e) {
    e.preventDefault();
    $(this).toggleClass("active")
    $( "#primary-menu" ).toggleClass("active");

    if ( $("#primary-menu").hasClass('active') ) {

    } else {

    }
  });
}

function deleteHref(){
  $("a[href*='uslugi-i-czeny']").click(function(e){
    e.preventDefault();
  })
  $('.popup-commercial__list-wrap-link').click(function(e){
    e.preventDefault();
  })
}

function changeService(){
  $( ".services-wrap-btn__item" ).click(function(e) {
    e.preventDefault();
    lastItem=$( ".services-wrap-btn__item.active").data('count');
    newItem = (e.target.dataset.count);

    $( ".services-wrap-btn__item" ).removeClass('active');
    $(e.target).addClass('active');
    console.log("последлний элемент: " + lastItem);
    console.log("новый элемент: " + newItem);

    $('.services-content--'+ lastItem ).fadeOut('fast', function() {
      $('.services-content--'+ lastItem ).removeClass('active');
      $('.services-content--'+ newItem ).fadeIn('slow', function() {
        $('.services-content--'+ newItem ).addClass('active');
      })
    });
  })

}

function openList(){
  $('.all-models__btn').on('click',function(){
   $('.all-models__wrap-items').toggleClass('active');
 })
}

function popup(){
 $('.btn-popup').magnificPopup({
   removalDelay: 300,
   fixedContentPos: true,
   mainClass: 'mfp-fade',
   tClose: 'Закрыть'
 });
 $('.photo-popup').magnificPopup({
  delegate: 'a',
  type: 'image',
  closeOnContentClick: false,
  closeBtnInside: false,
  mainClass: 'mfp-with-zoom mfp-img-mobile',
  tClose: 'Закрыть',
  image: {
    verticalFit: true,
    titleSrc: function(item) {
      return item.el.attr('title');
    },
    counterSrc: function(item) {
      return item.el.attr('title');
    }
  },
  gallery: {
    enabled: true,
    tCounter: '<span class="mfp-counter">%curr% из %total%</span>',
  },
  zoom: {
    enabled: true,
      duration: 300, // don't foget to change the duration also in CSS
      opener: function(element) {
        return element.find('div');
      }
    }
    
  });
}

function topBackgroundOwl(){
  $(".top-background__owl-carousel").owlCarousel({
    loop: true,
    items: 1,
    nav: false,
    dots: true,
    mouseDrag: true,
    touchDrag: true,
    autoHeight:true,
    autoplay: true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    autoplaySpeed: 1000,
  });
}
function pricesOwl(){
  $(".prices__owl-carousel").owlCarousel({
    loop: true,
    items: 3,
    nav: false,
    dots: false,
    mouseDrag: true,
    touchDrag: true,
    autoHeight:true,
    autoplay: true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    autoplaySpeed: 1000,
  });
}

function dropdown(){
  if (screen.width>1200) {
    $('ul.top-menu li.dropdown').mouseenter(function() {
      $('.dropdown-menu').removeClass('show');
      $(this).find('.dropdown-menu').addClass('show');
    });
    $(document).mouseup(function (e){ // событие клика по веб-документу
    var div = $("ul.top-menu li.dropdown"); // тут указываем ID элемента
    if (!div.is(e.target) // если клик был не по нашему блоку
        && div.has(e.target).length === 0) { // и не по его дочерним элементам
      $(this).find('.dropdown-menu').removeClass('show'); // скрываем его
  }
});
  }
}

function popupForm(){

}



function map(){
	//Переменная для включения/отключения индикатора загрузки
	var spinner = $('.ymap-container').children('.loader');
//Переменная для определения была ли хоть раз загружена Яндекс.Карта (чтобы избежать повторной загрузки при наведении)
var check_if_load = false;
//Необходимые переменные для того, чтобы задать координаты на Яндекс.Карте
var myMapTemp, myPlacemarkTemp;

//Функция создания карты сайта и затем вставки ее в блок с идентификатором "map-yandex"
function init () {
	var myMapTemp = new ymaps.Map("map-yandex", {
    center: [55.753259, 37.040012], // координаты центра на карте
    zoom: 10, // коэффициент приближения карты
    controls: ['zoomControl', 'fullscreenControl'] // выбираем только те функции, которые необходимы при использовании
  });
	var myPlacemarkTemp = new ymaps.GeoObject({
		geometry: {
			type: "Point",
        coordinates: [55.853259, 37.540012] // координаты, где будет размещаться флажок на карте
      }
    });
  myMapTemp.geoObjects.add(myPlacemarkTemp); // помещаем флажок на карту
  myMapTemp.behaviors.disable('scrollZoom'); 

  // Получаем первый экземпляр коллекции слоев, потом первый слой коллекции
  var layer = myMapTemp.layers.get(0).get(0);

  // Решение по callback-у для определния полной загрузки карты
  waitForTilesLoad(layer).then(function() {
    // Скрываем индикатор загрузки после полной загрузки карты
    spinner.removeClass('is-active');
  });
}

// Функция для определения полной загрузки карты (на самом деле проверяется загрузка тайлов) 
function waitForTilesLoad(layer) {
	return new ymaps.vow.Promise(function (resolve, reject) {
		var tc = getTileContainer(layer), readyAll = true;
		tc.tiles.each(function (tile, number) {
			if (!tile.isReady()) {
				readyAll = false;
			}
		});
		if (readyAll) {
			resolve();
		} else {
			tc.events.once("ready", function() {
				resolve();
			});
		}
	});
}

function getTileContainer(layer) {
	for (var k in layer) {
		if (layer.hasOwnProperty(k)) {
			if (
				layer[k] instanceof ymaps.layer.tileContainer.CanvasContainer
				|| layer[k] instanceof ymaps.layer.tileContainer.DomContainer
				) {
				return layer[k];
		}
	}
}
return null;
}

// Функция загрузки API Яндекс.Карт по требованию (в нашем случае при наведении)
function loadScript(url, callback){
	var script = document.createElement("script");

  if (script.readyState){  // IE
  	script.onreadystatechange = function(){
  		if (script.readyState == "loaded" ||
  			script.readyState == "complete"){
  			script.onreadystatechange = null;
  		callback();
  	}
  };
  } else {  // Другие браузеры
  	script.onload = function(){
  		callback();
  	};
  }

  script.src = url;
  document.getElementsByTagName("head")[0].appendChild(script);
}

// Основная функция, которая проверяет когда мы навели на блок с классом "ymap-container"
var ymap = function() {
	$('.ymap-container').mouseenter(function(){
      if (!check_if_load) { // проверяем первый ли раз загружается Яндекс.Карта, если да, то загружаем

      // Чтобы не было повторной загрузки карты, мы изменяем значение переменной
      check_if_load = true; 

    // Показываем индикатор загрузки до тех пор, пока карта не загрузится
    spinner.addClass('is-active');

    // Загружаем API Яндекс.Карт
    loadScript("https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;loadByRequire=1", function(){
           // Как только API Яндекс.Карт загрузились, сразу формируем карту и помещаем в блок с идентификатором "map-yandex"
           ymaps.load(init);
         });                
  }
}
);  
}

$(function() {

  //Запускаем основную функцию
  ymap();

});
}

var formsOnPage = $('.form'), thisForm;
var formSend = function() {

  $.each(formsOnPage, function(index, thisForm) {
    $(thisForm).validate({
      rules: {
        phone: {
          required: true,
          minlength: 4
        },
        email: {
          required: true,
          email: true,
          minlength: 4
        },
      },
      messages: {
        phone: {
          required: "<i class='fa fa-hand-o-up' aria-hidden='true'></i> Вы не ввели номер телефона",
          minlength: "<i class='fa fa-hand-o-up' aria-hidden='true'></i> В телефоне не должно быть меньше 4 цифр"
        },
        email: {
          required: "<i class='fa fa-hand-o-up' aria-hidden='true'></i> Вы не ввели адрес электронной почты",
          email: "<i class='fa fa-hand-o-up' aria-hidden='true'></i> Неверный адрес электронной почты"
        }
      },
      submitHandler: function() {

        var th = $(thisForm);
        // Лендинг (например: корончатые сверла)
        var landingName = $('#landing-name').html();
        // Название сайта (например: karnaschline.ru)
        var landingSite = $('#landing-site').html();

        // UTM метка
        // var utm = window.location;
        // $(thisForm).find('input[name=utm]').val(utm);

        var btn = $(thisForm).find('button[type=submit]');
        //Блокируем кнопку от повторного нажатия
        btn.attr('disabled','disabled');
        // Сохраняем текст в переменную
        var textBtn = btn.text();
        btn.text('Подождите, идет отправка...');

        // Дополнительные поля
        var additionalFields = "&landing_name=" + landingName + "&site=" + landingSite;

        $.ajax({
          type: "POST",
          url: "/php-libs/mail.php",
          data: th.serialize() + additionalFields
        }).done(function( data ) {
          if ( data == "done" ) {
            console.log('done form');
            $.magnificPopup.open({
             items: {
               src: '#thankyou',
             },
             removalDelay: 300,
             mainClass: 'my-mfp-slide-bottom',

             fixedContentPos: true,
             fixedBgPos: true,

             tClose: 'Закрыть',
           });


            th.trigger("reset");

            //Разблокируем кнопку
            btn.removeAttr('disabled');

            //Вставляем прошлый текст на кнопку
            btn.text(textBtn);

            // Очищаем дополнительные поля
            additionalFields = '';
          } else {
            alert("Ошибка при отправке! Попробуйте снова...");
          }          
        });
      }
    });
  });


  $( '.inputfile' ).each( function()
  {
    var $input   = $( this ),
    $label   = $input.next( 'label' ),
    labelVal = $label.html();

    $input.on( 'change', function( e )
    {
      var fileName = '';
      // console.log("this.files", this.files);

      if( this.files && this.files.length > 0 )
        fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
      else if( e.target.value )
        fileName = e.target.value.split( '\\' ).pop();
      // console.log("$input", $input);

      if( fileName )
        $label.find( 'span' ).html( fileName );
      else
        $label.html( labelVal );
    });

    // Firefox bug fix
    $input
    .on( 'focus', function(){ $input.addClass( 'has-focus' ); })
    .on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
  });
}