import "./editor"
import "./bootstrap";
import storeData from "./store/storeData";
import Vuex from "vuex";
window.Vue = require("vue");

// console.log("ENV");
// console.log(process.env.MIX_APP_ENV);
// console.log("URL");
// console.log(process.env.MIX_APP_URL);
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

Vue.use(Vuex);

const app = new Vue({
    store: new Vuex.Store(storeData),
    el: "#app"
});
