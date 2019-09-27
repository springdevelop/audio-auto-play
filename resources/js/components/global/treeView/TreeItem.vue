<template>
    <li class="node-tree" :class="{open: open}">
        <div
            :class="{bold: isFolder, 'has-children': isFolder}"
            @click="toggle"
            @dblclick="changeType" @contextmenu="rightClick">
            {{model.name}}
            <span v-if="isFolder">[{{open ? '-' : '+'}}]</span>
        </div>
        <ul v-show="open" v-if="isFolder">
            <node
                class="item"
                v-for="model in model.children"
                :model="model" :key="model.id"  @setShowModal="setShowModal">
            </node>
            <li @click="addChild" class="add-new"><i class="fas fa-plus-circle"></i> Thêm</li>
        </ul>
 
    </li>
</template>

<script>
export default {
    name: "node",
    props: {
        model: Object
    },
    data() {
        return {
            open: false
        }
    },
    computed: {
        isFolder: function () {
            return this.model.children &&
                this.model.children.length
        }
    },
    methods: {
        toggle: function () {
            if (this.isFolder) {
                this.open = !this.open
            }
        },
        changeType: function () {
            if (!this.isFolder) {
                Vue.set(this.model, 'children', [])
                this.addChild()
                this.open = true
            }
        },
        addChild: function () {
            this.model.children.push({
                name: 'Địa điểm mới'
            })
        },
        rightClick: function (e) {
            if(this.model.id){
                this.$store.dispatch('loadPosition',this.model.id)
                this.$store.dispatch('setModalSubmit','Cập nhật')
                this.$store.dispatch('setModalTitle','Cập nhật')

            } else {
                this.$store.dispatch('initPosition')
                this.$store.dispatch('setModalTitle','Thêm mới vị trí')
                this.$store.dispatch('setModalSubmit','Thêm')
            }
            this.$emit('setShowModal', 'true')
            if (name !== null && name !== "") {
                this.model.name = name
                this.$store.dispatch('updatePosition', this.model)
            }
            e.preventDefault()
        },
        setShowModal: function(show) {
            this.$emit('setShowModal', 'true')
        } 
    }
};
</script>