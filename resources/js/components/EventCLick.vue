<template>
    <div>
        <h3>Event Click</h3>

        <div class="around-border-red">
            <strong>click.stop</strong>
            <p>Click button sự kiện trên background màu xanh sẽ active theo:
                @click.stop</p>

            <div @click="alertHello"
                 style="background-color: #1d68a7; width: 100px">
                <button @click="alertWelcome">CLick</button>
            </div>
            vs
            <div @click="alertHello"
                 style="background-color: #1d68a7; width: 100px">
                <button @click.stop="alertWelcome">CLick</button>
            </div>
        </div>

        <div class="around-border-red">
            <strong>click.prevent</strong>
            <p>Click submit sẽ không load lại trang: @submit.prevent</p>

            <form>
                <button type="submit">Submit</button>
            </form>
            vs
            <form @submit.prevent>
                <button type="submit">Submit</button>
            </form>
        </div>

        <div class="around-border-red">
            <strong>click.prevent</strong>
            <p>Click submit sẽ không load lại trang: @submit.prevent or
                @submit.prevent="any function"</p>

            <form>
                <button type="submit">Submit</button>
            </form>
            vs
            <form @submit.prevent>
                <button type="submit">Submit</button>
            </form>
        </div>

        <div style="border: 1px solid #38c172">
            <h3>Vuex</h3>
            <p>my_number: {{ getMyNumber }}</p>
            <input type="button" value="Increase"
                   @click="increaseNumber({'gia_tri': 1, 'value': '**'})">
            <input type="button" value="Decrease"
                   @click="decreaseNumber({'gia_tri': 1, 'value': '$$'})">
        </div>

        <div class="max-w-sm mx-auto flex p-6 bg-white rounded-lg shadow-xl">
            <div class="flex-shrink-0">
                <img class="h-12 w-12" src="https://api.adorable.io/avatars/196/abott@adorable.png" alt="ChitChat Logo">
            </div>
            <div class="ml-6 pt-1">
                <h4 class="text-xl text-gray-900 leading-tight">ChitChat</h4>
                <p class="text-base text-gray-600 leading-normal">You have a new message!</p>
            </div>
        </div>


    </div>
</template>

<script>
  import {mapGetters, mapActions} from "vuex"

  export default {
    name: "EventClickABC",
    computed: {
      ...mapGetters(['getMyNumber']),
    },
    methods: {
      ...mapActions(['increaseNumber', 'decreaseNumber']),

      alertHello() {
        alert('Click background')
      },
      alertWelcome() {
        alert('Click button')
      },
    },

  }
</script>

<style lang="scss" scoped>
    .around-border-red {
        border: 1px solid blue;
    }
</style>
