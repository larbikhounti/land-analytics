<script setup>
import { user } from "../countables/auth";
</script>

<template>
    <!-- Topbar -->
    <header class="bg-white shadow p-4">
        <div class="flex justify-between items-center">
            <h2 class="text-lg font-semibold text-gray-800">Dashboard</h2>
            <button class="text-gray-400 font-bold">{{user.email}}</button>
        </div>
    </header>
</template>