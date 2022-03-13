<template>
  <h1 class="heading">View All Contacts</h1>
  <div class="">
    <div v-for="(item, index) in items" :key="index">
      <ListItem
        :item="item"
        class="item"
      />
    </div>
  </div>
</template>

<script>
  import ListItem from "./ListItem"
  export default {
    props: ['items'],
    components:{
        ListItem,
    }
  }
</script>

<style scoped>
  .heading{
    color:white;
    padding: 5px;
    margin-bottom: 5px;
    background: rgb(168 85 247);
  }
  
  .item{
    background: rgb(192 132 252);
    color: white;
    margin-bottom: 2px;
  }
</style>