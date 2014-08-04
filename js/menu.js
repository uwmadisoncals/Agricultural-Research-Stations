( function( $ ) {

  $(".menuTrigger").click(function(e) {
    e.preventDefault();
    $(".sideBarNav, .siteWrapper, .siteWrapperOverlay").toggleClass("navVisible");
  });

  $(".sideBarClose").click(function(e) {
    e.preventDefault();
    $(".sideBarNav, .siteWrapper, .siteWrapperOverlay").toggleClass("navVisible");
  });

  $(".menu .page_item_has_children").each(function() {
    var expandlink = "<a href='#' class='expandLink'>Expand</a>";
    $(this).append(expandlink);
  });

  $(".expandLink").click(function(e) {
    e.preventDefault();
    $(this).prev(".children").slideToggle(300);
    $(this).toggleClass("expanded");
  });


} )( jQuery );
