<template>
    <section>
        <div class="app">


            <div class="menu-nav">
                <div class="row">
                    <div class="col s4 icon-container">
                        <ul>
                            <li>
                                <router-link :to="{name : 'Mission'}">
                                    <a href="">
                                        <i class="fas fa-list-ul active "></i>
                                    </a>
                                </router-link>
                            </li>
                        </ul>
                    </div>
                    <div class="col s4 icon-container">
                        <ul>
                            <li>
                                <router-link :to="{name : 'PageProfil'}">
                                    <a href="">
                                        <i class="fas fa-user"> </i>
                                    </a>
                                </router-link>
                            </li>
                        </ul>
                    </div>
                    <div class="col s4 icon-container">
                        <ul>
                            <li>
                                <router-link :to="{name : 'Option'}">
                                    <a href="">
                                        <i class="fas fa-sliders-h"></i>
                                    </a>
                                </router-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <router-view />
    </section>
</template>

<script>
    export default {
        props: ["users"]
        //   mounted() {
        //     const colaps = document.querySelectorAll(".collapsible");
        //     const colapsInstances = M.Collapsible.init(colaps, {
        //       accordion: false,
        //       inDuration: 300,
        //       outDuration: 300
        //     });
        //     console.dir("colaps", colaps);

        //     const selectForm = document.querySelectorAll("select");
        //     const formInstances = M.FormSelect.init(selectForm, {});
        //   }
    };

</script>
