

$(document).ready(function(){

    

      var owl = $("#owl-carusel");
 
      owl.owlCarousel({

        loop:true,//Зацикливаем слайдер
        nav:true, //Навигация включена
        autoplay:false,//автозапуск
        smartSpeed:1000,//Время движения
        margin:0,    
        navText:['<span class="df-left"></span>','<span class="df-right"></span>'],
        responsive:{
            0:{
              items:1
            },       
            1000:{
              items:2
            },
             1248:{
              items:3
            }
        }
         
      });


        var owl = $(".owl-carusel-photos");
 
      owl.owlCarousel({

        loop:true,//Зацикливаем слайдер
        nav:true, //Навигация включена
        autoplay:false,//автозапуск
        smartSpeed:1000,//Время движения
        margin:0,    
        navText:['<span class="df-left"></span>','<span class="df-right"></span>'],
        responsive:{
            0:{
              items:1
            },       
            1000:{
              items:2
            },
             1248:{
              items:3
            }
        }
         
      });
     


 });


