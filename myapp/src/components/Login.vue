<template>
	<div class="loginwrap">
		<div class="loginw">
			<el-row>
				<el-col :span="8" class="m_form" label-width="100px" >
				  	<el-form :model="ruleForm2" status-icon :rules="rules2" ref="ruleForm2" label-width="100px" class="demo-ruleForm">
						<el-form-item label="昵称" prop="name">
					    	<el-input v-model="ruleForm2.name"></el-input>
					  	</el-form-item>
					  	
					  	
						<el-form-item label="密码" prop="pass">
					    	<el-input type="password" v-model="ruleForm2.pass" autocomplete="off"></el-input>
					  	</el-form-item>
					  	
						   
					 	<el-form-item>
					    	<el-button type="primary" @click="submitForm('ruleForm2')">登录</el-button>
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
     
      
      return {
        ruleForm2: {
        	name:'',
          	pass: '',
        },
        
      };
    },
    methods: {
      submitForm(formName) {
        
      },
     
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