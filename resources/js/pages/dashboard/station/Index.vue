<template>
  <div>
    <table id="station_dashboard" class="table table-striped mb-0">
      <colgroup>
        <col width="5%" />
        <col width="60%" />
        <col width="20%" />
        <col width="15%" />
      </colgroup>
      <thead>
        <tr>
          <th class="pr-3">&nbsp;</th>
          <th class="pl-2">Station Name</th>
          <th class="text-center">Listeners</th>
          <th class="text-right"></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="station in stations"  :key="station.id" class="align-middle">
          <td class="text-center pr-3"></td>
          <td class="pl-2">
            <big>
              <a href="/public/nhtung" target="_blank">{{station.name}}</a>
            </big>
          </td>
          <td class="text-center">
            <span class="nowplaying-listeners">0</span>
          </td>
          <td class="text-right">
            <a role="button" class="btn btn-primary">Manage</a>
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
