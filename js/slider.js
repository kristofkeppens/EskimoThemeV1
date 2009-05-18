/**
 * Toggle visibility of blocks (with slide effect).
 */
Drupal.behaviors.slideBlocks = function (context) {
  $('#block-views-Latestnews-block_1:not(.slideBlocks-processed)', context)
    .addClass('slideBlocks-processed')
    .each(function () {
      $(this).children("h3").toggle(
        function () { 
          $(this).siblings(".content").slideUp("slow");
        },
        function () {
          $(this).siblings(".content").slideDown("slow");
        });
    });
};