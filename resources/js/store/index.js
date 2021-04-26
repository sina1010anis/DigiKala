import {createStore} from 'vuex'

const store = createStore({
    state(){
        return{
            product:['mi 10' , 'a52'],
            user:{name:'sina',family:'na'}
        }
    }
})

export default store
