<template>
    <q-input v-model="credenciais.email" label="Email" />
    <q-input v-model="credenciais.senha" label="Senha" />
    <q-btn label="Enviar" @click.prevent="enviar()"></q-btn>
</template>

<script>
import {reactive} from 'vue';


export default {
    props: ['errors'],
    setup:() =>{
        
        const credenciais = reactive({
            email: null,
            senha: null
        });

        const enviar = async ()=>{
            
            const {data} = await axios.post('/api/login', credenciais);
            console.log(data);
        }        
        return {
            credenciais,
            enviar
        }
    }
}
</script>