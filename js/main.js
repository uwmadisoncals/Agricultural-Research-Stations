jQuery( document ).ready(function( $ ) {
  // Code using $ as usual goes here.

  $(".mapList a").hover(function() {
    var mi = $(this).text();
    $(".mapGraphic a").each(function() {
      if($(this).text() == mi) {
        $(this).addClass("hovered");
      }
    });
  });

  $(".mapList a").mouseout(function() {
    $(".mapGraphic a").each(function() {
        $(this).removeClass("hovered");
    });
  });

  $(".locationTrigger").click(function(e) {
    e.preventDefault();
    $(".locationList").slideToggle(300, function() {
	    //$(".locationList").css("overflow","auto");
      //fixchromeGlitch();
    });

    /*$(".locationList").toggle();*/

  });

  $(".locationList a").click(function(e) {
    e.preventDefault();
    $(".locationTrigger").text($(this).text());
    $(".locationList").slideUp(300);
  });

  var cg;

  function fixchromeGlitch() {
    if($("body").hasClass("Chrome")) {
      clearTimeout(cg);
      cg = setTimeout(function() {
        $("body").toggleClass("relative");
      },50);
    }
  }

  $(window).scroll(function() {
    //fixchromeGlitch();
  });

});
