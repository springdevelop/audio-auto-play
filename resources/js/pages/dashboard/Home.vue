<template>
    <div>home</div>
</template>
<script>
export default {
   mounted () {
         this.$store.dispatch('makeLoading', true)
   },
}
</script>