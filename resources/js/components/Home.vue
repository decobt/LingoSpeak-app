<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Home Component</div>

                    <button @click.prevent="logout" class="btn btn-dark">Logout</button>
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
