<template>
  <div>
    <h3>{{ post.title }}</h3>
    <p>{{ post.body }}</p>
    <!-- <small>{{ post.author }}</small> -->

    <ul></ul>
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