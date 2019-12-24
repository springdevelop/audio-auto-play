<template>
   <form class="" >
        <div>
            <model-list-select :list="stations"
                v-model="station_id"
                option-value="id"
                :custom-text="idAndName"
                placeholder="Chọn Kênh" class="input-group-field">
            </model-list-select>
        </div>
    </form>
</template>
<script>
import { ModelListSelect } from 'vue-search-select'

export default {
    components: {
        ModelListSelect
    },
     data() {
        return {
            station_id: null,
        }
    },
    created() {
        this.$store.dispatch('loadStations')
    },
    computed: {
        stations: function() {
            return this.$store.getters.getStations
        },
        position: function() {
            return this.$store.getters.getPosition;
        },
    },
    methods: {
        idAndName (item) {
            return `${item.id} - ${item.name}`
        },
    },
    watch: {
        station_id: function (val) {
            this.$store.dispatch('loadStation', val)
        },
       
    }
}
</script>