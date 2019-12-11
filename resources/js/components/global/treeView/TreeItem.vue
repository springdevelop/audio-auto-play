<template>
    <li @drop="handleDrop" class="node-tree" :class="{open: open}" @mouseleave="showMenu=false">
        <drag :class="{bold: isFolder, 'has-children': isFolder}">
            <span  @dblclick="toggle" @contextmenu="show" @click="loadItem(model.id)">{{model.name}}</span>
            <span @click="toggle" v-if="isFolder">[{{ open ? '-' : '+' }}]</span>
            <button @click="show" type="button" class="btn btn-outline-secondary btn-sm ml-1">
                <more-horizontal-icon size="2x" class="custom-class  text-muted"></more-horizontal-icon>
            </button>
            <menu-item @deleteItem="deleteItem" @addDevice="addDevice" @editItem="editItem" @addChildPosition="addItem" v-if="showMenu" :id="model.id"></menu-item>
        </drag>
        <ul v-show="open" v-if="isFolder">
            <node
                class="item"
                v-for="child in children"
                :model="child"
                :key="child.id" @setShowModal="setShowModal"
                :treeData="treeData">
            </node>
            <li @click="addItem(model.id)" class="add-new"><i class="fas fa-plus-circle"></i> Thêm</li>
        </ul>
    </li>
</template>

<script>
import MenuItem from "@/js/components/global/treeView/MenuItem"
import { MoreHorizontalIcon, ChevronRightIcon, ChevronDownIcon} from 'vue-feather-icons'
import { Drag, Drop } from 'vue-drag-drop';

export default {
    name: "node",
    components: {
        Drag,
        Drop,
        MenuItem,
        MoreHorizontalIcon,
        ChevronRightIcon
    },
    props: {
        model: Object,
        treeData: Array
    },
    data() {
        return {
            open: false,
            showMenu: false
        }
    },
    created() {
        if(this.model.id ==0) {
            this.open = true
        }
    },
    computed: {
        isFolder: function () {
            return this.children &&
                this.children.length
        },
        children: function() {
            return this.treeData.filter(item => {
                 return item.parent_id === this.model.id
            })
        },
       
    },
    methods: {
        toggle: function () {
            if (this.isFolder) {
                this.open = !this.open
                let state_tree = JSON.parse(localStorage.getItem('tree'))
                if(this.open == true){
                    if(!state_tree||state_tree.length==0){
                        state_tree = [this.model.id]
                    } else{
                        if(!state_tree.indexOf(this.model.id)){
                            state_tree.push(this.model.id)
                        } 
                    }
                } else {
                    if(state_tree){
                        state_tree.splice( state_tree.indexOf(this.model.id), 1 );
                    }
                }
                localStorage.setItem('tree', JSON.stringify(state_tree));
            } else {
                console.log(this.isFolder)
                this.editItem(this.model.id)
            }
        },
        show: function (e) {
            this.showMenu = !this.showMenu
            e.preventDefault()
        },
        editItem: function (id = 0) {
            if(id){
                this.$store.dispatch('loadPosition',id)
                this.$store.dispatch('makeModalComponent',{name: 'edit-position', title: 'Cập nhật', submit: 'Cập nhật'})
                this.setShowModal();
            } else {
                alert("Chưa chọn địa chiểm")
            }
        },
        addDevice: function(position_id = 0) {
            this.$store.dispatch('makeModalComponent',{name: 'add-device', title: 'Thêm thiết bị', submit: 'Thêm'})
            this.$store.dispatch('initDevice')
            this.$store.dispatch('loadPosition',position_id)
            this.setShowModal();
        },
        addItem: function (parent_id = 0) {
            this.$store.dispatch('makeModalComponent',{name: 'edit-position', title: 'Thêm mới vị trí', submit: 'Thêm'})
            this.$store.dispatch('initPosition', parent_id)
            this.setShowModal();
        },
        loadItem: function(id) {
            this.$store.dispatch('loadPosition', id)
            this.$store.dispatch('loadDevicesOfPosition', id)
        },
        deleteItem: function(id) {
             this.$store.dispatch('deletePosition', id)
        },
        setShowModal: function() {
            this.$emit('setShowModal', 'true')
        },
        handleDrop(data, event) {
            alert(`You dropped with data: ${JSON.stringify(data)}`);
        },
    }
};
</script>