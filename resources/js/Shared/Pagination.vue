<template>
    <Link
        v-for="link of links"
        :is="link.url ? 'Link': 'Span'"
        :key="link.label"
        :href="link.url"
        v-html="link.label"
        class="px-1"
        :class="{
            'font-bold': link.active,
            'text-gray-500': link.url === null,
        }"
    ></Link>
</template>

<script>
export default {
    props: {
        links: Array,
    },
};
</script>
