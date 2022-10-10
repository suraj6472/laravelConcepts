<template>
        <Head title="User1"></Head>
        <div class="flex justify-between mb-5">
            <div class="flex">
                <h1 class="text-4xl font-bold">User</h1>
                <Link href="/users/create" class="text-blue-500 ml-2">New User</Link>
            </div>
            <input type="text" placeholder="Search..." class="border px-2" v-model="search">
        </div>

        <ul>
            <li v-for="user of users.data" :key="user.id">{{ user.name }}</li>
        </ul>

        <div>
            <Pagination :links="users.links" />
        </div>
</template>

<script setup>
    import { Inertia } from '@inertiajs/inertia'
    import { ref, watch } from 'vue'
    import Pagination from '../../Shared/Pagination'
    import throttle from 'lodash/throttle'
    import debounce from 'lodash/debounce'

    let props = defineProps({
        users: Object,
        filters: Object
    });

    let search = ref(props.filters.search);

    // watch(search, throttle(function(value) {
    watch(search, debounce(function(value) { //  it will make request after 500 when user stops typing text box
            Inertia.get('/users', {search: value}, {
                preserveState: true,
                replace: true
            })
    }, 500));
</script>
