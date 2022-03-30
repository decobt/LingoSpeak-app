import Home from './components/Home.vue';
import Login from './components/Login.vue';
import Register from './components/Register.vue';

const routes = [
    {
        name: 'home',
        path: '',
        component: Home,
        beforeEnter: (to, from, next) => {
            axios.get('api/athenticated').then(()=> {
                next();
            }).catch(()=> {
                return next({name: 'login'});
            });
        }
    },
    {
        name: 'login',
        path: '/login',
        component: Login
    },
    {
        name: 'register',
        path: '/register',
        component: Register
    }
];

export default routes;