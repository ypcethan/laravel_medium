import axios from "axios";
// axios.defaults.baseURL = "http://aqueous-inlet-19564.herokuapp.com/";

axios.defaults.baseURL = process.env.MIX_APP_URL;
export default {
    state: {
        comments: [],
        clapCount: undefined
    },
    mutations: {
        SET_COMMENTS(state, comments) {
            state.comments = comments;
        },
        SET_CLAP_COUNT(state, clapCount) {
            state.clapCount = clapCount;
        }
    },
    actions: {
        fetchComments({ commit }, postId) {
            const target_path = `api/${postId}/comments`;
            axios.get(target_path).then(response => {
                commit("SET_COMMENTS", response.data);
            });
        },
        addComment({ dispatch }, { content, postId }) {
            const target_path = `api/${postId}/comments`;
            return axios.post(target_path, { content }).then(() => {
                dispatch("fetchComments", postId);
            });
        },
        fetchClapCount({ commit }, postId) {
            const target_path = `api/${postId}/clap/count`;
            axios.get(target_path).then(response => {
                commit("SET_CLAP_COUNT", response.data);
            });
        },
        addClapCount({ dispatch }, postId) {
            const target_path = `api/${postId}/clap`;
            axios.post(target_path).then(() => {
                dispatch("fetchClapCount", postId);
            });
        }
    },
    getters: {
        getCommentCount(state) {
            return state.comments.length;
        }
    }
};
