<template>
    <h1>{{ message }}</h1>
    
    <p>btw, you can go to external non vue page like <a href="/external">external</a></p>

</template>

<script>
export default {
    name: 'App',
    data() {
        return {
            message: 'About Nothing'
        }
    }
}
</script>