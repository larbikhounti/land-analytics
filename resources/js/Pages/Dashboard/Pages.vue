<script setup>
import { ref } from "vue";
import DashboardLayout from "./DashboardLayout.vue";
import PageTable from "./components/PageTable.vue";

let props = defineProps(["pages", "message", "filters"]);

let isformVisible = ref(false);
console.log(props);
const triggerShowFrom = () => {
    isformVisible.value = !isformVisible.value;
};
</script>
<script>
import PageForm from "./components/PageForm.vue";
import Pagination from "./components/Pagination.vue";
import Search from "./components/Search.vue";
export default { layout: DashboardLayout };
</script>

<template>
    <p
        :class="'text-red-500' > props.message.error"
        class="text-green-600 font-bold"
        v-if="!props.message.error"
    >
        {{ props.message.message }}
    </p>
    <div class="flex flex-col">
        <Search :filter="props.filters" />
        <PageForm @showForm="triggerShowFrom" :isformVisible />
        <PageTable :pages="props.pages.data" :isformVisible />
        <Pagination :links="props.pages.links" class="mt-6" />
    </div>
</template>
