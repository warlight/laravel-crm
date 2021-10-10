<template>
    <div>
        <h2>
            {{ title }}
        </h2>
        <user-card v-for="(user, index) in users" :user="user" text="some text...." v-bind:key="index"/>
    </div>
</template>

<script>
import User from './users/User';

export default {
    name: "Home",
    components: {
        'user-card': User,
    },
    data() {
        return {
            title: 'Crm Helpdesc',
            users: [
                {
                    name: 'Roman',
                    last_name: 'Davydov'
                },
                {
                    name: 'Dmitriy',
                    last_name: 'Ivanov'
                },
                {
                    name: 'Alex',
                    last_name: 'Petrov'
                },
            ],
            name: null,
        }
    },
    methods: {
        addUser() {
            this.users.push(this.name);
            this.clearName();
        },
        clearName() {
            this.name = null;
        },
    },
}
</script>

<style scoped>

</style>
