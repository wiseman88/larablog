<script setup>
import BlogItemCard from './BlogItemCard.vue'

defineProps(['post'])
</script>

<template>
    <div class="relative">
        <div class="relative z-0 ml-auto mr-0 w-full md:w-4/6 h-[450px]">
            <img class="rounded-3xl object-cover w-full h-[450px]" :src="post.main_image"
                 alt="">
        </div>
        <BlogItemCard :post="post"/>
    </div>
</template>

<style scoped>

</style>
