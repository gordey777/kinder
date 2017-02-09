$(document).ready(function() {

  //hamburger menu
  $(".hamburger").click(function() {
    $(this).toggleClass("is-active");
    if ($(this).hasClass("is-active")) {
      $(".h-menu__list").slideDown();
    } else {
      $(".h-menu__list").slideUp();
    }
  });
  //gallery
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });
  //****************
  //slider teachers
  if ($(".teachers-slider")) {
    $('.teachers-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      speed: 600,
      asNavFor: '.teachers-slider-nav'
    });
    $('.teachers-slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.teachers-slider',
      dots: false,
      centerMode: true,
      focusOnSelect: true,
      arrows: true,
      responsive: [{
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }]
    });
  } else {}
  //slider news
  if ($(".news-slider")) {
    $('.news-slider').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: true,
      responsive: [{
        breakpoint: 992,
        settings: {
          slidesToShow: 1
        }
      }]
    });
  } else {}
  //slider question
  if ($(".question-slider")) {
    $('.question-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true
    });
  } else {}
  //slider partners
  if ($(".partners-slider")) {
    $('.partners-slider').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      arrows: true,
      responsive: [{
        breakpoint: 992,
        settings: {
          slidesToShow: 5
        }
      }, {
        breakpoint: 767,
        settings: {
          slidesToShow: 3
        }
      }, {
        breakpoint: 480,
        settings: {
          slidesToShow: 1
        }
      }]
    });
  } else {}
  //slider press
  if ($(".press-slider")) {
    $('.press-slider').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: false,
      responsive: [{
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          arrows: true
        }
      }, {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          arrows: true
        }
      }, {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          arrows: true
        }
      }]
    });
  } else {}
  //slider comments
  if ($(".comments-slider")) {
    $('.comments-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true
    });
  } else {}
  //slider kindergarten
  if ($(".kindergarten-slider")) {
    $('.kindergarten-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      initialSlide: 2,
      fade: true,
      speed: 600,
      asNavFor: '.kindergarten-slider-nav'
    });
    $('.kindergarten-slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      initialSlide: 2,
      asNavFor: '.kindergarten-slider',
      dots: false,
      centerMode: true,
      focusOnSelect: true,
      arrows: true,
      responsive: [{
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true
        }
      }]
    });
  } else {}

  //slider kindergarten-video
  if ($(".kindergarten-video")) {
    $('.kindergarten-video').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: true,
      responsive: [{
        breakpoint: 992,
        settings: {
          slidesToShow: 1
        }
      }]
    });
  } else {}


  //slider kindergarten-gallery

  var slickargs = {
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: true,
    responsive: [{
      breakpoint: 992,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 767,
      settings: {
        slidesToShow: 2
      }
    }]
  };

  $(".class-select-gallery").change(function() {

    $(".kindergarten-gallery").removeClass("active").hide();



    var temp = $(this).attr('data-id');
    var temp2 = $(this).val();

    var temp3 = '.kindergarten-gallery-' + temp + '-' + temp2;

    $(temp3).addClass("active").fadeIn().slick(slickargs);


  });

  $('.kindergarten-gallery').each(function(index, el) {

    var dataid = $(this).attr('data-slide');



    if (dataid == 1) {
      $(this).addClass("active").fadeIn().slick(slickargs);
    }
  });



  /**********end sliders***********/
  //map
  if ($('body').hasClass('page-template-page-contakts')) {
  }
  //Постраничная навигация с асинхронной подгрузкой постов в WordPress
  jQuery(function($) {
    $('#true_loadmore').click(function() {
      $(this).text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
      var data = {
        'action': 'loadmore',
        'query': true_posts,
        'page': current_page
      };
      $.ajax({
        url: ajaxurl, // обработчик
        data: data, // данные
        type: 'POST', // тип запроса
        success: function(data) {
          if (data) {
            $('#true_loadmore').text('ПОКАЗАТЬ БОЛЬШЕ').before(data); // вставляем новые посты
            current_page++; // увеличиваем номер страницы на единицу
            if (current_page == max_pages) $("#true_loadmore").remove(); // если последняя страница, удаляем кнопку
          } else {
            $('#true_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
          }
        }
      });
    });
  });
  //TABS on category-4.php
  $(function() {
    var tabContainers = $('div.galery_tabs > div');
    tabContainers.hide().filter(':first').show();

    $('div.galery_buttons a.tab-link').click(function() {
      tabContainers.hide();
      tabContainers.filter(this.hash).show();
      $('div.galery_buttons a.tab-link').removeClass('active-tab');
      $(this).addClass('active-tab');
      return false;
    }).filter(':first').click();
  });

});
