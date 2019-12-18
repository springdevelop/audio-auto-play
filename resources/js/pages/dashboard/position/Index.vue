<template>
<div class="p3">
    <tree-view class="item py-3 card" :treeData="treeData" ></tree-view>
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
        this.$store.dispatch( 'loadPositions' )
        this.$store.dispatch( 'initDevices' )
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
