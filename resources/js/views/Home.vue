<template>
    <h1>{{ message }}</h1>
    <img
          
          alt="Meow"
          width="100"
          height="100"
          src="../assets/cat.jpg"
        />       
        <!-- Image by <a href="https://pixabay.com/users/ty_swartz-617282/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=551554">Ty Swartz</a> from <a href="https://pixabay.com//?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=551554">Pixabay</a> -->
</template>

<script>
export default {
    name: 'App',
    data() {
        return {
            message: 'Welcome Home'
        }
    }
}
</script>