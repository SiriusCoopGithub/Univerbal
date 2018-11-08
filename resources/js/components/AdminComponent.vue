<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Admin Component mounted</div>

                    <div class="card-body">
                       Admin Component mounted
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  mounted() {
    console.log("Admin Component mounted.");
  }
};
</script>
