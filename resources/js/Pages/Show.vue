<script setup>
import MainTemplate from "./MainTemplate.vue";
const user = defineProps(['user'])
</script>

<template>
    <MainTemplate>
        <a class="google-login" href="/auth/redirect/google">Login With google</a>  
        <div v-if="user.user">
            <p>welcome : {{ user.user.name }}</p>
        </div>
    </MainTemplate>
    

</template>

<style>
.google-login{
    border: 1px solid red;
    padding: 1rem;
    width: fit-content;
    height: 1rem;
    text-decoration: none;
    color: white;
    background-color: rgba(255, 0, 0, 0.831)
}

</style>