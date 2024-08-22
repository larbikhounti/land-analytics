<script setup>
import Splitter from 'primevue/splitter';
import SideLinks from './SideLinks.vue';

</script>

<template>
   <!-- Sidebar -->
   <aside class="w-64 bg-white shadow-lg">
        <div class="p-6">
          <h1 class="text-2xl font-semibold text-gray-800 ">Land analytics</h1>
          <SideLinks/>
        </div>
      </aside>
</template>