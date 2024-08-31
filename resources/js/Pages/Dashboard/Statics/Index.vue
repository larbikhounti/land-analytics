

<script setup>
import { reactive } from 'vue'
import BestPages from './Components/BestPages.vue';
import Stats from './Components/Stats.vue';


let stats = reactive([
  {title : "Total Visitors", count : 300},
  {title : "Total Clicks", count : 20},
  {title : "Average Click Time", count : 10},
])
</script>
<script>
import DashboardLayout from '../Layout/DashboardLayout.vue';
export default {layout : DashboardLayout}
</script>


<template>
    <Stats :stats='stats' />
    <BestPages title="Best performing " />

</template>
