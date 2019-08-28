<template>
    <table class="tbl-list-user" border="1">
        <thead>
        <th>Name</th>
        <th>Location</th>
        <th>DOB</th>
        </thead>
        <tbody>
        <tr v-for="user in userData">
            <td><a href="#" @click="onUserCLick(user)">{{ user.name.title }} - {{ user.name.last }} {{ user.name.first }}</a></td>
            <td>{{ user.location.city }}</td>
            <td>{{ user.dob }}</td>
        </tr>
        </tbody>
    </table>
</template>

<script>
  import data from './data.json';

  export default {
    data() {
      return {
        userData: data,
      }
    },
    methods:{
      onUserCLick(user){
        this.$emit('UserSelected', user);
      }
    }
  }
</script>

<style lang="scss" scoped>
    .tbl-list-user {
        width: 100%;
    }
</style>
