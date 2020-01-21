<nav class="navbar">

    <div class="navbar__logo">
{{--        <a href="/" class="logo__link">bad7pro</a>--}}
        <a href="/" class="logo__link">
{{--            <img class="logo__img" src="/images/BAD7_logo.svg" alt="logo">--}}
            <svg class="logo__img">
                <use xlink:href="/images/BAD7_logo.svg#full_logo"></use>
            </svg>
        </a>
    </div>

    <ul class="navbar__list list">
        <li class="list__element {{ request()->is('services') ? 'list__element--active' : null }}">
            <a href="{{ route('services') }}" class="list__link">Услуги</a>
        </li>
        <li class="list__element {{ request()->is('portfolio') ? 'list__element--active' : null }}">
            <a href="{{ route('portfolio') }}" class="list__link">Работы</a>
        </li>
        <li class="list__element {{ request()->is('contacts') ? 'list__element--active' : null }}">
            <a href="{{ route('contacts') }}" class="list__link">Контакты</a>
        </li>
{{--        <li class="list__element {{ request()->is('vacancies.index') ? 'list__element--active' : null }}">--}}
{{--            <a href="{{ route('vacancies.index') }}" class="list__link">Карьера</a>--}}
{{--        </li>--}}
    </ul>

    <ul class="navbar__socials socials">
        <li class="socials__element">
            <a href="#" class="socials__link" aria-label="Facebook">
                <svg class="socials__facebook">
                    <use xlink:href="/img/symbol/sprite.svg#fb"></use>
                </svg>
            </a>
        </li>
        <li class="socials__element">
            <a href="#" class="socials__link" aria-label="Twitter">
                <svg class="socials__twitter">
                    <use xlink:href="/img/symbol/sprite.svg#twitter"></use>
                </svg>
            </a>
        </li>
        <li class="socials__element">
            <a href="#" class="socials__link" aria-label="Instagram">
                <svg class="socials__instagram">
                    <use xlink:href="/img/symbol/sprite.svg#instagram"></use>
                </svg>
            </a>
        </li>
        <li class="socials__element">
            <a href="#" class="socials__link" aria-label="Youtube">
                <svg class="socials__youtube">
                    <use xlink:href="/img/symbol/sprite.svg#youtube"></use>
                </svg>
            </a>
        </li>
    </ul>

    <div class="navbar__hamburger hamburger">
        <span class="hamburger__element"></span>
    </div>

    <ul class="navbar__contacts">
        <li class="contacts__element">
            <a href="mailto:sales@bad7.pro" class="contacts__link">sales@bad7.pro</a>
        </li>
        <li class="contacts__element">
            <a href="tel:+380675965672" class="contacts__link">+38 (067) 596 56 72</a>
        </li>
    </ul>

</nav>
