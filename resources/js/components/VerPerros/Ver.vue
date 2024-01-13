<script setup>
import { onMounted, ref } from 'vue'

//Data
let perrosInfo = "hola key"


onMounted(() =>{
    axios
        .get('/getperros')
        .then( (perros) => {
            perrosInfo = perros
            console.log(perrosInfo)
    });
});
</script>

<template>
    <h1>Hola Ver Perros</h1>
</template>

<style scoped>

</style>
