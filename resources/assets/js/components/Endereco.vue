<template>
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <label>CEP <span>*</span></label>
            <div class="input-group">
                <input type="text" name="cep" class="form-control cep mb-3" v-model="cep">
                <div class="input-group-append">
                    <button class="btn btn-primary mb-3" type="button" id="button-addon2" @click="localizaCep()">
                        Localizar
                    </button>
                </div>
            </div>
        </div>
         <div class="col-sm-12 col-md-4">
            <label>Cidade <span>*</span></label>
            <input v-model="cidade" name="cidade" class="form-control text-uppercase" readonly/>
        </div>
         <div class="col-sm-12 col-md-4">
            <label>UF <span>*</span></label>
            <input v-model="uf" name="uf" class="form-control text-uppercase" readonly/>
        </div>
        <div class="col-sm-12 col-md-12">
            <label>Endereço Completo <span>*</span></label>
            <input v-model="endereco" name="endereco" class="form-control mb-3 text-uppercase"/>
        </div>


    </div>
</template>

<script>
export default {
    data(){
        return{
            cep:"",
            endereco:"",
            cidade:"",
            uf:""
        }
    },
    methods:{
        localizaCep(){
            // this.loadingCep=true
            this.$api.get('https://viacep.com.br/ws/'+this.cep+'/json')
            .then(res=>{
                if(res.data.erro){
                    window.alert('Nenhuma informação encontrada, prossiga com o preenchimento manual')
                }
                this.endereco = res.data.logradouro+', '+res.data.bairro
                this.uf = res.data.uf
                this.cidade = res.data.localidade
                this.$forceUpdate();
            })
            // .catch(()=>{
            //     this.form.cep = ''
            //     window.alert('CEP inválido')
            // })
            // .finally(()=>{
            //     this.loadingCep=false
            // })
        }
    }
}
</script>
