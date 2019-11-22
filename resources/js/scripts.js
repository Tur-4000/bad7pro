const hamburger = document.querySelector(`.hamburger`);

hamburger.addEventListener(`click`, (e) => {
    e.target.closest(`.hamburger`).classList.toggle(`hamburger--active`);
    e.target.closest(`.navbar`).querySelector('.navbar__list').classList.toggle(`navbar__list--active`);
});

try {
    window.$ = window.jQuery = require('jquery');
    $(document).ready(function(){
        console.log('Success!');
    });
} catch (e) {}

require('magnific-popup');

$('.popup-with-form').magnificPopup({
    type: 'inline',
    focus: '#name',
    preloader: false,
    modal: true
});

$(document).on('click', '.popup-modal-dismiss', function(e) {
    e.preventDefault();
    $.magnificPopup.close();
});

// $(document).ready(function () {
//     $('.carousel').owlCarousel({
//         loop: true,
//         margin: 0,
//         nav: true,
//         navText: [],
//         dots: false,
//         items: 5,
//         responsive: {
//             0: {
//                 items: 1
//             },
//             600: {
//                 items: 3
//             },
//             1000: {
//                 items: 5
//             }
//         }
//     });
// });
