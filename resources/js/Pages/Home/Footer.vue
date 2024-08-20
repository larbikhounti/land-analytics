<script setup>
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue'

const footerNavigation = [
  { name: 'About', href: '/about' },
  { name: 'Privacy Policy', href: '#features' },
  { name: 'Licensing', href: '#about' },
  { name: 'Contact', href: 'company' },
]
const date = computed(() => {
  return new Date().getFullYear().toString()
})
</script>

<template>
  <footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ date }} <a href="#"
          class="hover:underline">mohamed khounti</a>. All Rights Reserved.
      </span>
      <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
        <li v-for="item in footerNavigation" :key="item.name">
          <Link :href="item.href" class="hover:underline me-4 md:me-6">{{ item.name }}</Link>
        </li>
      </ul>
    </div>
  </footer>

</template>