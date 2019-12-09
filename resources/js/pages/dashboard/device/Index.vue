<template>
  <div class="mt-4">
    <data-grid :lists="devices" :columns="gridColumns" :filter-key="searchQuery"></data-grid>
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
        gridColumns: ['name', 'status'],
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
  }
};
</script>

<style>
.menu-action{
  height: calc(100vh - 48px);
  overflow-x: auto;
  position: absolute;
  right:0;
  width: 300px;
  top: 48px;
  z-index: 101;
  border-left: 1px solid #333;
}
</style>
