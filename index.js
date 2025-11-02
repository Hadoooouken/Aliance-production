const navbar = document.querySelector('.header__navbar')
const logo = document.querySelector('.logo__svg use')


window.addEventListener('scroll', () => {
    if (this.scrollY > 1) {
        navbar.classList.add('header__navbar--light')
        logo.href.baseVal = '/images/sprites.svg#logo-dark'
    }

    else {
        navbar.classList.remove('header__navbar--light')
        logo.href.baseVal = '/images/sprites.svg#logo-light'
        console.log('конец');
    }
});




