<template>
  <div>
    <router-view></router-view>
  </div>
</template>
<script>


export default {
  components: { },
  name: "app",
  

  methods:{
    
  },

  mounted() {
    console.log(this.$router);
    console.log(this.$route);
  },
};
</script>