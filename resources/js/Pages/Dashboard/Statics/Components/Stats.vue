<script setup>
let props = defineProps(["stats"])
</script>

<template>
    <div class="flex flex-row justify-center sm:flex-col md:flex-row gap-3 mb-3 min-[320px]:flex-col">
        <div v-for="stat in props.stats" :key="stat.title" class=" text-gray-400 bg-slate-200 border border-gray-400 p-5 text-center">
            <h1 class="text-black font-bold text-3xl">{{ stat.title }}</h1>
            <p class="text-green-500 font-bold text-2xl">{{ stat.count }}</p>
        </div>
    </div>
</template>