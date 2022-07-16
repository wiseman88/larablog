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
            <div>
                <!-- editor's pick item -->
                <BlogItemEditorPick/>
            </div>
        </section>
    </div>
</template>

<style scoped>

</style>
