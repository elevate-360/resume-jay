<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Jay Chauhan | Portfolio</title>
    <link rel="canonical" href="https://dj-jay.in">
    <meta content="Deadline-driven Full Stack Developer with 3+ years' expertise in PHP, Laravel, React, Vue, Java. Translates concepts into polished web apps, excels in end-to-end development" name="description">
    <meta content="Jay Chauhan" name="keywords">
    <meta name="google-site-verification" content="7l9rvaUEK74Sk3NfrTUgx0ZbIeHoq49BKK_1JwGGjgY" />

    <!-- Favicons -->
    <link href="/favicon.png" rel="icon">
    <link href="/favicon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
    <style>
        #hero {
            background: url("{{ $images['bgImage'] }}") top center;
            width: calc(100% - 300px);
            height: 100vh;
            background-size: cover;
            margin-left: 300px;
        }

        #hero:before {
            content: "";
            /* background: rgba(5, 13, 24, 0.3); */
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1;
        }

        #hero .hero-container {
            position: relative;
            z-index: 2;
            min-width: 300px;
        }

        #hero h1 {
            margin: 0 0 10px 0;
            font-size: 64px;
            font-weight: 700;
            line-height: 56px;
            color: #fff;
        }

        #hero p {
            color: #fff;
            margin-bottom: 50px;
            font-size: 26px;
            font-family: "Poppins", sans-serif;
        }

        #hero p span {
            color: #fff;
            padding-bottom: 4px;
            letter-spacing: 1px;
            border-bottom: 3px solid #149ddd;
        }

        @media (min-width: 1024px) {
            #hero {
                background-attachment: fixed;
            }
        }

        @media (max-width: 768px) {
            #hero h1 {
                font-size: 28px;
                line-height: 36px;
            }

            #hero h2 {
                font-size: 18px;
                line-height: 24px;
                margin-bottom: 30px;
            }
        }

        @media (max-width: 425px) {
            #hero {
            background: url("{{ $images['bgImagePhone'] }}") top center;
            width: 100%;
            height: 100vh;
            background-size: cover;
            margin-left: 0px;
        }
        }
    </style>
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="{{ $images['profileImage'] }}" alt="Jay Chauhan" class="img-fluid rounded-circle">
                <h1 class="text-light"><a
                        href="index.html">{{ $personalDetails['firstname'] . ' ' . $personalDetails['lastname'] }}</a>
                </h1>
                <div class="social-links mt-3 text-center">
                    @foreach ($links as $link)
                        <a href="{{ $link['linkAddress'] }}" target="{{ $link['linkTarget'] == '1' ? '_blank' : '' }}"
                            @if ($link['linkDownload'] == '1') download @endif rel="noreferrer noopener"
                            class="google-plus"><i class="{{ $link['linkIcon'] }}"></i></a>
                    @endforeach
                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
                            <span>Home</span></a></li>
                    <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a>
                    </li>
                    <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                            <span>Resume</span></a></li>
                    <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                            <span>Contact</span></a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style=''>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                    <p>{{ isset($personalDetails['headline1']) ? $personalDetails['headline1'] : '' }}</p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="{{ $images['displayImage'] }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Web Developer &amp; Music Producer.</h3>
                        <p class="fst-italic" style="text-align: justify">
                            {{ $personalDetails['about1'] }}
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                                        <span>{{ $personalDetails['dob'] }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><a
                                                href="https://mail.google.com/mail/u/0/?fs=1&to={{ $personalDetails['email'] }}&tf=cm"
                                                target="_blank"
                                                rel="noopener noreferrer">{{ $personalDetails['email'] }}</a></span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><a
                                                href="tel:+91{{ $personalDetails['phone1'] }}">+91
                                                {{ substr_replace($personalDetails['phone1'], ' ', 5, 0) }}</a></span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><a
                                                href="http://www.google.com/maps/search/?api=1&query=21.219394, 72.772287"
                                                target="_blank" rel="noopener noreferrer">Surat, Gujarat,
                                                India</a></span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                        <span>{{ $personalDetails['age'] }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                        <span>{{ $personalDetails['degree'] }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Alternate Phone:</strong> <span><a
                                                href="tel:+91{{ $personalDetails['phone2'] }}">+91
                                                {{ substr_replace($personalDetails['phone2'], ' ', 5, 0) }}</a></span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                        <span>{{ $personalDetails['freelance'] }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p style="text-align: justify">
                            {{ $personalDetails['about2'] }}
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
            <div class="container">

                <div class="section-title">
                    <h2>Facts</h2>
                </div>

                <div class="row no-gutters">
                    @foreach ($facts as $fact)
                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                            <div class="count-box">
                                <i class="{{ $fact['fIcon'] }}"></i>
                                <span data-purecounter-start="0" data-purecounter-end="{{ $fact['fDigit'] }}"
                                    data-purecounter-duration="3" class="purecounter"></span>
                                <p><strong>{{ $fact['fTitle'] }}</strong> {{ $fact['fDesc'] }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>
                    <p>{{ $personalDetails['skillAbout'] }}</p>
                </div>

                <div class="row skills-content">
                    @php
                        $skillCount = count($skills);
                        $counter = 0;
                    @endphp
                    <div class="col-lg-6" data-aos="fade-up">

                        @for ($i = 0; $i < round(count($skills) / 2, 0); $i++, $counter++)
                            <div class="progress">
                                <span class="skill">

                                    {{ $skills[$counter]['skillTitle'] }} <i
                                        class="val">{{ $skills[$counter]['skillPercentage'] }}%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar"
                                        aria-valuenow="{{ $skills[$counter]['skillPercentage'] }}" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        @for ($i = 0; $i < floor(count($skills) / 2); $i++, $counter++)
                            <div class="progress">
                                <span class="skill">{{ $skills[$counter]['skillTitle'] }} <i
                                        class="val">{{ $skills[$counter]['skillPercentage'] }}%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar"
                                        aria-valuenow="{{ $skills[$counter]['skillPercentage'] }}" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        @endfor

                    </div>

                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Resume</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Sumary</h3>
                        <div class="resume-item pb-0">
                            <h4>{{ $personalDetails['firstname'] . ' ' . $personalDetails['lastname'] }}</h4>
                            <p style="text-align: justify"><em>{{ $personalDetails['about3'] }}</em></p>
                            <ul>
                                <li><a href="{{ $personalDetails['locationLink'] }}" target="_blank"
                                        rel="noopener noreferrer">Surat, Gujarat, India</a></li>
                                <li><a href="tel:+91{{ $personalDetails['phone1'] }}">+91
                                        {{ substr_replace($personalDetails['phone1'], ' ', 5, 0) }}</a></li>
                                <li><a href="https://mail.google.com/mail/u/0/?fs=1&to={{ $personalDetails['email'] }}&tf=cm"
                                        target="_blank" rel="noopener noreferrer">{{ $personalDetails['email'] }}</a>
                                </li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        @foreach ($education as $edu)
                            <div class="resume-item">
                                <h4>{{ $edu['eduTitle'] }}</h4>
                                <h5>{{ date('Y', strtotime($edu['eduStartDate'])) }} -
                                    {{ date('Y', strtotime($edu['eduEndDate'])) }}</h5>
                                <p><em>{{ $edu['eduInstitute'] }}, {{ $edu['eduCity'] }},
                                        {{ $edu['eduCountry'] }}</em></p>
                                <p style="text-align: justify">{{ $edu['eduDesc'] }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Professional Experience</h3>
                        @foreach ($experience as $exp)
                            <div class="resume-item">
                                <h4>{{ $exp['expTitle'] }}</h4>
                                <h5>{{ date('Y', strtotime($exp['expStartDate'])) }} -
                                    {{ $exp['flag'] == '1' ? 'Present' : date('Y', strtotime($exp['expEndDate'])) }}
                                </h5>
                                <p><em>{{ $exp['expCompany'] }}, {{ $exp['expCity'] }}, {{ $exp['expCountry'] }}
                                    </em></p>
                                <ul>
                                    @foreach (explode('::', $exp['expDesc']) as $desc)
                                        <li>{{ $desc }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row" data-aos="fade-in">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p><a href="{{ $personalDetails['locationLink'] }}" target="_blank"
                                        rel="noopener noreferrer">{{ $personalDetails['address-apt'] }},
                                        {{ $personalDetails['address-lm'] }}, {{ $personalDetails['address-city'] }},
                                        {{ $personalDetails['address-state'] }},
                                        {{ $personalDetails['address-country'] }} -
                                        {{ $personalDetails['address-pin'] }}</a>
                                </p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p><a href="https://mail.google.com/mail/u/0/?fs=1&to={{ $personalDetails['email'] }}&tf=cm"
                                        target="_blank" rel="noopener noreferrer">{{ $personalDetails['email'] }}</a>
                                </p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p><a href="tel:+91{{ $personalDetails['phone1'] }}">+91
                                        {{ substr_replace($personalDetails['phone1'], ' ', 5, 0) }}</a></p>
                            </div>

                            <iframe src="{{ $personalDetails['mapLink'] }}" frameborder="0"
                                style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>

                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="/api/contact" method="post" role="form" class="php-email-form">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent.<br>I'll contact you as soon as
                                    possible.<br>Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>{{ date('Y') }}</span></strong>
            </div>
            <div class="credits">
                Developed by <a href="/index">Jay Chauhan</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
