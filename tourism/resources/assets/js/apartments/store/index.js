import Vue from 'vue'
import Vuex from 'vuex'


Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        appartmentsData:[],
        appartmentsInfo:[{ "owner":{'name': 'tamrakar','roles':'admin'},"appartmentName":'tamrakar_house',"unit":1,"desc":'this aparatment is located at Kathmandu central region',"address_line1":'kathmandu',"address_line2":'kalimati',"address":'nepal',"city":'Kathmandu',"state":'3',"country":'Nepal',"zip_code":'12345',"email":'subash@gmail.com',"phone1": 9845125989, "phone2": 1564564, "mobile1":12333, "mobile2": 675675, "created_at": 3,"created_by": 'ram',"updated_by":'ram',"CurrentTime" : '10 April 2018' ,"status":{'name':'packed','desc': 'this ispacked just 3 weeks ago','is_available': 'false'}}],

    },
    getters: {
        getAllappartments(state)
        {
            return state.appartmentsInfo.filter((item) => {
                return item;
            });
        },
        appartmentsData(state){
           return state.appartmentsData.push({
            appartmentName:'',
            unit:'',
            address:''

           })

        },
        appartmentsNewData(state)
        {
            return state.appartmentsData;
        }

    },
    mutations: {
      saveappartmentBtn(state,payload)
      {
          console.log(payload);
         state.appartmentsInfo.push(payload);
         state.appartmentsData.appartmentName = null;
         state.appartmentsData.unit = null;
         state.appartmentsData.address = null;

    }
    },
})
