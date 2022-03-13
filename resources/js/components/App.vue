<template>
  <div class='container'>
    <div class='header'>
      <h1 class='title'>Address Book</h1>
    </div>
      <Form />
      <ListView />
  </div>
</template>

<script>
  import Form from './Form.vue'
  import ListView from './ListView.vue'
  export default {
    components: {
      Form,
      ListView
    }
  }
</script>

<style scoped>
  .container{
    width: 50%;
    padding: 0px;
    margin: 0 auto;
    font-family: verdana;
  }

  .header{
    background: rgb(168 85 247);
    padding: 15px;
    color: white;
  }

  #title{
    text-align: center;
  }
</style>

