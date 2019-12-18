<template>
  <div class="d-flex">
    <div class="mid-content">
      <div class="card">
        <data-grid :hasEdit="true"  :hasDelete="true"  @deleteItem="deleteItem" @editItem="editItem" :lists="devices" :nameColumns="nameColumns" :columns="gridColumns" :filter-key="searchQuery"></data-grid>
      </div>
    </div>
    <div class="menu-action p-3 text-center">
        <button class="btn btn-primary" @click="addDevice">Thêm Thiết bị</button>
    </div>
    <modal v-if="showModal" @close="showModal = false" @submit="updateDevice"></modal>
  </div>
</template>
<script>
import DataGrid from '@/js/components/global/datagrid/Index'
import Modal from "@/js/components/global/modal/Modal"

export default {
  components: {
    DataGrid,
      Modal
  },
  data() {
      return {
        searchQuery: '',
        gridColumns: ['code','name', 'desc', 'status','positions_name'],
        nameColumns: {'code': 'Mã', 'name': 'Tên', 'desc': 'Mô tả', 'status': 'Trạng thái', 'positions_name': 'Vị trí'},
        showModal: false,
      }
  },
  created() {
    this.$store.dispatch('initPosition')
    this.$store.dispatch('loadDevices')
    this.$store.dispatch('loadPositions')
    this.$store.dispatch('makeModalComponent',{name: 'add-device', title: 'Thêm thiết bị', submit: 'Thêm'})
  },
  computed: {
    positions: function() {
      return this.$store.getters.getPositions;
    },
    devices: function() {
      let d = this.$store.getters.getDevices;
      let returnDevices = []
      d.forEach((value, index) => {

          value.positions_name = this.positions.filter(x => x.id === value.positions_id).map(x => x.name)[0];
          returnDevices.push(value);
          console.log(value);
          console.log(index);
      });
      return returnDevices; 
    }
  },
  methods: {
     addDevice: function() {
        this.$store.dispatch('initDevice')
        this.setShowModal(true)
      },
      updateDevice: async function() {
        let data = this.device
        data.positions_id = this.position.id
        data.positions_name = this.position.name
        if(this.device.id){
          await this.$store.dispatch('updateDevice',data)
        }
        else{
          await this.$store.dispatch('createDevice', data)
        }
        this.showModal = false
      },
      setShowModal: function(show) {
         this.showModal = show
      },
      deleteItem: function() {
        alert()
      },
      editItem: function(id = null) {
        if(id){
          this.$store.dispatch('loadDevice', id)
        } else {
          alert('Bạn chưa chọn thiết bị!')
        }

         this.setShowModal(true)
      }
  }
};
</script>

<style>
.mid-content{
  width: calc(100% - 220px);
}
.menu-action{
  overflow-x: auto;
  float: right;
  width: 200px;
  z-index: 101;
  border-left: 1px solid #ccc;
  margin-left: auto;
}
</style>
