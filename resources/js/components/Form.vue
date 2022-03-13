<template>
  <h1 class="heading">Add New Contact</h1>
  <div class='addItemContainer'>
    <div class="item">
      <label for="fname">First name:</label>
      <input type='text' name="fname" placeholder="John" v-model="item.name" />
    </div>
    <div class="item">
      <label for="lname">Last name:</label>
      <input type='text' name="lname" placeholder="Doe"/>
    </div>
    <div class="item">
      <label for="phnumber">Phone Number:</label>
      <input type='text' name="phnumber" placeholder="0800 83 83 83" />
    </div>
    <div class="item">
      <label for="dob">Date Of Birth:</label>
      <input type='date' name="dob" placeholder=""/>
    </div>
    <div class="item">
      <label for="address">Address:</label>
      <input type='text' name="address" placeholder="123 Fake Street" />
    </div>
    <div 
      :class="[ item.name ? 'active' : 'inactive', 'btn' ]"
      @click="addItem()"
    >
      Add
    </div>

  </div>

</template>

<script>
  export default {
    data: function(){
      return{
        item: {
          name: ""
        }
      }
    },
    methods:{
      addItem(){
        if(this.item.name == ""){
          return
        }
        axios.post('api/item/store', {
          item: this.item,
        }).then( responce => {
          if(responce.status == 201){
            this.item.name = "";
          }
        })
        .catch( error => {
          console.log(error);
        })
      }
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


  .active{
    border: solid 3px green !important;
  }

  .inactive{
    border: solid 3px rgb(168 85 247);
  }

  .addItemContainer{
    display: flex;
    flex-wrap: wrap;
  }

  .item{
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
    width: 100%;
  }

  .btn{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 5px;
    margin-left: auto;
    width: 50%;
    color: rgb(168 85 247);
    background: white;
  }

  .btn:hover{
    cursor: pointer;
    color: white;
    background: rgb(168 85 247);
  }

  label{
    width: 40%;
    padding: 5px;
  }

  input{
    width: 50%;
    background: rgb(209 213 219);
    border: 0px;
    outline: none;
    padding: 5px;
  }
</style>