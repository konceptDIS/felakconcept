@extends('layout')

@section('content')
    <div id="page" class="site">
        <section class="main-slider-one">

            <div class="">
                <div class="main-slider-one__carousel cleenhearts-owl__carousel owl-carousel" data-owl-options='{
                "loop": true,
                "animateOut": "fadeOut",
                "animateIn": "fadeIn",
                "items": 1,
                "autoplay": true,
                "autoplayTimeout": 7000,
                "smartSpeed": 15000,
                "autoplayHoverPause": true,
                "nav": false,
                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                "dots": true,
                "margin": 0
                }'>
                    <div class="item">
                        <div class="main-slider-one__item">
                            <div class="main-slider-one__bg" style="background-image: url(images/slider/slide1.jpg);"></div>

                            <div class="main-slider-one__content">
                                <h2 class="main-slider-one__title">
                                    <span class="main-slider-one__title__text">Expert Solutions in Consultancy</span><br>
                                    <span class="main-slider-one__title__text slider-text-2">Felak Concept Limited (FCL) is an expert consortium offering a range of world class consultancy, training and project management services to private and public sector clients.</span>
                                </h2><!-- slider-title -->
                                <div class="main-slider-one__btn">
                                    <div class="ot-button">
                                        <a href="{{route('about')}}" class="octf-btn octf-btn-main cleenhearts-btn">
                                            See More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- item -->
                    <div class="item">
                        <div class="main-slider-one__item">
                            <div class="main-slider-one__bg" style="background-image: url(images/slider/procurement.jpg);"></div>

                            <div class="main-slider-one__content">

                                <h2 class="main-slider-one__title">
                                    <span class="main-slider-one__title__text">Expert Solutions in Project Management</span><br>
                                    <span class="main-slider-one__title__text slider-text-2">Felak Concept Limited (FCL) is an expert consortium offering a range of world class consultancy, training and project management services to private and public sector clients.</span>
                                </h2><!-- slider-title -->

                                <div class="main-slider-one__btn">
                                    <div class="ot-button">
                                        <a href="{{route('about')}}" class="octf-btn octf-btn-main cleenhearts-btn">
                                            See More
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div><!-- item -->
                    <div class="item">
                        <div class="main-slider-one__item">
                            <div class="main-slider-one__bg" style="background-image: url(images/slider/training.jpg);"></div>

                            <div class="main-slider-one__content">

                                <h2 class="main-slider-one__title">
                                    <span class="main-slider-one__title__text">Expert Training Services</span><br>
                                    <span class="main-slider-one__title__text slider-text-2">Felak Concept Limited (FCL) is an expert consortium offering a range of world class consultancy, training and project management services to private and public sector clients.</span>
                                </h2><!-- slider-title -->
                                <div class="main-slider-one__btn">
                                    <div class="ot-button">
                                        <a href="{{route('about')}}" class="octf-btn octf-btn-main cleenhearts-btn">
                                            See More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- item -->
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="space-60"></div>
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-5 mb-lg-0">
                        <div class="main-about-img">
                            <img src="images/image1-home1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="ot-heading">
                            <span class="is_highlight">who we are</span>
                            <h3 class="main-head">Welcome To Felak Concept Limited</h3>
                        </div>
                        <div class="space-20"></div>
                        <div class="space-2"></div>
                        <p>
                            Felak Concept Limited (FCL) is an expert consortium offering a
                            range of world class consultancy, training and project
                            management services to private and public sector clients.
                            Established in 2000, FCL has the requisite experience and a team
                            of vastly knowledgeable experts in services and consultancy.
                        </p>
                        <div class="space-20"></div>
                        <div class="ot-button">
                            <a href="{{route('about')}}" class="octf-btn octf-btn-main">
                                See More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="space-60 d-none d-md-block"></div>
                <div class="space-60"></div>
            </div>
        </section>
        <section class="our-industris">
            <div class="container">
                <div class="space-60 d-none d-md-block"></div>
                <div class="space-60"></div>
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 text-center">
                        <div class="ot-heading">
                            <span class="is_highlight">services</span>
                            <h3 class="main-head">Our Services</h3>
                        </div>
                        <div class="space-20"></div>
                        <p class="px-xl-5"></p>
                    </div>
                </div>
                <div class="row icon-box-main mx-0">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon-main">
                                <i class="fa-solid fa-anchor"></i>
                            </div>
                            <div class="content-box">
                                <h6 class="title-box">
                                    Marine Advisory Services And Consultancy
                                </h6>
                                <p>
                                    At FCL, we offer digital solutions, consultancy services and
                                    human resource management to allow marine and energy
                                    industries optimally realize their goal and objectives.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon-main">
                                <i class="fa-solid fa-oil-well"></i>
                            </div>
                            <div class="content-box">
                                <h6 class="title-box">Port Masterplan Development</h6>
                                <p>
                                    FCL offers a demand driven port masterplan development using
                                    a multidisciplinary approach from professional and technical
                                    experts.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon-main">
                                <i class="fa-solid fa-flask"></i>
                            </div>
                            <div class="content-box">
                                <h6 class="title-box">Total Water Management And Solution</h6>
                                <p>
                                    We offer sustainable water management services and treatment
                                    solutions to communities that meets national and
                                    international environmental standards.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon-main">
                                <i class="fa-solid fa-clipboard-list"></i>
                            </div>
                            <div class="content-box">
                                <h6 class="title-box">Planning, Design And Architecture</h6>
                                <p>
                                    FCL offers digital architectural design services, space
                                    planning, implementation and infrastructural project
                                    executions. We also ensure effective partnership with
                                    cities/urban planners etc.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon-main">
                                <i class="fa-solid fa-calculator"></i>
                            </div>
                            <div class="content-box">
                                <h6 class="title-box">Procurement And General Services</h6>
                                <p>
                                    We use transactional-based model to offer trusted services
                                    on provision of goods and products, spanning across various
                                    industries; Oil and Gas, Marine, Construction and other
                                    related sectors,
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon-main">
                                <i class="fa-solid fa-chalkboard-user"></i>
                            </div>
                            <div class="content-box">
                                <h6 class="title-box">Training And Development</h6>
                                <p>
                                    We adopt an innovative approach to offer employees’ training
                                    and development, targeted at enhancing skills, attitudes,
                                    and performance to result in improved employee and
                                    organization performance.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-60 d-none d-md-block"></div>
                <div class="space-60"></div>
            </div>
        </section>
        <section class="consulting-priorities">
            <div class="container">
                <div class="space-90"></div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="consulting-priorities-desc">
                            <div class="ot-heading">
                                <span class="is_highlight">why choose us</span>
                                <h3 class="main-head">
                                    We have developed easily executable strategic frameworks for
                                    each of our services
                                </h3>
                            </div>
                            <div class="space-20"></div>
                            <div class="space-2"></div>
                            <div class="icon-list d-flex">
                                <div class="icon-main">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 515.556 515.556">
                                        <path
                                            d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="content-box">
                                    <h6 class="title-box">Quality Delivery</h6>
                                    <p>
                                        We constantly monitor and enhance the quality of our
                                        services and delivery techniques to surpass client’
                                        expectations
                                    </p>
                                </div>
                            </div>
                            <div class="space-10"></div>
                            <div class="icon-list d-flex">
                                <div class="icon-main">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 515.556 515.556">
                                        <path
                                            d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="content-box">
                                    <h6 class="title-box">Smart Technology</h6>
                                    <p>
                                        We engage in only activities that facilitates employee,
                                        partner and stakeholders’ wellbeing.
                                    </p>
                                </div>
                            </div>
                            <div class="space-10"></div>
                        </div>
                    </div>
                </div>
                <div class="space-90"></div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="space-60"></div>
                <div class="space-60 d-none d-md-block"></div>
                <div class="ot-heading text-center">
                    <span class="is_highlight">portfolio</span>
                    <h3 class="main-head">Our Projects</h3>
                </div>
                <div class="space-50"></div>
                <div class="project-filter-wrapper project-consulting">
                    <div class="projects-grid pf_3_cols style-2 img-scale no-icon">
                        <div class="grid-sizer"></div>
                        <div class="project-item category-15">
                            <div class="projects-box">
                                <div class="projects-thumbnail" data-src="images/projects/project1.jpg">
                                    <a href="portfolio-details-1.html">
                                        <img src="images/projects/project1.jpg">
                                    </a>
                                    <span class="overlay">
                                        <i class="ot-flaticon-signs">
                                        </i>
                                    </span>
                                </div>
                                <div class="portfolio-info">
                                    <a href="portfolio-details-1.html" class="overlay"></a>
                                    <div class="portfolio-info-inner">
                                        <a href="portfolio-details-1.html" class="plus">
                                            <i class="ot-flaticon-signs">
                                            </i>
                                        </a>
                                        <h5>
                                            <a class="title-link" href="portfolio-details-1.html">
                                                Transaction Advisory/Consultancy Services on the Ibom
                                                Deep Sea Port
                                            </a>
                                        </h5>
                                        <p class="portfolio-cates">
                                            <a href="#">Ministry of Transport, Akwa-Ibom State</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="project-item category-17">
                            <div class="projects-box">
                                <div class="projects-thumbnail" data-src="images/projects/project-2.jpg">
                                    <a href="portfolio-details-1.html">
                                        <img src="images/projects/project-2.jpg">
                                    </a>
                                    <span class="overlay">
                                        <i class="ot-flaticon-signs">
                                        </i>
                                    </span>
                                </div>
                                <div class="portfolio-info">
                                    <a href="portfolio-details-1.html" class="overlay"></a>
                                    <div class="portfolio-info-inner">
                                        <a href="portfolio-details-1.html" class="plus">
                                            <i class="ot-flaticon-signs">
                                            </i>
                                        </a>
                                        <h5>
                                            <a class="title-link" href="portfolio-details-1.html">Construction of
                                                Motorized Borehole
                                            </a>
                                        </h5>
                                        <p class="portfolio-cates">
                                            <a href="#">Nasarawa State</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="project-item category-16">
                            <div class="projects-box">
                                <div class="projects-thumbnail" data-src="images/projects/project-3.jpg">
                                    <a href="portfolio-details-1.html">
                                        <img src="images/projects/project-3.jpg">
                                    </a>
                                    <span class="overlay">
                                        <i class="ot-flaticon-signs">
                                        </i>
                                    </span>
                                </div>
                                <div class="portfolio-info">
                                    <a href="portfolio-details-1.html" class="overlay"></a>
                                    <div class="portfolio-info-inner">
                                        <a href="portfolio-details-1.html" class="plus">
                                            <i class="ot-flaticon-signs">
                                            </i>
                                        </a>
                                        <h5>
                                            <a class="title-link" href="portfolio-details-1.html">Provision of Solar
                                                Powered Street Light
                                            </a>
                                        </h5>
                                        <p class="portfolio-cates">
                                            <a href="#">Akwa-Ibom State</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="project-item category-20">
                            <div class="projects-box">
                                <div class="projects-thumbnail" data-src="images/projects/project-4.jpg">
                                    <a href="portfolio-details-1.html">
                                        <img src="images/projects/project-4.jpg">
                                    </a>
                                    <span class="overlay">
                                        <i class="ot-flaticon-signs">
                                        </i>
                                    </span>
                                </div>
                                <div class="portfolio-info">
                                    <a href="portfolio-details-1.html" class="overlay"></a>
                                    <div class="portfolio-info-inner">
                                        <a href="portfolio-details-1.html" class="plus">
                                            <i class="ot-flaticon-signs">
                                            </i>
                                        </a>
                                        <h5>
                                            <a class="title-link" href="portfolio-details-1.html">
                                                Purchase and Deployment of Anti-Corrosive Materials
                                                Warri Docky Ward
                                            </a>
                                        </h5>
                                        <p class="portfolio-cates">
                                            <a href="#">Warri, Delta State</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="project-item category-19">
                            <div class="projects-box">
                                <div class="projects-thumbnail" data-src="images/projects/project-6.jpg">
                                    <a href="portfolio-details-1.html">
                                        <img src="images/projects/project-5.jpg">
                                    </a>
                                    <span class="overlay">
                                        <i class="ot-flaticon-signs">
                                        </i>
                                    </span>
                                </div>
                                <div class="portfolio-info">
                                    <a href="portfolio-details-1.html" class="overlay"></a>
                                    <div class="portfolio-info-inner">
                                        <a href="portfolio-details-1.html" class="plus">
                                            <i class="ot-flaticon-signs">
                                            </i>
                                        </a>
                                        <h5>
                                            <a class="title-link" href="portfolio-details-1.html">
                                                Revenue Collections Investigation and Recovery of
                                                Unremitted Taxes
                                            </a>
                                        </h5>
                                        <p class="portfolio-cates">
                                            <a href="#">Akwa-Ibom State</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="project-item category-19">
                            <div class="projects-box">
                                <div class="projects-thumbnail" data-src="images/projects/project-5.jpg">
                                    <a href="portfolio-details-1.html">
                                        <img src="images/projects/project-6.jpg">
                                    </a>
                                    <span class="overlay">
                                        <i class="ot-flaticon-signs">
                                        </i>
                                    </span>
                                </div>
                                <div class="portfolio-info">
                                    <a href="portfolio-details-1.html" class="overlay"></a>
                                    <div class="portfolio-info-inner">
                                        <a href="portfolio-details-1.html" class="plus">
                                            <i class="ot-flaticon-signs">
                                            </i>
                                        </a>
                                        <h5>
                                            <a class="title-link" href="portfolio-details-1.html">
                                                Provision of Furniture and Equipment for
                                                Comprehensive Skills Acquisition and Recreational
                                                Centre
                                            </a>
                                        </h5>
                                        <p class="portfolio-cates">
                                            <a href="#">Uyo LGA, Akwa Ibom North-East</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-50"></div>
                <div class="ot-button text-center">
                    <a href="#" class="octf-btn octf-btn-main">Explore More</a>
                </div>
                <div class="space-60"></div>
                <div class="space-60 d-none d-md-block"></div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="space-60 d-none d-md-block"></div>
                <div class="space-60"></div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="ot-heading">
                            <span class="pl-0">Our Approach</span>
                            <h3 class="main-head">
                                We have developed easily executable strategic frameworks for
                                each of our services
                            </h3>
                        </div>
                        <div class="space-50"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="hover-dark-yes coporate-service-box">
                            <div class="icon-box icon-box-1 text-center">
                                <div class="icon-main">
                                    <span class="circle-animate"></span>
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                                <div class="content-box">
                                    <h5 class="title-box">Research/Feasibility</h5>
                                    <p>
                                        Identify the organizational practices of clients, in line
                                        with their mission, vision and value proposition.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="space-30"></div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="hover-dark-yes coporate-service-box">
                            <div class="icon-box icon-box-1 text-center">
                                <div class="icon-main">
                                    <span class="circle-animate"></span>
                                    <i class="fa-solid fa-lightbulb"></i>
                                </div>
                                <div class="content-box">
                                    <h5 class="title-box">Development/Production</h5>
                                    <p>
                                        Map out safety and security considerations in terms of how
                                        the development impacts on public access to land and
                                        rights of way.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="space-30"></div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="hover-dark-yes coporate-service-box">
                            <div class="icon-box icon-box-1 text-center">
                                <div class="icon-main">
                                    <span class="circle-animate"></span>
                                    <i class="fa-solid fa-gear"></i>
                                </div>
                                <div class="content-box">
                                    <h5 class="title-box">Efficient Delivery</h5>
                                    <p>
                                        We ensure timely identification and management of risks to
                                        enhance the adoption of timely preventive measures and
                                        efficient delivery.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="space-30"></div>
                    </div>
                </div>
                <div class="space-60 d-none d-md-block"></div>
                <div class="space-60"></div>
            </div>
        </section>


    </div>
@endsection
