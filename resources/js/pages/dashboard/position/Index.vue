<template>
<div>
    <tree-view class="item py-3" :treeData="treeData" ></tree-view>
</div>
</template>
<script>
import TreeView from '@/js/components/global/treeView/Index'

export default {
    components: {
          TreeView,
     },
     data() {
        return {
        }
    },
    created() {
        this.$store.dispatch('loadPositions')
    },
    computed: {
        positions: function() {
          return this.$store.getters.getPositions;
        },
        treeData: function() {
          return { name: 'Root', children: this.positions}
        },
       
    },
    methods: {
        loadPositions() {
            this.$store.dispatch('loadPositions')
        },
    }
}
</script>
