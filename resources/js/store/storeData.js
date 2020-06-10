import axios from "axios";
export default {
    state: {
        comments: []
    },
    mutations: {
        SET_COMMENTS(state, comments) {
            state.comments = comments;
        }
    },
    actions: {
        fetchComments({ commit }, postId) {
            const target_path = `http://medium.test/api/${postId}/comments`;
            axios.get(target_path).then(response => {
                commit("SET_COMMENTS", response.data);
            });
        },
        addComment({ dispatch }, { content, postId }) {
            const target_path = `http://medium.test/api/${postId}/comments`;
            return axios.post(target_path, { content }).then(() => {
                dispatch("fetchComments", postId);
            });
        }
    }
};
