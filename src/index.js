// const navbar = document.querySelector('.header__navbar')
// const logoLight = document.querySelector('.logo__svg--light')
// const logoDark = document.querySelector('.logo__svg--dark')

// const burgerButton = document.querySelector('[data-js-header-burger-button]')
// const mobileOverlay = document.querySelector('[data-js-header-overlay]')


// // const modal = document.querySelector('.modal')
// // const openModalButtons = document.querySelectorAll('[data-toggle="modal"]')
// // const modalContent = modal.querySelector('.modal__dialog')

// document.addEventListener("click", (event) => {
//     if(!modalContent) return
//     if (
//         event.target.dataset.toggle === "modal" ||
//         event.target.parentNode.dataset.toggle === "modal" ||
//         (!event.composedPath().includes(modalContent) && modal.classList.contains("is-open"))
//     ) {
//         event.preventDefault();
//         modal.classList.toggle("is-open");
//     }
// })


// const closeModalByEsc = (evt) => {

//     if (evt.key === 'Escape' && modal.classList.contains('is-open')) {
//         modal.classList.toggle("is-open");
//     }
// }

// document.addEventListener('keydown', closeModalByEsc)


// // const lightModeOn = () => {
// //     navbar.classList.add('header__navbar--light')
// //     logoLight.style.display = 'none'
// //     logoDark.style.display = "block"
// // }

// // const lightModeOff = () => {
// //     navbar.classList.remove('header__navbar--light')
// //     logoLight.style.display = 'block'
// //     logoDark.style.display = "none"
// // }

// const openMenu = () => {
//     document.body.classList.add('is-lock')
//     mobileOverlay.classList.add('is-open')
//     burgerButton.classList.add('close-menu')
//     lightModeOn()
// }

// const closeMenu = () => {
//     document.body.classList.remove('is-lock')
//     mobileOverlay.classList.remove('is-open')
//     burgerButton.classList.remove('close-menu')
//     lightModeOff()
// }

// window.addEventListener('resize', () => {
//     if (window.innerWidth > 992 && mobileOverlay.classList.contains('is-open')) {
//         closeMenu()
//     }
// });

// const isPageScrolled = () => {
//     return window.scrollY > 1
// }

// window.addEventListener('scroll', () => {
//     isPageScrolled() ? lightModeOn() : lightModeOff()
// });

// burgerButton.addEventListener('click', () => {
//     if (mobileOverlay.classList.contains('is-open')) {
//         closeMenu()
//         isPageScrolled() ? lightModeOn() : lightModeOff()
//     }
//     else {
//         openMenu()
//     }
// })


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
        370: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        768: {
            spaceBetween: 30,

        },
        1000: {
            spaceBetween: 30,
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

























const modal = document.querySelector('.modal')
const openModalButtons = document.querySelectorAll('[data-js-header-modal-button]')
const closeModalButton = modal.querySelector('[data-js-header-close-modal-button]')
const modalContent = modal.querySelector('.modal__dialog')



const navbar = document.querySelector('.header__navbar')
const logoLight = document.querySelector('.logo__svg--light')
const logoDark = document.querySelector('.logo__svg--dark')
const ismainPage = document.body.classList.contains('main-page')


const burgerButton = document.querySelector('[data-js-header-burger-button]')
const mobileOverlay = document.querySelector('[data-js-header-overlay]')


const changeNavbarHeight = (height) => {
    navbar.style.height = height
    console.log(height);
}

const closeModalByEsc = (evt) => {

    if (evt.key === 'Escape' && modal.classList.contains('is-open')) {
        modal.classList.toggle("is-open");
    }
}

const lightModeOn = () => {
    navbar.classList.add('header__navbar--light')

}

const lightModeOff = () => {
    navbar.classList.remove('header__navbar--light')

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





document.addEventListener('keydown', closeModalByEsc)


window.addEventListener('resize', () => {
    if (window.innerWidth > 992 && mobileOverlay.classList.contains('is-open')) {
        closeMenu()
    }
});


window.addEventListener('scroll', () => {
    window.scrollY > 1 ? changeNavbarHeight(`4.75rem`) : changeNavbarHeight('5.72rem') 
    if(ismainPage) {
        window.scrollY > 1  ? lightModeOn() : lightModeOff()
    } 
  
});

document.addEventListener("click", (event) => {
    if (!modalContent) return
    if (
        event.target.dataset.toggle === "modal" ||
        event.target.parentNode.dataset.toggle === "modal" ||
        (!event.composedPath().includes(modalContent) && modal.classList.contains("is-open"))
    ) {
        event.preventDefault();
        modal.classList.toggle("is-open");
    }
})


burgerButton.addEventListener('click', () => {
    if (mobileOverlay.classList.contains('is-open')) {
        closeMenu()
        window.scrollY > 1  ? lightModeOn() : lightModeOff()
    }
    else {
        openMenu()
    }
})





























































