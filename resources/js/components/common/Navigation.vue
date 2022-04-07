<template>
            <div class="py-4 px-4 min-h-screen h-100" style="width:15%; background: #1e2124">
                <div class="flex align-items-start flex-column">
                    <h2 class="title text-white w-100">LingoSpeak App</h2>
                    <div class="py-4 w-100">
                        <router-link class="btn btn-light btn-block w-100 my-2 navigation_link" :to="{name: 'home'}">
                            <i class="fa-solid fa-house-chimney-window fa-2x"></i>
                            <div class="w-100">Home</div>
                        </router-link>
                        <router-link class="btn btn-light btn-block w-100 my-2 navigation_link" :to="{name: 'dictionary'}">
                            <i class="fa-solid fa-book fa-2x"></i>
                            <div class="w-100">Dictionary</div>
                        </router-link>
                        <router-link class="btn btn-light btn-block w-100 my-2 navigation_link" :to="{name: 'messages'}">
                            <i class="fa-solid fa-message fa-2x"></i>
                            <div class="w-100">Messages</div>
                        </router-link>
                    </div>
                </div>
            </div>    
</template>

<script>
    export default {
        name: 'Navigation'
    }
</script>