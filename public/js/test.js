$(function() {

			/*$('#slider').slideReveal({
			  trigger: $("#trigger")
			});*/
          var slider =  $('#slider').slideReveal({
              trigger: $("#trigger"),   
              push:false,           
              position: "right"
            });


          $("html").on("mousedown", function(){
            slider.slideReveal("hide");
          })

        
});