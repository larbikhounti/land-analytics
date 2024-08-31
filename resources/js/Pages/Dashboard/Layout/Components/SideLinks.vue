<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue'
import { pathname } from '../../../countables/utils';

const links = ref([
    {href : "/statics", content : "Statics" },
    {href : "/pages", content : "Pages" },
    {href : "/profile", content : "Profile" }
])

const clicked = ref(false)
</script>

<template>
   <!-- SideLinks -->
          <nav class="mt-10 divide-y">
            <Link  @click="clicked = !clicked" :class="{'bg-black text-white': pathname(link.href) }" v-for="link in links" :href="link.href"  class="text-black  min-w-56 block py-2.5 px-4 rounded transition duration-200  ">
              {{link.content}}
            </Link>
          </nav>
       
</template>