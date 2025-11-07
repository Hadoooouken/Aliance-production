const navbar = document.querySelector('.header__navbar')
const logo = document.querySelector('.logo__svg use')
const burgerButton = document.querySelector('[data-js-header-burger-button]')
const mobileOverlay = document.querySelector('[data-js-header-overlay]')


const lightModeOn = () => {
    navbar.classList.add('header__navbar--light')
    logo.href.baseVal = './images/sprites.svg#logo-dark'
}



const lightModeOff = () => {
    navbar.classList.remove('header__navbar--light')
    logo.href.baseVal = './images/sprites.svg#logo-light'
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























































