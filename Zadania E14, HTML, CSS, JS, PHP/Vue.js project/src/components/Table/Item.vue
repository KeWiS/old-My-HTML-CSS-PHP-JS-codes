<template>
    <tr>
            <td>{{ item.currency }}</td>
            <td>{{ item.code }}</td>
            <td>{{ item.mid }}</td>
          </tr>
</template>

<script>
export default {
    props: {
        item: Object,
    },
};
</script>

<style scoped>
tr:nth-child(even) {
  background-color: #EAF5F5;
}
tr:hover {
  background-color: #C6D7D7;
}
td {
  border: solid 1px #DDEEEE;
  color: #333;
  padding: 10px;
  text-shadow: 1px 1px 1px #fff;
}
</style>