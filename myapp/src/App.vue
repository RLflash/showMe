<template>
  <div id="app">
    <router-view/>
  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style>

*{padding:0px;margin:0px;}
i{font-style: normal;}
a{text-decoration: none;}
.clearfloat:after{
  content: ""; 
  display: block; 
  height: 0; 
  clear: both; 
  visibility: hidden;  
  }
  .leftright-enter-active {
	  animation: leftright-in .3s;
	  -webkit-animation: leftright-in .3s;
	  -ms-animation: leftright-in .3s;
	  -o-animation: leftright-in .3s;
	  -moz-animation: leftright-in .3s;
	}
	.leftright-leave-active {
	  animation: leftright-in .3s reverse;
	  -webkit-animation: leftright-in .3s reverse;
	  -ms-animation: leftright-in .3s reverse;
	  -o-animation: leftright-in .3s reverse;
	  -moz-animation: leftright-in .3s reverse;
	}
	@keyframes leftright-in {
	  0% {
	    transform: translateX(-100%);
	    -webkit-transform: translateX(-100%);
	    -ms-transform: translateX(-100%);
	    -o-transform: translateX(-100%);
	    -moz-transform: translateX(-100%);
	  } 
	  100% {
	    transform: translateX(0);
	    -webkit-transform: translateX(0);
	    -ms-transform: translateX(0);
	    -o-transform: translateX(0);
	    -moz-transform: translateX(0);
	  }
	}
	@-webkit-keyframes leftright-in {
	  0% {
	    transform: translateX(-100%);
	    -webkit-transform: translateX(-100%);
	    -ms-transform: translateX(-100%);
	    -o-transform: translateX(-100%);
	    -moz-transform: translateX(-100%);
	  } 
	  100% {
	    transform: translateX(0);
	    -webkit-transform: translateX(0);
	    -ms-transform: translateX(0);
	    -o-transform: translateX(0);
	    -moz-transform: translateX(0);
	  }
	}
	@-ms-keyframes leftright-in {
	  0% {
	    transform: translateX(-100%);
	    -webkit-transform: translateX(-100%);
	    -ms-transform: translateX(-100%);
	    -o-transform: translateX(-100%);
	    -moz-transform: translateX(-100%);
	  } 
	  100% {
	    transform: translateX(0);
	    -webkit-transform: translateX(0);
	    -ms-transform: translateX(0);
	    -o-transform: translateX(0);
	    -moz-transform: translateX(0);
	  }
	}
	@-o-keyframes leftright-in {
	  0% {
	    transform: translateX(-100%);
	    -webkit-transform: translateX(-100%);
	    -ms-transform: translateX(-100%);
	    -o-transform: translateX(-100%);
	    -moz-transform: translateX(-100%);
	  } 
	  100% {
	    transform: translateX(0);
	    -webkit-transform: translateX(0);
	    -ms-transform: translateX(0);
	    -o-transform: translateX(0);
	    -moz-transform: translateX(0);
	  }
	}
	@-moz-keyframes leftright-in {
	  0% {
	    transform: translateX(-100%);
	    -webkit-transform: translateX(-100%);
	    -ms-transform: translateX(-100%);
	    -o-transform: translateX(-100%);
	    -moz-transform: translateX(-100%);
	  } 
	  100% {
	    transform: translateX(0);
	    -webkit-transform: translateX(0);
	    -ms-transform: translateX(0);
	    -o-transform: translateX(0);
	    -moz-transform: translateX(0);
	  }
	}
</style>
