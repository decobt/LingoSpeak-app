<template>
    <div class="relative flex items-top justify-center min-h-screen bg-white">
        <div class="flex flex-wrap w-100">
            <Navigation/>

            <div class="min-h-screen py-5 px-5" style="background: #eaf3fa; width:65%">
                <div class="content my-5 my-5">
                    <h2 class="title text-dark">Topic {{ $route.params.topic_id }}</h2>

                </div>
            </div>

            <Sidebar/>
        </div>
    </div>
</template>

<script>
    import Sidebar from './common/Sidebar.vue';
    import Navigation from './common/Navigation.vue';
    export default {
        name: 'Topic',
        components: {
            Sidebar,
            Navigation
        }
    }
</script>