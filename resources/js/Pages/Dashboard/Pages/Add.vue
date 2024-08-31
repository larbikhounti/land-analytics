<script setup>
import { useForm } from '@inertiajs/vue3'

let props = defineProps(['user_ad_id','page_ad_id','tracked_button_id','message','page'])

console.log(props.page)
const form = useForm({
    url: props.page? props.page.url : null,
    name: props.page? props.page.name :  null,
    tracked_button: props.page? props.page.tracked_button : null
})

function submitForm() {
    let page = props.page;
    if(page){
        form.put(`/pages/${page.id}`)
    }else{
        form.post('/pages')
    }
    
}
</script>
<script>
import DashboardLayout from "../Layout/DashboardLayout.vue"
import TrackingCode from './Components/TrackingCode.vue';
export default { layout: DashboardLayout }
</script>

<template>
    <div class="flex flex-col gap-3 ">
    <h1>{{ props.message.message }}</h1>
        <form  class="flex flex-col gap-3 p-5 w-2/4 bg-white" @submit.prevent="submitForm()">
        <label for="url">Url</label>
        <input id="url" placeholder="Enter url" class="p-3 border-2 bg-gray-100" name="url" type="text"
            v-model="form.url">
        <label for="name">Name</label>
        <input id="name"  placeholder="Enter name" class="p-3  bg-gray-100" name="name" type="text" v-model="form.name">
        <label for="tracked-button">Tracked button id</label>
        <input id="tracked-button" placeholder="Tracked Button id" class="p-3  bg-gray-100" name="tracking_button"
            type="text" v-model="form.tracked_button">
            <div class="text-red-600 font-bold" v-for="error in form.errors" >- {{ error }}</div>
        <button class="border border-black p-2 bg-black text-white " type="submit"
            :disabled="form.processing">{{ form.processing ? "Saving... " : "Save" }}</button>
    </form>
    <div>
        <TrackingCode :tracked_button_id="props.tracked_button_id" :user_ad_id="props.user_ad_id" :page_ad_id="props.page_ad_id" />
    </div>
    </div>
    
</template>