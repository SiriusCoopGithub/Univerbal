<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">App Component mounted</div>

                    <div class="card-body">
                       App Component mounted
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  mounted() {
    console.log("App Component mounted.");
  }
};
</script>
