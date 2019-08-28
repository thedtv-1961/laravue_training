<template>
    <div>
        <p>Message: {{ message }}</p>
        <p>Reserve: {{ reserveMessage }}</p>
        <div class="my-component">
            This is my first component
        </div>
        <button @click="sayHello">Click</button>
    </div>
</template>

<script>
  export default {
    data() {
      return {
        message: 'This is text',
        student:{
          name: 'ABC',
          score: 7
        }
      }
    },
    methods: {
      sayHello() {
        this.message = 'This change text';
        this.student.name = 'John Doe';
        this.student.score = 9;
      }
    },
    computed:{
        reserveMessage(){
          return this.message.split(' ').reverse().join(' ');
        },
        getName(){
          return this.student.name;
        },
        getScore(){
          return this.student.score;
        }
    },
    watch:{
      message(){
        console.log('Bien `message` thay doi');
      },
      reserveMessage(){
        console.log('Ham computed `reserveMessage` thay doi');
      },
      getName(){
        console.log('student.name thay doi thong qua computed `getName`');
      },
      getScore(){
        console.log('student.score thay doi thong qua computed `getScore`');
      }
    }
  }
</script>

<style lang="scss" scoped>
    .my-component {
        color: red;
    }
</style>
