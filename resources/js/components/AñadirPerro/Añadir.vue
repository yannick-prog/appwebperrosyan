<script setup>
import { onMounted, ref } from 'vue'

//Props
defineProps({
    foto_perro: {
        type: File,
        //default: [],
        maxSize: {
            type: Number,
            default: 100,
            required: true,
        },
        accept: {
            type: String,
            default: "image/*",
        }
    },
    nombre: {
        type: String,
        default: "",
    },
    razas: {
        type: Array,
        default: [],
    },
    tamanos: {
        type: Array,
        default: [],
    },
    colores: {
        type: Array,
        default: [],
    },

})



//Metodos
onMounted ( () => {
    axios
        .get()
});
/*const click = () => {

};*/
</script>

<template>
    <h1>HOLA COMPONENTE PARA VER EL PRODUCTO</h1>
</template>

<style scoped>

</style>
