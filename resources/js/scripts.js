const hamburger = document.querySelector(`.hamburger`);

hamburger.addEventListener(`click`, (e) => {
    e.target.closest(`.hamburger`).classList.toggle(`hamburger--active`);
    e.target.closest(`.navbar`).querySelector('.navbar__list').classList.toggle(`navbar__list--active`);
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
