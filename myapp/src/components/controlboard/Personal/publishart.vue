<template>
	<div class="publishartwrap">
		
		<div class="publishartw">
			发布文章
			{{cont}}
			<edit  :value.sync="cont"></edit>
		</div>
		<el-button type="primary" @click="save">主要按钮</el-button>
	</div>
</template>
<style>
	
</style>
<script>
	import edit from '@/components/controlboard/Customcom/edit'
	export default{
		components:{
			edit
		},
		data(){
			return {
				cont:"<h1>fasefesf</h1>"
			}
		},
		methods:{
			save(){
				var self=this
				this.$http.post('http://192.168.10.14/showMe/myappadmin/Home/personalart/saveart',self.$qs.stringify({'cont':self.cont}))
				.then(function(data){
					console.log(data)
				})
			}
		}
	}
</script>

