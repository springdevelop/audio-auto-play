<template>
 <div class="tree">
    <ul class="tree-list root">
          <node-tree class="node-tree" :treeData="filterTreeData" :model="model" @setShowModal="setShowModal" ></node-tree>
    </ul>
    <div class="node-info" v-if="position.name">
      <h4 class="text-center py-3 text-uppercase border-bottom">Thông tin địa điểm</h4>
      <div  class="name px-3 py-1">Tên: <span class="text-primary">{{position.name}}</span></div>
      <div  class="name px-3 py-1">Kênh phát: 
        <span v-if="station.id" class="text-primary">{{station.name}}</span>
        <span v-else class="text-danger">Không có kênh phát</span>
      </div>
        <div class="px-3" v-if="devicesOfPosition.length">
          <div class="">Danh sách thiết bị:</div>
            <div class="device p-2" v-for="device in devicesOfPosition" :key="device.id" >
                  <cpu-icon size="1.5x" class="custom-class"></cpu-icon>{{device.name}}
            </div>
        </div>
        <div v-else class="px-3">Không có thiết bị.</div>
        <div class="text-center p-3">
          <button class="btn btn-primary" @click="addDevice(position.id)">Thêm Thiết bị</button>
        </div>
      
    </div>
    <modal v-if="showModal" @close="showModal = false" @submit="submitModal"></modal>
 </div>
</template>

<script>
import NodeTree from "@/js/components/global/treeView/TreeItem"
import Modal from "@/js/components/global/modal/Modal"
import { CpuIcon } from 'vue-feather-icons'

export default {
    props: {
        treeData: Object
    },
    components: {
      NodeTree,
      Modal,
      CpuIcon
    },
    data() {
        return {
            showModal: false,
        }
    },
    methods: {
      addDevice: function(position_id = 0) {
            this.$store.dispatch('makeModalComponent',{name: 'select-device', title: 'Thêm thiết bị', submit: 'Thêm'})
            this.$store.dispatch('initDevice')
            this.setShowModal(true);
      },
      setShowModal: function(show = true) {
         this.showModal = show
      },
      updatePosition: async function() {
        let data = this.position
        let status = 0
        if(data.id){
          await this.$store.dispatch('updatePosition', data)
          status = this.$store.getters.updatePositionStatus
        }
        else{
          await this.$store.dispatch('createPosition', data)
          status = this.$store.getters.createPositionStatus
        }
        if(status==2){
           this.$store.dispatch('loadPositions')
        }
        this.showModal = false
      },
      updateDevice: async function() {
        this.device.positions_id = this.position.id
        if(this.device.id){
          console.log(this.device )
          await this.$store.dispatch('updateDevice',this.device)
          this.$store.dispatch('loadDevicesOfPosition', this.position.id)
        }
        else{
          await this.$store.dispatch('createDevice', data)
        }
        this.showModal = false
      },
      submitModal: function() {
        if (this.modal == 'edit-position'){
          this.updatePosition()
        } else if (this.modal == 'select-station'){
          this.position.station_id = this.station.id
          this.updatePosition()
        }else{
          this.updateDevice()
        }
      }
    },
    computed: {
      filterTreeData() {
        return this.treeData.children
      },
      position: function() {
        return this.$store.getters.getPosition;
      },
      station: function() {
        return this.$store.getters.getStation;
      },
      modal() {
        return this.$store.getters.getModalComponent;
      },
      model() {
        return {id: 0, name: this.treeData.name}
      },
      devices: function() {
          return this.$store.getters.getDevices;
      },
      devicesOfPosition: function() {
          return this.$store.getters.getDevicesOfPosition;
      },
      device: function() {
          return this.$store.getters.getDevice;
      }
    },
    mounted() {
      document.body.addEventListener('keyup', e => {
        if (e.keyCode === 27) {
          this.showModal = false
        }
      })
    }
};
</script>

<style>
.tree{
  min-height: calc(100vh - 48px);
  position: relative;
}
.tree-list {
  list-style: none;
  font-size: 1.1em;
 
}
.tree-list ul {
    padding-left: em;
    margin: 6px 0;
    list-style: none;
}
.root>li>div{
  padding-left: 20px; 
}
.tree-list .node-tree.open >ul>.node-tree{
  border-left: 1px dashed #666666;
}
.tree-list .node-tree>div{
    position: relative;
    width: max-content;
}
.tree-list .node-tree.item>div{
    padding: 7px 40px 0 40px;
}
.tree-list .node-tree.item>div::after {
  position: absolute;
  content: "";
  width: 15px;
  border-top: 1px dashed #666;
  margin-right: 10px;
  left: 0px;
  top: 60%;
}
.tree-list .node-tree>div::before {
  position: absolute;
  font-family: "Font Awesome 5 Free";
  font-weight: 100;
  font-size: 1em;
  margin-right: 3px;
  content: "\f1ad";
  left: 20px;
}
.tree-list>.node-tree>div::before {
  position: absolute;
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  font-size: 1em;
  margin-right: 3px;
  content: "\f015";
  left: 0;
}
.tree-list .node-tree>div> button{
  display: none;
  position: absolute;
  z-index: 100;
  top: 10px;
  right: -3px;
  padding: 1px 3px;
}
.tree-list .node-tree.item>div:hover>button{
  display: block;
  background-color: inherit;
  outline: none;
  border: none;
  box-shadow: none;
}
.tree-list .node-tree.item>div>button:focus,
.tree-list .node-tree.item>div>button:active,
.tree-list .node-tree.item>div>button:hover{
  background-color: inherit;
  outline: none;
  border: none;
  box-shadow: none;
}
.tree-list .node-tree>div:hover{
  color: #0c5af7;
   cursor: pointer;
}
li.add-new:hover{
  color: #0c5af7;
  cursor: pointer;
}
.node-info{
  position: absolute;
  right: -1em;
  width: 300px;
  top: -1em;
  height: calc( 100% + 2em);
  z-index: 1;
  border-left: 1px solid #ccc;
  transition: all 0.5s linear;
  background-color: #fff;
  box-shadow: -5px 0 5px -5px #ccc;
}
.device:hover{
  cursor: pointer;
  color: #B3562F;
}
</style>