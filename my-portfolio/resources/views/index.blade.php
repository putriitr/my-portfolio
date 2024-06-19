<!DOCTYPE HTML>
<html>

<head>
    @include('partial.css')
</head>

<body>
    <div id="colorlib-page">
        <div class="container-wrap">
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse"
                data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
            <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
                <div class="text-center">
                    <div class="author-img" style="background-image: url(images/about.jpg);"></div>
                    <h1 id="colorlib-logo"><a href="index.html">Putri Tamara Gultom</a></h1>
                    <span class="position"><a href="#">Information Technology</a> Student</span>
                </div>
                <nav id="colorlib-main-menu" role="navigation" class="navbar">
                    <div id="navbar" class="collapse">
                        <ul>
                            <li class="active"><a href="#" data-nav-section="home">Home</a></li>
                            <li><a href="#" data-nav-section="about">About</a></li>
                            <li><a href="#" data-nav-section="education">Education</a></li>
                            <li><a href="#" data-nav-section="skills">Skills</a></li>
                            <li><a href="#" data-nav-section="services">Tools</a></li>
                            <li><a href="#" data-nav-section="experience">Experience</a></li>
                            <li><a href="#" data-nav-section="work">Projects</a></li>
                            <li><a href="#" data-nav-section="blog">Achievement</a></li>
                            <li><a href="#" data-nav-section="contact">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </aside>

            <div id="colorlib-main">
                <section id="colorlib-hero" class="js-fullheight" data-section="home">
                    <div class="flexslider js-fullheight">
                        <ul class="slides">
                            <li style="background-image: url(images/img_bg_1.jpg);">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div
                                            class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                            <div class="slider-text-inner js-fullheight">
                                                <div class="desc">
                                                    <h1>Hi! <br>I'm Putri</h1>
                                                    <h2>Information Technology Student</h2>
                                                    <a href="{{ asset('images/CV.pdf') }}" target="_blank"
                                                        class="btn btn-primary btn-learn">
                                                        Get My CV <i class="icon-download4"></i>
                                                    </a>
                                                    <a href="{{ asset('images/Portfolio.pdf') }}" target="_blank"
                                                        class="btn btn-primary btn-learn">
                                                        Get My Portfolio <i class="icon-download4"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>

                <section class="colorlib-about" data-section="about">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="col-md-12">
                                        <div class="about-desc">
                                            <span class="heading-meta">About Me</span>
                                            <h1 class="colorlib-heading">Who Am I?</h1>
                                            <p><strong>Hi I'm Putri Tamara Gultom,</strong> student of Del Institute of
                                                Technology with D3 Information Technology study program. I am active in
                                                developing myself in the fields of front-end development, user interface
                                                design, graphic design, data analysis, project management, and software
                                                testing.</p>
                                            <p>With hands-on experience in programming languages such as Java, PHP, Go,
                                                C and C#, I have developed several projects that demonstrate my skills
                                                in software engineering. I would like to apply my knowledge and
                                                contribute to real-world projects as a Software Engineering intern.
                                                Strong problem-solving skills, coupled with a high enthusiasm for
                                                continuous learning, make me a dedicated and adaptable candidate in
                                                facing new challenges in a dynamic work environment.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                                        <div class="services color-1">
                                            <i class="fas fa-palette"></i>
                                            <h3>UI / UX Designer</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                                        <div class="services color-2">
                                            <i class="fas fa-laptop-code"></i>
                                            <h3>Web Developer</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
                                        <div class="services color-3">
                                            <i class="fas fa-bug"></i>
                                            <h3>Quality Assurance</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
                                        <div class="services color-4">
                                            <i class="fas fa-tasks"></i>
                                            <h3>Project Manager</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="colorlib-education" data-section="education">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                                data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Education</span>
                                <h2 class="colorlib-heading animate-box">Education Journey</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <div class="fancy-collapse-panel">
                                    <div class="panel-group" id="accordion" role="tablist"
                                        aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingFour">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">Diploma in
                                                        Information Technology
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingFour">
                                                <div class="panel-body">
                                                    <p>During my diploma studies in Information Technology at
                                                        <strong>Del Institute of Technology</strong>, I learned about
                                                        software development, computer network management,
                                                        cybersecurity, as well as data analysis. The program also
                                                        includes practices in programming, system administration, and
                                                        innovative technology solutions.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingFive">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapseFive"
                                                        aria-expanded="false" aria-controls="collapseFive">High School
                                                        Secondary Education
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingFive">
                                                <div class="panel-body">
                                                    <p>During my high school studies in Science and Technology at
                                                        <strong>SMAN 2 Balige</strong>, I studied math, physics,
                                                        chemistry and biology. The program also includes laboratory
                                                        practices, scientific data analysis, and the application of
                                                        science concepts to solve technological problems.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="colorlib-skills" data-section="skills">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                                data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Skills</span>
                                <h2 class="colorlib-heading animate-box">My Specialty</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <p>I have strong skills in problem solving and critical thinking, with the ability to
                                    identify problems, analyze in depth, and find effective solutions. In addition, I am
                                    also skilled in time management, communication, team work, and analytical thinking,
                                    enabling me to contribute positively to team projects and face challenges with
                                    efficiency and good collaboration.</p>
                                <p>I am also skilled in programming languages such as Java, Python, and JavaScript, and
                                    have experience in web and mobile application development using technologies such as
                                    HTML, CSS, and Flutter.</p>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>Design & Editing</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-1" role="progressbar" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="progress-wrap">
                                    <h3>Database</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-2" role="progressbar" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>PHP</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-3" role="progressbar" aria-valuenow="85"
                                            aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                            <span>85%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="progress-wrap">
                                    <h3>Java</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                            <span>80%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>Javascript</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                            <span>85%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="progress-wrap">
                                    <h3>Golang</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                            <span>70%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="colorlib-services" data-section="services">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                                data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Tools</span>
                                <h2 class="colorlib-heading">What tools can I use?</h2>
                            </div>
                        </div>
                        <div class="row row-pt-md">
                            <div class="col-md-4 text-center animate-box">
                                <div class="services color-1">
                                    <span class="icon">
                                        <i class="icon-phone3"></i>
                                    </span>
                                    <div class="desc text-left">
                                        <h3>Software Development</h3>
                                        <ul>
                                            <li>Visual Studio Code</li>
                                            <li>Android Studio</li>
                                            <li>Apache Netbeans</li>
                                            <li>IntelliJ IDEA</li>
                                            <li>Eclipse</li>
                                            <li>Postman</li>
                                            <li>XAMPP</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center animate-box">
                                <div class="services color-2">
                                    <span class="icon">
                                        <i class="icon-data"></i>
                                    </span>
                                    <div class="desc text-left">
                                        <h3>Database</h3>
                                        <ul>
                                            <li>SQLyog</li>
                                            <li>MySQL</li>
                                            <li>SQL Server</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center animate-box">
                                <div class="services color-3">
                                    <span class="icon">
                                        <i class="fas fa-palette"></i>
                                    </span>
                                    <div class="desc text-left">
                                        <h3>Design & Editing</h3>
                                        <ul>
                                            <li>Photoshop</li>
                                            <li>Canva</li>
                                            <li>Picsart</li>
                                            <li>Figma</li>
                                            <li>Balsamiq</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="colorlib-experience" data-section="experience">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                                data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Experience</span>
                                <h2 class="colorlib-heading animate-box">Projects Experience</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="timeline-centered">
                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                        <div class="timeline-entry-inner">

                                            <div class="timeline-icon color-1">
                                                <i class="icon-pen2"></i>
                                            </div>

                                            <div class="timeline-label">
                                                <h2><a href="#">Microservice Arsitecture of Purnama Balige Hotel
                                                        Website</a> <span><br>Mar - May 2024</span></h2>
                                                <p>In this project we built an application with the Go programming
                                                    language that implements a microservice architecture by dividing the
                                                    service into 11 parts that have their own databases. Here I act as a
                                                    software tester who conducts tests to check whether each service can
                                                    work properly without any bugs.</p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-2">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#">Scool E-Learning Platform</a> <span><br>Mar - May
                                                        2024</span></h2>
                                                <p>Worked with a team to create a Distributed Database Management for an
                                                    e-learning platform using .net technology using c# programming
                                                    language where I acted as a quality assurance to check the functions
                                                    in the system so that it runs properly.</p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-3">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#">Toko Elektronik Website</a> <span><br>Mar - Apr
                                                        2024</span></h2>
                                                <p>Worked with a team on an internal boot camp project to build a
                                                    website as a project manager managing each team's role and also as a
                                                    UI/UX (using figma), Front-End and Back-End Developer (using
                                                    PHP/laravel and ReactJS) for web development.</p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-4">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#">Purnama Balige Hotel Information System and Room
                                                        Reservation</a> <span><br>Jan - Jun 2024</span></h2>
                                                <p>Collaborated with a team in four roles: UI/UX Designer utilizing
                                                    Figma for prototyping and Balsamiq for mockups, Front-End Developer
                                                    using HTML, CSS, JavaScript, and PHP for website development,
                                                    Software Tester employing Robot Framework, and Project Manager
                                                    overseeing and coordinating all team roles.</p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-2">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#">Hotel Booking Application</a> <span><br>Nov - Dec
                                                        2023</span></h2>
                                                <p>Worked as UI/UX and QA Engineer for quality testing of applications
                                                    built using Kotlin and Java programming language with
                                                    Object-Oriented Programming (OOP) principles for mobile application
                                                    development.</p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-3">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#">IT Del BAAK Administration Application</a>
                                                    <span><br>Oct
                                                        - Dec 2023</span>
                                                </h2>
                                                <p>Worked as UI/UX and Front-End Developer by using Figma for
                                                    prototyping and Flutter (Dart) programming language for mobile
                                                    application development.</p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-4">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#">Lumban Binanga Village Information System</a>
                                                    <span><br>Jan - Jun 2023</span>
                                                </h2>
                                                <p>Worked with team as UI/UX by using Figma to building prototyping and
                                                    Balsamiq for the mockup of the website. </p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-5">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#">IT Del Canteen Website</a> <span><br>Oct - Dec
                                                        2022</span></h2>
                                                <p>Worked as UI/UX and Front-End by using Figma tools to create
                                                    prototyping and HTML, CSS, and JS for web development.</p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry begin animate-box"
                                        data-animate-effect="fadeInBottom">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-none">
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="colorlib-work" data-section="work">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                                data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Project</span>
                                <h2 class="colorlib-heading animate-box">My Recent Projects</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="project" style="background-image: url(images/proj-1.png);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="">Project 01</a></h3>
                                            <span>Purnama Balige Hotel Information System and Room Reservation</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="fas fa-code"></i> HTML, CSS,
                                                        Javascript, PHP, Go</a></span></br>
                                                <span><a href="#"><i class="fas fa-exclamation-triangle"></i>
                                                        Robot, Selenium, Cucumber, TestRail</a></span></br>
                                                <span><a href="#"><i class="fas fa-palette"></i>
                                                        Mockups</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="project" style="background-image: url(images/proj-2.png);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="">Project 02</a></h3>
                                            <span>Hotel Booking Application</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="fas fa-code"></i> Java, C#,
                                                        Kotlin</a></span></br>
                                                <span><a href="#"><i class="fas fa-exclamation-triangle"></i>
                                                        JUnit </a></span></br>
                                                <span><a href="#"><i class="fas fa-palette"></i>
                                                        Figma</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInTop">
                                <div class="project" style="background-image: url(images/proj-3.png);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="">Project 03</a></h3>
                                            <span>IT Del BAAK Administration Application</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="fas fa-code"></i> Flutter (Dart),
                                                        Java</a></span></br>
                                                <span><a href="#"><i class="fas fa-exclamation-triangle"></i>
                                                        JUnit</a></span></br>
                                                <span><a href="#"><i class="fas fa-palette"></i>
                                                        Figma</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInBottom">
                                <div class="project" style="background-image: url(images/proj-4.png);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="">Project 04</a></h3>
                                            <span>Lumban Binanga Village Information System</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="fas fa-code"></i> HTML, CSS,
                                                        Javascript, PHP</a></span></br>
                                                <span><a href="#"><i class="fas fa-exclamation-triangle"></i>
                                                        Manual Testing</a></span></br>
                                                <span><a href="#"><i class="fas fa-palette"></i> Figma &
                                                        Mockups</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="project" style="background-image: url(images/proj-5.png);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="">Project 05</a></h3>
                                            <span>IT Del New Canteen Website</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="fas fa-code"></i> HTML, CSS,
                                                        Javascript,</a></span></br>
                                                <span><a href="#"><i class="fas fa-exclamation-triangle"></i>
                                                        Manual Testing</a></span></br>
                                                <span><a href="#"><i class="fas fa-palette"></i>
                                                        Figma</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="project" style="background-image: url(images/proj-6.png);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="">Project 06</a></h3>
                                            <span>E-Commerce Electronics Store</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="fas fa-code"></i> HTML, CSS,
                                                        Javascript, PHP</a></span></br>
                                                <span><a href="#"><i class="fas fa-exclamation-triangle"></i>
                                                        Robot Framework</a></span></br>
                                                <span><a href="#"><i class="fas fa-palette"></i>
                                                        Mockups</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="colorlib-blog" data-section="blog">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                                data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Achievement</span>
                                <h2 class="colorlib-heading">Experience and Certifications</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="blog-entry">
                                    <a href="" class="blog-img"><img src="images/achi-1.jpg"
                                            class="img-responsive" alt=""></a>
                                    <div class="desc">
                                        <span><small>Aug 2023 - Present </small> | <small> Organization </small></span>
                                        <h3><a href="">HIMAPRO / HIMATIF IT Del</a></h3>
                                        <p>Serves as deputy head of the events division responsible for developing work
                                            plans and event budgets, coordinating with other teams and division members
                                            regarding event organizing responsibilities, and conducting evaluations to
                                            assess success and identify areas for improvement.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="blog-entry">
                                    <a href="" class="blog-img"><img src="images/achi-2.jpg"
                                            class="img-responsive" alt=""></a>
                                    <div class="desc">
                                        <span><small>Apr 2024 - Present </small> | <small> Organization </small></span>
                                        <h3><a href="">Komisi Pemilihan Umum IT Del</a></h3>
                                        <p>Serves as a member of the event division who is fully responsible for the
                                            continuity of the event as well as preparing the organization of the event
                                            and coordinating with related parties.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="blog-entry">
                                    <a href="" class="blog-img"><img src="images/achi-3.jpg"
                                            class="img-responsive" alt=""></a>
                                    <div class="desc">
                                        <span><small>Dec 2023 - Present </small> | <small> Organization </small></span>
                                        <h3><a href="">Mateo's Choir IT Del</a></h3>
                                        <p>As an active member in regular rehearsals and performances to hone vocal
                                            skills and team collaboration in music.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="blog-entry">
                                    <a href="" class="blog-img"><img src="images/achi-4.png"
                                            class="img-responsive" alt=""></a>
                                    <div class="desc">
                                        <span><small>October 2023 </small> | <small> Certificate</small></span>
                                        <h3><a href="">Panitia Kaderisasi Tahun 2023</a></h3>
                                        <p>Work as a PIC (Person In Charge) responsible for designing, coordinating and
                                            monitoring the activities and progress of participants with the aim of
                                            enhancing leadership and skills.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="blog-entry">
                                    <a href="" class="blog-img"><img src="images/achi-5.png"
                                            class="img-responsive" alt=""></a>
                                    <div class="desc">
                                        <span><small>Mar - Apr 2024</small> | <small> Certificate </small></span>
                                        <h3><a href="">Laravel Web Development</a></h3>
                                        <p>Online training project on the topic of laravel with a final group assignment
                                            to create a website by applying the concepts learned.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="blog-entry">
                                    <a href="" class="blog-img"><img src="images/achi-6.png"
                                            class="img-responsive" alt=""></a>
                                    <div class="desc">
                                        <span><small>Feb- Mar 2024</small> | <small> Certificate </small></span>
                                        <h3><a href="">React Js Web Frontend</a></h3>
                                        <p>Online training project on the topic of react js with an individual final
                                            project to create a website by applying the concepts learned.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="blog-entry">
                                    <a href="" class="blog-img"><img src="images/achi-7.png"
                                            class="img-responsive" alt=""></a>
                                    <div class="desc">
                                        <span><small>Nov 2023</small> | <small> Certificate </small></span>
                                        <h3><a href="">Cloud Practitioner Essentials</a></h3>
                                        <p>Online training</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="blog-entry">
                                    <a href="" class="blog-img"><img src="images/achi-8.jpg"
                                            class="img-responsive" alt=""></a>
                                    <div class="desc">
                                        <span><small>May 2024</small> | <small> Certificate </small></span>
                                        <h3><a href="">Web Developer Careers</a></h3>
                                        <p>Online training</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="colorlib-contact" data-section="contact">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                                data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Get in Touch</span>
                                <h2 class="colorlib-heading">Contact</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="colorlib-feature colorlib-feature-sm animate-box"
                                    data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="mailto:putriigultom11@gmail.com">putriigultom11@gmail.com</a></p>
                                    </div>
                                </div>

                                <div class="colorlib-feature colorlib-feature-sm animate-box"
                                    data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-phone"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="https://wa.me/6282277263370">0822 7726 3370</a></p>
                                    </div>
                                </div>

                                <div class="colorlib-feature colorlib-feature-sm animate-box"
                                    data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="https://maps.app.goo.gl/HcMaJuaXyBbibPLU6">Balige, Toba District, North Sumatera</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="colorlib-feature colorlib-feature-sm animate-box"
                                    data-animate-effect="fadeInRight">
                                    <div class="colorlib-icon">
                                        <i class="fab fa-linkedin"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="https://www.linkedin.com/in/putrigultom07/">linkedin.com/in/putrigultom07</a></p>
                                    </div>
                                </div>

                                <div class="colorlib-feature colorlib-feature-sm animate-box"
                                    data-animate-effect="fadeInRight">
                                    <div class="colorlib-icon">
                                        <i class="icon-github"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="https://github.com/putriitr">github.com/putriitr</a></p>
                                    </div>
                                </div>

                                <div class="colorlib-feature colorlib-feature-sm animate-box"
                                    data-animate-effect="fadeInRight">
                                    <div class="colorlib-icon">
                                        <i class="fab fa-gitlab"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="https://gitlab.com/putrigultom">gitlab.com/putrigultom</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    @include('partial.js')
</body>

</html>
