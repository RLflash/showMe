<template>
	<div class="changewrap">
		<div class="changew">
			<el-row class="passw">
				<el-col :span="8" :offset="8">
					<el-form :model="ruleForm2" status-icon :rules="rules2" ref="ruleForm2" label-width="100px" class="demo-ruleForm">
						<el-form-item label="原始密码">
							<el-input type="text" auto-complete="off"></el-input>
						</el-form-item>
						<el-form-item label="密码" prop="pass">
							<el-input type="password" v-model="ruleForm2.pass" auto-complete="off"></el-input>
						</el-form-item>
						<el-form-item label="确认密码" prop="checkPass">
							<el-input type="password" v-model="ruleForm2.checkPass" auto-complete="off"></el-input>
						</el-form-item>

						<el-form-item>
							<el-button type="primary" @click="submitForm('ruleForm2')">提交</el-button>
							<el-button @click="resetForm('ruleForm2')">重置</el-button>
						</el-form-item>
					</el-form>
				</el-col>
			</el-row>
		</div>
	</div>
</template>

<script>
	export default {

		data() {
			var validatePass = (rule, value, callback) => {
				if(value === '') {
					callback(new Error('请输入密码'));
				} else {
					if(this.ruleForm2.checkPass !== '') {
						this.$refs.ruleForm2.validateField('checkPass');
					}
					callback();
				}
			};
			var validatePass2 = (rule, value, callback) => {
				if(value === '') {
					callback(new Error('请再次输入密码'));
				} else if(value !== this.ruleForm2.pass) {
					callback(new Error('两次输入密码不一致!'));
				} else {
					callback();
				}
			};
			return {
				ruleForm2: {
					pass: '',
					checkPass: '',
				
				},
				rules2: {
					pass: [{
						validator: validatePass,
						trigger:['blur', 'change']
					}],
					checkPass: [{
						validator: validatePass2,
						trigger:['blur', 'change']
					}],
					
				}
			}
		}
	}
</script>

<style scoped="scoped">
	.passw {
		margin-top: 30px
	}
</style>