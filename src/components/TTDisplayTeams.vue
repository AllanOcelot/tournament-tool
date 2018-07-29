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

      axios.get('/server/GET_teams.php', {
        header: 'application/x-www-form-urlencoded',
        proxy: {
          host: 'localhost',
          port: 3000
        }
      }).then(function (response) {
        alert('response is : ' + response.data);
      }).catch(function (error) {
        if (error.response) {
          alert(error.response.headers);
        }
        else if (error.request) {
          alert(error.request);
        }
        else {
          alert(error.message);
        }
        alert(error.config);
      });

    }
  },
}
</script>
