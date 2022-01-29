<template>
  <div>
    <div class="container">
      <div>
        <h3>{{ post.title }}</h3>
        <p>{{ post.content }}</p>
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