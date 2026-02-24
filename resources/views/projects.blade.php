@extends('layouts.layouts')


@section('section')
    <section class="projects section" id="projects">
        <h2 class="section__title">
            I make Incredible <br />
            <span>Projects</span>
        </h2>

        <div class="projects__container container">
            <div class="projects__swiper swiper">
                <div class="swiper-wrapper">

                    @php
                        $projects = [
                            ['number' => '01', 'type' => 'Web Dev', 'title' => 'Courses Management System', 'description' => 'PHP, MySQL, HTML, CSS, JS', 'icon' => 'ri-code-s-slash-line', 'github' => ' https://github.com/imsksahab/CMS.git', 'color' => '#f6d365, #fda085'],
                            ['number' => '02', 'type' => 'Web Dev', 'title' => 'Car Parking System', 'description' => 'PHP, Bootstrap, JS', 'icon' => 'ri-parking-box-line', 'github' => 'https://github.com/imsksahab/CAR-Parking.git', 'color' => '#a1c4fd, #c2e9fb'],
                            ['number' => '03', 'type' => 'Mobile App', 'title' => 'Food Radar', 'description' => 'Flutter, Dart, Firebase', 'icon' => 'ri-smartphone-line', 'github' => 'https://github.com/imsksahab/Food-Radar-.git', 'color' => '#d4fc79, #96e6a1'],
                            ['number' => '04', 'type' => 'Web Dev', 'title' => 'Veterinary Hospital Management', 'description' => 'PHP, MySQL', 'icon' => 'ri-hospital-line', 'github' => 'https://github.com/imsksahab', 'color' => '#ffecd2, #fcb69f'],
                            ['number' => '05', 'type' => 'Backend', 'title' => 'Laravel Web Applications', 'description' => 'PHP, Laravel, MVC', 'icon' => 'ri-laravel-line', 'github' => ' https://github.com/imsksahab', 'color' => '#a18cd1, #fbc2eb'],
                            ['number' => '06', 'type' => 'Full Stack', 'title' => 'Dynamic Web Applications', 'description' => 'PHP, Laravel, JS, Bootstrap', 'icon' => 'ri-stack-line', 'github' => ' https://github.com/imsksahab', 'color' => '#fad0c4, #ffd1ff'],
                            ['number' => '07', 'type' => 'Software Dev', 'title' => 'Multiple Software Projects', 'description' => 'PHP, Laravel, Flutter', 'icon' => 'ri-apps-2-line', 'github' => 'https://github.com/imsksahab', 'color' => '#84fab0, #8fd3f4'],
                        ];
                    @endphp


                    @foreach($projects as $project)
                        <article class="projects__card swiper-slide">
                            <div class="blob" style="background: linear-gradient(135deg, {{ $project['color'] }});"></div>

                            <div class="projects__number">
                                <h1>{{ $project['number'] }}</h1>
                                <h3>{{ $project['type'] }}</h3>
                            </div>

                            <div class="projects__data">
                                <h1 class="projects__title">{!! nl2br($project['title']) !!}</h1>
                                <p class="projects__subtitle">Technologies used</p>
                                <p class="projects__description">{{ $project['description'] }}</p>
                            </div>

                            <div class="projects__image">
                                <div class="projects__icon-circle"
                                    style="background: linear-gradient(135deg, {{ $project['color'] }});">
                                    <i class="{{ $project['icon'] }}" style="font-size: 40px; color:#fff;"></i>
                                </div>
                                <a href="{{ $project['github'] }}" target="_blank" class="projects__button">
                                    <i class="ri-arrow-right-up-long-line"></i>
                                </a>
                            </div>
                        </article>
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <script>
        // Initialize Swiper
        var swiper = new Swiper('.projects__swiper', {
            slidesPerView: 1,   // show 1 card per slide (full width)
            spaceBetween: 30,
            loop: true,
            pagination: { el: '.swiper-pagination', clickable: true },
        });


        // ScrollReveal animations
        ScrollReveal().reveal('.projects__card', {
            origin: 'bottom',
            distance: '50px',
            duration: 1000,
            delay: 200,
            easing: 'ease-in-out',
            reset: true
        });
    </script>

    <style>
        /* Make icon circle inside card */
        .projects__icon-circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* For mobile phones */
        @media screen and (max-width: 768px) {
            .projects__icon-circle {
                width: 80px;
                height: 80px;
            }
        }
    </style>
@endsection



@section('title')
    Projects
@endsection