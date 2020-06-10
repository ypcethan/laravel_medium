<template>
  <span>
    <span style="font-size:2rem" class="ml-5 mr-2">
      <i class="far fa-comments"></i>
    </span>
    {{ getCommentCount }} responses
  </span>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  computed: {
    ...mapGetters(["getCommentCount"])
  }
};
</script>

<style>
</style>