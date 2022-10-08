<template>
    <nav class="mt-6">
        <ul class="list-disc">
            <li><Link class="text-blue-500 hover:underline" href="/">Home</Link></li>
            <li><Link class="text-blue-500 hover:underline" href="/users">User</Link></li>
            <li><Link class="text-blue-500 hover:underline" href="/settings">Setting</Link></li>
            <!-- <li><Link href="/logout">Log Out</Link></li> --> <!-- check one -->
            <!-- <li><Link href="/logout" method="post">Log Out</Link></li> --> <!-- check Two -->
            <!-- <li><Link class="text-blue-500 hover:underline" href="/logout" method="post" as="button">Log Out</Link></li> --> <!-- check 3 -->
            <li><Link class="text-blue-500 hover:underline" href="/logout" method="post" as="button" :data="{foo: 'bar'}">Log Out</Link></li> <!-- here- :data send data to the backend -->
        </ul>
    </nav>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3'
    export default {
        components: { Link },
    };
</script>
