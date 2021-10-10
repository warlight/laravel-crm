<template>
    <div>
        <h2>{{ user.name }} {{ user.last_name }}</h2>
        <p>{{ text }}</p>
    </div>
</template>

<script>
export default {
    props: ['user', 'text'],
    name: "User"
}
</script>

<style scoped>
h2 {
    color: red;
}
</style>
