$(function() {
      $("#slider").show();
      /*$('ul.nav > li').click(function (e) {
            e.preventDefault();
            $('ul.nav > li').removeClass('active');
            $(this).addClass('active');                
        });*/

      var newsHeight = $("#newsContentDesktop").height();

      $(".wrapper-filter-news").height(newsHeight + 32);

      var url = window.location;
      // Will only work if string in href matches with location
      $('ul.nav > li').removeClass('active');
      $('ul.nav a[href="'+ url +'"]').parent().addClass('active');

      // Will also work for relative and absolute hrefs
      $('ul.nav a').filter(function() {
          return this.href == url;
      }).parent().addClass('active');
      var slider =  $('#slider').slideReveal({
          trigger: $("#trigger"),   
          push:false,
          width: 180,           
          position: "right",
          show: function(slider, trigger){
             $('#slider').css("height", "25.2em");
          },
        });

          $("html").on("mousedown", function(){
            slider.slideReveal("hide");
          })

          $(".open").on("click", function(){
            $('.collapse').collapse('toogle')
          }) 

          $('.bxslider').bxSlider({
              pagerCustom: '#bx-pager'
         });

          $('.collapse-header').on('click', function () {
            $($(this).data('target')).collapse('toggle');
        });
});