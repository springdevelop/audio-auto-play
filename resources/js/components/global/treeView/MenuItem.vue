<template>
  <ul :id="id" class="aria-menu item-menu">
    <li class="menu-item" role="menuitem" tabindex="-1" @click="$emit('addChildPosition',id)">
        <folder-plus-icon size="2x" class="menu-plus mr-1"></folder-plus-icon>
      <span>Thêm địa điểm con</span>
    </li>
     <li class="menu-item" role="menuitem" @click="$emit('addDevice', id)" tabindex="-1">
        <plus-square-icon size="1.5x" class="menu-plus mr-1"></plus-square-icon>
        <span>Thêm thiết bị</span>
    </li>
     <li class="menu-item" role="menuitem" @click="$emit('editItem',id)" tabindex="-1">
        <edit-icon size="1.5x" class="menu-plus mr-1"></edit-icon>
        <span>Sửa thông tin</span>
    </li>
    <li class="menu-item" @click="$emit('deleteItem')" role="menuitem" tabindex="-1">
        <x-octagon-icon size="1.5x" class="custom-class mr-1"></x-octagon-icon>
        <span>Xoá địa điểm</span>
    </li>
  </ul>
</template>

<script>
import { EditIcon, FolderPlusIcon, XOctagonIcon, PlusSquareIcon} from 'vue-feather-icons'

export default {
    components: {
        EditIcon,
        FolderPlusIcon,
        PlusSquareIcon,
        XOctagonIcon
    },
    props: {
        id: Number
    }
}
</script>
<style lang="scss" scoped>
ul{
  position: absolute;
  z-index: 1000;
  right: 0;
  top: calc(100% - 7px);
  width: max-content;
  color: #666;
  background-color: #fff;
  text-shadow: 1px 1px 1px rgba(0,0,0,.004);
  border-radius: 0.3em;
  padding: 7px 0;
  border: 1px solid #BCBCBC;
}
ul li {
    padding: 5px 15px;
}
ul li:hover{
    background-color: #e0e0e0;
}
.feather {
  height: 20px;
}
</style>