<script setup>
import googleLogo from "@images/google-logo.svg";
import { Link } from "@inertiajs/vue3";
const props = defineProps(['authId'])
</script>


<template>
    <Link v-if="props.authId" href="/dashboard"
        class="rounded-md bg-red-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Dashboard
        <span aria-hidden="true">&rarr;</span>
    </Link>
    <a v-else href="/auth/redirect/google"
        class="rounded-md  bg-white border border-black px-3.5 flex justify-center items-center align-centre py-2.5 text-sm font-semibold text-black shadow-sm hover:bg-red-500 focus-visible:outline hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
        <img  class="w-8" :src="googleLogo" alt="" />Continue with Google
    </a>
</template>