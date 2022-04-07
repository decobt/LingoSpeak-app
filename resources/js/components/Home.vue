<template>
<div class="relative flex items-top justify-center min-h-screen bg-white">
    <div class="flex flex-wrap w-100">
            <Navigation/>

            <div class="min-h-screen py-5 px-5" style="background: #eaf3fa; width:65%">
                <div class="content my-5 my-5">
                    <h2 class="title text-dark">Popular Topics</h2>
                    <div class="cards flex flex-wrap">

                        <div class="flashcard w-50">
                            <div class="bg-white p-4 m-3" style="min-height:200px; border-radius:4px">
                                <div class="flex flex-wrap">
                                    <div class="w-25" style="min-width:110px !important">
                                        <span class="fa-stack fa-3x">
                                            <i class="fa-solid fa-circle fa-stack-2x"></i>
                                            <i class="fa-solid fa-pizza-slice fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="w-75">
                                        <h4>Food</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex elit, venenatis et porttitor in, bibendum at tortor. </p>
                                        <div class="topic_progress w-100" style="background: #f5f3fb; height:10px; border-radius:4px">
                                            <div class="fill_progress w-75" style="background: #253e7d; height:10px; border-radius:4px"></div>
                                        </div>
                                        <router-link :to="{ name: 'topic', params: { topic_id: 'food' } }" class="btn btn-light mt-3" style="background: #fff6ec"><i class="fa-solid fa-play"></i> Start</router-link>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flashcard w-50">
                            <div class="bg-white p-4 m-3" style="min-height:200px; border-radius:4px">
                                <div class="flex flex-wrap">
                                    <div class="w-25" style="min-width:110px !important">
                                        <span class="fa-stack fa-3x">
                                            <i class="fa-solid fa-circle fa-stack-2x"></i>
                                            <i class="fa-solid fa-chess-rook fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="w-75">
                                        <h4>Adverbs</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex elit, venenatis et porttitor in, bibendum at tortor. </p>
                                        <div class="topic_progress w-100" style="background: #f5f3fb; height:10px; border-radius:4px">
                                            <div class="fill_progress w-25" style="background: #253e7d; height:10px; border-radius:4px"></div>
                                        </div>
                                        <button class="btn btn-light mt-3" style="background: #fff6ec"><i class="fa-solid fa-play"></i> Start</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flashcard w-50">
                            <div class="bg-white p-4 m-3" style="min-height:200px; border-radius:4px">
                                <div class="flex flex-wrap">
                                    <div class="w-25" style="min-width:110px !important">
                                        <span class="fa-stack fa-3x">
                                            <i class="fa-solid fa-circle fa-stack-2x"></i>
                                            <i class="fa-solid fa-brush fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="w-75">
                                        <h4>Adjectives</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex elit, venenatis et porttitor in, bibendum at tortor. </p>
                                        <div class="topic_progress w-100" style="background: #f5f3fb; height:10px; border-radius:4px">
                                            <div class="fill_progress w-25" style="background: #253e7d; height:10px; border-radius:4px"></div>
                                        </div>
                                        <button class="btn btn-light mt-3" style="background: #fff6ec"><i class="fa-solid fa-play"></i> Start</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flashcard w-50">
                            <div class="bg-white p-4 m-3" style="min-height:200px; border-radius:4px">
                                <div class="flex flex-wrap">
                                    <div class="w-25" style="min-width:110px !important">
                                        <span class="fa-stack fa-3x">
                                            <i class="fa-solid fa-circle fa-stack-2x"></i>
                                            <i class="fa-solid fa-people-group fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="w-75">
                                        <h4>Family</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex elit, venenatis et porttitor in, bibendum at tortor. </p>
                                        <div class="topic_progress w-100" style="background: #f5f3fb; height:10px; border-radius:4px">
                                            <div class="fill_progress w-50" style="background: #253e7d; height:10px; border-radius:4px"></div>
                                        </div>
                                        <button class="btn btn-light mt-3" style="background: #fff6ec"><i class="fa-solid fa-play"></i> Start</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flashcard w-50">
                            <div class="bg-white p-4 m-3" style="min-height:200px; border-radius:4px">
                                <div class="flex flex-wrap">
                                    <div class="w-25" style="min-width:110px !important">
                                        <span class="fa-stack fa-3x">
                                            <i class="fa-solid fa-circle fa-stack-2x"></i>
                                            <i class="fa-solid fa-pizza-slice fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="w-75">
                                        <h4>Food</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex elit, venenatis et porttitor in, bibendum at tortor. </p>
                                        <div class="topic_progress w-100" style="background: #f5f3fb; height:10px; border-radius:4px">
                                            <div class="fill_progress w-75" style="background: #253e7d; height:10px; border-radius:4px"></div>
                                        </div>
                                        <button class="btn btn-light mt-3" style="background: #fff6ec"><i class="fa-solid fa-play"></i> Start</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flashcard w-50">
                            <div class="bg-white p-4 m-3" style="min-height:200px; border-radius:4px">
                                <div class="flex flex-wrap">
                                    <div class="w-25" style="min-width:110px !important">
                                        <span class="fa-stack fa-3x">
                                            <i class="fa-solid fa-circle fa-stack-2x"></i>
                                            <i class="fa-solid fa-chess-rook fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="w-75">
                                        <h4>Adverbs</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex elit, venenatis et porttitor in, bibendum at tortor. </p>
                                        <div class="topic_progress w-100" style="background: #f5f3fb; height:10px; border-radius:4px">
                                            <div class="fill_progress w-25" style="background: #253e7d; height:10px; border-radius:4px"></div>
                                        </div>
                                        <button class="btn btn-light mt-3" style="background: #fff6ec"><i class="fa-solid fa-play"></i> Start</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flashcard w-50">
                            <div class="bg-white p-4 m-3" style="min-height:200px; border-radius:4px">
                                <div class="flex flex-wrap">
                                    <div class="w-25" style="min-width:110px !important">
                                        <span class="fa-stack fa-3x">
                                            <i class="fa-solid fa-circle fa-stack-2x"></i>
                                            <i class="fa-solid fa-brush fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="w-75">
                                        <h4>Adjectives</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex elit, venenatis et porttitor in, bibendum at tortor. </p>
                                        <div class="topic_progress w-100" style="background: #f5f3fb; height:10px; border-radius:4px">
                                            <div class="fill_progress w-25" style="background: #253e7d; height:10px; border-radius:4px"></div>
                                        </div>
                                        <button class="btn btn-light mt-3" style="background: #fff6ec"><i class="fa-solid fa-play"></i> Start</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flashcard w-50">
                            <div class="bg-white p-4 m-3" style="min-height:200px; border-radius:4px">
                                <div class="flex flex-wrap">
                                    <div class="w-25" style="min-width:110px !important">
                                        <span class="fa-stack fa-3x">
                                            <i class="fa-solid fa-circle fa-stack-2x"></i>
                                            <i class="fa-solid fa-people-group fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="w-75">
                                        <h4>Family</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex elit, venenatis et porttitor in, bibendum at tortor. </p>
                                        <div class="topic_progress w-100" style="background: #f5f3fb; height:10px; border-radius:4px">
                                            <div class="fill_progress w-50" style="background: #253e7d; height:10px; border-radius:4px"></div>
                                        </div>
                                        <button class="btn btn-light mt-3" style="background: #fff6ec"><i class="fa-solid fa-play"></i> Start</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
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
        name: 'Home',
        components: {
            Sidebar,
            Navigation
        },
        data(){
            return{
                user: null
            }
        },
        methods:{
            logout(){
                axios.post('/api/logout', []).then(()=>{
                    this.$router.push({ name: "login"})
                })
            }
        },
        mounted(){
            axios.get('/api/user').then((res)=>{
                this.user = res.data
            })
        }
    }
</script>
