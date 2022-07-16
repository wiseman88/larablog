<script setup>
import BlogItemEditorPick from './BlogItemEditorPick.vue'
</script>

<template>
    <div class="container px-4 mx-auto">
        <!-- editor's pick -->
        <section class="py-20">
            <div class="pb-16">
                <h2 class="flex items-center space-x-3 pb-4">
                    <span class="font-bold text-4xl">Editor's pick</span>
                    <span><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                               xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg></span>
                </h2>
                <p class="text-xl text-slate-500">
                    Discover the most outstanding articles in all topics of life.
                </p>
            </div>
            <div class="relative">
                <div class="relative z-0 ml-auto mr-0 w-full md:w-4/5 h-[500px]">
                    <img class="rounded-3xl object-cover w-full h-[500px]" src="/img/editors_pick_bg.jpg"
                         alt="">
                </div>
                <div
                    class="dark:text-slate-900 md:absolute z-10 md:left-0 md:top-1/2 md:transform md:-translate-y-1/2 w-full -mt-8 md:mt-0 px-3 sm:px-6 md:px-0 md:w-3/5 lg:w-1/2 xl:w-2/5">
                    <!-- card -->
                    <BlogItemEditorPick/>
                    <!-- arrows -->
                    <div class="flex ml-8 mt-8 space-x-2">
                        <a href=""
                           class="flex items-center justify-center bg-white border hover:border-slate-300 h-12 w-12 rounded-full">
                            <span><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                       xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M15 19l-7-7 7-7"></path></svg></span>
                        </a>
                        <a href=""
                           class="flex items-center justify-center bg-white border h-12 w-12 rounded-full cursor-not-allowed">
                            <span><svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor"
                                       viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<style scoped>

</style>
