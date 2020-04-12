@extends('layout')

@section('title', 'Jean-Christophe Chevalier\'s Resume - Computer Science Student')

@section('additional_css')
    <link href="{{ mix('/css/landing_page.css') }}" rel="stylesheet"/>
@endsection

@section('navbar')
    @parent
    <ul class="navbar-nav" style="margin: 0">
        <li class="nav-item">
            <a class="nav-link" href="#about-me">About me</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#my-experience">My experience</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#contact-me">Contact me</a>
        </li>
    </ul>
@endsection

@section('overview')
    <div class="background-1 parallax-effect">
        <div class="jumbotron-fluid" id="intro">
            <h1 class="display-5">Hi ! I'm Jean-Christophe, and this is my website</h1>
            <p>Studying CS @Mines Saint-Etienne, a French Engineering School</p>
        </div>
    </div>

    <img alt="" class="rounded-circle shadow-lg img-fluid" id="profile-1" src="{{ asset("images/profile.jpg") }}">
@endsection

@section('content')

    <div class="jumbotron-fluid" id="about-me">

        <h1 class="display-4">About me</h1>
        <p class="my-5">
            Currently studying Computer Science at <strong>Mines Saint-Etienne</strong>, a French "Grande Ecole", I am
            naturally curious and interested by new techs. I led some personal projects to get a better overall
            knowledge on many programming languages, frameworks & methods.
        </p>

        <div class="row">
            <div class="col-sm-6">
                <h2 class="display-5">Graduation</h2>
                <hr>

                <div class="jumbotron page-header row">
                    <h5 class="col title">2017-2020
                        <hr>
                        Mines Saint-Etienne
                    </h5>
                    <div class="col-2">
                        <img alt="" class="img-fluid" src="{{ asset('/images/EMSE icon.png') }}"/>
                    </div>
                </div>
                <p>
                    Mines de Saint-Etienne is a <strong>French Engineering School</strong> that provides various courses
                    in
                    Computer Science. This education has given me abilities in many CS fields, such as:
                </p>
                <ul>
                    <li>Procedural Programming</li>
                    <li>Object-oriented Programming</li>
                    <li>Cryptography</li>
                    <li>Database management</li>
                    <li>Networks solutions</li>
                </ul>
                <p style="margin: 0">
                    I also had the opportunity to develop some management skills. Thanks to the project-based way of
                    teaching, I acquired notions in <strong>team-working</strong>, <strong>project management</strong>
                    and <strong>issues management</strong>.
                </p>

                <div class="jumbotron page-header row">
                    <h5 class="col title">2015-2017
                        <hr>
                        Preparatory classes for Engineering Schools
                    </h5>
                </div>
                <p>
                    During these two years, I attended <strong>intense</strong> and <strong>high-level theoretical
                        courses</strong> in mathematics, physics and chemistry, with a view to prepare for the French
                    <strong>"Grandes
                        Ecoles"</strong> integration exams. What I have learned from it is an ease and a way of
                    learning, that I
                    use to quickly acquire and understand concepts.
                </p>

            </div>

            @include('landing_page.skills')
        </div>
    </div>

    <div class="background-2 parallax-effect"></div>

    <div class="jumbotron-fluid" id="my-experience">
        <h1 class="display-4">My experience</h1>
        <p class="my-5">
            During my training, I had the opportunity to participate in projects proposed by professionals, but also to
            get involved in a university association with a pedagogical aim.
        </p>

        <div class="row">

            <div class="col-sm-6">
                <h2 class="display-5">Extra-curricular activities</h2>
                <hr>

                <div class="jumbotron page-header row">
                    <h5 class="col title">March 2018 - February 2019
                        <hr>
                        M-GaTE Junior-Entreprise
                    </h5>
                    <div class="col-2">
                        <img alt="" class="img-fluid" src="{{ asset('/images/M-GaTE icon.png') }}"/>
                    </div>
                </div>

                <p>
                    A <strong>Junior Enterprise</strong> is a non-profit association, managed by
                    students. Its purpose is to <strong>provide services</strong> to businesses
                    and
                    individuals, in a similar way to real companies. The main goal of these structures is to enhance the
                    learning of their members <strong>through practical experience</strong>.
                    M-GaTE
                    offers its services in the fields of software and hardware development.
                </p>
                <h4>Communication manager</h4>
                <p>
                    After a selective recruitment, I took over the position of Communication Manager of M-GaTE. I was in
                    charge of <strong>ensuring the visibility and the perks</strong> of the
                    Junior-Enterprise on
                    the various social networks, while <strong>keeping the communication supports
                        up
                        to date</strong> and <strong>proposing new ones</strong>. During my term
                    of
                    office, <strong>I carried out two main projects</strong>:
                </p>
                <ul>
                    <li>Supervision of the production of an advertising video</li>
                    <li>Realization of a descriptive brochure</li>
                </ul>
                <h4>Project manager</h4>
                <p>
                    I also <strong>managed the realization of a web-development project</strong>.
                    This one had been entrusted to M-GaTE in 2018, and it quickly became problematic and fell behind. I
                    took
                    over this project a year after it started, with a dissatisfied customer. <strong
                    >Through
                        regular contact</strong> and <strong>full renegotiation of the terms of
                        the
                        contract</strong>, the project is now completed, and the client is fully satisfied by our
                    deliverable .
                </p>
            </div>

            <div class="col-sm-6">
                <h2 class="display-5">Led projects</h2>
                <hr>

                <div class="jumbotron page-header row">
                    <h5 class="col title">February 2019 - June 2019
                        <hr>
                        Pedagogical demonstrator of a cryptographic protocol
                    </h5>
                    <div class="col-2">
                        <img alt="" class="img-fluid" src="{{ asset('/images/CEA icon.png') }}"/>
                    </div>
                </div>

                <p>
                    This project consists of the realization of a demonstrator to present an encryption protocol
                    developed
                    by the customer. I was attached to the team in charge of this project during its implementation
                    phase,
                    and <strong>I took care of the entire server part</strong>. I was able to
                    develop
                    technical skills in <strong>backend programming</strong> and <strong
                    >database management</strong>, while establishing various <strong
                    >security layers</strong>.
                </p>

                <div class="jumbotron page-header row">
                    <h5 class="col title">September 2018 - January 2019
                        <hr>
                        Elaboration of a self-healing battery
                    </h5>
                    <div class="col-3">
                        <img alt="" class="img-fluid" src="{{ asset('/images/pellenc icon.png') }}"/>
                    </div>
                </div>

                <p>
                    In close collaboration with four other students, I had to <strong>analyze the
                        client's needs</strong> and <strong>write precise and exhaustive
                        specifications</strong> adapted to his request. Subsequently, we <strong>proposed
                        a methodology that met these specifications</strong>, while researching existing solutions that
                    offered
                    the same ones. This project allowed me to have a first approach to <strong>teamwork
                        in order to meet a client's needs</strong>.
                </p>
            </div>

        </div>
    </div>

    <div class="background-1" id="contact-me">
        <div class="wrapper form">
            <div class="jumbotron form">
                <h1 class="display-4">Contact me</h1>
                <p style="text-align: center">
                    If you are interested in my profile, do not hesitate to contact me via this form, I will answer you
                    back
                    as soon as possible.
                </p>
                <div>
                    <i class="fab fa-linkedin" id="linked-in"></i>
                    <i class="fab fa-github-square" id="github"></i>
                </div>

                <hr>

                <div class="collapse" id="form-contact">

                    <form action="" class="needs-validation" name="form1">

                        <div class="form-group">
                            <label for="email"></label>
                            <input class="form-control" id="email" name="email" placeholder="Enter email" required
                                   type="email"/>
                            <div id="invalid-feedback-email"></div>
                        </div>

                        <div class="form-group">
                            <label for="body"></label>
                            <input class="form-control" id="body" name="body"
                                   placeholder="Your message goes here"
                                   required type="text"/>
                            <div id="invalid-feedback-message"></div>
                        </div>
                    </form>

                </div>

                <button class="btn btn-secondary contact-me" data-placement="bottom" data-toggle="tooltip"
                        id="form-button">
                    Contact me
                </button>

            </div>
        </div>
    </div>

    <div class="modal fade" id="thank-you">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Thank you !</h4>
                    <button class="close" data-dismiss="modal" type="button">&times;</button>
                </div>

                <div class="modal-body">
                    Your message has been submitted.
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal" type="button">Close</button>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('end_scripts')
    <script src="{{ mix('/js/landing_page.js') }}"></script>
@endsection

