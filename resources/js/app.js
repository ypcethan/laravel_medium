import "./bootstrap";
window.Vue = require("vue");

const files = require.context("./", true, /\.vue$/i);
files.keys().map(key => {
    Vue.component(
        key
            .split("/")
            .pop()
            .split(".")[0],
        files(key).default
    );
});

import storeData from "./store/storeData";
import Vuex from "vuex";
Vue.use(Vuex);
export const bus = new Vue();
const app = new Vue({
    store: new Vuex.Store(storeData),
    el: "#app"
});
