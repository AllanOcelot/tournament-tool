<template>
  <div id="app">
    <TT-Header/>
      <div class="container">
        <div class="col-sm-12">
          <p> We will try to get the teams from postgress and display them here </p>
        </div>
      </div>
    <TT-Footer/>
  </div>
</template>

<script>
import TTHeader from './components/TTHeader.vue';
import TTFooter from './components/TTFooter.vue';

export default {
  name: 'app',
  components: {
    TTHeader,
    TTFooter
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
