<template>
    <div style="border: 1px solid red">
        Message: {{ message }}<br>
        Number: {{ my_number }}<br>
        Trim: {{ str_trim }}<br>
        <strong>Lazy</strong> <input v-model.lazy="message"><br>
        <strong>Number</strong> <input type="number" v-model.number="my_number"><br>
        <strong>Trim</strong> <input type="text" v-model.trim="str_trim"><br>
    </div>
</template>

<script>
  export default {
    data() {
      return {
        message: '',
        my_number: 0,
        str_trim: '',
      }
    },
  }
</script>

<style lang="scss" scoped>

</style>
