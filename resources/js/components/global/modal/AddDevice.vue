<template>
   <form class="" >
        <div class="form-group row d-none">
            <label for="id" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
                <input v-model="device.positions_id" type="text" class="form-control" id="positions_id" name="positions_id">
            </div>
        </div>
         <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label">Mã thiết bị</label>
            <div class="col-sm-10">
                <input v-model="device.id" type="text" class="form-control" id="id" name="id">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Tên Thiết bị</label>
            <div class="col-sm-10">
                <input v-model="device.name" type="text" class="form-control" id="name" name="name">
            </div>
        </div>
         <div class="form-group row">
            <label for="desc" class="col-sm-2 col-form-label">Mô tả</label>
            <div class="col-sm-10">
                <textarea type="text" v-model="device.desc" class="form-control" id="desc" name="desc"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="desc" class="col-sm-2 col-form-label">Vị trí</label>
            <div class="col-sm-10">
                   <input v-model="position.name" type="text" class="form-control" id="position" name="position">
            </div>
        </div>
    </form>
</template>
<script>
export default {
    created() {
        
    },
    computed: {
        device: function() {
            return this.$store.getters.getDevice;
        },
        position: function() {
            return this.$store.getters.getPosition;
        },
    },
}
</script>