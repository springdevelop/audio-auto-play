<template>
  <div>

    <!--Stats cards-->
    <div class="row">
      <div class="col-md-6 col-xl-3" v-for="stats in statsCards" :key="stats.title">
        <stats-card>
          <div class="icon-big text-center" :class="`icon-${stats.type}`" slot="header">
            <i :class="stats.icon"></i>
          </div>
          <div class="numbers" slot="content">
            <p>{{stats.title}}</p>
            {{stats.value}}
          </div>
          <div class="stats" slot="footer">
            <i :class="stats.footerIcon"></i> {{stats.footerText}}
          </div>
        </stats-card>
      </div>
    </div>

    <!--Charts-->
    <div class="row">

      <!-- <div class="col-12">
        <chart-card title="Users behavior"
                    sub-title="24 Hours performance"
                    :chart-data="usersChart.data"
                    :chart-options="usersChart.options">
          <span slot="footer">
            <i class="ti-reload"></i> Updated 3 minutes ago
          </span>
          <div slot="legend">
            <i class="fa fa-circle text-info"></i> Open
            <i class="fa fa-circle text-danger"></i> Click
            <i class="fa fa-circle text-warning"></i> Click Second Time
          </div>
        </chart-card>
      </div> -->

      <div class="col-md-6 col-12">
        <chart-card title="Thời gian phát"
                    sub-title="Thống kê thời gian phát trong ngày (ngày/đêm)"
                    :chart-data="preferencesChart.data"
                    chart-type="Pie">
          <span slot="footer">
            <i class="ti-timer"></i> Thời gian 1 ngày</span>
          <div slot="legend">
            <i class="fa fa-circle text-info"></i> Ngày
            <i class="fa fa-circle text-warning"></i> Đêm
          </div>
        </chart-card>
      </div>

      <div class="col-md-6 col-12">
        <chart-card title="Thống kê theo tuần"
                    sub-title="Thống kê thời gian phát theo tuần (ngày/đêm)"
                    :chart-data="activityChart.data"
                    :chart-options="activityChart.options">
          <span slot="footer">
            <i class="ti-timer"></i> Thời gian 1 tuần
          </span>
          <div slot="legend">
            <i class="fa fa-circle text-info"></i> Ngày
            <i class="fa fa-circle text-warning"></i> Đêm
          </div>
        </chart-card>
      </div>

    </div>

  </div>
</template>
<script>
import { StatsCard, ChartCard } from "@/js/components/index";
import Chartist from 'chartist';

export default {
  components: {
    StatsCard,
    ChartCard
  },
  /**
   * Chart data used to render stats, charts. Should be replaced with server data
   */
  created() {
    this.$store.dispatch('loadDevices')
    this.$store.dispatch('loadStations')
    this.$store.dispatch('loadPositions')
  },
  computed: {
    positions: function() {
      return this.$store.getters.getPositions;
    },
    devices: function() {
      return this.$store.getters.getDevices;
    },
    stations: function() {
      return this.$store.getters.getStations;
    },
    statsCards: function () { return [
        {
          type: "warning",
          icon: "ti-location-pin",
          title: "Địa điểm",
          value: this.positions.length,
          footerText: "Updated now",
          footerIcon: "ti-reload"
        },
        {
          type: "success",
          icon: "ti-volume",
          title: "Thiết bị",
          value: this.devices.length,
          footerText: "Updated now",
          footerIcon: "ti-reload"
        },
        {
          type: "danger",
          icon: "ti-pulse",
          title: "Kênh phát",
          value: this.stations.length,
          footerText: "Updated now",
          footerIcon: "ti-reload"
        },
        {
          type: "info",
          icon: "ti-user",
          title: "Người quản lý",
          value: "5",
          footerText: "Updated now",
          footerIcon: "ti-reload"
        }
      ]},
  },
  data() {
    return {
      usersChart: {
        data: {
          labels: [
            "9:00AM",
            "12:00AM",
            "3:00PM",
            "6:00PM",
            "9:00PM",
            "12:00PM",
            "3:00AM",
            "6:00AM"
          ],
          series: [
            [287, 385, 490, 562, 594, 626, 698, 895, 952],
            [67, 152, 193, 240, 387, 435, 535, 642, 744],
            [23, 113, 67, 108, 190, 239, 307, 410, 410]
          ]
        },
        options: {
          low: 0,
          high: 1000,
          showArea: true,
          height: "245px",
          axisX: {
            showGrid: false
          },
          lineSmooth: Chartist.Interpolation.simple({
            divisor: 3
          }),
          showLine: true,
          showPoint: false
        }
      },
      activityChart: {
        data: {
          labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "Mai",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec"
          ],
          series: [
            [54, 54, 52, 68, 65, 75, 32, 43, 56, 61, 75, 89],
            [23, 29, 38, 48, 50, 55, 60, 66, 69, 71, 73, 79]
          ]
        },
        options: {
          seriesBarDistance: 10,
          axisX: {
            showGrid: false
          },
          height: "245px"
        }
      },
      preferencesChart: {
        data: {
          labels: ["62%", "38%"],
          series: [62, 38]
        },
        options: {}
      }
    };
  }
};
</script>
<style>
</style>
