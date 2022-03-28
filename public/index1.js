(function ($) {
  ("use strict");

  // closes the sidebar menu
  $(".menu-toggle").click(function (e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
    $(".menu-toggle > .fa-bars, .menu-toggle > .fa-times").toggleClass(
      "fa-bars fa-times"
    );
    $(this).toggleClass("active");
  });
  
  //smooth scrolling using jquery and easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
      if (target.length) {
        $("html, body").animate(
          {
            scrollTop: target.offset().top,
          },
          1000,
          "easeInOutExpo"
        );
        return false;
      }
    }
  });
  $("#sidebar-wrapper .js-scroll-trigger").click(function () {
    $("#sidebar-wrapper").removeClass("active");
    $("menu-toggle").removeClass("active");
    $(".menu-toggle > fa.bars, .menu-toggle > .fa-times").toggleClass(
      "fa-bars fa-times"
    );
  });
  const chk = document.getElementById('chk');

  chk.addEventListener('change', () => {
    document.body.classList.toggle('dark');
  
  });
  $(document).scroll(function () {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $(".scroll-to-top").fadeIn();
    } else {
      $(".scroll-to-top").fadeOut();
    }
  });
  
})(jQuery);

function darkmode(){
  var SetTheme = document.body;
  SetTheme.classList.toggle("dark")
  var theme;
  if(SetTheme.classList.contains("dark")){
      console.log("Dark mode");
      theme = "DARK";
  }else{
      console.log("Light mode");
      theme = "LIGHT";
  }
  // save to localStorage
  localStorage.setItem("PageTheme", JSON.stringify(theme));
  // ensure you convert to JSON like i have done -----JSON.stringify(theme)
}

setInterval(() => {
  let GetTheme = JSON.parse(localStorage.getItem("PageTheme"));
  console.log(GetTheme);
  if(GetTheme === "DARK"){
      document.body.classList = "dark";
  }else{
      document.body.classList = "";
  }
}, 5);

