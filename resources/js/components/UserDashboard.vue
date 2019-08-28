<template>
    <div class="user-dashboard">
        <div class="list-user-comp">
            <h4>List User</h4>
            <ListUser @UserSelected="childrenSelectUser"></ListUser>
        </div>
        <br>
        <br>
        <div class="user-detail-comp">
            <h4>User Detail</h4>
            <UserDetail :userDetailInfo="user"></UserDetail>
        </div>
    </div>
</template>

<script>
  import ListUser from './ListUser.vue';
  import UserDetail from './UserDetail.vue';

  export default {
    data(){
      return{
        user: {},
      }
    },
    components: {
      ListUser,
      UserDetail
    },
    methods:{
      childrenSelectUser(data){
        this.user = data;
      }
    }
  }
</script>

<style lang="scss" scoped>
</style>
