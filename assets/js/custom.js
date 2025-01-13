document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.scroll-menu a');
  
    navLinks.forEach(link => {
      link.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({ behavior: 'smooth' });
        }
      });
    });
  });
  
  document.addEventListener('DOMContentLoaded', () => {
    const toggleBtn = document.querySelector('.toggle_btn');
    const dropdownMenu = document.querySelector('.dropdown_menu');
  
    toggleBtn.addEventListener('click', () => {
      dropdownMenu.classList.toggle('open');
    });
  });
  