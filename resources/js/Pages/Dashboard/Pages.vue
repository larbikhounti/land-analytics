<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    url: null,
    name: null,
})

let props = defineProps(['pages']);
</script>
<script>
import DashboardLayout from './DashboardLayout.vue';
export default { layout: DashboardLayout }
</script>

<template>
    <form class="flex flex-col gap-3 p-5 w-52"  @submit.prevent="form.post('/pages')">
        <label for="input">Url</label>
        <input name="url" type="text" v-model="form.url">
        <div v-if="form.errors.url">{{ form.errors.url }}</div>
        <label for="input">Name</label>
        <input  name="name" type="text" v-model="form.name">
        <div v-if="form.errors.name">{{ form.errors.name }}</div>
        <button class="border border-black p-2 hover:bg-black hover:text-white" type="submit" :disabled="form.processing">Save</button>
    </form>

    <ul>
        <li v-for="page in props.pages" :key="page.id">{{ page.name  }} : {{ page.url }}</li>
    </ul>
</template>
