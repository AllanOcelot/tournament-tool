<template>
  <p> Filler </p>
</template>

<script>
import axios from 'axios';

export default {
  name: 'TTDisplayTeams',
  data () {
    return {
      teams: {},
      loading: true,
    }
  },
  created: function(){
    this.getTeams();
  },
  methods: {
    getTeams: function () {
      this.loading = true;
    }
  },
}
</script>
