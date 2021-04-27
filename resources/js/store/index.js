import {createStore} from 'vuex'

const store = createStore({
    state(){
        return{
            product:['mi 10' , 'a52'],
            user:{name:'ali',family:'na'}
        }
    },
    getters:{
        userName(state){
            return state.user
        }
    }
})

export default store
