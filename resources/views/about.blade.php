<!-- ABOUT -->
@extends('layouts.layouts')


@section('section')
    <section class="about section" id="about">
        <div class="about__shadow"></div>

        <div class="about__container container grid">
            <div class="about__data">
                <h2 class="section__title">
                    <span>Creativity</span>
                    <br />
                    Is My Passion
                </h2>
                <p class="about__description">
                    I’m <b>Hanza Akhlaq</b> a <b>creative</b> and full-stack <b>Laravel</b> developer with a passion for
                    building
                    both visually stunning designs and powerful web applications. I specialize in crafting strategic brand
                    identities, eye-catching graphics, and interactive digital experiences, while also developing robust
                    front-end and back-end solutions using Laravel.

                    With a strong foundation in <b>software engineering and design</b>, I help coaches, educators, and
                    online
                    academies elevate their digital presence. I don’t just create graphics or websites—I build high-impact,
                    user-friendly, and scalable solutions that combine aesthetics with functionality, positioning you as the
                    expert in your field.

                </p>

                <a href="assets/pdf/HanzaAkhlaq.pdf" download target="_blank" class="button">Resume <i
                        class="ri-file-list-2-line"></i></a>
            </div>

            <div class="about__image">
                <div class="blob-animate"></div>
                <div class="blob-animate"></div>
                <img src="assets/images/myprofile-pic.png" alt="Profile Picture" class="about__profile" draggable="false" />
            </div>
        </div>
    </section>
    <br><br>

    <!-- WORK -->
    <section class="work section">
        <h2 class="section__title">
            <span>My Work</span>
            <br />
            Experience
        </h2>

        <div class="work__container container grid">
            <div class="work__tabs">
                <button class="work__button work-active" data-target="#experience">
                    Experience <i class="ri-briefcase-3-line"></i>
                </button>

                <button class="work__button" data-target="#education">
                    Education <i class="ri-graduation-cap-line"></i>
                </button>
            </div>

            <div class="work__area">
                <div class="work__line"></div>

                <!-- Experience -->
                <div class="work__content work-active" data-content id="experience">
                    <div class="work__card">
                        <div class="work__data">
                            <div>
                                <h1 class="work__title">Full Stack Developer</h1>
                                <h3 class="work__subtitle">(Freelance & Personal Projects)</h3>
                            </div>
                            <h2 class="work__year">
                                2+<br />
                                Years
                            </h2>
                        </div>

                        <p class="work__description">
                            Developed full stack web applications using Laravel, PHP,
                            MySQL, JavaScript, and Bootstrap. Built secure authentication
                            systems, REST-based features, and responsive user interfaces.
                            Also created Flutter mobile apps integrated with Firebase.
                        </p>
                    </div>
                </div>

                <!-- Education -->
                <div class="work__content" data-content id="education">
                    <div class="work__card">
                        <div class="work__data">
                            <div>
                                <h1 class="work__title">BS Software Engineering</h1>
                                <h3 class="work__subtitle">University of Poonch Rawalakot</h3>
                            </div>
                            <h3 class="work__year">2022 - 2026</h3>
                        </div>

                        <p class="work__description">
                            Studying core software engineering concepts including
                            data structures, databases, OOP, web development,
                            system design, and software architecture.
                        </p>
                    </div>

                    <div class="work__card">
                        <div class="work__data">
                            <div>
                                <h1 class="work__title">
                                    FSc Pre-<br />
                                    <h2> Engineering</h2>
                                </h1>
                                <h3 class="work__subtitle">Cadet College Pallandri</h3>
                            </div>
                            <h3 class="work__year"> &nbsp;2020 - 2022</h3>
                        </div>

                        <p class="work__description">
                            Built strong analytical and logical thinking skills through
                            mathematics and physics, forming the foundation for software
                            development and problem solving.
                        </p>
                    </div>

                    <div class="work__card">
                        <div class="work__data">
                            <div>
                                <h1 class="work__title">
                                    Matric <br />
                                    (Science)
                                </h1>
                                <h3 class="work__subtitle">
                                    Muslim Hands School Rawalakot
                                </h3>
                            </div>
                            <h3 class="work__year">2020</h3>
                        </div>

                        <p class="work__description">
                            Completed secondary education with focus on science and
                            mathematics, developing early interest in programming
                            and technology.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="services section">
        <h2 class="section__title">What I <span>Offer</span></h2>

        <div class="services__container container grid">

            <div class="services__card services__close">
                <div class="blob"></div>

                <div class="services__data">
                    <h2 class="services__title">Web Development</h2>
                    <p class="services__description">
                        I develop secure, scalable, and high-performance web applications
                        using Laravel, PHP, MySQL, and JavaScript. I build complete
                        systems including authentication, dashboards, admin panels,
                        and database integration.
                    </p>
                </div>

                <div class="services__info">
                    <h3 class="services__subtitle">Focus On</h3>

                    <ul class="services__skills">
                        <li class="services__skill">Laravel Development</li>
                        <li class="services__skill">REST APIs</li>
                        <li class="services__skill">Authentication Systems</li>
                        <li class="services__skill">Database Design (MySQL)</li>
                        <li class="services__skill">Frontend Integration</li>
                        <li class="services__skill">Full Stack Applications</li>
                        <li class="services__skill">Admin Dashboards</li>
                        <li class="services__skill">Performance Optimization</li>
                    </ul>
                </div>

                <button class="services__button">
                    <i class="ri-arrow-down-s-line"></i>
                </button>
            </div>

            <div class="services__card services__close">
                <div class="blob blob-2"></div>

                <div class="services__data">
                    <h2 class="services__title">Mobile App Development</h2>
                    <p class="services__description">
                        I build cross-platform mobile applications using Flutter and Firebase.
                        My apps include authentication, real-time database integration,
                        and modern responsive UI.
                    </p>
                </div>

                <div class="services__info">
                    <h3 class="services__subtitle">Technologies I Use</h3>

                    <ul class="services__skills">
                        <li class="services__skill">Flutter</li>
                        <li class="services__skill">Dart</li>
                        <li class="services__skill">Firebase</li>
                        <li class="services__skill">REST APIs</li>
                    </ul>
                </div>

                <button class="services__button">
                    <i class="ri-arrow-down-s-line"></i>
                </button>
            </div>

        </div>
    </section>

    <script>
        // ScrollReveal animations
        ScrollReveal().reveal('.about__data', {
            origin: 'left',
            distance: '50px',
            duration: 1000,
            delay: 200,
            easing: 'ease-in-out',
            reset: true
        });

        ScrollReveal().reveal('.about__image', {
            origin: 'right',
            distance: '50px',
            duration: 1000,
            delay: 400,
            easing: 'ease-in-out',
            reset: true
        });

        $(function () {

            $('.button').on('click', function (e) {

                e.preventDefault();

                Swal.fire({
                    title: 'Download Resume',
                    text: 'Do you want to download my resume?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, download it!',
                    cancelButtonText: 'No, maybe later'
                }).then((result) => {

                    if (result.isConfirmed) {

                        // Laravel public file path
                        const fileUrl = "assets/pdf/HanzaAkhlaq.pdf";

                        // Create temporary link
                        const link = document.createElement('a');
                        link.href = fileUrl;
                        link.download = "Hanza_Akhlaq.pdf";

                        // Append, click, and remove
                        document.body.appendChild(link);
                        link.click();
                        document.body.removeChild(link);

                        // Success message
                        Swal.fire(
                            'Downloaded!',
                            'Your resume has been downloaded.',
                            'success'
                        );

                    }

                });

            });

        });


    </script>
@endsection

@section('title')
    About Me
@endsection