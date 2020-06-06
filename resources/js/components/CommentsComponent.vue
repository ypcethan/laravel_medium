<template>
  <div>
    <h1 class="text-lg">Hello from comments</h1>
    <div class="w-full">
      <div class="px-8 py-6 mt-4 bg-white rounded shadow-md">
        <div class="flex flex-col">

          <div class="mr-4">
            <img class="rounded-full" style="height: 45px" />
          </div>
           
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    comments: {
      type: Array,
      required: true
    },
  }
};
</script>
