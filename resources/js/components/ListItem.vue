<template>
  <div class="item">
    <span>{{ item.name }}</span>
  </div>
</template>

<script>
  export default {
    props: ['item']
  }
</script>

<style scoped>

  .item{
    padding: 5px;
  }
</style>