<template>
  <div>
    <div class="w-full">
      <div class="px-8 py-6 mt-4 bg-white rounded shadow-md">
        <div v-for="comment in comments" :key="comment.id">
          <div class="border-b mb-10">
            <div class="flex">
              <img :src="comment.user.avatar" class="h-12 rounded-full mr-5 w-12 object-cover" />
              <div class="flex flex-col">
                <p>{{ comment.user.name }}</p>
                <p class="text-sm text-gray-700 mt-1">{{ comment.created_at | timeAgo }}</p>
              </div>
            </div>
            <div class="mt-5 mb-5">{{ comment.content }}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import moment from "moment";
import { mapActions, mapState } from "vuex";
import axios from "axios";
import { bus } from "../app";
export default {
  props: {
    post_id: {
      type: String,
      required: true
    }
  },
  computed: { ...mapState(["comments"]) },
  filters: {
    timeAgo(time) {
      return moment(time).fromNow();
    }
  },
  methods: {
    // fetchComments() {
    //     axios.get(this.target_path).then(res => {
    //         this.comments = res.data;
    //     });
    // },
    ...mapActions(["fetchComments"])
  },
  created() {
    this.fetchComments(this.post_id);
    // bus.$on("submit-new-comment", () => {
    //     this.fetchComments();
    // });
  }
};
</script>
