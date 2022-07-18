<script setup>
import BlogLikeBadge from './BlogLikeBadge.vue'
import BlogCommentBadge from './BlogCommentBadge.vue'

defineProps(['post'])
</script>

<template>
    <div
        class="dark:text-slate-900 md:absolute z-10 md:left-0 md:top-[45%] md:transform md:-translate-y-1/2 w-full -mt-8 md:mt-0 px-3 sm:px-6 md:px-0 md:w-3/5 lg:w-1/2 xl:w-2/5">
        <div
            class="p-4 sm:p-8 xl:py-14 md:px-10 bg-slate-200 bg-opacity-40 backdrop-filter backdrop-blur-lg shadow-lg rounded-3xl space-y-3 sm:space-y-5 !border-opacity-0">
            <div class="mb-2">
                <span v-for="category in post.categories">
                  <a class="text-xs uppercase p-2 px-3 rounded-full bg-green-200 hover:bg-green-400 mr-2" href="">
                    {{ category }}
                  </a>
                </span>
            </div>
            <h3 class="text-2xl font-medium mb-2">
                {{ post.title }}
            </h3>
            <div class="flex mb-2">
                  <span class="mr-3">
                    <img class="w-12 rounded-full" :src="post.author_avatar" alt="">
                  </span>
                <div>
                    <span class="block mb-1 font-medium text-sm dark:text-slate-100">
                      {{ post.author_name }}
                    </span>
                    <span class="block text-xs dark:text-slate-200 text-slate-500">
                      {{ post.created_at }}
                    </span>
                </div>
            </div>
            <div class="flex space-x-2">
                <BlogLikeBadge :likes="post.likes"/>
                <BlogCommentBadge :comments="post.comments"/>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
