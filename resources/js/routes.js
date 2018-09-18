
import Login from './components/LoginComponent'
import Register from './components/RegisterComponent'
import Nav from './components/NavComponent'


 let routes=[
        {
            path:'/',
            name:'login',
            component:Login
        },
        {
            path:'/registro',
            name:'register',
            component:Register
        }
    ];

export default routes;
