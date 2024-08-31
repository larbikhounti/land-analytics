<script setup> 
import Pagination from "./Components/Pagination.vue";
import Search from "./Components/Search.vue";
import PageTable from "./Components/PageTable.vue";
import { Link } from "@inertiajs/vue3";

let props = defineProps(["pages", "message", "filters"]);

</script>
<script>
import DashboardLayout from "../Layout/DashboardLayout.vue";
export default { layout: DashboardLayout };
</script>

<template>

    <Link  class="button bg-black text-white my-2 max-w-28 p-2" href="/pages/create" method="get" as="a" type="button">Add page +</Link>
    <div class="flex flex-col">
        <Search :filter="props.filters"  />
        <PageTable :pages="props.pages.data" />
        <Pagination :links="props.pages.links" class="mt-6" />
    </div>
</template>
