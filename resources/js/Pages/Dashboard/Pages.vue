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
    <h1 class="font-bold text-lg ">Landing Pages Management</h1>
    
    <form class="flex flex-col gap-3 p-5 w-60"  @submit.prevent="form.post('/pages')">
        <label for="input">Url</label>
        <input class="p-3 hover:border hover:border-black" name="url" type="text" v-model="form.url">
        <div v-if="form.errors.url">{{ form.errors.url }}</div>
        <label for="input">Name</label>
        <input class="p-3 hover:border hover:border-black" name="name" type="text" v-model="form.name">
        <div v-if="form.errors.name">{{ form.errors.name }}</div>
        <button  class="border border-black p-2 hover:bg-black hover:text-white  " type="submit" :disabled="form.processing">{{ form.processing? "saving... ": "save" }}</button>

    </form>

    <ul>
        <li class="transition delay-150 duration-300 ease-in-out" v-for="page in props.pages" :key="page.id">{{ page.name  }} : {{ page.url }}</li>
    </ul>
</template>
