import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter)

export default new VueRouter({
    mode:'history',

    routes:[
        {
            path:'/people', component: ()=> import('./components/Person/Index'),
            name: 'person.index',
        },
        {
            path:'/edit', component: ()=> import('./components/Person/Edit'),
            name: 'person.edit',
        }
    ]
})
