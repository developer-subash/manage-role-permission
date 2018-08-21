    import Vue from 'vue'
    import VueRouter from 'vue-router'

    Vue.use(VueRouter)

    import App from '../users/components/app'
    import Welcome from '../users/components/Welcome'
    

    const router = new VueRouter({

    	mode:'history',
    	routes: [
    	{
    		path:'/',
    		name: 'home',
            component: Welcome
         },

        

    	],


    });

    new Vue({

	el:'#app',
	render:h => h(App),
	router,

});