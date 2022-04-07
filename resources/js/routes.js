import Home from './components/Home.vue';
import Login from './components/Login.vue';
import Register from './components/Register.vue';
import Analytics from './components/Analytics.vue';
import Settings from './components/Settings.vue';
import Dictionary from './components/Dictionary.vue';
import Messages from './components/Messages.vue';
import Topic from './components/Topic.vue';

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
    },
    {
        name: 'analytics',
        path: '/analytics',
        component: Analytics,
        beforeEnter: (to, from, next) => {
            axios.get('api/athenticated').then(()=> {
                next();
            }).catch(()=> {
                return next({name: 'login'});
            });
        }
    },
    {
        name: 'settings',
        path: '/settings',
        component: Settings,
        beforeEnter: (to, from, next) => {
            axios.get('api/athenticated').then(()=> {
                next();
            }).catch(()=> {
                return next({name: 'login'});
            });
        }
    },
    {
        name: 'dictionary',
        path: '/dictionary',
        component: Dictionary,
        beforeEnter: (to, from, next) => {
            axios.get('api/athenticated').then(()=> {
                next();
            }).catch(()=> {
                return next({name: 'login'});
            });
        }
    },
    {
        name: 'messages',
        path: '/messages',
        component: Messages,
        beforeEnter: (to, from, next) => {
            axios.get('api/athenticated').then(()=> {
                next();
            }).catch(()=> {
                return next({name: 'login'});
            });
        }
    },
    {
        name: 'topic',
        path: '/:topic_id',
        component: Topic,
        beforeEnter: (to, from, next) => {
            axios.get('api/athenticated').then(()=> {
                next();
            }).catch(()=> {
                return next({name: 'login'});
            });
        }
    }
];

export default routes;