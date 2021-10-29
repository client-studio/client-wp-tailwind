// Navigation toggle
window.addEventListener('load', function () {
      let main_navigation = document.querySelector('#mobile-menu');
      document.querySelector('.menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
      })
});
