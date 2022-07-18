<script setup>
defineProps(['comments'])
</script>

<template>
    <p class="inline-flex items-center space-x-1.5 bg-white hover:bg-green-50 hover:text-green-700 rounded-full p-1 px-4">
                    <span>
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                           xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                    </span>
        <span>{{ comments }}</span>
    </p>
</template>

<style scoped>

</style>
