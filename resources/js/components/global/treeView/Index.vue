<template>
 <div class="tree">
    <ul class="tree-list">
      <node-tree :model="treeData" @setShowModal="setShowModal" @></node-tree>
    </ul>
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
      updatePosition: function() {
        var data = this.$store.getters.getPosition
        this.$store.dispatch('updatePosition', data)
        var state_update = this.$store.getters.getPositionStatus
        if( state_update == 2 )
          this.showModal = false
      }
    }
};
</script>

<style >
.tree-list {
  list-style: none;
  font-size: 1.1em;
}
.tree-list ul {
    padding-left: 1.5em;
    margin: 6px 0;
    list-style: none;
}
.tree-list .node-tree>div{
    position: relative;
    width: max-content;
}
.tree-list .node-tree.item>div{
    padding: 10px 10px 10px 20px;
}
.tree-list .node-tree>div::before {
  position: absolute;
  font-family: "Font Awesome 5 Free";
  content: "\f105";
  font-weight: 900;
  font-size: 1em;
  margin-right: 2px;
  left: 5px;
}
.tree-list .item.open>div::before {
  content: "\f107";
}
.tree-list>.node-tree>div::before {
  content: "\f015";
  left: -1.5em;
}

.tree-list .node-tree>div:hover{
   background-color: #eee;
   cursor: pointer;
}
li.add-new:hover{
  color: #0c5af7;
  cursor: pointer;
}
</style>