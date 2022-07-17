<script setup>
import BlogLikeBadge from './BlogLikeBadge.vue'
import BlogCommentBadge from './BlogCommentBadge.vue'
</script>

<template>
    <div
        class="dark:text-slate-900 md:absolute z-10 md:left-0 md:top-[45%] md:transform md:-translate-y-1/2 w-full -mt-8 md:mt-0 px-3 sm:px-6 md:px-0 md:w-3/5 lg:w-1/2 xl:w-2/5">
        <div
            class="p-4 sm:p-8 xl:py-14 md:px-10 bg-slate-200 bg-opacity-40 backdrop-filter backdrop-blur-lg shadow-lg rounded-3xl space-y-3 sm:space-y-5 !border-opacity-0">
                <span class="mb-2">
                  <a class="text-xs uppercase p-2 px-3 rounded-full bg-green-200 hover:bg-green-400" href="">
                    Programming
                  </a>
                </span>
            <h3 class="text-2xl font-medium mb-2">
                Lorem ipsum dolor sit amet consectetur.
            </h3>
            <div class="flex mb-2">
                  <span class="mr-3">
                    <img class="w-12 rounded-full" src="/img/avatar.jpg" alt="">
                  </span>
                <div>
                    <span class="block mb-1 font-medium text-sm dark:text-slate-100">
                      John J. Keeshan
                    </span>
                    <span class="block text-xs dark:text-slate-200 text-slate-500">
                      Sep 30, 2022
                    </span>
                </div>
            </div>
            <div class="flex space-x-2">
                <BlogLikeBadge/>
                <BlogCommentBadge/>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
