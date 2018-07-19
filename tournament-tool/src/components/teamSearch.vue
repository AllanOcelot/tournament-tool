<template>
    <div class="teamSearch">
        <div class="">
            <form class="" action="index.html" method="post">
                <label for="">Search Teams:</label>
                <input id="searchTeams" v-model="searchString" @input="searchTeamsAPI($event.target.value)" type="text" name="" value="">
            </form>
            <ul>
                <li v-for="result in teams" :key="result.index">{{result.name}}</li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
  name: 'teamSearch',
  data: function data() {
      return {
            teams: [],
            searchString: '',
      };
  },
  computed: {
  },
  methods: {




  },
  props: {

  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
