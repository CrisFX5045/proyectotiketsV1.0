// JavaScript Document
$(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });



$(document).ready(function(){


    $('.btn-group .btn[category="top-events"]').addClass('active')

    $('.btn').click(function(){
        var catEvent = $(this).attr('category')

        // agregando active
        $('.btn').removeClass('active');
        $(this).addClass('avtive');



        //ocultar eventos
            $('.item').hide();
    
            var position = document.getElementById('autoWidth');
            position.style.transform= "none";

        $('.item[category="'+catEvent+'"').show();
        if(catEvent=="eventsTops"){
            $('.item').show();
            var position = document.getElementById('autoWidth');
           position.style.transform= "none";

        }
  

    });
    
    
});
