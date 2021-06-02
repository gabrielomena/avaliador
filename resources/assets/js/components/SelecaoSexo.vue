<template>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <label>Sexo <span>*</span></label>
            <select v-model="valueSexo" class="form-control mb-3" name="sexo" id="sexo" required>
                <option value="" selected>-- Selecione --</option>
                <option value="M">MASCULINO</option>
                <option value="F">FEMININO</option>
            </select>
        </div>

        <div class="col-sm-12 col-md-6" v-if="valueSexo=='M'">
            <label>Cert. Reservista <span>*</span></label>
            <input name="cert_reservista" class="form-control mb-3" required/>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
            return {
                valueSexo:""
            }
        }
    }
</script>
