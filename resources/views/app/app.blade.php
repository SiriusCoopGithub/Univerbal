@extends('app.app-html')

@section('app-content')

<div class="add-button">
    <a href="javascript:void(0)">
        <img src="img/plus-icon.png" alt="plus icon">
    </a>
</div>

<header>
    <div class="menu-button">
        <div class="row">

            <div class="col s4 icon-container">
                <button>
                    <i class="fas fa-hourglass-half"></i>
                </button>
            </div>

            <div class="col s4 icon-container">
                <button>
                    <i class="far fa-calendar-check"></i>
                </button>
            </div>

            <div class="col s4 icon-container">
                <button>
                    <i class="fas fa-history"></i>
                </button>
            </div>

        </div>
    </div>
</header>
<main>
    <!-- collapsible-->
    <ul class="list-client collapsible">

        <li class="list-client-li">
            <div class="list-client-header collapsible-header ">
                <div class="container">
                    <div class="row">
                        <div class="col s9">
                            <p class="date"> <span class="icone"><i class="far fa-calendar-alt"></i></span>
                                16/10/2018 08:15</p>
                            <p class="translator-Requirer"><span class="icone"><i class="fas fa-user"></i></span>
                                <strong>Mr Spoch</strong> </p>
                            <p class="language"><span class="icone"><i class="fas fa-globe-americas"></i></span>
                                Espagnol</p>
                            <p class="translator-name"><span class="icone"><i class="fas fa-microphone"></i></span>
                                Michal JACKSON</p>
                        </div>
                        <div class="col s3">
                            <div>
                                <img src="img/profile-image.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapsible-body list-client-body">
                <div class="container">
                    <p class="address">
                        <span class="icone">
                            <i class="fas fa-map-marked-alt"></i>
                        </span>

                        <a href="https://www.google.co.in/maps/place/FGTB+Li%C3%A8ge/@50.639303,5.5684423,565m/data=!3m1!1e3!4m5!3m4!1s0x47c0fa0551ac6143:0x8d46c5306aab7990!8m2!3d50.639303!4d5.570631"
                            target="_blank">Place Saint Paul, 4000 Liège
                        </a>
                    </p>

                    <p class="client-name"><span class="icone"><i class="fas fa-briefcase"></i></span> Dr Maboul</p>
                    <p class="paragraph">
                        <p>Objet de l'entretient</p>
                        <span>Rendez-vous pour un bilan de santé</span>
                        <p class="paragraph">
                            <p>Temps Estimé</p>
                            <span>02 : 00</span>
                            <p class="paragraph">
                                <p>Note à l'interprète</p>
                                <span>Rendez-vous au 4ème étage avec le Dr Maboul.
                                    Penser à amener le formulaire C432.
                                    Bla, bla, bla...</span>
                                <p class="paragraph">
                                    <p>Note personelle</p>
                                    <span>Dossier 508410. Ne pas oublier de demander le formulaire C432.
                                        Bla, bla, bla...</span>


                                    <div class="bouton">
                                        <a href="#" class="">Editer</a>
                                        <a href="#" class="bouton1">Effacer</a>
                                        <i class="fas fa-file-export"></i>
                                    </div>
                </div>
            </div>
        </li>
        <li class="list-client-li">
            <div class="list-client-header collapsible-header ">
                <div class="container">
                    <div class="row">
                        <div class="col s9">
                            <p class="date"> <span class="icone"><i class="far fa-calendar-alt"></i></span>
                                16/10/2018 08:15</p>
                            <p class="translator-Requirer"><span class="icone"><i class="fas fa-user"></i></span>
                                <strong>Mr Spoch</strong> </p>
                            <p class="language"><span class="icone"><i class="fas fa-globe-americas"></i></span>
                                Espagnol</p>
                            <p class="translator-name"><span class="icone"><i class="fas fa-microphone"></i></span>
                                Michal JACKSON</p>

                        </div>
                        <div class="col s3">
                            <div>
                                <img src="img/profile-image.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapsible-body list-client-body">
                <div class="container">
                    <p class="address">
                        <span class="icone">
                            <i class="fas fa-map-marked-alt"></i>
                        </span>

                        <a href="https://www.google.co.in/maps/place/FGTB+Li%C3%A8ge/@50.639303,5.5684423,565m/data=!3m1!1e3!4m5!3m4!1s0x47c0fa0551ac6143:0x8d46c5306aab7990!8m2!3d50.639303!4d5.570631"
                            target="_blank">Place Saint Paul, 4000 Liège
                        </a>
                    </p>

                    <p class="client-name"><span class="icone"><i class="fas fa-briefcase"></i></span> Dr Maboul</p>
                    <p class="paragraph">
                        <p>Objet de l'entretient</p>
                        <span>Rendez-vous pour un bilan de santé</span>
                        <p class="paragraph">
                            <p>Temps Estimé</p>
                            <span>02 : 00</span>
                            <p class="paragraph">
                                <p>Note à l'interprète</p>
                                <span>Rendez-vous au 4ème étage avec le Dr Maboul.
                                    Penser à amener le formulaire C432.
                                    Bla, bla, bla...</span>
                                <p class="paragraph">
                                    <p>Note personelle</p>
                                    <span>Dossier 508410. Ne pas oublier de demander le formulaire C432.
                                        Bla, bla, bla...</span>


                                    <div class="bouton">
                                        <a href="#" class="">Editer</a>
                                        <a href="#" class="bouton1">Effacer</a>
                                        <i class="fas fa-file-export"></i>
                                    </div>
                </div>
            </div>
        </li>
        <li class="list-client-li">
            <div class="list-client-header collapsible-header ">
                <div class="container">
                    <div class="row">
                        <div class="col s9">
                            <p class="date"> <span class="icone"><i class="far fa-calendar-alt"></i></span>
                                16/10/2018 08:15</p>
                            <p class="translator-Requirer"><span class="icone"><i class="fas fa-user"></i></span>
                                <strong>Mr Spoch</strong> </p>
                            <p class="language"><span class="icone"><i class="fas fa-globe-americas"></i></span>
                                Espagnol</p>
                            <p class="translator-name"><span class="icone"><i class="fas fa-microphone"></i></span>
                                Michal JACKSON</p>
                        </div>
                        <div class="col s3">
                            <div>
                                <img src="img/profile-image.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapsible-body list-client-body">
                <div class="container">
                    <p class="address">
                        <span class="icone">
                            <i class="fas fa-map-marked-alt"></i>
                        </span>

                        <a href="https://www.google.co.in/maps/place/FGTB+Li%C3%A8ge/@50.639303,5.5684423,565m/data=!3m1!1e3!4m5!3m4!1s0x47c0fa0551ac6143:0x8d46c5306aab7990!8m2!3d50.639303!4d5.570631"
                            target="_blank">Place Saint Paul, 4000 Liège
                        </a>
                    </p>

                    <p class="client-name"><span class="icone"><i class="fas fa-briefcase"></i></span> Dr Maboul</p>
                    <p class="paragraph">
                        <p>Objet de l'entretient</p>
                        <span>Rendez-vous pour un bilan de santé</span>
                        <p class="paragraph">
                            <p>Temps Estimé</p>
                            <span>02 : 00</span>
                            <p class="paragraph">
                                <p>Note à l'interprète</p>
                                <span>Rendez-vous au 4ème étage avec le Dr Maboul.
                                    Penser à amener le formulaire C432.
                                    Bla, bla, bla...</span>
                                <p class="paragraph">
                                    <p>Note personelle</p>
                                    <span>Dossier 508410. Ne pas oublier de demander le formulaire C432.
                                        Bla, bla, bla...</span>


                                    <div class="bouton">
                                        <a href="#" class="">Editer</a>
                                        <a href="#" class="bouton1">Effacer</a>
                                        <i class="fas fa-file-export"></i>
                                    </div>
                </div>
            </div>
        </li>
    </ul>
    <!-- /collapsible-->
</main>
<!-- Nav tabs -->


@endsection
