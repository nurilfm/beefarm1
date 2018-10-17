$("#slides").carousel({
      interval:4000
    });
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#slides").carousel(0);
    });
    $(".item2").click(function(){
        $("#slides").carousel(1);
    });
    $(".item3").click(function(){
        $("#slides").carousel(2);
    });
    // Header Navigasi
   window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navigasi");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= 30) {
        navbar.classList.add("fixed-top")
      } else {
        navbar.classList.remove("fixed-top");
      }
    }