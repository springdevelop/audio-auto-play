<template>
   <div class="d-flex">
    <div class="mid-content">
      <div class="card">
        <data-grid @deleteItem="deleteItem" :lists="stations" :nameColumns="nameColumns" :columns="gridColumns" :filter-key="searchQuery"></data-grid>
      </div>
    </div>
    <div class="menu-action p-3 text-center">
    <button class="btn btn-primary" @click="manageStations">Quản lý kênh</button>
    </div>
  </div>
</template>
<script>
import DataGrid from '@/js/components/global/datagrid/Index'
import Modal from "@/js/components/global/modal/Modal"

export default {
  components: {
    DataGrid,
  },
   data() {
      return {
        searchQuery: '',
        gridColumns: ['name', 'listen_url'],
        nameColumns: {'name': 'Tên', 'listen_url': 'Url phát' },
        showModal: false,
      }
  },
  created() {
    this.$store.dispatch('loadStations')
  },
  computed: {
    stations: function() {
      return this.$store.getters.getStations;
    }
  },
  methods: {
    loadStations() {
      this.$store.dispatch("loadStations");
    },
    manageStations() {
      alert();
    }
  }
};
</script>
