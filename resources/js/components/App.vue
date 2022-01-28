<template>
  <div>
    <h1 class="text-center">benvenuto</h1>
    <Post v-for="post in postsList" :key="post.id" :post="post"></Post>
    <ul></ul>
  </div>
</template>
<script>
import Post from "./partials/Post.vue";

export default {
  components: { Post },
  name: "app",
  data() {
    return {
      postsList: [],
    };
  },
  mounted() {
    window.axios.get("/api/posts").then((resp) => {
      this.postsList = resp.data;
    });
  },
};
</script>