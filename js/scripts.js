document.addEventListener("DOMContentLoaded", function() {
  const menuClick = document.querySelector('.menu-toggle');
  const close = document.querySelector('.menu-toggle-close');
  const open = document.querySelector('.menu-toggle-open');
  const mobileMenu = document.querySelector('.nav-menu');
  const toggleArray = [close, open];

  menuClick.addEventListener('click', function() {
    toggle(toggleArray, mobileMenu);
  })
});

function toggle(toggleArray, mobileMenu) {
  toggleArray.map(function(el) {
    el.classList.toggle('toggle-invisible');
  })
  mobileMenu.classList.toggle('nav-menu-open');
}
