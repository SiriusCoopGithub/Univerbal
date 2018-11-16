<template>
<section>
  <div class="contenu-option Option">
    <div id="app"></div>
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="option">
            <p style="font-weight:bold">Options</p>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="container-fluid">
        <div class="row">
          <div class="bordure-option">

            <div class="option-list">
              <div class="col s2">
                <span class="icone-opt"><i class="fas fa-briefcase"></i></span>
              </div>
              <div class="col s7">
                Disponible
              </div>
              <div class="col s3">
                <div class="switch">

                  <label>
                  <input type="checkbox">
                  <span class="lever"></span>
                </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="row">
          <div class="bordure-option">

            <div class="option-list">
              <div class="col s2">
                <span class="icone-opt"><i class="fas fa-bell"></i></span>
              </div>
              <div class="col s7">
                Notifications
              </div>
              <div class="col s3">
                <div class="switch">

                  <label>
                  <input type="checkbox">
                  <span class="lever"></span>
                </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="row">
          <div class="bordure-option">

            <div class="option-list">
              <div class="col s2">
                <span class="icone-opt"><i class="fas fa-power-off"></i></span>
              </div>
              <div class="col s10">
                Déconnection
              </div>

            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Nav tabs -->

    <!-- /Nav tabs-->
  </div><!-- contenu option -->
</section>
</template>

<script>
export default {};
</script>
