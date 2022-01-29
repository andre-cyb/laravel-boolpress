<template>
  <div>
    <div class="container">
      <div>
        <h3>{{ post.title }}</h3>
        <p>{{ post.body }}</p>
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