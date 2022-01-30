<template>
  <div class="col-4">
    <div class="card" style="width: 18rem">
      <img :src="post.coverImg" class="card-img-top post_img" alt="..." />
      <div class="card-body">
        <h2 class="card-title">{{ post.title }}</h2>

        <span class="badge rounded-pill bg-success p-2 m-2 text-white">
          {{ post.category.name }}
        </span>
        <span
          v-for="tag in post.tags"
          :key="tag.id"
          class="badge rounded-pill bg-info p-2 m-2 text-white">
          {{ tag.name }}
          </span>

        <p class="card-text">
          {{ post.body }}
        </p>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  components: {},
  name: "Post",
  props: {
    post: {
      type: Object,
      required: true,
    },
  },
  data() {
    return {};
  },
};
</script>
<style lang="scss" scoped>
.post_img {
  height: 200px;
  object-fit: cover;
}
</style>