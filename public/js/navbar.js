const mobileMenu = document.querySelector('.menu-toggle');
const navList = document.querySelector('.nav-list');

mobileMenu.addEventListener('click', () => {
    console.log("tıklandııııığ")
    navList.classList.toggle('active');
});
