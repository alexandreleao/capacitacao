<template>
    <h1>{{ greeting }}</h1>
    <q-btn label="jaskl" @click="clique"></q-btn>
</template>
<script>

export default {
    setup: () => {
        const clique = () =>{
            document.location.href = '/login';
        }

        return {
            greeting: "HOla mundo",
            clique
        }
    }
}
</script>