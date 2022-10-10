<template>
    <Head title="Create User"></Head>

    <h1>Create New User</h1>
    <form  @submit.prevent="submit" class="max-w-md mx-auto mt-8">
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="name">
                Name
            </label>

            <input type="text" class="border border-gray-400 p-2 w-full" name="name" v-model="form.name" id="name">
            <!-- <div class="text-red-500 text-red mt-1" v-if="form.errors.name" v-text="form.errors.name"></div> --> <!-- option 1 -->
        </div>
        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="email">
                Email
            </label>

            <input type="email" class="border border-gray-400 p-2 w-full" name="email" v-model="form.email" id="email">
            <!-- <div class="text-red-500 text-red mt-1" v-if="form.errors.email" v-text="form.errors.email"></div>  --> <!-- option 2 -->
        </div>
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="password">
                Password
            </label>

            <input type="password" class="border border-gray-400 p-2 w-full" name="password" v-model="form.password" id="password">
            <div class="text-red-500 text-red mt-1" v-if="form.errors.password" v-text="form.errors.password"></div> <!-- option 3 -->
        </div>
        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" :disabled="form.processing">
                Submit
            </button>
        </div>

    </form>

</template>

<script setup>
    // import { reactive, ref } from 'vue';
    // import { Inertia } from '@inertiajs/inertia'

    // defineProps({
    //     errors: Object  /*  option 2 */
    // })

    // let processing = ref(false);

    // let form = reactive({
    //     name: '',
    //     email: '',
    //     password: '',

    // })

    // let submit = () => {
    //     Inertia.post('/users', form, {
    //         onStart: () => {
    //             processing.value = true
    //         },
    //         onEnd: () => {
    //             processing.value = false
    //         }
    //     });
    // }

    /* option 3 inertia form helper */
    import { useForm } from '@inertiajs/inertia-vue3'

    let form = useForm({
        name: '',
        email: '',
        password: '',
    })

    let submit = () => {
        form.post('/users')
    }
    /* option 3 end */
</script>
