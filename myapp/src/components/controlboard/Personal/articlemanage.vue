<template>
	<div class="articmwrap">
		<div class="articmw">
			<el-row class="articmw">
				<el-col :span="22" :offset="1">
					<el-table :data="tableData" border style="width: 100%;">
						<el-table-column prop="title" align="center" show-overflow-tooltip="false" label="文章title" width="350">
						</el-table-column>
						<el-table-column prop="autor" align="center" label="发布者" width="150">
						</el-table-column>
						<el-table-column prop="sendtime" align="center" label="发布时间" width="160">
						</el-table-column>
						<el-table-column  align="center" label="发布内容" show-overflow-tooltip="false" width="calc(100vw - 740px)">
							<template slot-scope="scope">
								<div>{{scope.row.content|contpure}}</div>
							</template>
						</el-table-column>
						
						<el-table-column fixed="right" align="center" label="操作" width="100">
							<template slot-scope="scope">
								<el-button type="text" size="small" @click="editart(scope.row)">编辑</el-button>
								<el-button type="text" size="small" @click="deletart(scope.row)">删除</el-button>
							</template>
						</el-table-column>
					</el-table>
					<div class="pagewrap">
							<!--<el-pagination
						      @size-change="handleSizeChange"
						      @current-change="handleCurrentChange"
						      :current-page="currentPage4"
						      :page-sizes="[100, 200, 300, 400]"
						      :page-size="100"
						      layout="total, sizes, prev, pager, next, jumper"
						      :total="400">
						    </el-pagination>-->
					</div>
				</el-col>
			</el-row>
		</div>
		<transition name="leftright">
			<el-row class="popwrap whiteopacity overauto" v-show="showpop"  @click.native.self="poptoggle">
	  			<el-col class="artdetailwrap" :span="15">
	  				<el-form ref="form" label-width="80px" size="mini">
						<el-form-item label="文章标题" class="arttit">
							<el-input v-model="arttit"></el-input>
						</el-form-item>
						<edit :value.sync="cont" class="editer"></edit>
						
						<el-form-item class="clearfloat" size="large">
							<el-button type="primary" @click="save" class="savebtn">立即发布</el-button>
						</el-form-item>
					</el-form>
	  			</el-col>
			</el-row>
		</transition>
	</div>
</template>

<script>
	import edit from '@/components/controlboard/Customcom/edit'
	export default{
		components: {
			edit
		},
		data(){
			return {
				tableData: [],
				showpop:false,
				cont:"1",
			}
		},
		mounted(){
			//获取自己发布文章
      		var self = this
			self.$http.get('/Personalart/getownart').then(function({data:data}) {
				console.log(data)
				self.tableData=data
			})
		},
		methods: {
			poptoggle(){
				let self=this;
				self.showpop=false;
				self.$store.commit('isscrollevent')
			},
			//编辑文章
			editart(art){
				let self=this;
				self.cont='男';
				
				self.showpop=true;
				
				self.$store.commit('isscrollevent')
			},
			//删除文章
	      	deletart(art){	
	      		var self = this			
		        self.$confirm('此操作将永久删除该文章, 是否继续?', '提示', {
		          confirmButtonText: '确定',
		          cancelButtonText: '取消',
		          lockScroll:false,
		          type: 'warning'
		        }).then(() => {
		        	self.$http.post('/Personalart/deleart',self.$qs.stringify({'artid':art.id})).then(function({data:data}) {
						if(data.status==1){
							let index=self.tableData.indexOf(art);
	        				self.tableData.splice(index,1)	
				        	self.$message({
					            type: 'success',
					            message: '删除成功!',
				          	});
			          	}else{
			          		 self.$message.error('删除失败！');  
			          	}
			        })
		        }).catch(() => {
			        self.$message({
			            type: 'info',
			            message: '已取消删除'
			        });          
				})	
			}
    	}
		
	}
</script>

<style scoped="scoped">
	.articmw{margin-top:30px}
	.pagewrap{margin-top:20px}
	
	.artdetailwrap{background:#fff;min-height: 100vh;box-shadow: 0 1px 1px 1px #d0d0d0;margin:auto;position: absolute;left:0;right:0;padding:0px 30px;}
	.artshowinfo>span{color:#999;font-size:14px;margin-left:20px;}
	.artshowinfo>span:first-child{margin-left:0}
	.artshowtitw{text-align: center;}
	.artshowtitw>h3{margin: 20px 0;font-size: 23px;}
	
	.arttit{margin-top:20px}
	
</style>