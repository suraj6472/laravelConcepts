<template>
        <h1 class="text-4xl font-bold">User</h1>

        <div style="margin-top:800px">
        <p>Current time is: {{time}}</p>

        <Link href="/users" class="text-blue-500" preserve-scroll>refresh</Link>
    </div>
</template>

<script>
    import Layout from '../Shared/Layout';
    import { Link } from '@inertiajs/inertia-vue3'
    export default {
        layout: Layout,
        props: {
            time: String
        },
        components: {
            Link
        }
    }
</script>
