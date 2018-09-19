<template>
	<div class="articmwrap">
		<div class="articmw">
			<el-row class="articmw">
				<el-col :span="22" :offset="1">
					<el-table :data="tableData" border style="width: 100%;">
						<el-table-column prop="title" align="center" show-overflow-tooltip="false" label="文章title" width="470">
						</el-table-column>
						<el-table-column prop="name" align="center" label="发布者" width="120">
						</el-table-column>
						<el-table-column prop="pushtime" align="center" label="发布时间" width="150">
						</el-table-column>
						<el-table-column prop="content" align="center" label="发布内容" show-overflow-tooltip="false" width="calc(100vw - 740px)">
						</el-table-column>
						
						<el-table-column fixed="right" align="center" label="操作" width="100">
							<template slot-scope="scope">
								<el-button @click="handleClick(scope.row)" type="text" size="small">查看</el-button>
								<el-button type="text" size="small">编辑</el-button>
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
	</div>
</template>

<script>
	export default{
		methods: {
	      	handleClick(row) {
	        	console.log(row);
	      	}	
    	},
		data(){
			return {
				tableData: [{
          title: '',
          name: '王小虎',
          pushtime: '2016-05-03',
          content: '普陀区',
         
       },
				]
			}
		}
	}
</script>

<style scoped="scoped">
	.articmw{margin-top:30px}
	.pagewrap{margin-top:20px}
</style>