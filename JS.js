
var swiper = new Swiper(".mySwiper", {
    // navigation: {
    //     nextEl: ".swiper-button-next",
    //     prevEl: ".swiper-button-prev",
    // },
    autoplay: {
        delay: 2500,
    },
});

document.addEventListener('DOMContentLoaded', function () {
    const observer = new IntersectionObserver((entries) => {
        const ent = entries[0];
        if (!ent.isIntersecting) {
            document.body.classList.add("sticky");
        } else {
            document.body.classList.remove("sticky");
        }
    }, {
        root: null,
        threshold: 0
    });

    const swiperSection = document.querySelector('.mySwiper');
    observer.observe(swiperSection);
});


var swiper = new Swiper(".mySwiper2", {
    slidesPerView: 1,
    spaceBetween: 100,
    loop: true,
    grabCursor: true,
    centeredSlides: true,
    autoplay: {
        delay: 5500,
        // disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        991: {
            slidesPerView: 3,
        },
    },
});

document.getElementById('loginButton').addEventListener('click', function () {
    document.getElementById('loginContainer').style.display = 'flex';
});

document.getElementById('close').addEventListener('click', function () {
    document.getElementById('loginContainer').style.display = 'none';
});


// script.js
// document.getElementById('login').addEventListener('submit', function (event) {
//     event.preventDefault();
//     const password = document.getElementById('password').value;
//     const errorMessage = document.getElementById('error-message');

//     if (password === 'user') {
//         window.location.href = 'about.php';
//     } else if (password === 'admin') {
//         window.location.href = 'Dashboard.php';
//     } else {
//         errorMessage.textContent = 'Invalid password.';
//     }
// });

function day() {
    body.className = 'day';
}
function night() {
    body.className = 'night';
}

