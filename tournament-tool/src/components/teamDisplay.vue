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
      teams: [{
        "id": 1,
        "first_name": "Jeanette",
        "last_name": "Penddreth",
        "email": "jpenddreth0@census.gov",
        "gender": "Female",
        "ip_address": "26.58.193.2"
      }, {
        "id": 2,
        "first_name": "Giavani",
        "last_name": "Frediani",
        "email": "gfrediani1@senate.gov",
        "gender": "Male",
        "ip_address": "229.179.4.212"
      }, {
        "id": 3,
        "first_name": "Noell",
        "last_name": "Bea",
        "email": "nbea2@imageshack.us",
        "gender": "Female",
        "ip_address": "180.66.162.255"
      }, {
        "id": 4,
        "first_name": "Willard",
        "last_name": "Valek",
        "email": "wvalek3@vk.com",
        "gender": "Male",
        "ip_address": "67.76.188.26"
      }]
    }
  },
  methods: {
    alertFunction: function alertFunction(){
        alert('test');
    },
    getTeams: function getTeams(){
        this.axios.get('http://localhost:8080/db_functions/function_get_teams.php').then((response) => {
            console.log(response.data);
        });
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
