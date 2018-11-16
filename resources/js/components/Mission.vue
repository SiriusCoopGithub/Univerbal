<template>
<section>
 <div class="contenu-mission Mission">
    <header>

    <!-- <div class="mission compteur">

       <input type="ckeckbox" v-model="allDone">
      ce bouton peut être mis chez mdp 
      </div> -->

    <!-- partie qui renseigne le tri -->
    <div class="menu-button filters">
      <div class="col-12">

        <ul>
          <li>
            <button>
            <i class="fas fa-hourglass-half">
              <a href="#" :class="{selected: filter === 'todo'}" @click.prevent="filter = 'todo'">Disponible<strong>{{ compteur}}</strong></a>
            </i>
          </button>
          </li>

          <li>
            <button>
            <i class="fas fa-calendar-check">
              <a href="#" :class="{selected: filter === 'done'}" @click.prevent="filter = 'done'">faites</a>
            </i>
          </button>
          </li>

          <li>
            <button>
            <i class="fas fa-history">
              <a href="#" :class="{selected: filter === 'all'}" @click.prevent="filter = 'all'">Toutes</a>
            </i>
          </button>
          </li>
        </ul>

      </div>
    </div><!-- end div tri-->
  </header>

  <main>
    <!--Debut ul li la class view c'est pour le back end-->
    <ul class="list-client collapsible mission-list filters">
      <li class="list-client-li mission " v-for="mission in filteredMissions" :key="mission.id" :class="{completed: mission.completed}">
        <!--il faut rajouter une propriété css qui renseigne "completed" si on veut -->
        <div class="list-client-header collapsible-header view ">
          <div class="container-fluid">
            <div class="row">
              <div class="col-9">
                <p class="date">
                  <span class="icone">
                  <i class="far fa-calendar-alt"
                  ></i>
                  </span>

                  <label >{{ mission.date}}</label>

                </p>
                <p class="translator-Requirer">
                  <span class="icone">
                <i class="fas fa-user"></i>
                </span>
                  <strong>{{ mission.nom}}</strong>
                  <input type="checkbox" v-model="mission.completed">
                </p>
                  <p class="language">
                    <span class="icone">
                  <i class="fas fa-globe-americas">
                    </i></span>
                    Espagnol</p>
                  <p class="translator-name"><span class="icone"><i class="fas fa-building"></i></span>
                    CHU - Liège</p>

              </div>
              <div class="col-3">
                <div>
                  <img src="img/profile-image.png" alt="" />
                                </div>
                </div>
              </div>
            </div>
          </div>

          <div class="collapsible-body list-client-body">
            <span>
            <p class="address">
              <span class="icone">
                <i class="fas fa-map-marked-alt">
                  <a href="https://www.google.co.in/maps/place/FGTB+Li%C3%A8ge/@50.639303,5.5684423,565m/data=!3m1!1e3!4m5!3m4!1s0x47c0fa0551ac6143:0x8d46c5306aab7990!8m2!3d50.639303!4d5.570631" target ="_blank">Place Saint Paul, 4000 Liège
                  </a>
                </i>
                   
              </span>
            </p>
            <p class="client-name">
              <span class="icone">
                <i class="fas fa-briefcase">
                  Dr Maboul
                </i>
              </span>
            </p>
            </span>

            <p class="paragraph">
              <strong>Temps Estimé :</strong> 02 :00
            </p>
            <p class="paragraph">
              <strong>Objet de l'entretient :</strong> Rendez-vous pour un bilan de santé
            </p>
            <p class="paragraph">
              <strong>Note à l'interprète</strong>
              Rendez-vous au 4ème étage avec le Dr Maboul.
              Penser à amener le formulaire C432.
              Bla, bla, bla...
            </p>
            <div class="bouton">
              <button><a href="#" class="">Editer</a></button>
              <button v-show="deleteCompleted" @click.prevent="deleteCompleted"><a href="#" class="bouton1">Effacer</a></button><br>
              <!--" button supprimer" pour supprimer la mission selectionnée -->
              <i class="fas fa-file-export"></i>
            </div>
          </div>
      </li>
    </ul>
  </main>

  <!-- boutton ajout-->
  <div class="add-button">
    <a href="javascript:void(0)">+
           
            <a href="/Formulaire"><router-link to="/Formulaire"><img src="img/plus-icon.png" alt="Ajout Mission" class="new-mission"></router-link>
        </a>
        </a>

    <!-- v-model="newMission" @click="addMission" avec la function addMiision mis en commentaire, on sait ajouter une mission    -->
  </div><!--end contenu mission -->
 </div>

</section>
</template>

<script>
export default {
  data: function() {
    return {
      missions: [
        {
          name: "MissionBBBB",
          completed: false
        }
      ],
      newMission: "",
      filter: "all"
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
