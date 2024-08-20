<script setup>
import MainTemplate from "./MainTemplate.vue";
import Hero from "./Hero.vue";
import Features from "./Features.vue";
import About from "./About.vue";
import Footer from "./Footer.vue";
import Menu from "./components/Menu.vue";

</script>

<template>
    <MainTemplate>
     <Menu/>
     <Hero/>
     <Features/>
     <About/>
     <Footer/>
    </MainTemplate> 
</template>
