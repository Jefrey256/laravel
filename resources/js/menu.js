document.addEventListener('DOMContentLoaded', function() {
    var menuToggle = document.getElementById('menu-toggle');
    var menuClose = document.getElementById('menu-close');
    var menu = document.getElementById('menu');

    menuToggle.addEventListener('click', function() {
        menu.classList.toggle('translate-x-full');
        menu.classList.toggle('block');
    });

    menuClose.addEventListener('click', function() {
        menu.classList.add('translate-x-full');
        menu.classList.remove('block');
    });
});
