<template>
    <div class="flex flex-wrap w-100 justify-center items-center">
        
        <div class="card card-default">
            <div class="card-header">
                <div class="p-2 text-2xl text-gray-800 font-semibold"><h3>Register an account</h3></div>
            </div>
            <div class="card-body">
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
                    <button @click.prevent="saveForm" type="submit" class="btn btn-dark">Register</button>
                    <router-link :to="{name: 'login' }">Login</router-link>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: 'Register',
        mounted() {
            console.log('Register mounted.')
        },
        data(){
            return{
                form:{
                    name: '',
                    email: '',
                    password:'',
                    password_confirmation:''
                },
                errors:[]
            }
        },
        methods:{
            saveForm(){
                axios.post('/api/register', this.form).then(() =>{
                    console.log('saved');
                }).catch((error) =>{
                    this.errors = error.response.data.errors;
                })
            }
        }
    }
</script>
