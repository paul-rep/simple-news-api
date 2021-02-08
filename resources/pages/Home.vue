<template>


    <div v-if="articles" class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
            <ArticleLComponent
                :key="article.id" v-for="article in articles" :article="article"></ArticleLComponent>
        </div>
    </div>
    <div v-else>No Articles Yet</div>
</template>

<script>
import ArticleLComponent from "../components/ArticleComponent";
export default {
    name: "Home",
    components:{ArticleLComponent},
    data(){
        return {
            articles:{},
        }
    },
    mounted() {
        axios.get('/api/articles').then(res=>{
            this.articles = res.data.data;
        }).catch(e => console.log(e));
    }
}
</script>

<style scoped>

</style>
