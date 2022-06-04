 $(window).on('load', function() {
    $('.doc-loader').fadeOut();
  
  });
  var navlinks = document.getElementById("navlinks");
  function showMenu (){
      navlinks.style.right ="0";
  }
  function hideMenu (){
      navlinks.style.right ="-200px";
  }
  