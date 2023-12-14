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
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="/"><span class="fw-bolder text-primary">Rizky Alamsyah</span></a>
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

        <section class="py-5 mt-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
            </div>
            <div class="container">
                <div class="row row-cols-2 g-3">
                    <div class="col">
                        <div class="card shadow rounded">
                            <img src="{{ asset('assets/motofix.jpg') }}" class="card-img-top"
                                alt="Hollywood Sign on The Hill" />
                            <div class="card-body">
                                <h5 class="card-title">Moto Fix (Bengkel Online)</h5>
                                <p class="card-text">
                                    Moto Fix, an innovative online workshop developed on Laravel with a MySQL database,
                                    redefines the
                                    automotive service experience by offering a hassle-free solution for scheduling
                                    vehicle maintenance
                                    and repairs. With a user-friendly interface, our platform leverages Laravel's power
                                    to ensure a
                                    seamless online service, providing a reliable and transparent system. Additionally,
                                    Moto Fix introduces
                                    a secure online platform integrated with the Midtrans payment gateway for purchasing
                                    high-quality spare
                                    parts, guaranteeing a smooth and secure transaction process. Experience optimal
                                    vehicle performance with
                                    Moto Fix, where technology, convenience, and quality services converge.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow rounded">
                            <img src="{{ asset('assets/CMS.png') }}" class="card-img-top" alt="Moto Fix" />
                            <div class="card-body">
                                <h5 class="card-title">CMS News</h5>
                                <p class="card-text">
                                    CMS App, a Laravel-powered content management system, simplifies news
                                    administration, offering a streamlined platform for creating and organizing articles
                                    with ease. With an intuitive interface and advanced features like categorization and
                                    scheduling, CMS App provides efficient editorial control. Whether on desktop or
                                    mobile, the responsive design ensures seamless news management, making it a
                                    user-friendly solution for content creators and administrators alike.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow rounded">
                            <img src="{{ asset('assets/voting2.png') }}" class="card-img-top" alt="E-Voting" />
                            <div class="card-body">
                                <h5 class="card-title">E-Voting</h5>
                                <p class="card-text">e-Voting, powered by PHP and MySQL, redefines democracy with
                                    innovative features,
                                    including a secure selfie verification method, ensuring heightened security in the
                                    voting process. This
                                    cutting-edge platform prioritizes robust functionality through PHP and data
                                    integrity with MySQL,
                                    providing users with a reliable and efficient voting experience. Its sleek design
                                    promotes accessibility,
                                    catering to both voters and administrators, emphasizing a seamless, transparent, and
                                    secure digital democracy.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow rounded">
                            <img src="{{ asset('assets/flappybird.png') }}" class="card-img-top" alt="Flappy Bird" />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    Flappy Bird Game, developed using a combination of PHP, JavaScript, and other
                                    technologies, brings the classic gaming experience to life. With engaging gameplay
                                    and responsive controls, this project delivers a captivating and enjoyable gaming
                                    session. The incorporation of PHP ensures server-side functionality, while
                                    JavaScript enhances the interactive and dynamic elements of the game. Flappy Bird
                                    Game showcases the potential of web technologies in creating entertaining and
                                    user-friendly gaming applications.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Call to action section-->
        <section class="py-5 bg-gradient-primary-to-secondary text-white">
            <div class="container px-5 my-5">
                <div class="text-center">
                    <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                    <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder"
                        href="{{ route('contact') }}">Contact me</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
