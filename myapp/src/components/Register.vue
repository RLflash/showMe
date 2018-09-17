<template>
	<div class="loginwrap">
		<div class="loginw">
			<el-row>
				<el-col :span="8" class="m_form" label-width="100px" >
				  	<el-form :model="ruleForm2" status-icon :rules="rules2" ref="ruleForm2" label-width="100px" class="demo-ruleForm">
						<el-form-item label="昵称" prop="name">
					    	<el-input v-model="ruleForm2.name"></el-input>
					  	</el-form-item>
					  	
					  	<el-form-item label="邮箱" prop="email">
					    	<el-input type="email" v-model="ruleForm2.email"></el-input>
					  	</el-form-item>
						<el-form-item label="密码" prop="pass">
					    	<el-input type="password" v-model="ruleForm2.pass" autocomplete="off"></el-input>
					  	</el-form-item>
					  	<el-form-item label="确认密码" prop="checkPass">
					    	<el-input type="password" v-model="ruleForm2.checkPass" autocomplete="off"></el-input>
					  	</el-form-item>
					  	<el-form-item label="性别" prop="sex" class="sexw">
					    	<el-radio-group v-model="ruleForm2.sex">
						        <el-radio label="男"></el-radio>
						      	<el-radio label="女"></el-radio>
						    </el-radio-group>
						</el-form-item>
						   
					 	<el-form-item>
					    	<el-button type="primary" @click="submitForm('ruleForm2')">注册</el-button>
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
        if (value === '') {
          callback(new Error('请输入密码'));
        } else {
          if (this.ruleForm2.checkPass !== '') {
            this.$refs.ruleForm2.validateField('checkPass');
          }
          callback();
        }
      };
      var validatePass2 = (rule, value, callback) => {
        if (value === '') {
          callback(new Error('请再次输入密码'));
        } else if (value !== this.ruleForm2.pass) {
          callback(new Error('两次输入密码不一致!'));
        } else {
          callback();
        }
      };
      return {
        ruleForm2: {
        	name:'',
        	sex:'',
        	email: '',
          	pass: '',
          	checkPass: '',
        },
        rules2: {
        	name: [
	            { required: true, message: '请输入活动名称', trigger: 'blur' },
	            { min: 2, max: 10, message: '长度在 3 到 5 个字符', trigger: 'blur' }
          	],
          	sex: [
            	{ required: true, message: '请选择性别', trigger: 'change' }
            ],
        	email:[
	        	{ required: true, message: '请输入邮箱地址', trigger: 'blur' },
	          	{ type:'email', message: '请输入正确的邮箱地址', trigger: ['blur', 'change']}
          	],
	        pass: [
	        	{ required: true, message: '请输入密码', trigger: 'blur' },
	            { validator: validatePass, trigger: 'blur' }
	        ],
	        checkPass: [
	        	{ required: true, message: '请确认密码', trigger: 'blur' },
	            { validator: validatePass2, trigger: ['blur', 'change'] }
	        ],
         
        }
      };
    },
    methods: {
      submitForm(formName) {
        this.$refs[formName].validate((valid) => {
          if (valid) {
            alert('submit!');
          } else {
            console.log('error submit!!');
            return false;
          }
        });
      },
      resetForm(formName) {
        this.$refs[formName].resetFields();
      }
    }
  }
</script>

<style scoped="scoped">
	.m_form{
		position: absolute;
	    margin: auto;
	    left: 0;
	    right: 0;
	}
	.sexw{width:33%}
	.el-form-item__label{padding:0 26px 0 0}
</style>