<template>
  <div class="d-flex">
    <div class="mid-content">
      <div class="card">
        <data-grid @deleteItem="deleteItem" :lists="devices" :nameColumns="nameColumns" :columns="gridColumns" :filter-key="searchQuery"></data-grid>
      </div>
    </div>
    <div class="menu-action p-3 text-center">
        <button class="btn btn-primary" @click="addDevice">Thêm Thiết bị</button>
    </div>
    <modal v-if="showModal" @close="showModal = false" @submit="updatePosition"></modal>
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
        gridColumns: ['name', 'desc', 'status'],
        nameColumns: {'name': 'Tên', 'desc': 'Mô tả', 'status': 'Trạng thái' },
        showModal: false,
      }
  },
  created() {
    this.$store.dispatch('loadDevices')
     this.$store.dispatch('makeModalComponent',{name: 'add-device', title: 'Thêm thiết bị', submit: 'Thêm'})
  },
  computed: {
    devices: function() {
      return this.$store.getters.getDevices;
    }
  },
  methods: {
     addDevice: function() {
       this.$store.dispatch('initDevice')
        this.setShowModal(true)
      },
      setShowModal: function(show) {
         this.showModal = show
      },
      deleteItem: function() {
        alert()
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
