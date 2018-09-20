<template>
	<div class="artlistwrap">
		<div class="artlistw">
			
			<el-row>
			  	<el-col :span="14" :offset="5">
			  		<div class="grid-content bg-purple-dark">
			  			<div class="artlist clearfloat" v-for="img in imgurl">
							<div class="imgw" :style="{background:'url('+img+') center /200px 120px no-repeat'}"></div>
							<div class="contw">
								<h3>安识科技是一支技术过硬和实战经验丰富的团队，实时跟踪国内外最新安全动向，专注于应用安全，主机安全，应急响应，风险评估，企业安全建设等多个领域。</h3>
								<p class="artpart">作者：小黑猪（朱文哲） 嵌入式/TP-Link/WR886_V7 在之前一篇文章中对TP-Link wr886nv7 
									固件进行初步分析后，下一步则是尝试寻找主板上的串口调试接口从而
									作者：小黑猪（朱文哲） 嵌入式/TP-Link/WR886_V7 在之前一篇文章中对TP-Link wr886nv7 
									固件进行初步分析后，下一步则是尝试寻找主板上的串口调试接口从而
									作者：小黑猪（朱文哲） 嵌入式/TP-Link/WR886_V7 在之前一篇文章中对TP-Link wr886nv7 
									固件进行初步分析后，下一步则是尝试寻找主板上的串口调试接口从而
								</p>
								<p class="contattr"><i class="pushtime">2018-08-19</i><i class="autor">发布者 : 天南第一剑修</i></p>
							</div>
							
						</div>
						
			  		</div>
			  	</el-col>
			</el-row>
		</div>
	</div>
</template>
<style scoped="scoped">
	.imgw,.contw{float:left}
	.imgw{width:200px;height:120px;}
	
	.contw{width:calc(100% - 230px);text-align: left;margin-left:30px;}
	.artlist{margin-top:20px;height:120px;position:relative}
	.contw>h3{font-size:20px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;}
	.artpart{margin-top: 5px; overflow: hidden;text-overflow: ellipsis;/*! autoprefixer: off */
-webkit-box-orient: vertical;
/* autoprefixer: on */;display: -webkit-box;-webkit-line-clamp: 3;}
	.contw>p{font-size:15px;}
	.contattr{position: absolute;bottom: 0;color:#999}
	.autor{margin-left:39px}
</style>
<script>
	export default{
		data(){
			return {
				imgurl:[
					'http://www.dreamer90.com/img/1.jpg',
					'http://www.dreamer90.com/img/2.jpg',
					'http://www.dreamer90.com/img/3.jpg',
				]
			}
		}
	}
</script>

