<script setup>
import { Link } from '@inertiajs/vue3';

import { ref } from 'vue'

const links = ref([
    {href : "/dashboard", content : "Dashboard" },
    {href : "/pages", content : "Pages" },
    {href : "/profile", content : "Profile" }
])
</script>

<template>
   <!-- SideLinks -->
          <nav class="mt-10 divide-y">
            <Link v-for="link in links" :href="link.href" class="text-black  block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200">
              {{link.content}}
            </Link>
            <!-- Add more links here -->
          </nav>
       
</template>