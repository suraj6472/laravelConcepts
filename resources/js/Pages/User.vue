<template>
        <!-- <Head>
            <title>User</title>
        </Head> --> <!-- option 1 -->
        <!-- <Head title="User1"></Head> -->  <!-- option 2 -->
        <Head title="User1"></Head>
        <h1 class="text-4xl font-bold">User</h1>

        <div style="margin-top:800px">
        <p>Current time is: {{time}}</p>

        <Link href="/users" class="text-blue-500" preserve-scroll>refresh</Link>
    </div>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3'
    export default {
        props: {
            time: String
        },
        components: {
            Link
        }
    }
</script>
