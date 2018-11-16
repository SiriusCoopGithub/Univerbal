<template>
<section>

  <div class="contenu-formulaire-app Formulaire" id="app">

    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="demande">
            <p style="font-weight:bold">Nouvelle demande</p>
          </div>
        </div>
        <div>
          <p class="fermer"><i class="fas fa-times"></i></p>
        </div>
      </div>
    </header>
    <main>
      <div class="bordure">
        <div class="container-fluid">
          <div class="row">
            <div class="input-field col s12">
              <form action="" @submit.prevent="submitComment">
                <textarea class="" v-model="comment"></textarea>
                <button type="submit">Commenter</button>
              </form>
              <!-- <select>
              <option value="" disabled selected>Langue</option>
              <option value="Anglais">Anglais</option>
              <option value="Allemand">Allemand</option>
              <option value="Néerlandais">Néerlandais</option>
            </select> -->

            </div>
          </div>
        </div>
        <form action="#">
          <p>
            <label>
            <input type="checkbox" class="filled-in" />
            <span>Femme</span>
          </label>
          </p>
          <p>
            <label>
            <input type="checkbox" class="filled-in" />
            <span>Homme</span>
          </label>
          </p>
          <p>
            <label>
            <input type="checkbox" class="filled-in" checked="checked" />
            <span>Pas d'importance</span>
          </label>
          </p>
        </form>
        <hr>
        <form class="col s12">
          <div class="row">

            <div class="col s6">
              <label>Date</label>
              <input type="text" class="datepicker" />
          </div>
              <div class="col s6">
                <label>Heure</label>
                <i class="far fa-clock"></i>
                <input type="text" id="time" class="timepicker">

          </div>
              </div>
        </form>
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field  col s12">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Nom de l'intervenant</label>
              </div>
            </div>
          </form>
        </div>
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textarea2" class="materialize-textarea"></textarea>
                <label for="textarea2">Nom du bénéficiaire</label>
              </div>
            </div>
          </form>
        </div>

        <label class="adresseRdv">Adresse du rendez-vous</label>
        <div class="row">
          <div class="col s4">
            <button v-on:click="seen = !seen" class="btn blue darken-1">Défaut</button>
          </div>

          <div class="col s6">
            <button class="btn blue darken-1">Autre</button>
          </div>
        </div>
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <textarea v-if="show-1" id="textarea3-adresse1" class="materialize-textarea"></textarea>
              <label for="textarea3-adresse1">adresse par defaut</label>
            </div>
          </div>
        </form>
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <textarea v-if="show-2" id="textarea3=adresse2" class="materialize-textarea"></textarea>
              <label for="textarea3">adresse autre</label>
            </div>
          </div>
        </form>
        <hr>
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textarea3" class="materialize-textarea"></textarea>
                <label for="textarea3">Objet de la prestation</label>
              </div>
            </div>
          </form>
        </div>
        <form class="col s12">
          <div class="row">
            <div class="col s6">
              <label>Temps estimé</label>
              <i class="far fa-clock"></i>
              <input type="time" id="time" class="timepicker">

          </div>
            </div>
        </form>

        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textarea4" class="materialize-textarea"></textarea>
                <label for="textarea4">Note de l'interprète</label>
              </div>
            </div>
          </form>
        </div>
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textarea5" class="materialize-textarea"></textarea>
                <label for="textarea5">Note personelle</label>
              </div>
            </div>
          </form>
        </div>
      </div>
      <ul>
        <li>
          <div class="resume">

            <div class="container-fluid">
              <div class="row">
                <div class="col s12">
                  <h5 style="font-weight:bold">Résumé</h5>
                </div>
              </div>
              <div class="row">

                <div class="col s8">
                  <p> <i class="far fa-calendar-alt"></i>&nbsp; 16/10/2018 - 08:15</p><br>
                  <p><i class="fas fa-user"></i><strong>&nbsp; Mr Spoch</strong> </p><br>
                  <p><i class="fas fa-globe-americas"></i>&nbsp; Espagnol</p><br>

              </div>
                  <div class="col s4">
                    <img src="img/profile-image.png" alt="" />
              </div>
                  </div>
                  <div class="row">
                    <div class="col s12">
                      <p> <i class="fas fa-map-marked-alt"></i>
                        <a href="https://www.google.co.in/maps/place/FGTB+Li%C3%A8ge/@50.639303,5.5684423,565m/data=!3m1!1e3!4m5!3m4!1s0x47c0fa0551ac6143:0x8d46c5306aab7990!8m2!3d50.639303!4d5.570631"
                    target="_blank">&nbsp; Place Saint Paul, 4000 Liège
                  </a>
                      </p><br>
                      <p> <i class="fas fa-briefcase"></i>&nbsp; Dr Maboul. </p>
                      <h5 style="font-weight:bold">Objet de l'entretient</h5>
                      <p>Rendez-vous pour un bilan de santé</p>
                      <h5 style="font-weight:bold">Temps Estimé</h5>
                      <p>02 : 00</p>
                      <h5 style="font-weight:bold">Note à l'interprète</h5>
                      <p>Rendez-vous au 4ème étage avec le Dr Maboul.<br>Penser à amener le formulaire C432</p>
                        <h5 style="font-weight:bold">Note personelle</h5>
                        <p>Dossier 508410. Ne pas oublier de demander le formulaire C432</p>
                    </div>
                  </div>
                </div>
              </div>
        </li>
      </ul>
    </main>
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="envoyer">
            <p style="font-weight:bold">Envoyer</p>
          </div>
        </div>
      </div>
    </footer>

    <router-view></router-view>
  </div>

</section>
</template>

<script>
export default {
  data: function() {
    return {
      formulaire: [
        {
          comment: ""
        }
      ]
    };
  },
  methods: {
    submitCommentt() {
      this.comment;
    }
  }
};
</script>
