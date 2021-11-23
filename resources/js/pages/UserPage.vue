<template>
    <div>
        <h1>User name: {{ user.name }}</h1>
        <h2>User name: {{ user.email }}</h2>
    </div>
</template>

<script>
export default {
    name: "UserPage",
    data() {
        return {
            userId: null,
            user: {},
        };
    },
    async mounted() {
        this.userId = this.$route.params.id;
        let result = await axios.get(`/users/${this.userId}`);
        this.user = result.data;
    },
}
</script>

<style scoped>

</style>
