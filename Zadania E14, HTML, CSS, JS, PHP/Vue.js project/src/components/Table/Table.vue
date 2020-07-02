<template>
    <table>
      <thead>
      <tr>
        <th>Nazwa waluty</th>
        <th>Kod ISO</th>
        <th>Kurs</th>
      </tr>
      </thead>
      <tbody>
          <Item v-for = 'item in values' :key = 'item.code' :item = 'item' />
      </tbody>
    </table>
</template>

<script>
import Item from '@/components/Table/Item';

export default {
    components: { Item },
    props: { 
        values: Array,
    },
}
</script>

<style scoped>
table {
  border: solid 1px #DDEEEE;
  border-collapse: collapse;
  border-spacing: 0;
  font: normal 13px Arial, sans-serif;
}
th {
  background-color: #C6D7D7;
  border: solid 1px #DDEEEE;
  color: #336B6B;
  padding: 10px;
  text-align: left;
  text-shadow: 1px 1px 1px #fff;
}
</style>