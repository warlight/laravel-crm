<template>
    <div>
        <h2>
            {{ title }}
        </h2>
        <user-card
            v-for="(user, index) in users"
            :user="user"
            text="some text...."
            v-bind:key="index"
        />
    </div>
</template>

<script>
import User from '../components/users/User.vue';

export default {
    name: "UsersList",
    components: {
        'user-card': User,
    },
    data() {
        return {
            title: 'Crm Helpdesc',
            users: [
                {
                    name: 'Roman',
                    last_name: 'Davydov',
                    role: 'admin'
                },
                {
                    name: 'Dmitriy',
                    last_name: 'Ivanov',
                    role: 'manager'
                },
                {
                    name: 'Alex',
                    last_name: 'Petrov',
                    role: 'client'
                },
                {
                    name: 'Ivan',
                    last_name: 'Sidorov',
                    role: 'client'
                },
                {
                    name: 'Fedor',
                    last_name: 'Sidorov',
                    role: 'manager'
                },
            ],
            name: null,
        }
    },
}
</script>

<style scoped>

</style>
