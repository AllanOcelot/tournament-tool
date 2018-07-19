<template>
    <div class="">
        <div class="addTeam">
            <h2>Team Entry:</h2>
            <form class="" action="index.html" method="post">
                <div class="input-container">
                    <label for="">Team Name:</label>
                    <input type="text" id="teamName" name="" value="" placeholder="Allan's Amazing Ocelots">
                </div>
                <div class="input-container">
                    <label for="">Team Short ID:</label>
                    <input type="text" id="teamShortID" name="" value="" placeholder="[AAO]">
                </div>
            </form>
            <ul>
                <li v-for="result in teams" :key="result.index">{{result.name}}</li>
            </ul>
            <h3 @click="addTeam()">CLICK ME TO TEST AXOIS</h3>
        </div>
        <div class="addTeambackground"></div>
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

    addTeam: function addTeam() {
        this.axios.get('https://anapioficeandfire.com/api/characters/583').then((response) => {
            console.log(response.data);
        });
    }




  },
  props: {

  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .addTeambackground {
        position: fixed;
        background-color: #000;
        opacity: 0.3;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 10;
    }
    .addTeam {
        position: fixed;
        width: 324px;
        height: 400px;
        overflow-y: scroll;
        overflow-x: hidden;
        left: 50%;
        top: 50%;
        margin-left: -162px;
        margin-top: -200px;
        background: #fff;
        border-radius: 2px;
        z-index: 11;
    }
</style>
