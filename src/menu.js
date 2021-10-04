const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.header_main__nav__menu');
    console.log(burger);
    console.log(nav);
    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
        burger.classList.toggle('opened');
    })
}
navSlide();
