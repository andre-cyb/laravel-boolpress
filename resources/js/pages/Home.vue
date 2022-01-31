<template>
    <div>
        
        <h1 class="text-center py-3">Tutti i Post</h1>
        <div class="container">
        <div class="row row-height">
            <Post v-for="post in postsList" :key="post.id" :post="post"></Post>
        </div>
        <div class="my-3 d-flex justify-content-center">
            <nav>
                <ul class="pagination">
                <li class="page-item"><a class="page-link" @click="getData(currentPage - 1)">Previous</a></li>

                <li class="page-item" v-for="page of lastPage" :key="page">
                    <a class="page-link" @click="getData(page)">{{ page }}</a>
                </li>

                <li class="page-item"><a class="page-link" @click="getData(currentPage + 1)">next</a></li>
                </ul>
            </nav>
        </div>
        </div>
        <ul></ul>
    </div>
</template>
<script>

import Post from "../components/partials/Post.vue";

export default {
    components: { Post },
    data() {
        return {
            postsList: [],
            currentPage: 1,
            lastPage: null,
        };
    },
    methods:{
        getData(page = 1){
        window.axios.get("/api/posts?page=" + page).then((resp) => {
            this.postsList = resp.data.data;
            this.currentPage = resp.data.current_page;
            this.lastPage = resp.data.last_page;
        });

        },
    },
    mounted() {
        this.getData();
    },
}
</script>
<style lang="scss" scoped>
    .row-height{
        height: 500px;
    }
</style>