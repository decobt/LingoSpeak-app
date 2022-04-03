<template>
<div class="relative flex items-top justify-center min-h-screen bg-white">
    <div class="flex flex-wrap w-100">
        
            <div class="bg-gray-100 dark:bg-gray-900 py-4 px-4 min-h-screen h-100" style="width:15%">
                <div class="flex align-items-start flex-column">
                    <h2 class="title text-white w-100">LingoSpeak App</h2>
                    <div class="py-4 w-100">
                        <router-link class="btn btn-light btn-block w-100 my-2" :to="{name: 'home'}">
                            <i class="fa-solid fa-house-chimney-window fa-2x"></i>
                            <div class="w-100">Home</div>
                        </router-link>
                        <router-link class="btn btn-light btn-block w-100 my-2" :to="{name: 'home'}">
                            <i class="fa-solid fa-book fa-2x"></i>
                            <div class="w-100">Dictionary</div>
                        </router-link>
                        <router-link class="btn btn-light btn-block w-100 my-2" :to="{name: 'home'}">
                            <i class="fa-solid fa-message fa-2x"></i>
                            <div class="w-100">Messages</div>
                        </router-link>
                    </div>
                </div>
            </div>

            <div class="min-h-screen py-5 px-5" style="background: #fff9ff; width:65%">
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
                                            <div class="fill_progress w-75" style="background: #736cee; height:10px; border-radius:4px"></div>
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
                                            <div class="fill_progress w-25" style="background: #736cee; height:10px; border-radius:4px"></div>
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
                                            <div class="fill_progress w-25" style="background: #736cee; height:10px; border-radius:4px"></div>
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
                                            <div class="fill_progress w-50" style="background: #736cee; height:10px; border-radius:4px"></div>
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
                                            <div class="fill_progress w-75" style="background: #736cee; height:10px; border-radius:4px"></div>
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
                                            <div class="fill_progress w-25" style="background: #736cee; height:10px; border-radius:4px"></div>
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
                                            <div class="fill_progress w-25" style="background: #736cee; height:10px; border-radius:4px"></div>
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
                                            <div class="fill_progress w-50" style="background: #736cee; height:10px; border-radius:4px"></div>
                                        </div>
                                        <button class="btn btn-light mt-3" style="background: #fff6ec"><i class="fa-solid fa-play"></i> Start</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>

            <div class="min-h-screen py-4 px-4" style="width:20%">
                <div class="content flex flex-wrap flex-column align-center justify-center text-center py-4">
                    <div class="py-5">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" class="rounded-circle z-depth-2" />
                    </div>
                    <h3 class="user-title text-dark">Hi Joan!</h3>
                    
                    <div class="cards flex flex-wrap">

                        <div class="menucard w-50">
                            <div class="p-4 m-3 text-center" style="border-radius:12px; background: #fdf8ec">
                                <i class="fa-solid fa-chart-simple fa-3x"></i>
                                <h5 class="mt-2">Analytics</h5>
                            </div>
                        </div>

                        <div class="menucard w-50">
                            <div class="p-4 m-3 text-center" style="border-radius:12px; background: #eaf9f1">
                                <i class="fa-solid fa-user-gear fa-3x"></i>
                                <h5 class="mt-2">Settings</h5>
                            </div>
                        </div>

                        <button @click.prevent="logout" class="btn btn-success btn-lg w-100 m-3"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Home',
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
