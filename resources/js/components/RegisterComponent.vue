<template>

  <div class="container pt-5">
    <md-toolbar class="md-elevation-1 d-flex justify-content-between md-primary">
        <div class="d-flex align-content-center">
            <picture> <img class="logo"  v-bind:src="logosrc" alt=""></picture>
            <span class="md-display-1">SIIPI - UNACH</span>            
        </div>
        <span class="md-title mr-4">Registro</span>
    </md-toolbar>
    <md-steppers class="pt-5" :md-active-step.sync="active"  md-linear :md-vertical="true">
      <md-step id="first"  :md-label='hola' md-description="Optional" :md-editable="true" :md-done.sync="first">
            <div class="md-layout md-gutter">
                <div class="md-layout-item">
                    <md-field>
                        <label>Nombre</label>
                        <md-input></md-input>
                    </md-field>
                </div>

                <div class="md-layout-item">
                    <md-field >
                        <label>Primer apellido</label>
                        <md-input></md-input>
                    </md-field>                     
                </div>          

                <div class="md-layout-item">
                    <md-field>
                        <label>Segundo apellido</label>
                        <md-input></md-input>
                    </md-field>                     
                </div>                                         
            </div>      
            <div class="md-layout md-gutter">

                <div class="md-layout-item md-large-size-33 md-xsmall-size-100">
                    <md-field>
                        <label>Teléfono</label>
                        <md-input></md-input>
                    </md-field>                     
                </div>                   
                <div class="md-layout-item md-size-15 md-xsmall-size-50">
                    <md-field>
                        <label>Género</label>
                        <md-select name="genero">
                            <md-option></md-option>
                            <md-option value="m">F</md-option>
                            <md-option value="f">M</md-option>
                        </md-select>
                    </md-field>
                </div>
              
                      
            </div>
                  
        <md-button class="md-raised md-primary" @click="setDone('first', 'second')">Siguiente</md-button>
      </md-step>

      <md-step id="second" md-label="Second Step" :md-error="secondStepError" :md-editable="true" :md-done.sync="second">
       
          <div class="md-layout md-gutter">

                <div class="md-layout-item md-large-size-33 md-xsmall-size-100">
                    <md-field>
                        <label>Numero de plaza</label>
                        <md-input></md-input>
                    </md-field>                     
                </div>                   
                
                <div class="md-layout-item md-large-size-33 md-xsmall-size-100">
                    <md-field>
                        <label>Grado académico</label>
                        <md-input></md-input>
                    </md-field>                     
                </div>   

                <div class="md-layout-item">
                    <md-field>
                        <label>Unidad académica</label>
                        <md-select name="genero">
                            <md-option :key="ua.id" v-for="ua in uas" :value="ua.id">{{ua.name}}</md-option>
                        </md-select>
                    </md-field>
                </div>                     
          </div>

        <md-button class="md-raised md-primary" @click="setDone('second', 'third')">Siguiente</md-button>
        <md-button class="md-raised md-primary" @click="setError()">Set error!</md-button>
      </md-step>

        <md-step id="third" md-label="Third Step" :md-editable="false" :md-done.sync="third">
          <div class="md-layout md-gutter">

                <div class="md-layout-item md-large-size-33 md-xsmall-size-100">
                    <md-field>
                        <label>Correo institucional</label>
                        <md-input></md-input>
                    </md-field>                     
                </div>                   
                
                <div class="md-layout-item md-large-size-33 md-xsmall-size-100">
                    <md-field>
                        <label>Contraseña</label>
                        <md-input></md-input>
                    </md-field>                     
                </div>   

                <div class="md-layout-item md-large-size-33 md-xsmall-size-100">
                    <md-field>
                        <label>Confirmar contraseña</label>
                        <md-input></md-input>
                    </md-field>                     
                </div>                    
          </div>

        <md-button class="md-raised md-primary" @click="setDone('third')">Done</md-button>
      </md-step>
    </md-steppers>
  </div>
</template>

<script>


  export default {
    name: 'StepperNonEditable',
    data: () => ({
        uas:[{
                id:'1',
                name:'Contaduria y administración'
            },
            {
                id:'2',
                name:'Gestion Empresarial'
            }
            ],
        hola:"Primer",
        logosrc:'/img/logo_unach.png',
      active: 'first',
      first: false,
      second: false,
      third: false,
      secondStepError: null
    }),
    methods: {
      setDone (id, index) {
        this[id] = true

        this.secondStepError = null

        if (index) {
          this.active = index
        }
      },
      setError () {
        this.secondStepError = 'This is an error!'
      },
    },
    mounted:function(){
                var x;
        $(".logo").hover(function(){
            x= "Segundo";
        });

       this.hola=x;
    }
    
  }


</script>

<style lang="scss" scoped>
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
</style>