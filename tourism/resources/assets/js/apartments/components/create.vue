<template>
    <div>

   <transition name="modal" >

    <div class="modal-mask">
      <div class="modal-wrapper">
        <div class="modal-container">

           <div class="modal-header">
            <slot name="header">
              ADD NEW UNIT
            </slot>

            <slot name="header">
             <button class="btn btn-sm btn-danger" @click="$emit('close')">X</button>
            </slot>

          </div>

          <div class="modal-body">
            <slot name="body">

                 <div class="modal-body">
          <p>To add new unit please fill up the fields below.</p>
          <div class="add-form">
            <form  role="form" v-for="appartment in appartmentsNewData">
              <div class="row">
                <div class="form-group col-lg-6">
                  <label>Appartment name</label>
                  <input type="text" v-model="appartment.appartmentName"  class="form-control" placeholder="Enter appartment Name here">
                </div>
                <div class="form-group col-lg-6">
                  <label>No of Unit</label>
                  <input type="text" v-model="appartment.unit" class="form-control" placeholder="Enter no of Unit here">
                </div>


              </div>
              <div class="form-group">
                  <label>Appartment Address</label>
                  <textarea type="text" v-model="appartment.address" class="form-control" placeholder="Enter appartment address here"></textarea>
              </div>
            </form>
          </div>
         </div>
        </slot>
        </div>

          <div class="modal-footer">
            <slot name="footer">
              <button class="btn btn-sm modal-default-button" @click="SaveApartmentData">Save</button>
            </slot>

            <slot name="footer">
              <button class="btn btn-sm modal-default-button" @click="$emit('close')">Cancel</button>
            </slot>
          </div>
        </div>
      </div>
    </div>
  </transition>

    </div>
</template>

<script>

import { mapGetters } from 'vuex';

export default {
computed:{

    ...mapGetters({

        appartmentsData:'appartmentsData',
        appartmentsNewData: 'appartmentsNewData',
   }),
},
methods: {
   SaveApartmentData()
   {
//        var d = new Date();
//        d.getHours();
//        d.getMinutes();
//        d.getSeconds();
//        console.log(d.getHours() + ':' + d.getSeconds() + ':' + d.getSeconds() );
       this.$store.commit('saveappartmentBtn',this.appartmentsNewData);
       this.$emit('close');
   }
}
};
</script>

