<script setup>
// Import Swiper Vue.js components
import {Navigation} from 'swiper';
import {Swiper, SwiperSlide} from 'swiper/vue';
import BlogItemEditorPick from './BlogItemEditorPick.vue'

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';

const onSwiper = Swiper;
const onSlideChange = SwiperSlide;
const modules = [Navigation];


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
            <swiper
                :slides-per-view="1"
                :space-between="50"
                :modules="modules"
                :navigation="true"
                @swiper="onSwiper"
                @slideChange="onSlideChange"
            >
                <!-- editor's pick item -->
                <swiper-slide>
                    <BlogItemEditorPick/>
                </swiper-slide>
                <swiper-slide>
                    <BlogItemEditorPick/>
                </swiper-slide>
                <swiper-slide>
                    <BlogItemEditorPick/>
                </swiper-slide>
            </swiper>
        </section>
    </div>
</template>

<style scoped>

</style>
