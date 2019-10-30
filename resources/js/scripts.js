const hamburger = document.querySelector(`.hamburger`);

hamburger.addEventListener(`click`, (e) => {
    e.target.closest(`.hamburger`).classList.toggle(`hamburger--active`);
    e.target.closest(`.navbar`).querySelector('.navbar__list').classList.toggle(`navbar__list--active`);
});
