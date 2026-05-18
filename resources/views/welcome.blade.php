<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>{{ $settings?->hero_title ?? 'Portfolio' }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

        <!-- THEME STYLES -->
        <link href="{{ asset('css/layout.min.css') }}" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="#body">
                                <img class="logo-img logo-img-main" src="{{ ($settings?->logo ?? '') ? asset('storage/' . $settings?->logo) : asset('img/logo.png') }}" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="{{ ($settings?->logo_dark ?? '') ? asset('storage/' . $settings?->logo_dark) : asset('img/logo-dark.png') }}" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">Home</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#about">About</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#experience">Experience</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#work">Work</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#contact">Contact</a></li>
                                @auth
                                    <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ route('dashboard') }}" style="color: #5133ff; font-weight: bold;">Admin</a></li>
                                @else
                                    <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ route('login') }}">Login</a></li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <div class="promo-block parallax-window" data-parallax="scroll" data-image-src="{{ Str::startsWith($settings?->hero_bg_image ?? '', 'img/') ? asset($settings?->hero_bg_image) : asset('storage/' . ($settings?->hero_bg_image ?? 'img/1920x1080/01.jpg')) }}">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="promo-block-divider">
                            <h1 class="promo-block-title">{!! str_replace(' ', '<br/>', e($settings?->hero_title ?? 'Alex Teseira')) !!}</h1>
                            <p class="promo-block-text">{{ $settings?->hero_subtitle ?? 'Web Designer & Front-end Developer' }}</p>
                        </div>
                        <ul class="list-inline">
                            @if($settings?->social_facebook) <li><a href="{{ $settings?->social_facebook }}" class="social-icons"><i class="icon-social-facebook"></i></a></li> @endif
                            @if($settings?->social_twitter) <li><a href="{{ $settings?->social_twitter }}" class="social-icons"><i class="icon-social-twitter"></i></a></li> @endif
                            @if($settings?->social_dribbble) <li><a href="{{ $settings?->social_dribbble }}" class="social-icons"><i class="icon-social-dribbble"></i></a></li> @endif
                            @if($settings?->social_behance) <li><a href="{{ $settings?->social_behance }}" class="social-icons"><i class="icon-social-behance"></i></a></li> @endif
                            @if($settings?->social_linkedin) <li><a href="{{ $settings?->social_linkedin }}" class="social-icons"><i class="icon-social-linkedin"></i></a></li> @endif
                        </ul>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- About -->
        <div id="about">
            <div class="container content-lg">
                <div class="row">
                    <div class="col-sm-3 sm-margin-b-30">
                        <div class="text-right sm-text-left">
                            <h2 class="margin-b-0">{{ $settings?->about_intro_title ?? 'Intro' }}</h2>
                            <p>{{ $settings?->about_intro_text ?? 'What I am all about.' }}</p>
                        </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-1">
                        <div class="margin-b-60">
                            {!! nl2br(e($settings?->about_description ?? '')) !!}
                        </div>

                        <!-- Progress Box -->
                        @foreach($skills as $skill)
                        <div class="progress-box">
                            <h5>{{ $skill->name }} <span class="color-heading pull-right">{{ $skill->percentage }}%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="{{ $skill->percentage }}"></div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End Progress Box -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End About -->

        <!-- Experience -->
        <div id="experience">
            <div class="bg-color-sky-light" data-auto-height="true">
                <div class="container content-lg">
                    <div class="row">
                        <div class="col-sm-3 sm-margin-b-30">
                            <div class="text-right sm-text-left">
                                <h2 class="margin-b-0">Experience</h2>
                                <p>Batman would be jealous.</p>
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-offset-1">
                            <div class="row row-space-2 margin-b-4">
                                @foreach($experiences as $experience)
                                <div class="col-md-4 md-margin-b-4">
                                    <div class="service" data-height="height">
                                        <div class="service-element">
                                            <i class="service-icon {{ $experience->icon }}"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3>{{ $experience->title }}</h3>
                                            <p class="margin-b-5">{{ $experience->description }}</p>
                                        </div>
                                        <a href="#" class="content-wrapper-link"></a>    
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!--// end row -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Experience -->

        <!-- Work -->
        <div id="work">
            <div class="container content-lg">
                <div class="row">
                    <div class="col-sm-3 sm-margin-b-30">
                        <div class="text-right sm-text-left">
                            <h2 class="margin-b-0">Works</h2>
                            <p>I build the real value.</p>
                        </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-1">
                        <!-- Masonry Grid -->
                        <div class="masonry-grid row row-space-2">
                            <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                            @foreach($works as $work)
                            <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-{{ $loop->first ? '8' : '4' }} margin-b-4">
                                <!-- Work -->
                                <div class="work work-popup-trigger">
                                    <div class="work-overlay">
                                        <img class="full-width img-responsive" src="{{ Str::startsWith($work->image ?? '', 'img/') ? asset($work->image) : asset('storage/' . $work->image) }}" alt="Portfolio Image">
                                    </div>
                                    <div class="work-popup-overlay">
                                        <div class="work-popup-content">
                                            <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                            <div class="margin-b-30">
                                                <h3 class="margin-b-5">{{ $work->title }}</h3>
                                                <span>{{ $work->category }}</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p>{{ $work->description }}</p>
                                                        <ul class="list-inline work-popup-tag">
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p class="margin-b-5"><strong>Project Leader:</strong> {{ $work->leader }}</p>
                                                        <p class="margin-b-5"><strong>Designer:</strong> {{ $work->designer }}</p>
                                                        <p class="margin-b-5"><strong>Developer:</strong> {{ $work->developer }}</p>
                                                        <p class="margin-b-5"><strong>Customer:</strong> {{ $work->customer }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Work -->
                            </div>
                            @endforeach
                        </div>
                        <!-- End Masonry Grid -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Work -->
            
        <!-- Contact -->
        <div id="contact">
            <div class="bg-color-sky-light">
                <div class="container content-lg">
                    <div class="row">
                        <div class="col-sm-3 sm-margin-b-30">
                            <div class="text-right sm-text-left">
                                <h2 class="margin-b-0">Contacts</h2>
                                <p>Hire me.</p>
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-offset-1">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 md-margin-b-30">
                                    <h5>Location</h5>
                                    <a href="#">{{ $settings?->contact_location }}</a>
                                </div>
                                <div class="col-md-3 col-xs-6 md-margin-b-30">
                                    <h5>Phone</h5>
                                    <a href="#">{{ $settings?->contact_phone }}</a>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <h5>Email</h5>
                                    <a href="mailto:{{ $settings?->contact_email }}">{{ $settings?->contact_email }}</a>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <h5>Web</h5>
                                    <a href="#">{{ $settings?->contact_web }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Contact -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="{{ ($settings?->logo_dark ?? '') ? asset('storage/' . $settings?->logo_dark) : asset('img/logo-dark.png') }}" alt="Aircv Logo">
                    </div>
                    <div class="col-xs-6 text-right sm-text-left">
                        <p class="margin-b-0"><a class="fweight-700" href="#">Aircv</a> Theme Powered by: <a class="fweight-700" href="http://www.keenthemes.com/">KeenThemes.com</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="{{ asset('vendor/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery-migrate.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="{{ asset('vendor/jquery.easing.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery.back-to-top.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery.smooth-scroll.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery.wow.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery.parallax.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery.appear.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/masonry/jquery.masonry.pkgd.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/masonry/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('js/layout.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/components/progress-bar.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/components/masonry.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/components/wow.min.js') }}" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>