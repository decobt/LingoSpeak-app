<template>
<div id="register_bg" class="relative flex items-top justify-center min-h-screen sm:items-center py-4">
    <div class="flex flex-wrap w-100 justify-center items-center">
        
        <div class="flex flex-wrap justify-center items-center p-5 m-3" style="background: white; z-index:1; border-radius:30px">
            
            <div class="card card-default" style="border: none;background: none;">
                <div class="card-header" style="border: none;background: none;">
                    <div class="p-2 text-2xl text-gray-800 font-semibold"><h3>Register an account</h3></div>
                </div>
                <div class="card-body">
                    <form style="max-width:300px">
                    <div v-if="note != ''" class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ note }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="p-2 w-100">
                        <span class="w-100 text-danger" v-if="errors.name">{{errors.name[0]}}</span>
                        <label class="w-100" for="name">Name</label>
                        <input class="w-100 bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Name" type="text" v-model="form.name" >
                    </div>
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
                    <div class="p-2 w-100">
                        <label for="confirm_password">Confirm Password</label>
                        <input class="w-100 bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Confirm Password" type="password" v-model="form.password_confirmation" name="password_confirmation">
                    </div>
                    <div class="p-2 w-100">
                        <button @click.prevent="saveForm" type="submit" class="btn btn-dark w-100">Register</button>
                        <h6 class="w-100 text-center my-3">or if you already have account</h6>
                        <router-link :to="{name: 'login' }" class="btn btn-light w-100">Login</router-link>
                    </div>
                    </form>
                </div>
            </div>
            <img src="images/learn.jpg" width="600" style="z-index:2" />
        </div>

    </div></div>
</template>

<script>
    export default {
        name: 'Register',
        data(){
            return{
                form:{
                    name: '',
                    email: '',
                    password:'',
                    password_confirmation:''
                },
                errors:[],
                note: ''
            }
        },
        methods:{
            saveForm(){
                axios.post('/api/register', this.form).then((response) => {
                    this.note = response.data;
                }).catch((error) =>{
                    this.errors = error.response.data.errors;
                })
            }
        }
    }
</script>
