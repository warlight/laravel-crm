import UsersList from './pages/UsersList.vue';
import UserPage from './pages/UserPage.vue';
import AdminPage from './pages/AdminPage.vue';


const routes = [
    {path: '/users', component: UsersList},
    {path: '/users/:id', component: UserPage},
    {path: '/admin', component: AdminPage},
];

export default routes;
