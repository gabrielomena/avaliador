<template>
    <div>
        <label>Sexo<span>*</span></label>
        <select v-model="valueSexo" class="form-control" name="sexo" id="sexo" tabindex="1" required>
            <option value="" selected>-- Selecione --</option>
            <option value="M">MASCULINO</option>
            <option value="F">FEMININO</option>
        </select>
        <div v-if="valueSexo=='M'">
            <label>Cert. Reservista (Para sexo masculino)<span>*</span></label>
            <input name="cert_reservista" class="form-control" required/>
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
