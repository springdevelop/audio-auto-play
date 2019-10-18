<template>
   <form class="" >
        <div class="form-group row d-none">
            <label for="id" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
                <input v-model="position.id" type="text" class="form-control" id="id" name="id">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Tên</label>
            <div class="col-sm-10">
                <input v-model="position.name" type="text" class="form-control" id="name" name="name">
            </div>
        </div>
         <div class="form-group row">
            <label for="desc" class="col-sm-2 col-form-label">Mô tả</label>
            <div class="col-sm-10">
                <textarea type="text" v-model="position.desc" class="form-control" id="desc" name="desc"></textarea>
            </div>
        </div>
         <div class="form-group d-none">
            <label for="parent_id">Địa điểm cha</label>
            <input type="text" class="form-control" v-model="position.parent_id" id="parent_id" name="parent_id">
        </div>
         <div class="form-group d-none">
            <label for="groups_id">Nhóm</label>
            <input type="text" class="form-control" v-model="position.groups_id" id="groups_id" name="groups_id">
        </div>
    </form>
</template>
<script>
export default {
    computed: {
        position: function() {
            return this.$store.getters.getPosition;
        },
    },
}
</script>