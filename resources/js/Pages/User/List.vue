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

<script>
    import { Inertia } from '@inertiajs/inertia'
    import Pagination from '../../Shared/Pagination'
    export default {
        data() {
            return {
                search: '',
            }
        },
        props: {
            users: Object,
            filters: Object
        },
        components: {
           Pagination
        },

        watch: {
            search(value) {
                Inertia.get('/users', {search: value}, {
                    preserveState: true,
                    replace: true
                })
            }
        },
        created() {
            this.search = this.filters.search
        }
    }
</script>
