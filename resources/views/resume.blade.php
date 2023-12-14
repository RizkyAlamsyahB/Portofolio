<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>My Portofolio</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/portfolio.png')}}" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100 bg-light">
    <main class="flex-shrink-0">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Rizky Alamsyah
                    </span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('resume') }}">Resume</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('project') }}">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content-->
        <div class="container px-5 mt-5" style="padding-top: 50px;"> <!-- Adjust the padding-top value as needed -->
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Experience Section-->
                    <section>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h2 class="text-primary fw-bolder mb-0 ">Experience</h2>
                            <!-- Download resume button-->
                            <!-- Note: Set the link href target to a PDF file within your project-->

                        </div>
                        <!-- Experience Card 1-->
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-primary fw-bolder mb-2"> 2023</div>
                                            <div class="small fw-bolder">Ketua Project Tugas Akhir (TA) </div>
                                            <div class="small text-muted">E-Voting</div>
                                            <div class="small text-muted"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div>During July 2023, I had the honor of serving as the Project Leader for the
                                            completion of the Final Project (TA) titled 'E-Voting.' This role allowed me
                                            to lead and significantly contribute to the development of an innovative
                                            e-Voting system. In this position, I was responsible for ensuring the smooth
                                            progress of the project, coordinating the team, and making strategic
                                            decisions to achieve project goals. This experience not only refined my
                                            leadership skills but also provided profound insights into system
                                            development in this digital era.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Experience Card 2-->
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-primary fw-bolder mb-2">2023</div>
                                            <div class="small fw-bolder">Full Stack Web Dev</div>
                                            <div class="small text-muted">Moto Fix</div>

                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div> Moto Fix, my Full Stack Web Development project in 2023, showcases my
                                            expertise in creating a seamless online workshop experience. As the lead
                                            developer, I implemented a secure payment system using Midtrans, providing
                                            users with a smooth and trustworthy transaction process. The project
                                            involves full-stack development, ensuring optimal functionality and a
                                            user-friendly interface for scheduling vehicle maintenance, managing repair
                                            appointments, and purchasing high-quality spare parts. This endeavor
                                            reflects my commitment to delivering innovative and reliable web solutions
                                            for the automotive industry..</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Education Section-->
                    <section>
                        <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                        <!-- Education Card 1-->
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-secondary fw-bolder mb-2">2021 - 2023</div>
                                            <div class="mb-2">
                                                <div class="small fw-bolder">UPN Veteran Jawa Timur</div>
                                                <div class="small text-muted">Surabaya, Indonesia</div>
                                            </div>
                                            <div class="fst-italic">
                                                <div class="small text-muted">S1 Sistem Informasi</div>
                                                <div class="small text-muted">IPK : 3.64</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div>Currently, I am actively exploring various new aspects during my
                                            educational journey at UPN Veteran Jawa Timur, Surabaya, Indonesia. My
                                            primary focus is not solely on achieving measurable academic milestones, but
                                            rather on the spirit of self-exploration and the discovery of new
                                            experiences. With enthusiasm, I seek opportunities to engage in projects and
                                            activities on campus, aiming to gain fresh insights, broaden my knowledge
                                            horizons, and develop a diverse set of skills. I am confident that through
                                            exploration and active involvement, I can unearth hidden potentials and open
                                            doors to new opportunities, enriching both my educational path and personal
                                            growth.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                    <!-- Course Section-->
                    <section>
                        <h2 class="text-secondary fw-bolder mb-4 text-gradient d-inline">Course</h2>
                        <br>
                        <br>
                        <div class="row gx-5">
                            <!-- Course Card 1 -->
                            <div class="col-md-6 mb-5">
                                <div class="card shadow border-0 rounded-4">
                                    <div class="card-body p-5">
                                        <div class="text-secondary fw-bolder mb-2">2023</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">Coding Studio</div>
                                            <div class="small text-muted">Mahir Membuat DB Aplikasi Profesional,
                                                November 2023</div>
                                            <br>
                                            <div class="small text-muted">

                                                <a href="https://codingstudio.id/certificate/75C161A502-75C1240084-75B58412A5"
                                                    target="_blank">Lihat Sertifikat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Course Card 2 -->
                            <div class="col-md-6 mb-5">
                                <div class="card shadow border-0 rounded-4">
                                    <div class="card-body p-5">
                                        <div class="text-secondary fw-bolder mb-2">2023</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">Coding Studio</div>
                                            <div class="small text-muted">Mahir Membuat Website dengan Laravel 9,
                                                November 2023</div>
                                            <br>
                                            <div class="small text-muted">

                                                <a href="https://codingstudio.id/certificate/75C161A502-77DF5C962C-75B58412A5"
                                                    target="_blank">Lihat Sertifikat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <!-- Course Card 3 -->
                            <div class="col-md-12 mb-5">
                                <div class="card shadow border-0 rounded-4">
                                    <div class="card-body p-5">
                                        <div class="text-secondary fw-bolder mb-2">2023</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">Dicoding</div>
                                            <div class="small text-muted">Belajar Prinsip Pemrograman SOLID, September
                                                2023</div>
                                            <br>

                                            <div class="small text-muted">

                                                <a href="https://www.dicoding.com/certificates/QLZ9R16G7P5D"
                                                    target="_blank">Lihat Sertifikat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <!-- Divider-->
                    <div class="pb-5"></div>
                    <!-- Skills Section-->
                    <section>
                        <!-- Skillset Card-->
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <!-- Professional skills list-->
                                <div class="mb-5">
                                    <div class="d-flex align-items-center mb-4">
                                        <div
                                            class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                            <i class="bi bi-tools"></i>
                                        </div>
                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Tools</span>
                                        </h3>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                                        <div class="col mb-4 mb-md-0">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Postman
                                            </div>
                                        </div>
                                        <div class="col mb-4 mb-md-0">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                                Ngrok</div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                                Github</div>
                                        </div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-3">
                                        <div class="col mb-4 mb-md-0">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Vs Code
                                            </div>
                                        </div>
                                        <div class="col mb-4 mb-md-0">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Figma
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                                XAMPP / Laragon</div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row row-cols-1 row-cols-md-3">
                                        <div class="col mb-4 mb-md-0">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">ERD
                                            </div>
                                        </div>
                                        <div class="col mb-4 mb-md-0">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">UML
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Languages list-->
                                <div class="mb-0">
                                    <div class="d-flex align-items-center mb-4">
                                        <div
                                            class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                            <i class="bi bi-code-slash"></i>
                                        </div>
                                        <h3 class="fw-bolder mb-0"><span
                                                class="text-gradient d-inline">Languages</span></h3>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                                        <div class="col mb-4 mb-md-0">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML
                                            </div>
                                        </div>
                                        <div class="col mb-4 mb-md-0">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                                JavaScript</div>
                                        </div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-3">
                                        <div class="col mb-4 mb-md-0">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">PHP
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <br>
                                <!-- Languages list-->
                                <div class="mb-0">
                                    <div class="d-flex align-items-center mb-4">
                                        <div
                                            class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                            <i class="bi bi-tools"></i>
                                        </div>
                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Framework &
                                                Library</span></h3>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                                        <div class="col mb-4 mb-md-0">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Laravel
                                            </div>
                                        </div>
                                        <div class="col mb-4 mb-md-0">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                                Bootstrap
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                                Particle.js</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- API list-->
                                <div class="mb-0">
                                    <div class="d-flex align-items-center mb-4">
                                        <div
                                            class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                            <i class="bi bi-tools"></i>
                                        </div>
                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">API
                                            </span></h3>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                                        <div class="col mb-4 mb-md-0">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                                Midtrans
                                            </div>
                                        </div>
                                        <div class="col mb-4 mb-md-0">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                                Raja Ongkir
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
