<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/fav/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/fav/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/fav/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/img/fav/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('assets/img/fav/safari-pinned-tab.svg')}}" color="#5bbad5">
    <link rel="shortcut icon" href="{{asset('assets/img/fav/favicon.ico')}}">
    <meta name="msapplication-TileColor" content="#d92027">
    <meta name="msapplication-config" content="{{asset('assets/img/fav/browserconfig.xml')}}">
    <meta name="theme-color" content="#d92027">
    <title>eRepair</title>
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-5.2.2-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,400;0,600;0,700;0,800;0,900;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @livewireStyles
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="{{ url('assets/img/logo-horizontal.png') }}" alt="logo" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto align-items-center mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#top">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#why">Why Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#reachus">Reach Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonial">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="mainBtn" href="#repair">Request Repair</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <main data-bs-spy="scroll" data-bs-target="#mainNav">
        <section id="top" class="heroSection sectionPad">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="heroText">
                            <h1>We take care of your <span>Electronics</span></h1>
                            <p class="para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi quos tenetur reiciendis hic molestias impedit sed magni dolore asperiores.</p>
                            <a href="#reachus" class="mainBtn icon"><i class="fa-solid fa-phone"></i> Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ url('assets/img/mainBannerImage.jpg') }}" alt="Electronics Repair" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="sectionPad pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img src="{{ url('assets/img/about-img.jpg') }}" class="img-fluid" alt="About Image">
                    </div>
                    <div class="col-lg-6">
                        <h3 class="mainTitle">About Us</h3>
                        <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, blanditiis repellat quidem veritatis quam esse, accusantium numquam eos enim ipsa accusamus possimus ab quisquam amet unde consectetur adipisci sunt nihil reprehenderit. Beatae quaerat libero impedit? Id unde incidunt beatae repellendus exercitationem, similique mollitia illum neque optio fugiat nobis voluptate ullam, cumque nisi accusantium culpa. Optio harum accusantium doloribus dicta blanditiis non velit nesciunt hic, porro esse iusto magnam culpa, tempora dignissimos ut unde explicabo illum quam quos laborum cumque. Consequatur et similique a. Ipsum quo animi voluptatem nam quaerat provident atque reiciendis laboriosam tenetur hic necessitatibus facere deleniti commodi blanditiis repellendus sapiente quia rerum a quisquam enim nisi eaque, id impedit. Quam, quos quia corporis minima perferendis ad at rem corrupti exercitationem neque hic rerum praesentium aspernatur unde mollitia culpa quasi voluptatum ab natus necessitatibus saepe assumenda enim libero soluta.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="how" class="sectionPad">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="mainTitle">How it Work</h3>
                        <h5 class="smallHead">It's easier than you think. eRepair is here to help</h5>
                    </div>
                    <div class="col-lg-4">
                        <div class="howCard">
                            <img src="{{ url('assets/img/icon-form.svg') }}" alt="form" class="img-fluid">
                            <div class="num"><span>01</span></div>
                            <h6>Fill up form</h6>
                            <p>You can get your repair estimate online by filing out simple details.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="howCard">
                            <img src="{{ url('assets/img/icon-agent.svg') }}" alt="agent" class="img-fluid">
                            <div class="num"><span>02</span></div>
                            <h6>Agent will Get in Touch</h6>
                            <p>After you get a quotation, just schedule an appointment with the experts</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="howCard">
                            <img src="{{ url('assets/img/icon-drop.svg') }}" alt="drop" class="img-fluid">
                            <div class="num"><span>03</span></div>
                            <h6>Drop your Electronics</h6>
                            <p>As per your scheduled time, visit our store. You pay once we fix your device</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="why" class="sectionPad pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="mainTitle">Why Choose us?</h3>
                        <h5 class="smallHead">Here is Some Reason for Keeping with us.</h5>
                        <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, blanditiis repellat quidem veritatis quam esse, accusantium numquam eos enim ipsa accusamus possimus ab quisquam amet unde consectetur adipisci sunt nihil reprehenderit. </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-6 col-md-3 d-grid">
                        <div class="whyCard">
                            <i class="fa-solid fa-ranking-star"></i>
                            <h6>Top Company</h6>
                            <p>There are many variations of passages of lorem ipsum</p>
                        </div>
                        <div class="whyCard">
                            <i class="fa-solid fa-user-tie"></i>
                            <h6>Expert Maker</h6>
                            <p>There are many variations of passages of lorem ipsum</p>
                        </div>
                        <div class="whyCard">
                            <i class="fa-solid fa-award"></i>
                            <h6>Quality Services</h6>
                            <p>There are many variations of passages of lorem ipsum</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-grid position-relative">
                        <img src="{{ url('assets/img/why-choose-us.jpg') }}" alt="why choose us" class="whyImg">
                    </div>
                    <div class="col-6 col-md-3 d-grid">
                        <div class="whyCard">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                            <h6>Best Equipment</h6>
                            <p>There are many variations of passages of lorem ipsum</p>
                        </div>
                        <div class="whyCard">
                            <i class="fa-solid fa-clipboard-check"></i>
                            <h6>100% Satisfaction</h6>
                            <p>There are many variations of passages of lorem ipsum</p>
                        </div>
                        <div class="whyCard">
                            <i class="fa-solid fa-calendar"></i>
                            <h6>2 Monthly Services</h6>
                            <p>There are many variations of passages of lorem ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="repair" class="sectionPad">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <h3 class="mainTitle light">Request Repair</h3>
                        <livewire:customerform />
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <img src="{{ url('assets/img/request-repair.jpg') }}" alt="repairman" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section id="reachus" class="sectionPad">
            <div class="container text-center">
                <h3 class="mainTitle dark center">Connect with the best Repair Shop</h3>
                <img src="{{ url('assets/img/connect-with-us.jpg') }}" alt="connect with us" class="img-fluid">
                <br />
                <a href="" class="mainBtn light icon"><i class="fa-solid fa-phone"></i> +91 99999 99999</a>
            </div>
        </section>
        <section id="testimonial" class="sectionPad">
            <div class="container">
                <h3 class="mainTitle">Client Testimonials</h3>
                <div id="testimonialSlider" class="carousel slide" data-bs-ride="true" data-bs-interval="5000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#testimonialSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#testimonialSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#testimonialSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="p-5">
                                <div class="testimonialCard">
                                    <q class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, blanditiis repellat quidem veritatis quam esse, accusantium numquam eos enim ipsa accusamus possimus ab quisquam amet unde consectetur adipisci sunt nihil reprehenderit. Beatae quaerat libero impedit? Id unde incidunt beatae repellendus exercitationem, similique mollitia illum neque optio fugiat nobis voluptate ullam, cumque nisi accusantium culpa. Optio harum accusantium doloribus dicta blanditiis non velit nesciunt hic, porro esse iusto magnam culpa, tempora dignissimos ut unde explicabo illum quam quos laborum cumque.</q>
                                    <div class="userDetails">
                                        <h5>John Doe</h5>
                                        <p>Subtext</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="p-5">
                                <div class="testimonialCard">
                                    <q class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, blanditiis repellat quidem veritatis quam esse, accusantium numquam eos enim ipsa accusamus possimus ab quisquam amet unde consectetur adipisci sunt nihil reprehenderit. Beatae quaerat libero impedit? Id unde incidunt beatae repellendus exercitationem, similique mollitia illum neque optio fugiat nobis voluptate ullam, cumque nisi accusantium culpa. Optio harum accusantium doloribus dicta blanditiis non velit nesciunt hic, porro esse iusto magnam culpa, tempora dignissimos ut unde explicabo illum quam quos laborum cumque.</q>
                                    <div class="userDetails">
                                        <h5>John Doe</h5>
                                        <p>Subtext</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="p-5">
                                <div class="testimonialCard">
                                    <q class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, blanditiis repellat quidem veritatis quam esse, accusantium numquam eos enim ipsa accusamus possimus ab quisquam amet unde consectetur adipisci sunt nihil reprehenderit. Beatae quaerat libero impedit? Id unde incidunt beatae repellendus exercitationem, similique mollitia illum neque optio fugiat nobis voluptate ullam, cumque nisi accusantium culpa. Optio harum accusantium doloribus dicta blanditiis non velit nesciunt hic, porro esse iusto magnam culpa, tempora dignissimos ut unde explicabo illum quam quos laborum cumque.</q>
                                    <div class="userDetails">
                                        <h5>John Doe</h5>
                                        <p>Subtext</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sliderNav">

                        <button type="button" data-bs-target="#testimonialSlider" data-bs-slide="prev">
                            Previous
                        </button>
                        <button type="button" data-bs-target="#testimonialSlider" data-bs-slide="next" id="textimonialNext">
                            Next
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="topSection">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <img src="{{ url('assets/img/logo-horizontal.png') }}" alt="logo" class="img-fluid logo">
                        <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, blanditiis repellat quidem veritatis quam esse, accusantium numquam eos enim ipsa accusamus possimus ab quisquam amet unde consectetur adipisci sunt nihil reprehenderit. Beatae quaerat libero impedit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, blanditiis repellat quidem veritatis quam esse,</p>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-2 pt-footer">
                        <h4>Quick Links</h4>
                        <ul class="linkList">
                            <li><a href="#top">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#why">Why Us</a></li>
                            <li><a href="#testimonial">Testimonials</a></li>
                            <li><a href="#reachus">Reach Us</a></li>
                            <li><a href="">Privasy Policy</a></li>
                            <li><a href="">Terms and Conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-2 pt-footer">
                        <h4>Social</h4>
                        <ul class="linkList social">
                            <li><a href="">facebook.</a></li>
                            <li><a href="">twitter.</a></li>
                            <li><a href="">justdial.</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-2 pt-footer">
                        <h4>Request Callback</h4>
                        <livewire:callbackform />
                    </div>
                </div>
            </div>
        </div>
        <div class="bottomSection p-1">
            <div class="container text-center">
                Copyright © <script>
                    document.write(new Date().getFullYear())
                </script> eRepair. All rights reserved.
            </div>
        </div>
    </footer>
    <div class="g-recaptcha" data-sitekey="6Le-rtMiAAAAAEt1oxOIO7XCqpaZh14SVWpKbtm-"></div>
    <script src="{{asset('assets/vendor/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    @livewireScripts
    <script src="{{ asset('assets/vendor/livewire-alert/livewire-alert.js') }}"></script>
    <x-livewire-alert::flash />
    <x-livewire-alert::scripts />
</body>

</html>
