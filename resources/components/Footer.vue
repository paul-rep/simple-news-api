<template>
    <div class="container mx-auto bg-purple-300 p-5">
        <nav class="flex-row md:justify-between">
            <ul class="hidden md:flex md:flex-row" id="mobileMenu">
                <li class="pr-5"><router-link to="/" exact>Home</router-link></li>
                <li class="pr-5"><router-link to="/about" exact>About</router-link></li>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
    name: "Footer"
}
</script>

<style scoped>

</style>
