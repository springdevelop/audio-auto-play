<template>
  <div>
    <table id="device_dashboard" class="table table-striped mb-0">
      <colgroup>
        <col width="5%" />
        <col width="30%" />
        <col width="40%" />
        <col width="15%" />
      </colgroup>
      <thead>
        <tr>
          <th class="pr-3">&nbsp;</th>
          <th class="pl-2">Tên thiết bị</th>
          <th class="text-center">Mô tả</th>
          <th class="text-right">Trạng thái</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="device in devices"  :key="device.id" class="align-middle">
          <td class="text-center pr-2"></td>
          <td class="pl-2">
              <span >{{device.name}}</span>
          </td>
          <td class="text-center">
              <span >{{device.desc}}</span>
          </td>
          <td class="text-right">
              <span >{{device.status}}</span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
<script>
export default {
  created() {
    // this.$store.dispatch('loadDevices')
  },
  computed: {
    devices: function() {
      return this.$store.getters.getDevices;
    }
  }
};
</script>
