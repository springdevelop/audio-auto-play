<template>
  <div>
    <table id="station_dashboard" class="table table-striped mb-0">
      <colgroup>
        <col width="5%" />
        <col width="30%" />
        <col width="40%" />
        <col width="15%" />
      </colgroup>
      <thead>
        <tr>
          <th class="pr-3">&nbsp;</th>
          <th class="pl-2">Tên kênh</th>
          <th class="text-center">Link phát</th>
          <th class="text-right"></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="station in stations"  :key="station.id" class="align-middle">
          <td class="text-center pr-2"></td>
          <td class="pl-2">
            <big>
              <span href="">{{station.name}}</span>
            </big>
          </td>
          <td class="text-center">
            <a target="_blank" :href="station.listen_url" class="nowplaying-listeners">{{station.listen_url}}</a>
          </td>
          <td class="text-right">
            <a role="button" class="btn btn-primary btn-sm">Manage</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
<script>
export default {
  created() {
    this.$store.dispatch('loadStations')
    // this.$store.dispatch('makeModalComponent',{name: 'edit-position', title: 'Cập nhật', submit: 'Cập nhật'})
  },
  computed: {
    stations: function() {
      return this.$store.getters.getStations;
    }
  },
  methods: {
    loadStations() {
      this.$store.dispatch("loadStations");
    }
  }
};
</script>
