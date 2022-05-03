let toggel = document.getElementsByClassName('toggle-btn')[0];
let nav = document.getElementsByClassName('navbar-links')[0];

toggel.addEventListener(('click'), () => {
    nav.classList.toggle('active');
})