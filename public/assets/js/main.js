window.onscroll = function() {
    const mainNav = document.getElementById('mainNav');
    // const upbtn = document.getElementById("upBtn");
          if (mainNav) {
              if (window.pageYOffset > 200) {
                  mainNav.classList.add("scrolled");
                //   upbtn.classList.add("active");
              }
              else {
                  mainNav.classList.remove("scrolled");
                //   upbtn.classList.remove("active");
              }
          }
  }

  window.onload = (event) => {
    document.getElementById("textimonialNext").click();
  };