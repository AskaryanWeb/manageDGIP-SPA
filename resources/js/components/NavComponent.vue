
<template>
    <div>
        <md-toolbar class="md-primary">

            <img class="logo"  v-bind:src="logosrc" alt="">
            <span class="md-display-1">SIIPI - UNACH</span>

            <div class="md-toolbar-section-end">
                <md-button class="md-fab" @click="showDrawer = true">
                    <md-icon >menu</md-icon>
                </md-button>
            </div>
        </md-toolbar>
        <md-drawer :md-active.sync="showDrawer">
            <md-toolbar class="md-transparent" md-elevation="0">
                <span class="md-title">Menu</span>
            </md-toolbar>
        </md-drawer>
        <md-content >
            <router-view></router-view>
            <div>
                <md-empty-state
                    md-icon="create_new_folder"
                    md-label="Crea tu primer proyecto"
                    md-description="Creando un proyecto podrás comenzar a registrarlo ante la DGIP. ">
                    <md-button class="md-accent md-raised">Crear</md-button>
                </md-empty-state>
            </div>
        </md-content>
    </div>
</template>

<script>
  export default {
    data: () => ({
        logosrc:'/img/logo_unach.png',
      showDrawer: false,
      showDrawer: false
    })
  }
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css?family=Exo:400,700,800,900');
.logo{
    max-height: 65px;
}
.md-display-1{
    font-family: 'Exo', sans-serif;
    font-weight: 700;
    color:#18386b !important;
}


</style>