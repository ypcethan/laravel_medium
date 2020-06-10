<template>
  <span>
    <span style="font-size:2rem" class="mr-2">
      <i @click="addClapCount(post_id)" class="far fa-hand-spock text-black hover:text-gray-500"></i>
    </span>
    {{ clapCount }} claps
  </span>
</template>

<script>
import { mapActions, mapState } from "vuex";
export default {
  props: {
    post_id: {
      type: String,
      required: true
    }
  },
  computed: {
    ...mapState(["clapCount"])
  },
  methods: {
    ...mapActions(["fetchClapCount", "addClapCount"])
  },
  mounted() {
    this.fetchClapCount(this.post_id);
  }
};
</script>

<style>
</style>