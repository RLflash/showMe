<template>
	<div class="publishartwrap">

		<div class="publishartw">
			<el-row>
				<el-col :span="18">
					<el-form ref="form" label-width="80px" size="mini">
						<el-form-item label="文章标题">
							<el-input v-model="arttit"></el-input>
						</el-form-item>
						<edit :value.sync="cont" class="editer"></edit>
						
						<el-form-item class="clearfloat" size="large">
							<el-button type="primary" @click="save" class="savebtn">立即发布</el-button>
						</el-form-item>
					</el-form>
				</el-col>
			</el-row>
			
			
		</div>
		
	</div>
</template>

<script>
	import edit from '@/components/controlboard/Customcom/edit'
	export default {
		components: {
			edit
		},
		data() {
			return {
				arttit:'',
				cont: ""
			}
		},
		methods: {
			save() {
				var self = this
				this.$http.post('/personalart/saveart', self.$qs.stringify({
						'arttit':self.arttit,
						'cont': self.cont,
						
					}))
					.then(function(data) {
						console.log(data)
					})
			}
		}
	}
</script>