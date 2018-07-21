<template>
    <div class="team-display">
        <div class="display-options">
            <span>Display teams as:</span>
            <select v-model="display" class="" name="">
                <option disabled value="">Please choose</option>
                <option value="list">List</option>
                <option value="block">Block</option>
            </select>
        </div>
        <ul v-bind:class="display" class="teams-container">
            <li>
                <span class="image" alt="team name"></span>
                <div class="content">
                    <p @click="getTeams()">Team Liquid</p>
                    <a href="/teams:team_liquid">View Details</a>
                </div>
            </li>
            <li v-for="(team, index ) in teams" v-bind:key="index">{{team}} {{ index }} aa</li>
        </ul>
    </div>
</template>

<script>
export default {
  name: 'teamDisplay',
  props: {
  },
  data: function () {
    return {
      display: 'block',
      teams: []
    }
  },
  methods: {
    alertFunction: function alertFunction(){
        alert('test');
    },
    getTeams: function getTeams(){
        var xhr = new XMLHttpRequest();
        var self = this;
        xhr.onreadystatechange = function() {
            if (xhr.readyState == XMLHttpRequest.DONE) {
                //this.teams = xhr.responseText.data;
                self.teams = xhr.responseText.data;
            }
            console.log(self.teams.length);
            for (let i = 0; i < self.teams.length; i++) {
                console.log(self.teams[i]);
            }
        }
        xhr.open('GET', '/db_functions/function_get_teams.php', true);
        xhr.send(null);
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}

.display-options {
    width: 100%;
    text-align: right;
    padding: 20px 0;
}

.display-options span {
    font-size: 1em;
    margin: 0 0 10px 0;
}

.display-options select {
    float: right;
}

/* Style the teams container */
.teams-container {
    width: 100%;
    padding: 0;
    margin: 0;
    text-align: center;
}


/* Style the blocks */
.teams-container.block li {
    display: inline-block;
    width: 30%;
    margin: 0 auto 20px auto;
}

.teams-container.block li .image {
    width: 100%;
    height: 100px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
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
