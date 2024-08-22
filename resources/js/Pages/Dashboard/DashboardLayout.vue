<script setup>
import Topbar from './Topbar.vue';
</script>



<template>
    <div class="flex h-screen bg-gray-100">
      <!-- Sidebar -->
      <aside class="w-64 bg-white shadow-lg">
        <div class="p-6">
          <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>
          <nav class="mt-10">
            <a href="#" class="text-black block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200">
              Home
            </a>
            <a href="#" class="text-black block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200">
              Analytics
            </a>
            <!-- Add more links here -->
          </nav>
        </div>
      </aside>
  
      <!-- Main Content -->
      <div class="flex-1 flex flex-col">
        <Topbar/>
        <!-- Content -->
        <main class="flex-1 p-6">
          <slot />
        </main>
      </div>
    </div>
  </template>
  
 