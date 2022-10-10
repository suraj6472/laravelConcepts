<template>
    <Head title="Create User"></Head>

    <h1>Create New User</h1>
    <form  @submit.prevent="submit" class="max-w-md mx-auto mt-8">
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="name">
                Name
            </label>

            <input type="text" class="border border-gray-400 p-2 w-full" name="name" v-model="form.name" id="name" required>
        </div>
        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="email">
                Email
            </label>

            <input type="email" class="border border-gray-400 p-2 w-full" name="email" v-model="form.email" id="email" required>
        </div>
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="password">
                Password
            </label>

            <input type="password" class="border border-gray-400 p-2 w-full" name="password" v-model="form.password" id="password" required>
        </div>
        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                Submit
            </button>
        </div>

    </form>

</template>

<script setup>
    import { reactive } from 'vue';
    import { Inertia } from '@inertiajs/inertia'
    let form = reactive({
        name: '',
        email: '',
        password: '',

    })

    let submit = () => {
        Inertia.post('/users', form);
    }
</script>
