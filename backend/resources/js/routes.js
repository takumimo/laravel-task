import AllPost from './components/AllPost.vue';
import CreatePost from './components/CreatePost.vue';
import EditPost from './components/EditPost.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllPost
    },
    {
        name: 'create',
        path: '/create',
        component: CreatePost
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditPost
    }
];