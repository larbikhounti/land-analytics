<script setup>

</script>

<template>
    <div id="main">

        <slot />
    </div>

</template>

<style>
#main {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: black;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
</style>