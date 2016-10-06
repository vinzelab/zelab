
$(document).ready(function(){
  $('.all').focus();
  $('.category').focus(function(){
    var focus = $('.category:focus').html();
    console.log(focus);
    var data =  $('.work').attr("data-filter");
    var data1 =  $('.work').data("filter");

    if (focus=="Graphic design"){
      $( ".work" ).each(function() {
        $(".work[data-filter=0]").addClass('hidden');
        $(".work[data-filter=1]").removeClass('hidden');
        $(".work[data-filter=2]").addClass('hidden');
        $(".work[data-filter=3]").addClass('hidden');
      });//end each
    }//End if
    else if (focus=="Web design"){
      $( ".work" ).each(function() {
        $(".work[data-filter=0]").removeClass('hidden');
        $(".work[data-filter=1]").addClass('hidden');
        $(".work[data-filter=2]").addClass('hidden');
        $(".work[data-filter=3]").addClass('hidden');
      });//end each
    }//End if
    else if (focus=="All"){
      $( ".work" ).each(function() {
        $(".work[data-filter=0]").removeClass('hidden');
        $(".work[data-filter=1]").removeClass('hidden');
        $(".work[data-filter=2]").removeClass('hidden');
        $(".work[data-filter=3]").removeClass('hidden');
      });//end each
    }//End if

  });
});

//svg background clip text pollyfill
var element = document.querySelector('h1');

element.backgroundClipPolyfill({
  'patternID' : 'mypattern',
  'patternURL' : '../img/background-text.jpg',
  'class' : 'h1'
});
