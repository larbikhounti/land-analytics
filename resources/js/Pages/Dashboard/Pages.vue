<script setup>
import { ref } from 'vue'
import DashboardLayout from './DashboardLayout.vue';
import PageTable from './components/PageTable.vue';
let props = defineProps(['pages','message']);
let isformVisible = ref(false)
const triggerShowFrom = ()=>{
    isformVisible.value = !isformVisible.value
}

</script>
<script>
import PageForm from './components/PageForm.vue';
export default { layout: DashboardLayout }
</script>

<template>
    <p  :class="'text-red-500' > props.message.error" class="text-green-600 font-bold " v-if="!props.message.error">{{ props.message.message }} </p>
    <div class="flex flex-col ">
        <PageForm @showForm="triggerShowFrom"  :isformVisible/>
        <PageTable :pages="props.pages" :isformVisible/>
    </div>


</template>
