<template>

    <div>


 <Create v-if="this.showModal" @close="closeCreateFormModal">

     <!-- <h3 slot="header">ADD NEW UNIT</h3> -->
 </Create>

    <div class="container" >

    <div class="title-box">
        <div class="row">
          <div class="col-lg-6">
            <h1>Manage Appartments</h1>
          </div>
          <div class="col-lg-6">
            <div class="btn-wrap text-lg-right"><a @click.stop="OpenFormModal" class="add-btn" ><i class="fa fa-plus"></i> Add New Appartment</a></div>
          </div>
        </div>
        <hr>
    </div>
      <div class="shadowed-box">
        <div class="tab-wrap">
          <div class="table-responsive table-hover table-bordered">
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Appartment Name</th>
                  <th scope="col">No of units.</th>
                  <th scope="col">Registered Date</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="item in getAllappartments">
                  <td><p>{{item.appartmentName}}</p></td>
                  <td><p>{{item.unit}}</p></td>
                  <td><p>{{item.address}}</p></td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>





    </div>

</template>
<script>
import { mapGetters } from 'vuex';
import Create from './create';

export default{

 data() {
     return {
         showModal: false
     }
},
computed: {
    ...mapGetters({
          getAllappartments: 'getAllappartments',

            })
    },
    components: {
        Create,
    },
methods: {

 OpenFormModal()
 {
     this.showModal = true;
 },

 closeCreateFormModal()
 {
     this.showModal = false
 }
}
}
</script>

<style>

 .modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .5);
  display: table;
  transition: opacity .3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
  width: 900px;
  height: auto;
  margin: 0px auto;
  padding: 20px 30px;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
  transition: all .3s ease;
  font-family: Helvetica, Arial, sans-serif;
}

.modal-header h3 {
  margin-top: 0;
  color: #42b983;
}

.modal-body {
  margin: 20px 0;
}

.modal-default-button {
  float: right;
}

/*
 * The following styles are auto-applied to elements with
 * transition="modal" when their visibility is toggled
 * by Vue.js.
 *
 * You can easily play with the modal transition by editing
 * these styles.
 */

.modal-enter {
  opacity: 0;
}

.modal-leave-active {
  opacity: 0;
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}


</style>
