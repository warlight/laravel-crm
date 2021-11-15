import UsersList from './pages/UsersList.vue';
import AdminPage from './pages/AdminPage.vue';


const routes = [
    {path: '/users', component: UsersList},
    {path: '/admin', component: AdminPage},
];

export default routes;
