<script setup>
import { useForm } from '@inertiajs/vue3'
import { ref } from 'vue'
const form = useForm({
    url: null,
    name: null,
    tracked_button:null
})
let props = defineProps(['pages']);
let showFrom = ref(false)

console.log(props.pages)
</script>
<script>
import DashboardLayout from './DashboardLayout.vue';
export default { layout: DashboardLayout }
</script>

<template>

    <div class="flex flex-col ">
    <button @click="showFrom = !showFrom" class="button bg-black text-white my-2 max-w-28 p-2">Add  {{showFrom? '-' : '+'}}</button>
        <form v-if="showFrom" class="flex flex-col gap-3 p-5 w-2/4 bg-white" @submit.prevent="form.post('/pages')">
            <label for="url">Url</label>
            <input id="url" placeholder="Enter url" class="p-3 border-2 bg-gray-100" name="url" type="text"
                v-model="form.url">
            <div v-if="form.errors.url">{{ form.errors.url }}</div>
            <label for="name">Name</label>
            <input id="name" placeholder="Enter name" class="p-3  bg-gray-100" name="name" type="text"
                v-model="form.name">
             <label for="tracked-button">Tracked button id</label>
            <input id="tracked-button" placeholder="Tracked Button id" class="p-3  bg-gray-100" name="tracking_button" type="text"
                v-model="form.tracked_button">    
            <div v-if="form.errors.tracked_button">{{ form.errors.tracked_button }}</div>
            <button class="border border-black p-2 hover:bg-black hover:text-white  " type="submit"
                :disabled="form.processing">{{ form.processing ? "saving... " : "save" }}</button>

        </form>
        <table v-if="!showFrom" class="table-fixed w-3/4 bg-white  overflow-scroll max-h-screen">
            <thead>
                <tr class="text-left bg-black text-white px-3 ">
                    <th class="p-2">Name</th>
                    <th>Url</th>
                    <th>Views</th>
                    <th>Clicks</th>
                    <th>Tracked Button</th>
                    <th>Average Click Time </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="page in props.pages" :key="page.id">
                    <td class="p-2">{{ page.name }}</td>
                    <td class="text-sm ">{{ page.url.slice(0, 30) }}</td>
                    <td>1961</td>
                    <td>20</td>
                    <td>{{ page.tracked_button }}</td>
                    <td class="text-green-700">20 minutes</td>
                </tr>
            </tbody>
        </table>
    </div>


</template>
