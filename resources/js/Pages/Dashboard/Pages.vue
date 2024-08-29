<script setup>
import { ref } from 'vue'
let props = defineProps(['pages']);
let isformVisible = ref(false)
const triggerShowFrom = ()=>{
    isformVisible.value = !isformVisible.value
}

</script>
<script>
import DashboardLayout from './DashboardLayout.vue';
import PageTable from './components/PageTable.vue';
import PageForm from './components/PageForm.vue';
export default { layout: DashboardLayout }
</script>

<template>

    <div class="flex flex-col ">
        <PageForm @showForm="triggerShowFrom"  :isformVisible/>
        <PageTable :pages="props.pages" :isformVisible/>
    </div>


</template>
