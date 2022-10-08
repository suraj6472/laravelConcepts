<!--  after making changes in vue files run "npx mix" -->
<template>
    <h1>Hello {{ name }}</h1>
    <h4>List of frameworks here</h4>
    <ul>
        <li v-for="framework of frameworks" v-text="framework" v-bind:key="framework"></li>
    </ul>
</template>

<script>

export default {
    props: {
        name: String,
        frameworks: Array
    },
}

</script>
