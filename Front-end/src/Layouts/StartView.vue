<script setup>
import { RouterView, RouterLink, useRoute } from 'vue-router';
// Image and views
import Logo from '/logo.png'
import Login from '/login-image.png'
import Register from '/register-image.png'

const router = useRoute();
</script>

<template>
    <div class="bg-white"
        :class="{ 'h-[670px] md:h-screen': $route.name === 'login', 'h-[900px] md:h-[800px]': $route.name === 'register' }">
        <RouterLink :to="{ name: 'home' }" class="py-5 px-10">
            <img :src="Logo" class="w-64 md:w-36 mx-auto md:mx-0" />
        </RouterLink>
        <div class="flex flex-col md:flex-row md:justify-center md:items-center md:px-10 md:py-5 ">
            <RouterView class="px-10 md:w-1/2" />
            <div class="w-1/2 hidden md:block" v-if="router.name === 'login'">
                <p class="text-center font-popins text-title">Nos alegramos de verte de regreso</p>
                <h2 class="text-center font-popins font-bold text-4xl text-title">Bienvenido de vuelta!</h2>
                <img :src="Login" class="w-8/12 mx-auto" />
            </div>
            <div class="w-1/2 hidden md:block" v-else>
                <p class="text-center font-popins text-title">Unete al mejor equipo de desarrolladores</p>
                <h2 class="text-center font-popins font-bold text-4xl text-title">Bienvenido al equipo!</h2>
                <img :src="Register" class="w-8/12 mx-auto" />
            </div>
        </div>
    </div>
</template>
