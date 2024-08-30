<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps(['links'])
console.log(props.links)
</script>
<template>
    <div>
      <Link
        v-for="link in links"
        :href="link.url"
        v-html="link.label"
        class="px-1"
        :class="{ 'text-gray-500': ! link.url, 'font-bold' : link.active }"
      />
    </div>
  </template>
  
