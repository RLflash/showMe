<template>
	<div class="conbdwrap">
		<div class="conbdw">		
			<el-row class="nav">
				<el-col :span="17" :offset="3">
					<div class="grid-content bg-purple-dark">
	  					<el-menu :default-active="activeIndex" class="el-menu-demo" mode="horizontal">
						  	<el-menu-item index="1">首页</el-menu-item>
						  	<el-menu-item index="2">技术文档</el-menu-item>
						  	<el-menu-item index="3">个人情感</el-menu-item>
						  	<el-menu-item index="4">下载专区</el-menu-item>
						</el-menu>
					</div>
				</el-col>
				<el-col :span="4" class="centerbtn">
					<div class="grid-content bg-purple-dark ">
						<el-dropdown>
						  	<div class="centerimg el-dropdown-link">
	  							<img src="@/assets/man.png" alt="" />
	  						</div>
							<el-dropdown-menu slot="dropdown">
							    <router-link to="/controlboard/persoanl/articlemanage">
							    	<el-dropdown-item>个人中心</el-dropdown-item>
							    </router-link>
							    <el-dropdown-item>退出</el-dropdown-item>
							</el-dropdown-menu>
						</el-dropdown>
					</div>
				</el-col>
			</el-row> 	
			<router-view/>
		</div>
	</div>
</template>
<style scoped="scoped">
	.nav{border-bottom: solid 1px #e6e6e6;}
	.el-menu.el-menu--horizontal{border:none}
	.centerimg img{width: 50px;height: 50px;top:0px;bottom:0;margin:auto;cursor: pointer;    margin-top: 5px;}
</style>

<script>
  export default {
    data() {
      return {
      	 activeIndex: '1',
        isCollapse: true
      };
    },
    methods: {
      handleOpen(key, keyPath) {
        console.log(key, keyPath);
      },
      handleClose(key, keyPath) {
        console.log(key, keyPath);
      }
    }
  }
</script>