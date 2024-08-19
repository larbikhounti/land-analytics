<script setup>
const {user} = defineProps(['user'])
</script>

<template>
 <p>hello : {{ user.name }}</p>
</template>