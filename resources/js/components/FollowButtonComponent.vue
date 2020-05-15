<template>
    <button
        class="p-1 ml-2 text-xs font-semibold text-purple-700 bg-transparent border border-purple-500 rounded hover:bg-purple-500 hover:text-white hover:border-transparent"
        @click="toggleFollow"
    >
   <span v-if="isFollowing">Unfollow</span>   
   <span v-else>Follow</span>   
    </button>
</template>

<script>
export default {
    props: ["target_path", "is_following"],
    mounted() {
        console.log("Button Mounted");
        this.isFollowing = this.is_following === "true";
    },
    data() {
        return {
            isFollowing: false
        };
    },

    methods: {
        toggleFollow() {
            axios
                .post(this.target_path)
            this.isFollowing = !this.isFollowing;
        }
    }
};
</script>
