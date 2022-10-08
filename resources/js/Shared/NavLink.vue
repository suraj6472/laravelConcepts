<template>
    <Link
        class="text-blue-500 hover:underline"
        :class="{
            'font-bold underline': active,
        }"
        ><slot></slot>
    </Link> <!-- check 5 -->
</template>

<script>
// import { Link } from "@inertiajs/inertia-vue3"; /* option 1 */
export default {
    // components: { Link }, /* option 1 */
    props: {
        active: Boolean,
    },
};
</script>
