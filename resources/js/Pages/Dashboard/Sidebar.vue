<script setup>
import Splitter from 'primevue/splitter';
import SideLinks from './SideLinks.vue';
import { Link } from '@inertiajs/vue3';

</script>

<template>
   <!-- Sidebar -->
   <aside class="w-64 bg-white shadow-lg flex flex-col justify-between ">
        <div class="p-6">
          <h1 class="text-2xl font-semibold text-gray-800 ">Land analytics</h1>
          <SideLinks/>
        </div>
        <Link class="bg-blue-500 text-white border text-1xl px-6 py-1 self-center my-8" href="logout">Sign Out </Link>
      </aside>
</template>