<template>
   <form class="" >
       <div class="form-check mb-3">
            <label class="form-check-label">
                <input v-model="checkCreate" type="checkbox" class="form-check-input" value=""> Tạo mới Thiết bị            </label>
        </div>
       <div v-if="checkCreate">
            <div class="form-group row d-none">
                <label for="id" class="col-sm-3 col-form-label">Id</label>
                <div class="col-sm-9">
                    <input v-model="device.positions_id" type="text" class="form-control" id="positions_id" name="positions_id">
                </div>
            </div>
            <div class="form-group row">
                <label for="id" class="col-sm-3 col-form-label">Mã thiết bị</label>
                <div class="col-sm-9">
                    <input v-model="device.id" type="text" class="form-control" id="id" name="id">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Tên Thiết bị</label>
                <div class="col-sm-9">
                    <input v-model="device.name" type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="desc" class="col-sm-3 col-form-label">Mô tả</label>
                <div class="col-sm-9">
                    <textarea type="text" v-model="device.desc" class="form-control" id="desc" name="desc"></textarea>
                </div>
            </div>
        </div>
        <div v-else>
            <model-list-select :list="devices"
                v-model="devices_id"
                option-value="id"
                :custom-text="codeAndName"
                placeholder="Chọn Thiết bị" class="input-group-field">
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
            checkCreate: false,
            devices_id: null,
        }
    },
    created() {
        this.$store.dispatch('loadDevices')
        this.$store.dispatch('loadDevicesOfPosition', this.position.id)
    },
    computed: {
        device: function() {
            return this.$store.getters.getDevice
        },
        devicesOfPosition: function() {
            return this.$store.getters.getDevicesOfPosition
        },
        devices: function() {
            return this.$store.getters.getDevices.filter(item => {
                let tam = this.devicesOfPosition.some(d => d.id == item.id)

                if(item.code !== ""&&!tam)
                    return item
            });
        },
        position: function() {
            return this.$store.getters.getPosition;
        },
    },
    methods: {
        codeAndName (item) {
            return `${item.code} - ${item.name}`
        },
    },
    watch: {
        devices_id: function (val) {
            this.$store.dispatch('loadDevice', val)
            console.log(this.device)

        },
        checkCreate: function () {
            this.$store.dispatch('initDevice', this.position.id)
        }
    }
}
</script>