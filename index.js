const navbar = document.querySelector('.header__navbar')
console.log();

window.addEventListener('scroll', () => {
    if (this.scrollY > 1) {
        navbar.classList.add('header__navbar--light')
        navbar.style='borderbottom'
    }

    else {
        navbar.classList.remove('header__navbar--light')
        console.log('конец');
    }
});




