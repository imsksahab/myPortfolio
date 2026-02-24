<header class="header" id="header">
    <div class="blob-animate"></div>
    {{-- I want to create a hamburger with starting hidden in the desktop but in mobile phones it should be shown --}}

    <nav class="nav container">
        <div class="logoalign" style="display: flex; align-items: center; justify-content: center; gap: 5px;">
            <a href="{{ route('home') }}">
                <div class="sklogo"><img src="assets/images/sk_logo.png" alt="" style="width: 50px; height: 50px;">
                </div>
            </a>
            <a href="{{ route('home') }}" class="nav__logo">Hanza Akhlaq</a>
        </div>

        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="nav__menu">
            <ul class="nav__list">
                <li>
                    <a href="{{ route('home') }}" class="nav__link">Home</a>

                <li>
                    <a href="{{ route('about') }}" class="nav__link">About Me</a>
                </li>
                <li>
                    <a href="{{ route('projects') }}" class="nav__link">Projects</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="nav__link">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<script>
    const hamburger = document.getElementById("hamburger");
    const navMenu = document.querySelector(".nav__menu");


    hamburger.addEventListener("click", (e) => {
        e.stopPropagation();
        navMenu.classList.toggle("active");
    });

    // Close when clicking outside the menu or on Escape
    document.addEventListener("click", (e) => {
        if (navMenu.classList.contains('active') && !navMenu.contains(e.target) && !hamburger.contains(e.target)) {
            navMenu.classList.remove('active');
        }
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && navMenu.classList.contains('active')) {
            navMenu.classList.remove('active');
        }
    });
</script>