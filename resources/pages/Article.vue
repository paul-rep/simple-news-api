<template>
  <div class="container my-12 mx-auto px-4 md:px-12">
  <div class="flex flex-wrap -mx-1 lg:-mx-4">

    <!-- Article -->
    <article v-if="article" class="overflow-hidden rounded-lg shadow-lg">


        <img alt="Placeholder" class="block h-auto w-full" :src="article.image">


      <header class="flex items-center justify-between leading-tight p-2 md:p-4">
        <h1 class="text-lg">
          <p class="no-underline hover:underline text-black">
            {{article.title}}
          </p>
        </h1>
        <p class="text-grey-darker text-sm">
          {{article.created_at}}
        </p>
      </header>

      <footer class="flex items-center justify-between leading-none p-2 md:p-4">
        <div class="flex items-center text-black">
          <p class="ml-2 text-sm">
          {{article.content}}
          </p>
        </div>
        <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
          <span class="hidden">Like</span>
          <i class="fa fa-heart"></i>
        </a>
      </footer>

    </article>
    <!-- END Article -->

  </div>


  </div>
</template>

<script>
export default {
    name: "Article",
    data(){
        return {
          article: {}
        }
    },
    mounted() {
      console.log(`/api/articles/${this.$route.params.id}`);
        axios.get(`/api/articles/${this.$route.params.id}`).then(res =>{
          console.log(res);
          this.article = res.data.data;
      }).catch(e => console.log(e))
    }
}
</script>

<style scoped>

</style>
