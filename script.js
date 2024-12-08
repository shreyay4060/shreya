var typed = new Typed('#element', {
    strings: [' Web-Designer ,', ' Graphic Designer , ',' Frontend Developer ,',' Backend Developer ,',' Web-Developer ,',' Web-Designer ,', ' Graphic Designer , ',' Frontend Developer ,',' Backend Developer ,',' Web-Developer ,',' Web-Designer ,', ' Graphic Designer , ',' Frontend Developer ,',' Backend Developer ,',' Web-Developer ,',' Web-Designer ,', ' Graphic Designer , ',' Frontend Developer ,',' Backend Developer ,',' Web-Developer ,',' Web-Designer ,', ' Graphic Designer , ',' Frontend Developer ,',' Backend Developer ,',' Web-Developer ,',' Web-Designer ,', ' Graphic Designer , ',' Frontend Developer ,',' Backend Developer ,',' Web-Developer ,',' Web-Designer ,', ' Graphic Designer , ',' Frontend Developer ,',' Backend Developer ,',' Web-Developer ,',' Web-Designer ,', ' Graphic Designer , ',' Frontend Developer ,',' Backend Developer ,',' Web-Developer ,',' Web-Designer ,', ' Graphic Designer , ',' Frontend Developer ,',' Backend Developer ,',' Web-Developer ,',' Web-Designer ,', ' Graphic Designer , ',' Frontend Developer ,',' Backend Developer ,',' Web-Developer ,',' Web-Designer ,', ' Graphic Designer , ',' Frontend Developer ,',' Backend Developer ,',' Web-Developer ,',' Web-Designer ,', ' Graphic Designer , ',' Frontend Developer ,',' Backend Developer ,',' Web-Developer ,',' Web-Designer ,', ' Graphic Designer , ',' Frontend Developer ,',' Backend Developer ,',' Web-Developer ,',' Web-Designer ,', ' Graphic Designer , ',' Frontend Developer ,',' Backend Developer ,',' Web-Developer ,',' Web-Designer ,', ' Graphic Designer , ',' Frontend Developer ,',' Backend Developer ,',' Web-Developer ,',' Web-Designer ,', ' Graphic Designer , ',' Frontend Developer ,',' Backend Developer ,',' Web-Developer ,'],
    typeSpeed:30,
  });

  var tablinks = document.getElementsByClassName("tab-links");
  var tabcontents = document.getElementsByClassName("tab-contents");

  function opentab(tabname) {
  // Remove active classes from all tabs
  for (tablink of tablinks) {
      tablink.classList.remove("active-link");
  }
  for (tabcontent of tabcontents) {
      tabcontent.classList.remove("active-tab");
  }
  event.currentTarget.classList.add("active-link");
  document.getElementById(tabname).classList.add("active-tab")

  }


  // JavaScript for Responsive Menu
function openMenu() {
  const sideMenu = document.getElementById('sidemenu');
  sideMenu.classList.add('open');
}

function closeMenu() {
  const sideMenu = document.getElementById('sidemenu');
  sideMenu.classList.remove('open');
}

// Smooth Scrolling for Links (Optional)
document.querySelectorAll('nav ul li a').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();

      const targetId = this.getAttribute('href').substring(1);
      const targetElement = document.getElementById(targetId);

      if (targetElement) {
          targetElement.scrollIntoView({
              behavior: 'smooth',
              block: 'start',
          });
      }

      closeMenu(); // Close menu after click on mobile
  });
});
