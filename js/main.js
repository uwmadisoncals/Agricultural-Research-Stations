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

  var stationListOpen = false;

  $(".locationTrigger").click(function(e) {
    e.preventDefault();
    $(".locationList").slideToggle(300, function() {
	    //$(".locationList").css("overflow","auto");
      //fixchromeGlitch();
    });

    /*$(".locationList").toggle();*/

  });

   $(".locationTrigger2").click(function(e) {
    e.preventDefault();
    $(".locationList2").slideToggle(300, function() {
      
      //$(".locationList").css("overflow","auto");
      //fixchromeGlitch();
    });

    if(stationListOpen == false) {
        stationListOpen = true;
        return false;
      } else {
        stationListOpen = false;
        return false;
      }

    /*$(".locationList").toggle();*/

  });

  $(".locationList a").click(function(e) {
   /* e.preventDefault();
    $(".locationTrigger").text($(this).text());*/
    $(this).closest(".locationList").slideUp(300);
  });

  $(".locationList2 a").click(function(e) {
   /* e.preventDefault();
    $(".locationTrigger").text($(this).text());*/
    $(this).closest(".locationList").slideUp(300);
  });

  

  $("#branding").mouseover(function(e) {
    $(".locationTrigger2").addClass("visible");
  });

  $("#branding").mouseout(function(e) {
    if(stationListOpen == false) {
      $(".locationTrigger2").removeClass("visible");
    } else {

    }
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

  $(".feedbackbutton").click(function(e) {
    e.preventDefault();
    $(".feedbackForm").addClass("showForm");
    $(".feedbackformoverlay").addClass("showForm");
  });



});
