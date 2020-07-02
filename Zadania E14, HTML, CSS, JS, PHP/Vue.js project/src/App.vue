<template>
  <Table :values = 'table' />
</template>

<script>
import axios from 'axios';
import Table from '@/components/Table/Table';

export default {
  name: 'app',
  components: { Table },
  data: () => ({
    table: [
      { currency: 'polski złoty', code: 'PLN', mid: 1 },
    ],
  }),
  methods: {
    api() {
      return axios.create({
        baseURL: 'http://api.nbp.pl/api/',
        headers: { Accept: 'application/json' }
      });
    },
    addToTable(e) {
      this.table.push(e);
    },
  },
  mounted() {
    this.api().get('exchangerates/tables/a/')
      .then(res => res.data[0].rates.forEach(i => this.addToTable(i)));
  },
};
</script>

<style scoped>

</style>