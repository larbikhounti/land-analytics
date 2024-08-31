<script setup>
import Sidebar from './Components/Sidebar.vue';
import Topbar from './Components/Topbar.vue';

</script>



<template>
    <div class="flex h-screen bg-gray-100">
        <!-- Main Content -->
        <Sidebar />
        <div class="flex-1 flex flex-col">
            <Topbar />
            <!-- Content -->
            <main class="flex-1 p-6">
                <slot />
            </main>
        </div>
    </div>
</template>