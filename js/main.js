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
    $(".locationList").slideToggle(300);

  });

  $(".locationList a").click(function(e) {
    e.preventDefault();
    $(".locationTrigger").text($(this).text());
    $(".locationList").slideUp(300);
  });

});
