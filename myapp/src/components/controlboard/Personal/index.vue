<template>
	<div class="personalwrap">
		<div class="presonalw">
			<el-container>
			  	<el-aside width="200px">
			  		<el-menu default-active="1" class="el-menu-vertical-demo" @open="handleOpen" @close="handleClose" :collapse="isCollapse">
						<router-link to="publishart">
							<el-menu-item index="1">
								<span slot="title">发布文章</span>
							</el-menu-item>		
						</router-link>
						<router-link to="articlemanage">
							<el-menu-item index="2">
								<span slot="title">文章管理</span>
							</el-menu-item>		
						</router-link>
						
						<router-link to="changepass">
							<el-menu-item index="3">
								<span slot="title">修改密码</span>
							</el-menu-item>		
						</router-link>
					</el-menu>
			  	</el-aside>
			  	<el-main>
			  		<router-view/>
			  	</el-main>
			</el-container>
		</div>
	</div>
</template>

<script>
	
	export default {
		
		data() {
			return {
				tabPosition: 'left'
			};
		}
	};
</script>

<style scoped="scoped">
	.el-aside>ul{height:calc(100vh - 61px)}
</style>