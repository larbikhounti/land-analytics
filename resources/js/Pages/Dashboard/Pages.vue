<script setup>
import { ref, watch } from "vue";
import DashboardLayout from "./DashboardLayout.vue";
import PageTable from "./components/PageTable.vue";
import { router } from "@inertiajs/vue3";
import debounce from "lodash/debounce";

let props = defineProps(["pages", "message", 'filters']);

let isformVisible = ref(false);
console.log(props);
const triggerShowFrom = () => {
    isformVisible.value = !isformVisible.value;
};

let search = ref(props.filters.search);

watch(
    search,
    debounce(function (value) {
        router.get(
            "/pages",
            { search: value },
            { preserveState: true, replace: true }
        );
    }, 300)
);
</script>
<script>
import PageForm from "./components/PageForm.vue";
import Pagination from "./components/Pagination.vue";
export default { layout: DashboardLayout };
</script>

<template>
    <input
        v-model="search"
        type="text"
        placeholder="Search..."
        class="border px-2 rounded-lg"
    />
    <p
        :class="'text-red-500' > props.message.error"
        class="text-green-600 font-bold"
        v-if="!props.message.error"
    >
        {{ props.message.message }}
    </p>
    <div class="flex flex-col">
        <PageForm @showForm="triggerShowFrom" :isformVisible />
        <PageTable :pages="props.pages.data" :isformVisible />
        <Pagination :links="props.pages.links" class="mt-6" />
       
    </div>
</template>
