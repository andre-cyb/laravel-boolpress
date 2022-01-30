<template>
  <div>
    <div class="g-2">
      <div class="row">
        <div class="card" style="width: 18rem">
          <img src="post.coverImg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up the
              bulk of the card's content.
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      <!-- <div>
        <h2>{{ post.title }}</h2>
        <small>
          Categoria:
          <span class="badge rounded-pill bg-success p-2 text-white">
            {{ post.category.name }}</span
          >
        </small>
        <p>{{ post.body }}</p>
      </div> -->
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