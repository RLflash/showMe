<template>
	<div class="publishartwrap">
		
		<div class="publishartw">
			发布文章
			{{cont}}
			<edit  :value.sync="cont"></edit>
		</div>
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
				cont:""
			}
		}
	}
</script>

