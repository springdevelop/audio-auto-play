<template>
 <div class="tree">
    <ul class="tree-list root">
          <node-tree class="node-tree" :treeData="filterTreeData" :model="model" @setShowModal="setShowModal" ></node-tree>
    </ul>
    <div class="node-info p-3">
      {{position.name}}
    </div>
    <modal v-if="showModal" @close="showModal = false" @submit="updatePosition"></modal>
 </div>
</template>

<script>
import NodeTree from "@/js/components/global/treeView/TreeItem"
import Modal from "@/js/components/global/modal/Modal"

export default {
    props: {
        treeData: Object
    },
    components: {
      NodeTree,
      Modal
    },
    data() {
        return {
            showModal: false,
        }
    },
    methods: {
      setShowModal: function(show) {
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
      }
    },
    computed: {
      filterTreeData() {
        return this.treeData.children
      },
      position: function() {
        return this.$store.getters.getPosition;
      },
      model() {
        return {id: 0, name: this.treeData.name}
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
    padding: 7px 40px 0 25px;
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
.tree-list>.node-tree>div::before {
  position: absolute;
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  font-size: 1em;
  margin-right: 3px;
  content: "\f015";
  left: -1.5em;
  left: 0;
}
.tree-list .node-tree>div> button{
  display: none;
  position: absolute;
  z-index: 100;
  top: 7px;
  right: 3px;
  padding: 1px 3px;
}
.tree-list .node-tree.item>div:hover>button{
  display: block;
}
.tree-list .node-tree.item>div>button:hover{
  background-color: inherit;
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
  right:0;
  width: 300px;
  top: 0;
  height: 100%;
  z-index: 1;
  border-left: 1px solid #333;
}
</style>