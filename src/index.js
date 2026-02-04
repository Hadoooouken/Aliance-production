const modalQuestion = document.querySelector('.modal__question')
const modalSuccess = document.querySelector('.modal--success')
const openModalButtons = document.querySelectorAll('[data-js-header-modal-button]')
const modals = document.querySelectorAll('.modal');
const closeModalButtons = document.querySelectorAll('[data-js-header-close-modal-button]');

const navbar = document.querySelector('.header__navbar')
const logoLight = document.querySelector('.logo__svg--light')
const logoDark = document.querySelector('.logo__svg--dark')
const ismainPage = document.body.classList.contains('main-page')
const pageInner = document.body.classList.contains('page-inner')


const burgerButton = document.querySelector('[data-js-header-burger-button]')
const mobileOverlay = document.querySelector('[data-js-header-overlay]')

const forms = document.querySelectorAll('form')





const closeModalOnEscape = (evt) => {
    if (evt.key === 'Escape') {
        const openModalElement = document.querySelector('.is-open');
        if (openModalElement) {
            closeModal(openModalElement);
        }
    }
};


const closeModalClickOnOverlay = (evt) => {
    if (evt.target.classList.contains('modal')) {
        closeModal(evt.target);
    }
};



const openModal = (modal) => {
    modal.classList.add('is-open');
    document.addEventListener('keydown', closeModalOnEscape);
};

const closeModal = (modal) => {
    modal.classList.remove('is-open');
    document.removeEventListener('keydown', closeModalOnEscape);
};

forms.forEach((form) => {
    const validation = new JustValidate(form, {
        errorFieldCssClass: 'is-invalid',
        focusInvalidField: true,
        validateBeforeSubmitting: true,

    });
    validation
        .addField('[name=username]', [
            {
                rule: 'required',
                errorMessage: "Укажите имя"
            },
            {
                rule: 'maxLength',
                value: 50,
                errorMessage: "Максимально 50 символов"
            },
        ])
        .addField('[name=userphone]', [
            {
                rule: 'required',
                errorMessage: "Укажите телефон"
            },
            {
                rule: 'maxLength',
                value: 20,
                errorMessage: "Максимально 20 символов"
            },

        ])
        .onSuccess((event) => {
            const currentForm = event.target;
            const formData = new FormData(currentForm)
            const sendData = (formData) => {
                fetch(currentForm.getAttribute('action'), {
                    method: currentForm.getAttribute("method"),
                    body: formData,
                }).then((res) => {
                    if (res.ok) {
                        currentForm.reset()
                        closeModal(modalQuestion)
                        openModal(modalSuccess)
                    }
                    console.log(res)
                })
                    .catch((error) => console.log(error))
            };
            sendData(formData)
        });
})


const changeNavbarHeight = (height) => {
    navbar.style.height = height
}


const lightModeOn = () => {
    navbar.classList.add('header__navbar--light')

}

if (!ismainPage) {
    lightModeOn();
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
    if (!ismainPage) {
        lightModeOn();
    }
    else {
        lightModeOff()
    }

}

window.addEventListener('resize', () => {
    if (window.innerWidth > 992 && mobileOverlay.classList.contains('is-open')) {
        closeMenu()
    }
});

window.addEventListener('scroll', () => {
    window.scrollY > 1 ? changeNavbarHeight(`4.75rem`) : changeNavbarHeight('5.72rem')
    if (ismainPage) {
        window.scrollY > 1 ? lightModeOn() : lightModeOff()
    }
});

burgerButton.addEventListener('click', () => {
    if (mobileOverlay.classList.contains('is-open')) {
        closeMenu()
        if (ismainPage)
            window.scrollY > 1 ? lightModeOn() : lightModeOff()
    }
    else {
        lightModeOn()
        openMenu()
    }
})

openModalButtons.forEach((button) => {
    button.addEventListener('click', (evt) => {
        evt.preventDefault()
        openModal(modalQuestion)

    })
})

closeModalButtons.forEach(btn => {
    btn.addEventListener('click', (evt) => {
        const modal = evt.target.closest('.modal');
        closeModal(modal);
    });
});

modals.forEach(modal => {
    modal.addEventListener('mousedown', closeModalClickOnOverlay);
});



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



/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
    /* если вводят семерку, добавляем ей скобку */
    if (str === "7") {
        return "7 (";
    }
    /* если вводят восьмерку, ставим вместо нее +7 ( */
    if (str === "8") {
        return "+7 (";
    }
    /* если пишут девятку, заменяем на +7 (9  */
    if (str === "9") {
        return "7 (9";
    }
    /* в других случаях просто 7 (  */
    return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
    /* Проверяем, что это поле имеет класс phone-mask */
    if (e.target.classList.contains("phone-mask")) {
        /* поле с телефоном помещаем в переменную input */
        const input = e.target;
        /* вставляем плюс в начале номера */
        const value = input.value.replace(/\D+/g, "");
        /* длинна номера 11 символов */
        const numberLength = 11;

        /* Создаем переменную, куда будем записывать номер */
        let result;
        /* Если пользователь ввел 8... */
        if (input.value.includes("+8") || input.value[0] === "8") {
            /* Стираем восьмерку */
            result = "";
        } else {
            /* Оставляем плюсик в поле */
            result = "+";
        }

        /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
        for (let i = 0; i < value.length && i < numberLength; i++) {
            switch (i) {
                case 0:
                    /* в самом начале ставим префикс +7 ( */
                    result += prefixNumber(value[i]);
                    continue;
                case 4:
                    /* добавляем после "+7 (" круглую скобку ")" */
                    result += ") ";
                    break;
                case 7:
                    /* дефис после 7 символа */
                    result += "-";
                    break;
                case 9:
                    /* еще дефис  */
                    result += "-";
                    break;
                default:
                    break;
            }
            /* на каждом шаге цикла добавляем новую цифру к номеру */
            result += value[i];
        }
        /* итог: номер в формате +7 (999) 123-45-67 */
        input.value = result;
    }
});


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
















































































