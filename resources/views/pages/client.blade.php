@extends('layouts.head-html')

@section('content')

<body>
    <div id="app">
        <!-- Nav tabs button -->
        <header>
            <div class="menu-button">
                <div class="col-12">
                    <div class="nav">
                        <ul>
                            <li><a href="#"><i class="fas fa-briefcase"></i></a></li>
                            <li><a href="#"><i class="far fa-calendar-check"></i></a></li>
                            <li><a href="#"><i class="fas fa-history"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- /Nav tabs button -->

        <main>
            <!-- collapsible-->
            <ul class="collapsible">
                <li>
                    <div class="collapsible-header">
                        <div class="container-fluid">



                            <div class="row">

                                <div class="col-9">
                                    <p> <i class="far fa-calendar-alt"></i> 16/10/2018 08:15</p>
                                    <p><i class="fas fa-user"></i><strong>Mr Spoch</strong> </p>
                                    <p><i class="fas fa-globe-americas"></i> Espagnol</p>
                                    <p> Michal Jackson</p>
                                    <p> <i class="fas fa-map-marked-alt"></i>
                                        <a href="https://www.google.co.in/maps/place/FGTB+Li%C3%A8ge/@50.639303,5.5684423,565m/data=!3m1!1e3!4m5!3m4!1s0x47c0fa0551ac6143:0x8d46c5306aab7990!8m2!3d50.639303!4d5.570631"
                                            target="_blank">Place Saint Paul, 4000 Liège
                                        </a>
                                    </p>
                                </div>
                                <div class="col-3">
                                    <div>
                                        <img src="image/profile-image.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapsible-body"><span>
                            <p> <i class="fas fa-briefcase"></i>Dr Maboul. </p>

                            <p>Dossier 508410. Rendez-vous au 4ème étage avec le Dr Maboul.
                                Penser à amener le formulaire C432.
                            </p>
                        </span></div>
                </li>
                <li>
                    <div class="collapsible-header">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-9">
                                    <p> <i class="far fa-calendar-alt"></i> 16/10/2018 08:15</p>
                                    <p><i class="fas fa-user"></i><strong>Mr Spoch</strong> </p>
                                    <p><i class="fas fa-globe-americas"></i> Espagnol</p>
                                    <p> Michal Jackson</p>
                                    <p> <i class="fas fa-map-marked-alt"></i>
                                        <a href="https://www.google.co.in/maps/place/FGTB+Li%C3%A8ge/@50.639303,5.5684423,565m/data=!3m1!1e3!4m5!3m4!1s0x47c0fa0551ac6143:0x8d46c5306aab7990!8m2!3d50.639303!4d5.570631"
                                            target="_blank">Place Saint Paul, 4000 Liège
                                        </a>
                                    </p>
                                </div>
                                <div class="col-3">
                                    <div>
                                        <img src="image/profile-image.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapsible-body"><span>
                            <p> <i class="fas fa-briefcase"></i>Dr Maboul. </p>

                            <p>Dossier 508410. Rendez-vous au 4ème étage avec le Dr Maboul.
                                Penser à amener le formulaire C432.
                            </p>
                        </span></div>
                </li>
                <li>
                    <div class="collapsible-header">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-9">
                                    <p> <i class="far fa-calendar-alt"></i> 16/10/2018 08:15</p>
                                    <p><i class="fas fa-user"></i><strong>Mr Spoch</strong> </p>
                                    <p><i class="fas fa-globe-americas"></i> Espagnol</p>
                                    <p> Michal Jackson</p>
                                    <p> <i class="fas fa-map-marked-alt"></i>
                                        <a href="https://www.google.co.in/maps/place/FGTB+Li%C3%A8ge/@50.639303,5.5684423,565m/data=!3m1!1e3!4m5!3m4!1s0x47c0fa0551ac6143:0x8d46c5306aab7990!8m2!3d50.639303!4d5.570631"
                                            target="_blank">Place Saint Paul, 4000 Liège
                                        </a>
                                    </p>
                                </div>
                                <div class="col-3">
                                    <div>
                                        <img src="image/profile-image.png" alt="" />
                                    </div>
                                    <a class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">+</i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="collapsible-body"><span>
                            <p> <i class="fas fa-briefcase"></i>Dr Maboul. </p>

                            <p>Dossier 508410. Rendez-vous au 4ème étage avec le Dr Maboul.
                                Penser à amener le formulaire C432.
                            </p>
                        </span></div>
                </li>
            </ul>
            <!-- /collapsible-->
        </main>

        <!-- Nav tabs footer-->
        <footer>
            <div class="menu-footer">
                <div class="col-12">

                    <div class="nav">
                        <ul>
                            <li><a href="#"><i class="fas fa-list-ul"></i></a></li>
                            <li><a href="#"><i class="fas fa-user"></i></a></li>
                            <li><a href="#"><i class="fas fa-sliders-h"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
                </nav>
            </div>
        </footer>
        <!-- /Nav tabs footer-->
        <script src="/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script src="js/js.js"></script>
    </div>
</body>

@endsection
