$(function() {			
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