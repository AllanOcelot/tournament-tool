<template>
  <div id="app">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="tournament-banner"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="content-wrapper">
                    <teamDisplay />
                </div>
            </div>
        </div>
    </div>
    <div class="tournament-background"></div>
  </div>
</template>

<script>
import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(VueAxios, axios)

import addTeam from './components/addTeam';
import teamDisplay from './components/teamDisplay';

export default {
  name: 'app',
  components: {
    addTeam,
    teamDisplay,
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
}

.container {
    z-index: 1;
}

.content-wrapper {
    padding: 0 20px;
}

.tournament-background {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    z-index: 0;
}

.tournament-banner {
    width: 100%;
    height: 250px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}
</style>
