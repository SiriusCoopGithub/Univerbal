<template>
    <section>
        <div class="contenu-mission">
            <header>
                <div class="menu-button">
                    <div class="row">

                        <div class="col s4 icon-container">
                            <button :class="{selected: filter === 'todo'}" @click.prevent="filter = 'todo'">
                                <a href="javascript:void(0)" class="icon">
                                    <i class="fas fa-hourglass-half"></i>
                                    <span>3</span>
                                </a>
                            </button>
                        </div>

                        <div class="col s4 icon-container">
                            <button :class="{selected: filter === 'done'}" @click.prevent="filter = 'done'">
                                <a href="javascript:void(0)" class="icon">
                                    <i class="far fa-calendar-check"></i>
                                    <span>2</span>
                                </a>
                            </button>
                        </div>

                        <div class="col s4 icon-container">
                            <button :class="{selected: filter === 'all'}" @click.prevent="filter = 'all'">
                                <i class="fas fa-history"></i>
                            </button>
                        </div>
                    </div>
                </div><!-- end div tri-->
            </header>

            <main>
                <!--Debut ul li la class view c'est pour le back end-->
                <ul class="list-client collapsible mission-list filters">
                    <li class="list-client-li mission " v-for="mission in filteredMissions" :key="mission.id" :class="{completed: mission.completed}">
                        <!--il faut rajouter une propriété css qui renseigne "completed" si on veut -->
                        <div class="list-client-header collapsible-header view ">
                            <div class="container">
                                <div class="row">

                                    <div class="col-9">
                                        <p class="date">
                                            <span class="icone">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                            <label>{{ mission.date }}</label>
                                        </p>
                                        <p class="translator-Requirer">
                                            <span class="icone"><i class="fas fa-user"></i></span><strong>{{
                                                mission.nom}}</strong>
                                            <input type="checkbox" v-model="mission.completed">
                                        </p>
                                        <p class="language">
                                            <span class="icone"><i class="fas fa-globe-americas"></i></span>Espagnol</p>
                                        <p class="translator-name"><span class="icone"><i class="fas fa-building"></i></span>CHU
                                            - Liège</p>
                                    </div>

                                    <div class="col-3">
                                        <div>
                                            <img :src="profile_img" alt="" />
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

                                <p class="client-name"><span class="icone"><i class="fas fa-briefcase"> Dr Maboul</i></span></p>
                                <p class="paragraph"></p>
                                <p>Objet de l'entretient</p> <span>Rendez-vous pour un bilan de santé</span>
                                <p class="paragraph"><strong>Temps Estimé :</strong></p>
                                <p class="paragraph"></p>
                                <p>Temps Estimé</p>
                                <span>02 : 00</span>
                                <p class="paragraph"></p>
                                <p>Note à l'interprète</p>
                                <span>Rendez-vous au 4ème étage avec le Dr Maboul.
                                    Penser à amener le formulaire C432.
                                    Bla, bla, bla...</span>
                                <p class="paragraph"></p>
                                <p>Note personelle</p>
                                <span>Dossier 508410. Ne pas oublier de demander le formulaire
                                    C432. Bla, bla, bla...</span>
                                <div class="bouton">
                                    <a href="#" class="">Editer</a>
                                    <button v-show="deleteCompleted" @click.prevent="deleteCompleted"><a href="#" class="bouton1">Effacer</a></button>
                                    <!--" button supprimer" pour supprimer la mission selectionnée -->
                                    <i class="fas fa-file-export"></i>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </main>

            <!-- boutton ajout-->
            <div class="add-button">
                <a href="javascript:void(0)">
                    <router-link :to="{name : 'formulaire'}"><img :src="plus_icon" alt="Ajout Mission" class="new-mission"></router-link>
                </a>
            </div>

            <!-- v-model="newMission" @click="addMission" avec la function addMiision mis en commentaire, on sait ajouter une mission    -->
        </div>
        <!--end contenu mission -->


    </section>
</template>

<script>
    export default {
        name: 'Mission',
        props: {
            users: {
                type: Object,
                required: true,
            },
        },
        mounted() {
            const colaps = document.querySelectorAll(".collapsible");
            const colapsInstances = M.Collapsible.init(colaps, {
                accordion: false,
                inDuration: 300,
                outDuration: 300
            });
            console.dir("colaps", colaps);

            const selectForm = document.querySelectorAll("select");
            const formInstances = M.FormSelect.init(selectForm, {});
        },
        data: function() {
            return {
                missions: [{
                    name: "MissionBBBB",
                    completed: false
                }],
                newMission: "",
                filter: "all",
                plus_icon: "/img/plus-icon.png",
                profile_img: "img/profile-image.png"
            };
        },
        created() {
            this.fetchData();
        },
        methods: {
            // addMission() {
            //   this.missions.push({
            //     completed: false,
            //     name: this.newMission
            //   });
            //   this.newMission = "";
            // },
            fetchData: function() {
                axios.get("/static/mission.json").then(response => {
                    this.missions = response.data;
                });
            },
            deleteMission(mission) {
                this.missions = this.missions.filter(i => i !== mission);
            },
            deleteCompleted() {
                this.missions = this.missions.filter(mission => !mission.completed);
            }
        },
        computed: {
            allDone: {
                get() {
                    return this.compteur === 0;
                },
                set(value) {
                    this.missions.forEach(mission => {
                        mission.completed = value;
                    });
                }
            },
            compteur() {
                return this.missions.filter(mission => !mission.completed).length;
            },
            filteredMissions() {
                if (this.filter === "todo") {
                    return this.missions.filter(mission => !mission.completed);
                } else if (this.filter === "done") {
                    return this.missions.filter(mission => mission.completed);
                }
                return this.missions;
            }
        }
    };

</script>

<style>
    /*"C:/Users/Formareur/Desktop/univerbal/routetry/src/assets" */

</style>
