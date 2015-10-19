function openFirstPanel(){
  //jQuery('.accordion > dt:first-child').next().addClass('active').slideDown();
}

(function(jQuery) {
    
  var allPanels = jQuery('.accordion > dd').hide();
  
  openFirstPanel();
    
  jQuery('.accordion > dt > a').click(function() {
      $this = jQuery(this);
      $target =  $this.parent().next();
      
    
      if($target.hasClass('active')){
        $target.removeClass('active').slideUp(); 
      }else{
        allPanels.removeClass('active').slideUp();
        $target.addClass('active').slideDown();
      }
      
    return false;
  });

})(jQuery);