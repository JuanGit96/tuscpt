var deleteprocess = () => {
  alert("moda");
}
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
      $('dropdown-toggle').dropdown();
      // HEADER STYLE 50PX DOWN
      var top = true;
      var once =true;
      if($(document).scrollTop() > 50 && once){
        once = false;
        $("#header").addClass('newClass');
      }
      $(document).scroll(function() {
        
          if($(document).scrollTop() > 50){
            top = false;
            $("#header").addClass('newClass');
          }else if ($(document).scrollTop() < 50) {
            top = true;
            if($('#navbar-menu').hasClass('in')){
            }else{
              $("#header").removeClass('newClass');
            }
          }
      });
      $('.navbar-toggle').click(function() {
        if(top){
          $("#header").toggleClass('newClass');
        }    
      });
      // FIN HEADER STYLE 50PX DOWN
      // ANIMACION HOME
      $('#steps .contenido-1 h3').hide();
      $('#steps .contenido-1 p').hide();
      $('#steps .contenido-1 .close-phrase').hide();
      $('#steps .contenido-2 h3').hide();
      $('#steps .contenido-2 p').hide();
      $('#steps .contenido-2 .close-phrase').hide();
      $('#noticias .kit-lienzo').hide();
      var once_2= true;
      var once_3= true;
      var once_4= true;
      $(document).scroll(function() {
          if($(document).scrollTop() > 270 && once_2){
            once_2 = false;
            $('#steps .contenido-1 h3').show("slide", { direction: "right" }, 700, function(){
              $('#steps .contenido-1 p').show("slide", { direction: "right" }, 700, function(){
                $('#steps .contenido-1 .close-phrase').show("slide", { direction: "right" }, 700);
              });
            });
          }
          if($(document).scrollTop() > 450 && once_3){
            once_3 = false;
            $('#steps .contenido-2 h3').show("slide", { direction: "left" }, 700, function(){
              $('#steps .contenido-2 p').show("slide", { direction: "left" }, 700, function(){
                $('#steps .contenido-2 .close-phrase').show("slide", { direction: "left" }, 700);
              });
            });
          }
          //if($(document).scrollTop() > /*850*/1 && once_4){
            once_4 = false;
            $('#noticias .kit-lienzo').show("slide", { direction: "down" }, 700);
          //}
      });
      // var once_5= true;
      // $('.consulta-pedido .sms').hide();
      // if(once_5){
      //   $('.consulta-pedido .garantia').delay(2000).hide("slide", { direction: "left" }, 700, function(){
      //     $('.consulta-pedido .sms').show("slide", { direction: "right" }, 700);
      //   });
      // }
 
      // FIN ANIMACION HOME
  
      // POPUP SHARE SOCIAL MEDIA
      $.fn.customerPopup = function (e, intWidth, intHeight, blnResize) {
        
        // Prevent default anchor event
        e.preventDefault();
        
        // Set values for window
        intWidth = intWidth || '500';
        intHeight = intHeight || '400';
        strResize = (blnResize ? 'yes' : 'no');
        // Set title and open popup with focus on it
        var strTitle = ((typeof this.attr('title') !== 'undefined') ? this.attr('title') : 'Social Share'),
            strParam = 'width=' + intWidth + ',height=' + intHeight + ',resizable=' + strResize,            
            objWindow = window.open(this.attr('href'), strTitle, strParam).focus();
      }
      
      /* ================================================== */
      $('.customer.share').on("click", function(e) {
        $(this).customerPopup(e);
      });
      // FIN POPUP SHARE SOCIAL MEDIA
      var chat_act = false;
      var tooltip_once = true;
      // SCROLL CHAT
       $(document).scroll(function() {
        var y = $(this).scrollTop();
        var ventana_alto = $(document).height();
        // HOME 
        if(ventana_alto > 1200)
{          if (y > 600) {
            $('.social-chat').fadeIn();
            if(chat_act){
              $('.chat-box').slideDown('slow');
            }
            if(tooltip_once){
              $('.icon-messenger a').tooltip('show');
              setTimeout(function(){ 
                $('.icon-messenger a').tooltip('hide');
              }, 5000);
              tooltip_once = false;
            }
          } else {
            $('.social-chat').fadeOut();
            $('.chat-box').slideUp('slow');
          }
        // FORMULARIOS
        }else{
          if (y > 100) {
            $('.social-chat').fadeIn();
            if(chat_act){
              $('.chat-box').slideDown('slow');
            }
            if(tooltip_once){
              $('.icon-messenger a').tooltip('show');
              setTimeout(function(){ 
                $('.icon-messenger a').tooltip('hide');
              }, 5000);
              tooltip_once = false;
            }
          } else {
            $('.social-chat').fadeOut();
            $('.chat-box').slideUp('slow');
          }
        }
      });
       
      // FIN SCROLL CHAT
      // CHAT MESSENGER
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '95100348886',
          xfbml      : true,
          version    : 'v2.6'
        });
      };
      
      (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
      $('.icon-messenger').click(function() {
        $('.chat-box').slideToggle();
        $(this).find('.in').removeClass('in');
        if(chat_act){
          chat_act = false;
        }else{
          chat_act = true;
        }
      });
      $('.chat-box .fa-times').click(function() {
        $('.chat-box').slideUp();
        if(chat_act){
          chat_act = false;
        }else{
          chat_act = true;
        }
      });
      // FIN CHAT MESSENGER
      // SCROLL RESPOSIVE
      $("#banner-1").click(function (){
        $('#panel-responsive').find('.in').removeClass('in');
        $('html, body').animate({
            scrollTop: $("#resp-sello").offset().top - 40
        }, 500 ,function (){
          $('#viviendas').click();
          $('#item-1-1').click();
        });
      });
      $("#banner-2").click(function (){
        $('#panel-responsive').find('.in').removeClass('in');
        $('html, body').animate({
            scrollTop: $("#resp-sello").offset().top - 40
        }, 500 ,function (){
          $('#oficinas').click();
          $('#item-2-1').click();
        });
      });
      // FIN SCROLL RESPOSIVE
      
   //  $('.box-general').click(function(){
   //    $(this).children('.gamma-selection').slideToggle('fast');
   // });
   var i = 0;
   var e = 0;
   var h = 0;
   var r = 0;
   $('#img1').click(function(){
      i = i + 1;
      if (i%2) {
        document.getElementById("value1").value = "1";
      }
      else{
        document.getElementById("value1").value = "";
      }
    });
    $('#img2').click(function(){
      e = e + 1;
      if (e%2) {
        document.getElementById("value2").value = "2";
      }
      else{
        document.getElementById("value2").value = "";
      }
    });
    $('#img3').click(function(){
      h = h + 1;
      if (h%2) {
        document.getElementById("value3").value = "3";
      }
      else{
        document.getElementById("value3").value = "";
      }
    });
    $('#img4').click(function(){
      r = r + 1;
      if (r%2) {
        document.getElementById("value4").value = "4";
      }
      else{
        document.getElementById("value4").value = "";
      }
    });
   
    // ANIMACIÓN IMÁGENES SELECCIONABLES //
    $('.box-general').hover(function(){
      if($(this).hasClass('active')){
      }else{
        $(this).children('.gamma-selection').slideToggle('fast');
      }
    });
    $('.box-general').click(function(){
      $(this).children('.gamma-check').slideToggle('fast');
      if($(this).hasClass('active')){
        $(this).removeClass('active');
      }else{
        $(this).addClass('active');
      }
    });
    // IMÁGENES SELECCIONABLES //
    // BOTONES KITS HOME //
    $('.home-general .home-1').mouseenter(function(){
      $('.home-general .title').text('Kit Apartaestudio');
          $contenido = $('.home-general .content-general');
          $contenido.find('.price').text('$144.000').animate({backgroundColor: "#e06900"}, 'fast');
          $contenido.find('.content ul li:nth-child(1)').html('<strong>12</strong> Cajas de cartón');
          $contenido.find('.content ul li:nth-child(2)').html('<strong>1</strong> Cinta industrial');
          $contenido.find('.content ul li:nth-child(3)').html('<strong>8</strong> Metros de plástico de burbuja');
          $contenido.find('.content ul li:nth-child(4)').html('<strong>4</strong> Bolsas industriales');
          $contenido.find('.content ul li:nth-child(5)').show().html('<strong>1</strong> Marcador');
          $contenido.find('.metros span').html('50m&sup2');
          $contenido.slideDown();
    });
    $('.home-general .home-2').mouseenter(function(){
      $('.home-general .title').text('Kit Apartamento');
        $contenido = $('.home-general .content-general');
        $contenido.find('.price').text('$206.000').animate({backgroundColor: "#f09700"}, 'fast');
        $contenido.find('.content ul li:nth-child(1)').html('<strong>18</strong> Cajas de cartón');
        $contenido.find('.content ul li:nth-child(2)').html('<strong>1</strong> Cinta industrial');
        $contenido.find('.content ul li:nth-child(3)').html('<strong>1</strong> Marcador');
        $contenido.find('.content ul li:nth-child(4)').html('<strong>15</strong> Metros de plástico de burbuja');
        $contenido.find('.content ul li:nth-child(5)').html('<strong>8</strong> Bolsas industriales');
        $contenido.find('.content ul li:nth-child(6)').hide();
        $contenido.find('.metros span').html('140m&sup2');
        $contenido.slideDown();
    });
    $('.home-general .home-3').mouseenter(function(){
      $('.home-general .title').text('Kit casa');
      $contenido = $('.home-general .content-general');
      $contenido.find('.price').text('$315.000').animate({backgroundColor: "#f5ca09"}, 'fast');
      $contenido.find('.content ul li:nth-child(1)').html('<strong>34</strong> Cajas de cartón');
      $contenido.find('.content ul li:nth-child(2)').html('<strong>1</strong> Cinta industrial');
      $contenido.find('.content ul li:nth-child(3)').html('<strong>30</strong> Metros de plástico de burbuja');
      $contenido.find('.content ul li:nth-child(4)').html('<strong>12</strong> Bolsas industriales');
        $contenido.find('.content ul li:nth-child(5)').html('<strong>1</strong> Marcador');
        $contenido.find('.content ul li:nth-child(6)').hide();
      $contenido.find('.metros span').html('300m&sup2');
      $contenido.slideDown();
    });
    $('.home-general').mouseleave(function(){
      $('.home-general .title').text('Kits de viviendas');
      $contenido.slideUp();
    });
    // $('.office-general .home-1').mouseenter(function(){
    //   $('.office-general .title').text('Kit de oficina pequeña');
    //   $contenido = $('.office-general .content-general');
    //   $contenido.find('.price').text('$262.990').animate({backgroundColor: "#6aaada"},'fast');
    //   $contenido.find('.content ul li:nth-child(1)').html('<strong>20</strong> Cajas de cartón ');
    //   $contenido.find('.content ul li:nth-child(2)').html('<strong>12</strong> Cajas de cartón ');
    //   $contenido.find('.content ul li:nth-child(3)').html('<strong>2</strong> Cintas industriales');
    //   $contenido.find('.content ul li:nth-child(4)').html('<strong>6</strong> Metros de plástico de burbuja');
    //   $contenido.find('.content ul li:nth-child(5)').html('<strong>2</strong> Bisturís industriales');
    //   $contenido.find('.content ul li:nth-child(6)').html('<strong>2</strong> Marcadores');
    //   $contenido.find('.content ul li:nth-child(7)').hide();
    //   $contenido.find('.metros span').html('150m&sup2');
    //   $contenido.slideDown();
    // });
    // $('.office-general .home-2').mouseenter(function(){
    //   $('.office-general .title').text('Kit de oficina mediana');
    //   $contenido = $('.office-general .content-general');
    //   $contenido.find('.price').text('$540.260').animate({backgroundColor: "#0287c5"},'fast');
    //   $contenido.find('.content ul li:nth-child(1)').html('<strong>40</strong> Cajas de cartón ');
    //   $contenido.find('.content ul li:nth-child(2)').html('<strong>24</strong> Cajas de cartón ');
    //   $contenido.find('.content ul li:nth-child(3)').html('<strong>5</strong> Cintas industriales');
    //   $contenido.find('.content ul li:nth-child(4)').html('<strong>1</strong> Dispensador de cinta');
    //   $contenido.find('.content ul li:nth-child(5)').html('<strong>12</strong> Metros de plástico de burbuja');
    //   $contenido.find('.content ul li:nth-child(6)').html('<strong>3</strong> Bisturís industriales');
    //   $contenido.find('.content ul li:nth-child(7)').show().html('<strong>3</strong> Marcadores');
    //   $contenido.find('.metros span').html('400m&sup2');
    //   $contenido.slideDown();
    // });
    // $('.office-general .home-3').mouseenter(function(){
    //   $('.office-general .title').text('Kit de oficina grande');
    //   $contenido = $('.office-general .content-general');
    //   $contenido.find('.price').text("$1'195.550").animate({backgroundColor: "#245096"},'fast');
    //   $contenido.find('.content ul li:nth-child(1)').html('<strong>78</strong> Cajas de cartón ');
    //   $contenido.find('.content ul li:nth-child(2)').html('<strong>46</strong> Cajas de cartón ');
    //   $contenido.find('.content ul li:nth-child(3)').html('<strong>9</strong> Cintas industriales');
    //   $contenido.find('.content ul li:nth-child(4)').html('<strong>1</strong> Dispensador de cinta');
    //   $contenido.find('.content ul li:nth-child(5)').html('<strong>24</strong> Metros de plástico de burbuja');
    //   $contenido.find('.content ul li:nth-child(6)').html('<strong>7</strong> Bisturís industriales');
    //   $contenido.find('.content ul li:nth-child(7)').show().html('<strong>7</strong> Marcadores');
    //   $contenido.find('.metros span').html('800m&sup2');
    //   $contenido.slideDown();
    // });
    $('.office-general').mouseleave(function(){
      $('.office-general .title').text('Arma tu kit');
      $contenido.slideUp();
    });
    $('#box-kit-general .home-div').mouseenter(function(){
      $(this).text('+ VER MÁS');
      $(this).addClass('active-green')
    }).mouseleave(function() {
      var title = $(this).attr('data-nombre');
      $(this).text(title);
      $(this).removeClass('active-green')
    });
    $('.home-general .home-div').mouseenter(function(){
      $(".home-general .metros-number").hide().show( "slide", {direction: 'down'});
      $(".home-general ul li").stop().css("opacity",0);
      var animationDelay = 200;
      var offset = 200;
      function blah(meh) {
        setTimeout(function(){
          $(meh).animate({
            opacity: "1"
          }, animationDelay);
        },$(meh).index() * offset)
      }
      $(".home-general ul li").each(function(){
        blah(this);
      });
    });
    $('.office-general .home-div').mouseenter(function(){
      $(".office-general .metros-number").hide().show( "slide", {direction: 'down'});
      $(".office-general ul li").stop().css("opacity",0);
      var animationDelay = 200;
      var offset = 200;
      function blah(meh) {
        setTimeout(function(){
          $(meh).animate({
            opacity: "1"
          }, animationDelay);
        },$(meh).index() * offset)
      }
      $(".office-general ul li").each(function(){
        blah(this);
      });
    });
    $('#panel-responsive .panel-body1 .panel-title').click(function(){
      $('#panel-responsive .panel-body1 .responsive-metros').hide();
      $(this).siblings().delay(300).slideDown('fast');
    });
    $('#panel-responsive .panel-body2 .panel-title').click(function(){
      $('#panel-responsive .panel-body2 .responsive-metros').hide();
      $(this).siblings().delay(300).slideDown('fast');
    });
    // FIN BOTONES KITS HOME //
  });




/*
* MODAL PARA CONFIRMACION EN LA COMPRA
*
* */


function confirmSection()
{

    var valortotal = parseInt($("#valueThisKit").val()) + parseInt($("#actualExtraModal").val());

    var costoenvio = -1;

    if($("#inmediata").is(':checked'))
    {
        if ( $("#kits").length > 0 )
        {
            costoenvio = 5000;
        }
        else
        {
            costoenvio = 20000;
        }
    }
    else if($("#24Horas").is(':checked'))
    {
        if ( $("#kits").length > 0 )
        {
            costoenvio = 0;
        }
        else
        {
            costoenvio = 15000;
        }
    }
    else
    {
        if ( $("#kits").length > 0 )
        {
            costoenvio = -15000;
        }
        else
        {
            costoenvio = 0;
        }
    }


    if($('#selectcity').val() != "bogota" && $('#selectcity').val() != null)
        costoenvio = 30000;

    if (!$("input[name='vehicle']").is(':checked'))
    {
        alert("Porfavor Acepta nuestros terminos y condiciones");
    }
    else
    {
        swal({
            title: "¿Listo para generar tu compra?",
            text: "Valor total de kit: "+new Intl.NumberFormat().format(valortotal)+" COP \n+ costo de envio: "+new Intl.NumberFormat().format(costoenvio)+" COP\n- Codigo promocional",
            icon: "success",
            //buttons: true,
            successMode: true,
            buttons: ["Cancelar", "¡Comprar!"],

        }).then((willDelete) => {
            if (willDelete) {

                $("#enviarForm").trigger('click');

            } else {
                swal("Seguro tenemos el pedido perfecto para ti");
                event.preventDefault();
            }
        });

    }

}


