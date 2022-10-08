<template>
    <Layout>
        <h1 class="text-4xl font-bold">User</h1>

        <div style="margin-top:800px">
        <p>Current time is: {{time}}</p>

        <Link href="/users" class="text-blue-500" preserve-scroll>refresh</Link>
    </div>
    </Layout>
</template>

<!-- with this setup in script tag we don;t need to do export default -->
<script setup>
    import Layout from '../Shared/Layout';
    import { Link } from '@inertiajs/inertia-vue3'

    /* in case of setup, we accept props with below syntax */

    defineProps({
        time: String
    })
</script>
