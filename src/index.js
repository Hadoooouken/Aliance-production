const navbar = document.querySelector('.header__navbar')
const logoLight = document.querySelector('.logo__svg--light')
const logoDark = document.querySelector('.logo__svg--dark')

const burgerButton = document.querySelector('[data-js-header-burger-button]')
const mobileOverlay = document.querySelector('[data-js-header-overlay]')

window.addEventListener('resize', () => {
    if (window.innerWidth > 992 && mobileOverlay.classList.contains('is-open')) {
        closeMenu()
    }

});



const lightModeOn = () => {
    navbar.classList.add('header__navbar--light')
    logoLight.style.display = 'none'
    logoDark.style.display = "block"
}

const lightModeOff = () => {
    navbar.classList.remove('header__navbar--light')
    logoLight.style.display = 'block'
    logoDark.style.display = "none"
}

const openMenu = () => {
    document.body.classList.add('is-lock')
    mobileOverlay.classList.add('is-open')
    burgerButton.classList.add('close-menu')
    lightModeOn()
}

const closeMenu = () => {
    document.body.classList.remove('is-lock')
    mobileOverlay.classList.remove('is-open')
    burgerButton.classList.remove('close-menu')
    lightModeOff()
}

window.addEventListener('scroll', () => {
    this.scrollY > 1 ? lightModeOn() : lightModeOff()
});

burgerButton.addEventListener('click', () => {
    mobileOverlay.classList.contains('is-open') ? closeMenu() : openMenu()
})

const swiper = new Swiper('.swiper', {

    slidesPerView: 'auto',
    spaceBetween: 0,
    breakpoints: {
        576: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        },
        1024: {
            slidesPerView: 4,
        },
        1200: {
            slidesPerView: 5,
        },
    },

    speed: 400,
    autoHeight: false,
    loop: true,
    navigation: {
        nextEl: '.slider-button-next',
        prevEl: '.slider-button-prev',
    },
});

const swiperSteps = new Swiper('.swiper__steps', {

    slidesPerView: 'auto',
    spaceBetween: 30,
    speed: 400,
    autoHeight: false,
    loop: true,
    navigation: {
        nextEl: '.js-slider-steps-next',
        prevEl: '.js-slider-steps-prev',
    },
});

const swiperBlog = new Swiper('.swiper__blog', {

    slidesPerView: 1,
    spaceBetween: 30,
    breakpoints: {
        1024: {
            slidesPerView: 2,
        },
    },
    speed: 400,
    autoHeight: false,
    loop: true,
    navigation: {
        nextEl: '.js-slider-blog-next',
        prevEl: '.js-slider-blog-prev',
    },
});















































