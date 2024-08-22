<script setup>
import DashboardLayout from './DashboardLayout.vue';
import BestPages from './components/BestPages.vue';
</script>

<template>
    <DashboardLayout>
            <div class="flex flex-row justify-center gap-3 mb-3">
                <div class=" text-gray-400 bg-slate-200 border border-gray-400 p-5 text-center">
                  <h1 class="text-black font-bold text-3xl">Total Visitors</h1> 
                  <p class="text-green-500 font-bold text-2xl">300</p>
                </div>
                <div class=" text-gray-400 bg-slate-200 border border-gray-400 p-5 text-center">
                  <h1 class="text-black font-bold text-3xl">Total Clicks</h1> 
                  <p class="text-green-500 font-bold  text-2xl">10</p>
                </div>
                <div class=" text-gray-400 bg-slate-200 border border-gray-400 p-5 text-center">
                  <h1 class="text-black font-bold text-2xl">Average Click Time</h1> 
                  <p class="text-green-500 font-bold text-2xl">20 min</p>
                </div>
            </div>
            
                <BestPages title="Best performing "/>
            
            
            
    </DashboardLayout>
</template>
