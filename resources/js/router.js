import Vue from "vue";
import VueRouter from "vue-router";
import Home from "./pages/Home.vue"
import Posts from "./pages/Posts.vue"
import Contact from "./pages/Contact.vue"

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path:"/",
            name: "home",
            component: Home
        },
        {
            path:"/posts",
            name: "posts",
            component: Posts
        },
        {
            path:"/contact",
            name: "contact",
            component: Contact
        },
    ]
})

export default router;
