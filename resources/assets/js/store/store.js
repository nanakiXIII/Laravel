import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

/**
 * {
 *  1:{
    *  id: '1',
    *  name: 'John',
    *  unread: 0,
    *  count: 100,
    *  messages:[{
    *   id,
    *   from_id,
    *   to_id,
    *   ....
    * 
    * }
    *  
    *  ]
 *  
 *  }
 * }
 */

export default new Vuex.Store({
    strict: true,
    state: {

    }
})