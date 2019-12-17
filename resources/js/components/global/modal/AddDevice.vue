<template>
   <form class="" >
        <div class="form-group row">
            <label for="id" class="col-sm-3 col-form-label">Id</label>
            <div class="col-sm-9">
                <input v-model="device.id" type="text" class="form-control" id="id" name="id">
            </div>
        </div>
         <div class="form-group row">
            <label for="id" class="col-sm-3 col-form-label">Mã thiết bị</label>
            <div class="col-sm-9">
                <input v-model="device.code" type="text" class="form-control" id="code" name="code">
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
        <div class="form-group row">
            <label for="desc" class="col-sm-3 col-form-label">Vị trí</label>
            <div class="col-sm-9">
                <model-list-select :list="positions"
                    v-model="device.positions_id"
                    option-value="id"
                    :custom-text="idAndName"
                    placeholder="Chọn Vị trí" class="input-group-field">
                </model-list-select>
            </div>
        </div>
    </form>
</template>
<script>
import { ModelListSelect } from 'vue-search-select'

export default {
    components: {
        ModelListSelect
    },
    created() {
        let d = this.$store.getters.getDevice;
        if(!d.id){
            this.$store.dispatch('initDevice')
        }
        this.$store.dispatch('loadPositions')
    },
    methods: {
        idAndName (item) {
            return `${item.id} - ${item.name}`
        },
    },
    computed: {
        device: function() {
            return this.$store.getters.getDevice;
        },
        positions: function() {
            return this.$store.getters.getPositions;
        },
    },
}
</script>