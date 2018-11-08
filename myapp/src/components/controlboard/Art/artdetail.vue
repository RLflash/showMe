<template>
	<div class="artdetailwrap">
		<div class="artdetailw">
			<el-row>
				<el-col :span="16" :offset="4" v-html="artdeta.content">
					

				</el-col>
			</el-row>
			
		</div>
	</div>
</template>

<script>
	export default{
		data(){
			return{
				artdeta:null
			}
		},
		mounted(){
			let self=this;
			let id=self.$route.params.id
			self.$http.get('/index/getdetail',{params:{'id':id}} )
					.then(function(data) {
						self.artdeta=data.data[0]
						console.log(self.artdeta)
					})
		},
	}
</script>

<style>
</style>