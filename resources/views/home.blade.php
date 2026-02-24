@extends('layouts.layouts');

@section('section')
    <section class="home section-two">
        <div class="home__shadow"></div>
        <div class="home__container container grid">
            <div class="home__data">
                <h3 class="home__greeting">Hello, I'm</h3>
                <h1 class="home__name">
                    Hanza <br />
                    Akhlaq Khan
                </h1>
            </div>

            <div class="home__image">
                <div class="blob-animate"></div>
                <img src="assets/images/myprofile-pic.png" alt="Profile Picture" class="home__profile" draggable="false" />
            </div>

            <div class="home__info">
                <h1 class="home__split">Creative</h1>
                <h3 class="home__profession-1">Software</h3>
                <h3 class="home__profession-2">Engineer</h3>
            </div>

            <div class="home__social">
                <a href="https://github.com/repos?q=owner%3A%40me" target="_blank" class="home__social-link">
                    <i class="ri-github-fill"></i>
                </a>

                <a href="https://ln.run/u5Cp7" target="_blank" class="home__social-link">
                    <i class="ri-linkedin-fill"></i>
                </a>
                <a href="https://www.instagram.com/i.m_hanza?igsh=ZWxhYnB4Zmtqandv" target="_blank"
                    class="home__social-link">
                    <i class="ri-instagram-line"></i>
                </a>
                <a href="https://www.facebook.com/hanzlaa.khan.9" target="_blank" class="home__social-link">
                    <i class="ri-facebook-fill"></i>
                </a>
            </div>

            <a href="assets/pdf/HanzaAkhlaq.pdf" download target="_blank" class="home__cv">My Resume <i
                    class="ri-file-list-2-line"></i></a>
        </div>
    </section>


    {{-- I want the javascript css specially for image to increase the size at 70% when min width=769px --}}
    <script>
        // Function to adjust image size based on screen width
        function adjustImageSize() {
            const image = document.querySelector('.home__profile');
            const homeimage = document.querySelector('.home__image');
            const homedata = document.querySelector('.home__data');



            if (window.innerWidth <= 768) {
                image.style.maxWidth = '66%';
                homedata.style.marginTop = '20%';




            } else if (window.innerWidth >= 1150) {
                image.style.maxWidth = '36%';
                homedata.style.marginTop = '0%';



            }
        }

        // Call the function on load and resize
        window.addEventListener('load', adjustImageSize);
        window.addEventListener('resize', adjustImageSize);
    </script>




    <script>
        // ScrollReveal animations
        ScrollReveal().reveal('.home__data', {
            origin: 'left',
            distance: '50px',
            duration: 1000,
            delay: 200,
            easing: 'ease-in-out',
            reset: true
        });

        ScrollReveal().reveal('.home__image', {
            origin: 'bottom',
            distance: '50px',
            duration: 1000,
            delay: 400,
            easing: 'ease-in-out',
            reset: true
        });

        ScrollReveal().reveal('.home__info', {
            origin: 'right',
            distance: '50px',
            duration: 1000,
            delay: 600,
            easing: 'ease-in-out',
            reset: true
        });

        ScrollReveal().reveal('.home__social, .home__cv', {
            origin: 'bottom',
            distance: '50px',
            duration: 1000,
            delay: 800,
            easing: 'ease-in-out',
            reset: true
        });

        $(function () {

            $('.home__cv').on('click', function (e) {

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
                        const fileUrl = "/pdf/HanzaAkhlaq.pdf";

                        // Create temporary link
                        const link = document.createElement('a');
                        link.href = fileUrl;
                        link.download = "Hanza_Akhlaq_Resume.pdf";
                        document.body.appendChild(link);
                        link.click();
                        document.body.removeChild(link);
                    }
                });
            });
        });
    </script>



@endsection

@section('title')
    Home
@endsection