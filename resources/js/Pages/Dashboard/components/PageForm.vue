<script setup>
import { useForm } from '@inertiajs/vue3'
const form = useForm({
    url: null,
    name: null,
    tracked_button:null
})
let probs = defineProps(['isformVisible'])
const emit = defineEmits(['showForm'])

function handleClick() {
  emit('showForm')
}
</script>

<template>
     <button @click="handleClick" class="button bg-black text-white my-2 max-w-28 p-2">Add  {{probs.isformVisible? '-' : '+'}}</button>
    <form v-if="probs.isformVisible" class="flex flex-col gap-3 p-5 w-2/4 bg-white" @submit.prevent="form.post('/pages')">
        <label for="url">Url</label>
        <input id="url" placeholder="Enter url" class="p-3 border-2 bg-gray-100" name="url" type="text"
            v-model="form.url">
        <div v-if="form.errors.url">{{ form.errors.url }}</div>
        <label for="name">Name</label>
        <input id="name" placeholder="Enter name" class="p-3  bg-gray-100" name="name" type="text" v-model="form.name">
        <label for="tracked-button">Tracked button id</label>
        <input id="tracked-button" placeholder="Tracked Button id" class="p-3  bg-gray-100" name="tracking_button"
            type="text" v-model="form.tracked_button">
        <div v-if="form.errors.tracked_button">{{ form.errors.tracked_button }}</div>
        <button class="border border-black p-2 hover:bg-black hover:text-white  " type="submit"
            :disabled="form.processing">{{ form.processing ? "saving... " : "save" }}</button>
    </form>
</template>