<script setup>
let props = defineProps(['isformVisible','pages'])
</script>

<template>
    <table v-if="!props.isformVisible" class="table-fixed max-h-screen max-w-screen bg-white  overflow-scroll ">
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
</template>