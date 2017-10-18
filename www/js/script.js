$(function() {
      
      /* font size*/
      $('body').flowtype({
         minFont : 14,
         maxFont : 24,
         fontRatio : 70
      });
      
      /* showreel */
      $(".showreel, .showreel_mobile").click(function(e){
          $('.showreel_popup').addClass('on').delay(250).queue(function(){
               $('.showreel_popup').css('opacity', '1').dequeue();
          });
          $('.navbar').addClass('dis');
      });
      $(".showreel_popup .close").click(function(e){
         $('.showreel_popup').css('opacity', '0').delay(250).queue(function(){
               $('.showreel_popup').removeClass('on').dequeue();
          });
          $('.navbar').removeClass('dis');
      });
      
      /* isotope */
      var $grid = $('.isotope').isotope({
        itemSelector: '.isotope > div',
        layoutMode: 'fitRows',
      });
      
      // filter functions
      var filterFns = {
        // show if number is greater than 50
        less2010: function() {
          var number = $(this).attr('class');
          return number.slice(-4) <= 2010;
        },
        // show if name ends with -ium
        ium: function() {
          var name = $(this).find('h2').text();
          console.log(name.match( /А$/ ));
          return name.match( /А$/ );
        } 
      };
      
      $('.video_filter').on( 'click', function() {
        $('.video_filter').removeClass('on');
        $(this).addClass('on');
        var filterValue = $( this ).attr('data-filter');
        filterValue = filterFns[ filterValue ] || filterValue;
        $grid.isotope({ filter: filterValue });
      });
      
      /* article popup */
      $('.article').on( 'click', function() {
          $('body > .article_body').remove();
          $(this).find('.article_body').clone().appendTo('body').fadeIn(400); 
          $('.article_popup_bg').fadeIn(400); 
          $('.navbar').addClass('dis');  
      });
      $('body').on( 'click', '.article_body  .close', function() {
          $('body > .article_body').fadeOut(400);
          $('.article_popup_bg').fadeOut(400);
          $('.navbar').removeClass('dis');
      });
      
      /* poem slider */
      $('.poem_wrap').slick({
          dots: true,
      });
      
      $(".navbar-nav>li>a").click(function(e){
         e.preventDefault();
         var href = $(this).attr('href');
         $('body *').removeClass('loaded').delay(500).queue(function(){
                window.location = href;
         });
      });
      
      $(".menu2").on("afterChange", function (){
           $('.slick-current').click();
      });    

});
      /* after loading magic */
      function loaded() {
            $('.uni, .main, .main_mobile, .sign, .video_wrap, .poem_wrap, .article_wrap, .contact, .menu2').addClass('loaded');
            $('.main h1').eq(0).addClass('loaded');
            $('.main h1').eq(1).delay(500).queue(function(){
                $(this).addClass('loaded').dequeue();
            });
            $(".navbar-brand").slideDown(400);
            $('.showreel').delay(1500).fadeIn(400);
            $('.navbar-inverse .navbar-nav>li>a').eq(0).fadeIn(300);
            $('.navbar-inverse .navbar-nav>li>a').eq(1).delay(400).fadeIn(400);
            $('.navbar-inverse .navbar-nav>li>a').eq(2).delay(700).fadeIn(400);
            $('.navbar-inverse .navbar-nav>li>a').eq(3).delay(1000).fadeIn(400);
            $('.navbar-inverse .navbar-nav>li>a').eq(4).delay(1300).fadeIn(400);
            
            
      }
       
       window.onload = function() {
          loaded();     
      };
      
      /* menu2 filter slider for mobile */
      $(window).on("resize", function (e) {
          checkScreenSize();
      });
      
      checkScreenSize();
      
      function checkScreenSize(){
          var newWindowWidth = $(window).width();
          if (newWindowWidth < 768) {
              $('.menu2').slick({
                  dots: false,
                  slidesToShow: 1,
                  slidesToScroll: 1,
              });
          }
          else
          {
              $('.menu2').slick('unslick');
          }
      } 
      

