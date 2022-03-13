<template>
  <div class='container'>
    <div class='header'>
      <h1 class='title'>Address Book</h1>
    </div>
      <Form />
      <ListView :items="items"/>
  </div>
</template>

<script>
  import Form from './Form.vue'
  import ListView from './ListView.vue'
  export default {
    components: {
      Form,
      ListView
    },
    data: function(){
      return{
        items: []
      }
    },
    methods:{
      getList(){
        axios.get("api/items")
        .then( responce => {
          this.items = responce.data
        })
        .catch( error => {
          console.log( error );
        })
      }
    },
    created(){
      this.getList();
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
    background: rgb(147 51 234);
    padding: 15px;
    color: white;
  }

  #title{
    text-align: center;
  }
</style>

