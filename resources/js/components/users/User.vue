<template>
    <div>
        <h2 :class="getClass(user.role)">{{ user.name }}</h2>
        <p>{{ text }}</p>
        <template v-if="user.role === 'client'">
            <small>{{ user.role }}</small>
        </template>
        <template v-else>
            <p>{{ user.role }}</p>
        </template>
        <router-link :to="'/users/' + user.id">User's page</router-link>
    </div>
</template>

<script>
export default {
    props: ['user', 'text'],
    name: "User",
    methods: {
        getClass(role) {
            return 'top-'+role;
        }
    }
}
</script>

<style scoped>
.top-admin {
    color: green;
}
.top-manager {
    color: blue;
}
.top-client {
    color: red;
}
</style>
