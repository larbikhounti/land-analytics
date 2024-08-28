

<script setup>
import { reactive } from 'vue'
import BestPages from './components/BestPages.vue';
import Stats from './components/Stats.vue';


let stats = reactive([
  {title : "Total Visitors", count : 300},
  {title : "Total Clicks", count : 20},
  {title : "Average Click Time", count : 10},
])
</script>
<script>
import DashboardLayout from './DashboardLayout.vue';
export default {layout : DashboardLayout}
</script>


<template>
    <Stats :stats='stats' />
    <BestPages title="Best performing " />

</template>
