<template>
  <h1>Add New Contact</h1>
  <div class='addItemContainer'>
    <div class="item">
      <label for="fname">First name:</label>
      <input type='text' name="fname" placeholder="John" />
    </div>
    <div class="item">
      <label for="lname">Last name:</label>
      <input type='text' name="fname" />
    </div>
    <div class="item">
      <label for="phnumber">Phone Number:</label>
      <input type='text' name="phnumber" />
    </div>
    <div class="item">
      <label for="dob">Date Of Birth:</label>
      <input type='date' name="dob" />
    </div>
    <div class="item">
      <label for="address">Address:</label>
      <input type='text' name="address" />
    </div>
    <div class="btn">
      Add
    </div>

  </div>

</template>

<script>
  export default {}
</script>

<style>


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
    width: 100%;
    color: rgb(168 85 247);
    background: white;
    border: solid 3px rgb(168 85 247);
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
    background: rgb(192 132 252);
    border: 0px;
    outline: none;
    padding: 5px;
    color: white;
  }
  
  input::placeholder {
    color: white;
  }
</style>