<script setup>
import { ref } from 'vue'
let props = defineProps(["title"])
const people = ref([
    {
    name: 'Shampoo',
    ult: 'https://example.com/product/shampoo',
    visits: ' 35',
    imageUrl:
        'https://images.unsplash.com/photo-1514996937319-344454492b37?ixlib=rb-1.2.1&auto=format&fit=crop&w=256&h=256&q=80',
    clicks: '5',
    averageClickTime: '20 minuts',
},
{
    name: 'Conditioner',
    ult: 'https://example.com/product/conditioner',
    visits: ' 50',
    imageUrl:
        'https://images.unsplash.com/photo-1592126079094-0da51a6360ff?ixlib=rb-1.2.1&auto=format&fit=crop&w=256&h=256&q=80',
    clicks: '12',
    averageClickTime: '5 minutes',
},
{
    name: 'Face Cream',
    ult: 'https://example.com/product/face-cream',
    visits: ' 42',
    imageUrl:
        'https://images.unsplash.com/photo-1605379399642-67608f6de003?ixlib=rb-1.2.1&auto=format&fit=crop&w=256&h=256&q=80',
    clicks: '7',
    averageClickTime: '21 minutes',
},
{
    name: 'Body Lotion',
    ult: 'https://example.com/product/body-lotion',
    visits: ' 28',
    imageUrl:
        'https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?ixlib=rb-1.2.1&auto=format&fit=crop&w=256&h=256&q=80',
    clicks: '3',
    averageClickTime: '25 minutes',
},
{
    name: 'Hand Soap',
    ult: 'https://example.com/product/hand-soap',
    visits: ' 60',
    imageUrl:
        'https://images.unsplash.com/photo-1604393217257-c86eecb1d768?ixlib=rb-1.2.1&auto=format&fit=crop&w=256&h=256&q=80',
    clicks: '10',
    averageClickTime: '28 minutes',
},

])
</script>

<template>
    <div class="bg-white p-8">
        <h1 class="my-5 text-black font-bold text-xl">{{props.title}} </h1>
    <ul visits="list" class="divide-y divide-gray-100">
        <li v-for="person in people" :key="person.ult" class="flex justify-between gap-x-6 py-2">
            <div class="flex min-w-0 gap-x-4">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">{{ person.name }}</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ person.ult }}</p>
                </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-900">{{ person.visits }} Visits</p>
                     <p  class="text-sm leading-6 text-gray-900">{{ person.clicks }} Clicks</p>
                <p class="text-xs text-green-700 font-bold" > <span >{{ person.averageClickTime }}</span> Average</p>
            </div>
        </li>
    </ul>
    </div>
</template>
