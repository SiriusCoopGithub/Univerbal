<template>
    <section>
        <div class="contenu-app">
            <div class="contenu-header-main"></div>

        </div>
        <router-view />

        <div class="menu-nav">
            <div class="row">
                <div class="col s4 icon-container">
                    <ul>
                        <li>
                            <router-link :to="{name : 'mission'}">
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
                            <router-link :to="{name : 'pageprofil'}">
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
                            <router-link :to="{name : 'option'}">
                                <a href="">
                                    <i class="fas fa-sliders-h"></i>
                                </a>
                            </router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
</template>

<script>
    export default {};

</script>
