<script setup>
import Button from "primevue/button";
import MainTemplate from "./MainTemplate.vue";
const user = defineProps(['user'])

</script>

<template>
    <div class="card flex justify-center gap-4">
        <Button label="Link" link />
        <Button as="a" label="External" href="https://vuejs.org/" target="_blank" rel="noopener" />
        <Button as="router-link" label="Router" to="/" />
    </div>
    <MainTemplate>
        <a class="google-login" href="/auth/redirect/google">Login With google</a>  
        <div v-if="user.user">
            <p>welcome : {{ user.user.name }}</p>
        </div>
    </MainTemplate>
    

</template>

<style>

</style>