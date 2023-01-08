<template>
    
    <h2>Go ahead, click a button</h2>
    <v-btn>
        <router-link to="/home">Home</router-link>
    </v-btn>
    <v-btn>
        <router-link  to="/about">About</router-link>
    </v-btn>
    <router-view></router-view>
</template>
<script>
export default {
    name: 'App',
    data() {
        return {
            message: 'Hello World'
        }
    }
}
</script>