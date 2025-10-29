const navbar = document.querySelector('.header__navbar')

window.addEventListener('scroll', () => {
        if (this.scrollY > 1) {
            navbar.classList.add('header__navbar--light')
        }

        else {
            navbar.classList.remove('header__navbar--light')
            console.log('конец');
        }
    // console.log(navbar.style.backgroundColor = '#fff');

});