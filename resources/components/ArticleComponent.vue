<template>
    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
    <article class="overflow-hidden rounded-lg shadow-lg">

        <router-link :to="{ name: 'article', params: { id: article.id }}">
            <img :src="article.image" alt="Placeholder" class="block h-auto w-full">
        </router-link>

        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
            <h1 class="text-lg">
            <a class="link no-underline hover:underline text-black" >{{article.title | truncate(3)}}</a>

            </h1>
            <p class="text-grey-darker text-sm">
                {{article.created_at}}
            </p>
        </header>

    </article>
    </div>
</template>

<script>
export default {
    name: "ArticleComponent",
    props:{
        article: {
            type: Object
        }
    },
    filters: {
      truncate: function (val,no_words){
           return val.split(" ").splice(0,no_words).join(" ");
      }
    },
}
</script>

<style scoped>
.link {
    white-space: nowrap;
}
</style>
