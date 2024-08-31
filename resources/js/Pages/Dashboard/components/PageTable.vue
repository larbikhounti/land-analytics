<script setup>
import { router } from '@inertiajs/vue3'
let props = defineProps(['pages'])

function deletePage(pageId){
    router.delete(`/pages/${pageId}`)
}

function editPage(pageId){
    router.get(`/pages/${pageId}`)
}

</script>

<template>
    <table  class="table-fixed max-h-screen max-w-screen bg-white  overflow-scroll ">
            <thead>
                <tr class="text-left bg-black text-white px-3 ">
                    <th class="p-2">Name</th>
                    <th>Url</th>
                    <th>Views</th>
                    <th>Clicks</th>
                    <th>Tracked Button</th>
                    <th>Average Click Time </th>
                    <th> </th>
                    <th> </th>
                    <th> </th>
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
                    <td @click="deletePage(page.id)" class="text-red-500 text-center cursor-pointer ">Delete</td>
                    <td @click="editPage(page.id)" class="text-blue-500 text-center cursor-pointer ">Edit</td>
                    <td @click="delete(page.id)" class="text-center cursor-pointer ">Details </td>
                </tr>
            </tbody>
        </table>
</template>