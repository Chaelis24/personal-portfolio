<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $title ?? 'Portfolio' }}</title>
    <meta name="description" content="{{ $description ?? 'Website Developer' }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav id="navbar" class="px-4 px-md-5">
        <a href="/"
            class="d-flex align-items-center text-white text-decoration-none fw-bold text-lowercase fs-4 clash-grotesk gap-2">
            <img src="{{ asset('images/logo.png') }}" alt="Chael Logo" width="40" height="40"
                class="rounded-circle object-fit-cover shadow-sm"> <span
                class="clash-grotesk text-gradient">chael</span>
        </a>

        <ul class="d-none d-md-flex list-unstyled mb-0 gap-4 ms-auto">
            <li><a href="#home" class="nav-link-custom">Home</a></li>
            <li><a href="#about" class="nav-link-custom">About</a></li>
            <li><a href="#projects" class="nav-link-custom">Projects</a></li>
            <li><a href="#services" class="nav-link-custom">Services</a></li>
            <li><a href="#contact" class="nav-link-custom">Contact</a></li>
        </ul>
    </nav>

    <main class="container py-5">
        <section id="home"
            class="min-vh-100 d-flex flex-column flex-xl-row align-items-center justify-content-between py-5 position-relative">
            <div class="bg-blob top-0 start-0 translate-middle"></div>
            <div class="col-xl-6">
                <div class="d-flex gap-2 mb-4">
                    <span class="Home_pill">PHP</span>
                    <span class="Home_pill">MySQL</span>
                    <span class="Home_pill">Bootstrap</span>
                    <span class="Home_pill">Laravel</span>
                    <span class="Home_pill">Tailwind CSS</span>
                    <span class="Home_pill">Git</span>
                </div>
                <h1 class="display-1 fw-bold tracking-tighter text-white">
                    Hello, I'm<br><span class="clash-grotesk text-gradient">Michael.</span>
                </h1>
                <p class="lead text-secondary mt-3 fs-4">Information Technology Student.</p>
                <div class="d-flex gap-3 pt-3">
                    <a href="mailto:michaelfarinas297@gmail.com"
                        class="btn btn-primary btn-lg px-4 py-3 fw-medium clash-grotesk">Get in touch <i
                            class="bi bi-chevron-right ms-1"></i></a>
                    <a href="#about" class="btn btn-outline-light btn-lg px-4 py-3 fw-medium clash-grotesk">Learn
                        more</a>
                </div>
            </div>
            <div class="col-xl-6 mt-5 mt-xl-0 d-flex justify-content-center">
                <div id="image-container" class="w-100 overflow-hidden"
                    style="height: 400px; background: rgba(255,255,255,0.02); border-radius: 20px; border: 1px dashed rgba(255,255,255,0.1);">

                    <img src="{{ asset('images/chael.jpg') }}" alt="Michael's Profile"
                        class="w-100 h-100 object-fit-cover">

                </div>
            </div>
        </section>

        <section id="about" class="py-5">
            <div class="max-w-6xl">
                <h2 class="display-6 fw-light lh-base text-white py-5">
                    I'm an <span class="text-white fw-bold">Aspiring Full-Stack Developer</span> currently
                    deep-diving into
                    <span class="text-white text-decoration-underline">
                        <a href="https://laravel.com/docs/12.x/installation">
                            Laravel
                        </a></span>
                    Framework and Backend
                    Architecture.
                    I enjoy building functional web applications while constantly refining my
                    skills in PHP, MySQL, and modern frontend frameworks.
                </h2>
                <div class="row g-4 mt-4 text-center text-md-start">
                    <div class="col-6 col-md-4">
                        <div class="clash-grotesk text-gradient display-4 fw-bold">1</div>
                        <div class="text-secondary">Year of experience</div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="clash-grotesk text-gradient display-4 fw-bold">2</div>
                        <div class="text-secondary">Project completed</div>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="py-5 position-relative overflow-hidden">
            <span class="text-gradient clash-grotesk fw-semibold small">✨ Projects</span>

            <div id="projectCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="card glass-card h-100 border-0 p-3">
                                    <div class="position-relative overflow-hidden rounded-3 ratio ratio-16x9">
                                        <img src="{{ asset('images/shopverse.png') }}" alt="ShopVerse Project"
                                            class="img-fluid w-100 h-100 object-fit-cover card-img-hover">
                                    </div>
                                    <div class="card-body px-0 pt-4">
                                        <div class="d-flex gap-2 mb-2">
                                            <span
                                                class="badge bg-primary-subtle text-primary border border-primary-subtle">Laravel</span>
                                            <span
                                                class="badge bg-primary-subtle text-primary border border-primary-subtle">MySQL</span>
                                            <span
                                                class="badge bg-primary-subtle text-primary border border-primary-subtle">PHP
                                                CSS</span>
                                            <span
                                                class="badge bg-primary-subtle text-primary border border-primary-subtle">Tailwind
                                                CSS</span>
                                        </div>
                                        <h3 class="h5 fw-bold text-white mb-2">ShopVerse</h3>
                                        <p class="text-secondary small">Complete e-commerce flow from cart to checkout.
                                        </p>
                                    </div>
                                    <div class="card-footer bg-transparent border-0 px-0 mt-auto">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shopverseModal"
                                            class="text-decoration-none text-primary fw-bold small text-uppercase stretched-link">
                                            View Project <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card glass-card h-100 border-0 p-3">
                                    <div class="position-relative overflow-hidden rounded-3 ratio ratio-16x9">
                                        <img src="{{ asset('images/top-link-vote.png') }}" alt="TopLinkVote Project"
                                            class="img-fluid w-100 h-100 object-fit-cover card-img-hover">
                                    </div>
                                    <div class="card-body px-0 pt-4">
                                        <div class="d-flex gap-2 mb-2">
                                            <span
                                                class="badge bg-primary-subtle text-primary border border-primary-subtle">Laravel
                                                Livewire</span>
                                            <span
                                                class="badge bg-primary-subtle text-primary border border-primary-subtle">MySQL</span>
                                            <span
                                                class="badge bg-primary-subtle text-primary border border-primary-subtle">Javascript</span>
                                            <span
                                                class="badge bg-primary-subtle text-primary border border-primary-subtle">PHP</span>
                                            <span
                                                class="badge bg-primary-subtle text-primary border border-primary-subtle">Tailwind
                                                CSS</span>
                                        </div>
                                        <h3 class="h5 fw-bold text-white mb-2">Top Link-Vote</h3>
                                        <p class="text-secondary small">Interactive voting system
                                        </p>
                                    </div>
                                    <div class="card-footer bg-transparent border-0 px-0 mt-auto">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#voteModal"
                                            class="text-decoration-none text-primary fw-bold small text-uppercase stretched-link">
                                            View Project <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="py-5">
            <div class="row g-4 align-items-stretch">
                <div class="col-xl-4">
                    <span class="text-gradient clash-grotesk fw-semibold small d-block mb-2">✨ Services</span>
                    <h2 class="display-5 fw-bold text-white">I got you.</h2>
                    <p class="text-secondary">Backend solutions for your digital needs.</p>
                </div>
                {{-- <div class="col-xl-4 col-md-6 d-flex">
                    <div class="card glass-card p-4 p-lg-5 w-100 rounded-4">
                        <div class="icon-box d-flex align-items-center justify-content-center mb-4"
                            style="width: 55px; height: 55px; background: rgba(13, 110, 253, 0.15); border-radius: 12px; border: 1px solid rgba(13, 110, 253, 0.3);">
                            <i class="bi bi-window-sidebar text-primary fs-3"></i>
                        </div>
                        <h4 class="h5 text-white fw-bold mb-3">Frontend Dev</h4>
                        <p class="text-secondary small">Responsive and modern UI/UX using Bootstrap 5.</p>
                    </div>
                </div> --}}
                <div class="col-xl-4 col-md-6 d-flex">
                    <div class="card glass-card p-4 p-lg-5 w-100 rounded-4">
                        <div class="icon-box d-flex align-items-center justify-content-center mb-4"
                            style="width: 55px; height: 55px; background: rgba(0, 255, 170, 0.1); border-radius: 12px; border: 1px solid rgba(0, 255, 170, 0.2);">
                            <i class="bi bi-hdd-network text-info fs-3"></i>
                        </div>
                        <h4 class="h5 text-white fw-bold mb-3">Backend Dev</h4>
                        <p class="text-secondary small">Database management using Laravel</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="py-5 my-5">
            <div class="glass-card rounded-4 p-4 p-md-5 mx-auto"
                style="max-width: 800px; background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.1); backdrop-filter: blur(10px);">

                <div class="text-center mb-5">
                    <h2 class="display-4 fw-bold mb-3 text-white">Let's work <span
                            class="text-gradient clash-grotesk">together.</span></h2>
                    <p class="text-secondary">Send me a message and I'll get back to you as soon as possible.</p>
                </div>

                @if (session('success'))
                    <div id="success-alert"
                        class="alert alert-success bg-success text-white border-0 alert-dismissible fade show"
                        role="alert" style="background-opacity: 0.2;">
                        <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif

                <form action="/contact-submit" method="POST">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="name" class="form-label text-white-50 small fw-medium mb-1">Name</label>
                            <input type="text"
                                class="form-control shadow-none text-white px-3 py-2 @error('name') border-danger @enderror"
                                id="name" name="name" placeholder="Your name.." required
                                value="{{ old('name') }}"
                                style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                            @error('name')
                                <div class="text-danger small mt-1"><i
                                        class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label text-white-50 small fw-medium mb-1">Email</label>
                            <input type="email"
                                class="form-control shadow-none text-white px-3 py-2 @error('email') border-danger @enderror"
                                id="email" name="email" placeholder="user@example.com" required
                                value="{{ old('email') }}"
                                style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                            @error('email')
                                <div class="text-danger small mt-1"><i
                                        class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label for="subject"
                                class="form-label text-white-50 small fw-medium mb-1">Subject</label>
                            <input type="text"
                                class="form-control shadow-none text-white px-3 py-2 @error('subject') border-danger @enderror"
                                id="subject" name="subject" placeholder="Project Inquiry" required
                                value="{{ old('subject') }}"
                                style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                            @error('subject')
                                <div class="text-danger small mt-1"><i
                                        class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label for="message"
                                class="form-label text-white-50 small fw-medium mb-1">Message</label>
                            <textarea class="form-control shadow-none text-white px-3 py-2 @error('message') border-danger @enderror"
                                id="message" name="message" rows="5" placeholder="Tell me about your project..." required
                                style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="text-danger small mt-1"><i
                                        class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 text-center mt-4 pt-2">
                            <button type="submit"
                                class="btn btn-primary btn-lg px-5 py-3 shadow-lg fw-bold w-100 clash-grotesk">
                                Send Message <i class="bi bi-send ms-2"></i>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </section>
    </main>

    <div class="modal fade" id="shopverseModal" tabindex="-1" aria-labelledby="shopverseModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content text-white"
                style="background: rgba(20, 20, 20, 0.95); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                <div class="modal-header border-bottom border-white border-opacity-10">
                    <h5 class="modal-title fw-bold clash-grotesk" id="shopverseModalLabel">ShopVerse</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="ratio ratio-16x9 rounded-3 overflow-hidden mb-4">
                        <img src="{{ asset('images/shopverse.png') }}" alt="ShopVerse Details"
                            class="w-100 h-100 object-fit-cover">
                    </div>

                    <div class="d-flex gap-2 mb-3">
                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle">Laravel</span>
                        <span class="badge bg-info-subtle text-info border border-info-subtle">MySQL</span>
                    </div>

                    <h5 class="fw-bold mt-4 mb-2">About the Project</h5>
                    <p class="text-secondary">
                        ShopVerse is a complete e-commerce platform demonstrating a seamless flow from adding products
                        to the cart up to the checkout process. It handles user authentication, product management, and
                        dynamic cart updates.
                    </p>
                    <h5 class="fw-bold mt-4 mb-2">My Role</h5>
                    <p class="text-secondary">
                        Built the entire backend architecture and designed the database
                        schema.
                    </p>
                </div>
                <div class="modal-footer border-top border-white border-opacity-10">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                    <a href="https://github.com/Chaelis24/shopverse" target="_blank" class="btn btn-primary">
                        <i class="bi bi-github me-2"></i>View Source
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="voteModal" tabindex="-1" aria-labelledby="voteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content text-white"
                style="background: rgba(20, 20, 20, 0.95); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                <div class="modal-header border-bottom border-white border-opacity-10">
                    <h5 class="modal-title fw-bold clash-grotesk" id="shopverseModalLabel">Top Link-Vote</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="ratio ratio-16x9 rounded-3 overflow-hidden mb-4">
                        <img src="{{ asset('images/top-link-vote.png') }}" alt="TopLinkVote Details"
                            class="w-100 h-100 object-fit-cover">
                    </div>

                    <div class="d-flex gap-2 mb-3">
                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle">Laravel
                            Livewire</span>
                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle">MySQL</span>
                        <span
                            class="badge bg-primary-subtle text-primary border border-primary-subtle">JavaScript</span>
                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle">PHP</span>
                    </div>

                    <h5 class="fw-bold mt-4 mb-2">About the Project</h5>
                    <p class="text-secondary">
                        Top Link-Vote is a dynamic voting platform built to provide a secure and intuitive user
                        experience.
                        It enables users to participate in voting polls with real-time interactivity, ensuring data
                        integrity and smooth navigation from candidate selection to vote submission.
                    </p>
                    <h5 class="fw-bold mt-4 mb-2">My Role</h5>
                    <p class="text-secondary">
                        I spearheaded the full-stack development of the platform, including the design of a scalable
                        database schema to handle poll data and voting logic. I also utilized Laravel Livewire to
                        create a reactive, fast-loading interface that handles user inputs seamlessly.
                    </p>
                </div>
                <div class="modal-footer border-top border-white border-opacity-10">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                    <a href="https://github.com/Chaelis24/Top-Link-Vote.git" target="_blank" class="btn btn-primary">
                        <i class="bi bi-github me-2"></i>View Source
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer class="border-top border-white border-opacity-10 mt-5">
        <div class="container d-flex justify-content-between align-items-center py-4">
            <p class="small text-secondary mb-0">Made with ❤️ by <span class="text-white">Michael</span></p>
            <div class="d-flex gap-3">
                <a href="https://github.com/Chaelis24" target="_blank" class="text-secondary"><i
                        class="bi bi-github"></i></a>
                <a href="https://facebook.com/morii.aimyon" target="_blank" class="text-secondary"><i
                        class="bi bi-facebook"></i></a>
                <a href="https://tiktok.com/@aimii.mori" target="_blank" class="text-secondary"><i
                        class="bi bi-tiktok"></i></a>
                <a href="https://instagram.com/bckbrnr.chael" target="_blank" class="text-secondary"><i
                        class="bi bi-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
