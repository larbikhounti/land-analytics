<script setup>

</script>



<template>
    <div class="flex h-screen bg-gray-100">
      <!-- Sidebar -->
      <aside class="w-64 bg-white shadow-lg">
        <div class="p-6">
          <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>
          <nav class="mt-10">
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200">
              Home
            </a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200">
              Analytics
            </a>
            <!-- Add more links here -->
          </nav>
        </div>
      </aside>
  
      <!-- Main Content -->
      <div class="flex-1 flex flex-col">
        <!-- Topbar -->
        <header class="bg-white shadow p-4">
          <div class="flex justify-between items-center">
            <h2 class="text-lg font-semibold text-gray-800">Dashboard</h2>
            <button class="text-gray-800">Profile</button>
          </div>
        </header>
  
        <!-- Content -->
        <main class="flex-1 p-6">
          <slot />
        </main>
      </div>
    </div>
  </template>
  
 