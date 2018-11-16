<template>
    <section>
        <div class="contenu-profil Profil" v-for=" profil of profil" :key="profil.id">
            <header>
                <div class="edit-button">
                    <i class="fas fa-pen"></i>
                </div>

                <div class="main-profile">

                    <div class="profile-image-container">
                        <div class="profile-image">
                            <img class="image" :src="profile_image" alt="" />
                            <div class="camera-button">
                                <a href="javascript:void(0)">
                                    <img :src="camera_solid" alt="camera-solid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="profile-name">
                        <h1><strong>{{ profil.name}}</strong> <i class="fas fa-mars"></i></h1>
                    </div>
                </div>
            </header>
            <main class="no-margin">
                <!--collapsible-->
                <ul class="contact collapsible">
                    <li class="contact-li">
                        <div class="container">

                            <div class="row">
                                <form class="col s12 border-bottom">
                                    <div class="icone-container col s3">
                                        <span class="icone"><i class="fas fa-golbe-americas"></i></span>
                                    </div>
                                    <div class="remove-white-space col s3">
                                        <div class="langue-demande">
                                            <h6>Espagnol</h6>
                                            <span>Amérique du sud</span>
                                        </div>
                                        <div class="langue-parle">
                                            <h6>Afgan</h6>
                                            <span>Patcho du Nord</span>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="row">
                                <form class="col s12 border-bottom">
                                    <div class="icon-container col s3">
                                        <span class="icone"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <div class="mail remove-white-space col s9">
                                        <h6>mik-jack@mail.com</h6>
                                        <span>Email</span>
                                    </div>
                                </form>
                            </div>

                            <div class="row">
                                <form class="col s12 border-bottom">
                                    <div class="icon-container col s3">
                                        <span class="icone"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <div class="telephone remove-white-space col s9">
                                        <h6>+32 489 45 85 45</h6>
                                        <span>Téléphone</span>
                                    </div>
                                </form>
                            </div>

                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="icon-container col s3">
                                            <span class="icone"><i class="fas fa-building"></i></span>
                                        </div>
                                        <div class="remove-white-space organisation col s9">
                                            <h6>Monde des Possibles</h6>
                                            <span class="broder-bottom-0">organisation</span>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </li>
                </ul>
            </main>
        </div><!-- end contenu profil -->
        <router-view></router-view>
    </section>
</template>

<script>
    export default {
        name: 'PageProfil',
        data: function() {
            return {
                profil: [],
                newProfil: "",
                profile_image: "/img/profile-image.png",
                camera_solid: "/img/camera-solid.png",
            };
        },
        created() {
            // this.fetchData();
        },
        methods: {
            // fetchData: function() {
            //     axios.get("/static/profil.json").then(response => {
            //         this.profil = response.data;
            //     });
            // }
        }
    };

</script>
