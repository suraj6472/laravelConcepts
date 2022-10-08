<template>
        <Head title="User1"></Head>
        <h1 class="text-4xl font-bold">User</h1>

        <ul>
            <li v-for="user of users" :key="user.id" v-text="user.name"></li>
        </ul>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3'
    export default {
        props: {
            users: Array
        },
        components: {
            Link
        }
    }
</script>
