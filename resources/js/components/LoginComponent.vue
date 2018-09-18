<template>
<div class="container d-lg-flex align-items-center">

    <div class="px-lg-5 mr-lg-4 px-3 pt-5 col-lg-7 col shadow text-light" style="background:#18386b;">
        <h1 class="h2 mb-4">Sistema Institucional de Información de Proyectos de Investigación.</h1>
        <h4 class="mb-4">¡Bienvenido!</h4>
        <div class="ml-lg-4 ml-2 mb-3">
            <h6 class="h6">Esta plataforma te ofrece servicios como:</h6>
            <li>Realizar el registro de tus Proyectos de Investigación</li>
            <li>Hacer seguimiento de las solicitudes</li>
            <li>Registrar Reportes Técnicos</li>
        </div>
        <p class="py-4" style="font-size:13px;">Si tienes alguna duda o sugerencia para mejorar nuestro servicio web, mandanos un correo a diai@unach.mx</p>
    </div>
    
    <div class="col-lg-5 col-md-8 col mx-auto my-4 my-lg-0">
        <md-card class="md-elevation-8">
        <md-card-header class="row align-items-center mx-1 ">
            <picture> <img class="logo"  v-bind:src="logosrc" alt=""></picture>
            <span class="md-display-1">SIIPI - UNACH</span>
        </md-card-header>
        <md-card-content>
            <form id="loginForm" action="" method="post">
                <md-field>
                    <label>Correo</label>
                    <md-input></md-input>
                </md-field>
                <md-field>
                    <label>Contraseña</label>
                    <md-input></md-input>
                </md-field>
            </form>
        </md-card-content>
        <md-card-actions>
        
        <div class="d-flex flex-column w-100 mx-2">
            <md-button class="btn btn-block md-raised md-primary">Iniciar sesión</md-button>
            <router-link class="my-3 ml-auto md-accent" to='/registro'>Registrarme!</router-link>
            
        </div>
            
        </md-card-actions>
    </md-card>
    </div>

</div>

</template>

<script>
    export default {
        data:()=>({
            logosrc:'/img/logo_unach.png',
        }),
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>
.container{
    height: 600px;
}
@import url('https://fonts.googleapis.com/css?family=Exo:400,700,800,900');
.logo{
    max-height: 60px;
}
.md-display-1{
    font-size: 30px;
    font-family: 'Exo', sans-serif;
    font-weight: 700;
    color:#18386b !important;
}



@media screen and (max-width: 400px)
{
    .logo{
       max-height: 55px;
    }    

    span
    {
        font-size: 20px ;
    }
}

@media screen and (max-width: 320px)
{
    .logo{
       max-height: 52px;
    }    

    .md-display-1
    {
        font-size: 20px ;
    }
}

</style>



