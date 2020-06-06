
<template>

  <div>
    <div class="w-full">
      <div class="px-8 py-6 mt-4 bg-white rounded shadow-md">
        <div class="flex items-center hover:cursor-text" @click="toggleForm">
          <div class="mr-4">
            <img :src="image_url" alt class="rounded-full" style="height: 45px" />
          </div>
          <transition name="fade">
            <p v-if="!showForm" class="font-serif text-gray-600">Write a response ...</p>
          </transition>
        </div>
        <transition name="fade">
          <form v-if="showForm" @submit.prevent="handleSubmit" class="mt-5">
            <div class="mb-4">
              <textarea
                class="w-full px-3 py-2 leading-tight text-gray-700 outline-none appearance-none"
                autofocus
                @blur="onBlur"
                v-model="commentData"
              />
            </div>
            <div class="flex items-center justify-between">
              <button
                class="px-4 py-2 font-semibold text-green-700 bg-transparent border border-green-500 rounded hover:bg-green-500 hover:text-white hover:border-transparent"
              >Publish</button>
            </div>
          </form>
        </transition>
      </div>
    </div>
  </div>
</template>

<script>
import axois from "axios";
export default {
  props: ["image_url", "target_path"],
  data() {
    return {
      showForm: false,
      commentData: ""
    };
  },
  methods: {
    handleSubmit() {
      axois
        .post(this.target_path, { content: this.commentData })
        .then(this.commentData = "");
    },
    toggleForm() {
      this.showForm = !this.showForm;
    },
    onBlur() {
      if (this.commentData === "") {
        this.toggleForm();
      }
    }
  }
};
</script>

<style>
.fade-enter {
  opacity: 0;
  transform: translateY(-15px);
}

.fade-enter-active,
.fade-leave-active {
  transition: all 0.2s linear;
}

.fade-leave-to {
  opacity: 0;
  transform: translateY(-15px);
}
</style>
