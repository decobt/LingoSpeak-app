<template>
    <div class="min-h-screen py-4 px-4" style="width:20%">
        <div class="content flex flex-wrap flex-column align-center justify-center text-center py-4">
            <div class="py-5">
                <img src="images/male.png" class="z-depth-2 img-fluid" style="" />
            </div>
            <h3 class="user-title text-dark">Hi {{ user.name }}!</h3>
                    
            <div class="cards flex flex-wrap">

                <div class="menucard w-50">
                    <router-link :to="{name: 'analytics'}" class="analytics">
                    <div class="p-4 m-3 text-center" style="border-radius:12px; background: #fdf8ec">
                        <i class="fa-solid fa-chart-simple fa-3x"></i>
                        <h5 class="mt-2">Analytics</h5>
                    </div>
                    </router-link>
                </div>

                <div class="menucard w-50">
                    <router-link :to="{name: 'settings'}" class="settings">
                    <div class="p-4 m-3 text-center" style="border-radius:12px; background: #eaf9f1">
                        <i class="fa-solid fa-user-gear fa-3x"></i>
                        <h5 class="mt-2">Settings</h5>
                    </div>
                    </router-link>
                </div>

                <button @click.prevent="logout" class="btn btn-success btn-lg w-100 m-3"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Sidebar',
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