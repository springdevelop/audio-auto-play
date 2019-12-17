<style>
.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .5);
  display: table;
  transition: opacity .3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
    max-width: 600px;
    width: 80vw;
    margin: 0px auto;
    padding: 0;
    background-color: #fff;
    border-radius: 0.3rem;
    box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
    transition: all .3s ease;
    font-family: Helvetica, Arial, sans-serif;
    box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
}

.modal-header{
    background-color: #21211F;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    border: 0;
    padding: 1rem;
}
.modal-header button{
    padding: 0;
    background-color: transparent;
    border: none;
    outline: none;
}
.modal-header button span{
    color: #fff;
}
.modal-header h3 {
    margin-top: 0;
    color: #fff;
    font-size: 1.15rem;
    font-weight: 100;
    margin-bottom: 0;
}

.modal-body {
  padding: 2em;
}

.modal-enter {
  opacity: 0;
}

.modal-leave-active {
  opacity: 0;
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
</style>
<template>
    <transition name="modal">
    <div class="modal-mask">
      <div class="modal-wrapper">
        <div class="modal-container">
          <div class="modal-header">
            <h3 name="header">{{modal_title}}</h3>
            <button @click="$emit('close')"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <slot name="body" >
                 <component v-bind:is="modal_component" class=""></component>
            </slot>
          </div>
          <div class="modal-footer justify-content-center">
            <slot name="footer">
              <button class="btn btn-primary waves-effect waves-light" @click="$emit('submit')">{{modal_submit}}</button>
              <button class="btn btn-outline-primary waves-effect" @click="$emit('close')">Thoát</button>
            </slot>
          </div>
        </div>
      </div>
    </div>
  </transition>
</template>
<script>
import EditPosition from '@/js/pages/dashboard/position/FormEdit'
import AddDevice from '@/js/components/global/modal/AddDevice'
import SelectDevice from '@/js/components/global/modal/SelectDevice'



export default {
    components: {
        EditPosition,
        AddDevice,
        SelectDevice
    },
    props: {
        textSubmit: String,
    },
    computed: {
        modal_component() {
            return this.$store.getters.getModalComponent;
        },
        modal_title() {
            return this.$store.getters.getModalTitle;
        },
        modal_submit() {
            return this.$store.getters.getModalSubmit ? this.$store.getters.getModalSubmit: "Thêm";
        },
    }
}
</script>