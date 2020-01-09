var typed = new Typed('#rfd-hero-typed',{
                        strings:["Comedian","Writer", "Producer", "Voice Actor"],
                        backSpeed: 20,
                        typeSpeed: 50,
                        loop: true,
                        backDelay: 2000,
                        loopCount: Infinity
                      });
    $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
          $(".rfd-top-navigation").css("background-color", "#f8f8f8"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
        } else {
          $(".rfd-top-navigation").css("background-color", "transparent"); // if not, change it back to transparent
        }
      });
    });