<template>
    <div>
        <Header></Header>
        <router-view></router-view>
        <Footer></Footer>
    </div>
</template>

<script>
import Header from "./Header";
import Footer from "./Footer";
export default {
    components: {Footer, Header}
}

</script>

<style scoped>
.active{
    display: block;
}
</style>
