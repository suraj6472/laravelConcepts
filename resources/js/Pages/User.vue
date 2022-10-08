<template>
    <h1>User</h1>
    <Nav />

    <div style="margin-top:800px">
        <p>Current time is: {{time}}</p>

        <Link href="/users" class="text-blue-500" preserve-scroll>refresh</Link>
    </div>
</template>

<script>
    import Nav from '../Shared/Nav'
    import { Link } from '@inertiajs/inertia-vue3'
    export default {
        components: { Nav, Link },
        props: {
            time: String
        }
    }
</script>
