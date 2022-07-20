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

defineProps({
    posts: Object,
})
const posts = [
    {
        title: 'Post number 1',
        author_name: 'John J. Keeshan',
        author_avatar: 'https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
        created_at: '26.7.2022',
        likes: 51,
        comments: 12,
        categories: ['programming', 'lifestyle', 'nature'],
        main_image: 'https://images.unsplash.com/photo-1432889490240-84df33d47091?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80'
    },
    {
        title: 'Post number 2',
        author_name: 'Jane J. Keeshan',
        author_avatar: 'https://images.unsplash.com/photo-1586297135537-94bc9ba060aa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
        created_at: '26.8.2022',
        likes: 15,
        comments: 21,
        categories: ['nature', 'water', 'ocean'],
        main_image: 'https://images.unsplash.com/photo-1507295386538-ddd5e86cd597?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80'
    },
    {
        title: 'Post number 3',
        author_name: 'Jared J. Keeshan',
        author_avatar: 'https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
        created_at: '12.8.2022',
        likes: 1,
        comments: 102,
        categories: ['forest', 'nature'],
        main_image: 'https://images.unsplash.com/photo-1511497584788-876760111969?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80'
    }
]


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
                <swiper-slide v-for="post in posts">
                    <BlogItemEditorPick :post="post"/>
                </swiper-slide>
            </swiper>
        </section>
    </div>
</template>

<style scoped>

</style>
