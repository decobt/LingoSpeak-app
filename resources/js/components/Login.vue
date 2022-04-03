<template>
<div id="login_bg" class="relative flex items-top justify-center min-h-screen sm:items-center py-4">
    <div class="flex flex-wrap w-100 justify-center items-center">

        <div class="flex flex-wrap justify-center items-center p-5 m-3" style="background: white; z-index:1; border-radius:30px">
            <img src="learn.jpg" width="600" style="z-index:2" />
            <div class="card card-default" style="border: none;background: none;">
                <div class="card-header" style="border: none;background: none;">
                    <div class="p-2 text-2xl text-gray-800 font-semibold"><h3>Login to your account</h3></div>
                </div>
                <div class="card-body">
                    <div class="p-2 w-100">
                        <span class="w-100 text-danger" v-if="errors.email">{{errors.email[0]}}</span>
                        <label class="w-100" for="email">Your e-mail</label>
                        <input class="w-100 bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Email" type="email" v-model="form.email">
                    </div>
                    <div class="p-2 w-100">
                        <span class="w-100 text-danger" v-if="errors.password">{{errors.password[0]}}</span>
                        <label class="w-100" for="password">Password</label>
                        <input class="w-100 bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Password" type="password" v-model="form.password" name="password">
                    </div>
                    <div class="p-2 w-100 mt-4">
                        <button @click.prevent="loginUser" type="submit" class="btn btn-dark w-100">Login</button>
                        <h6 class="w-100 text-center my-3">or if you don't have account</h6>
                        <router-link :to="{name: 'register' }" class="btn btn-light w-100">Register</router-link>
                    </div>
                </div>
            </div>
        </div>

    </div></div>
</template>

<script>
    export default {
        name: 'Login',
        data(){
            return{
                form:{
                    email: '',
                    password: ''
                },
                errors: []
            }
        },
        methods:{
            loginUser(){
                axios.post('/api/login', this.form).then(() =>{
                    this.$router.push({ name: "home"}); 
                }).catch((error) =>{
                    this.errors = error.response.data.errors;
                });
            }
        }
    }
</script>
