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

    <div class="flex flex-row ">
        <form class="flex flex-col gap-3 p-5 w-60"  @submit.prevent="form.post('/pages')">
        <label for="input">Url</label>
        <input placeholder="Enter url" class="p-3 hover:border hover:border-black" name="url" type="text" v-model="form.url">
        <div v-if="form.errors.url">{{ form.errors.url }}</div>
        <label for="input">Name</label>
        <input placeholder="Enter name"  class="p-3 hover:border hover:border-black" name="name" type="text" v-model="form.name">
        <div v-if="form.errors.name">{{ form.errors.name }}</div>
        <button  class="border border-black p-2 hover:bg-black hover:text-white  " type="submit" :disabled="form.processing">{{ form.processing? "saving... ": "save" }}</button>

    </form>
    <table class="table-fixed w-3/4 bg-white ">
  <thead>
    <tr class="text-left bg-black text-white px-3 ">
      <th class="p-2">Name</th>
      <th>Url</th>
      <th>Views</th>
      <th>Clicks</th>
      <th>Average Click Time </th>
    </tr>
  </thead>
  <tbody >
    <tr  v-for="page in props.pages"  :key="page.id">
      <td class="p-2">{{ page.name  }}</td>
      <td class="text-sm ">{{ page.url.slice(0,30) }}</td>
      <td>1961</td>
      <td>34</td>
      <td class="text-green-700">20 minutes</td>
    </tr>
  </tbody>
</table>
    </div>
   
 
</template>
