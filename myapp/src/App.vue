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
img{max-width: 100%;}
i{font-style: normal;}
a{text-decoration: none;}
.clearfloat:after{
  content: ""; 
  display: block; 
  height: 0; 
  clear: both; 
  visibility: hidden;  
  }
  .el-tooltip__popper{width:98% !important;}
  /**/
	.popwrap{width:100vw;height:100vh;top:0;position:fixed;left:0;    z-index: 3;}
	.whiteopacity{background:rgba(255, 255, 255, 0.6);filter:Alpha(opacity=60);}
	.textoverhide{overflow:hidden;text-overflow:ellipsis;white-space:nowrap; }
	.line{margin:20px 0;width:100%;height:1px;background:#dee5e7;}
	.overauto{overflow:auto}
	.overhide{overflow:hidden}
	/*文本提交按钮*/
  .savebtn{float:right !important;}
	.editer{margin-left:80px;margin-bottom: 20px;}
	/**/
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
	    transform: translateX(100%);
	    -webkit-transform: translateX(100%);
	    -ms-transform: translateX(100%);
	    -o-transform: translateX(100%);
	    -moz-transform: translateX(100%);
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
	    transform: translateX(100%);
	    -webkit-transform: translateX(100%);
	    -ms-transform: translateX(100%);
	    -o-transform: translateX(100%);
	    -moz-transform: translateX(100%);
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
	    transform: translateX(100%);
	    -webkit-transform: translateX(100%);
	    -ms-transform: translateX(100%);
	    -o-transform: translateX(100%);
	    -moz-transform: translateX(100%);
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
	    transform: translateX(100%);
	    -webkit-transform: translateX(100%);
	    -ms-transform: translateX(100%);
	    -o-transform: translateX(100%);
	    -moz-transform: translateX(100%);
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
	    transform: translateX(100%);
	    -webkit-transform: translateX(100%);
	    -ms-transform: translateX(100%);
	    -o-transform: translateX(100%);
	    -moz-transform: translateX(100%);
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
