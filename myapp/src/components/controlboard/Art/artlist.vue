<template>
	<div class="artlistwrap">
		<div class="artlistw">
			<el-row>
			  	<el-col :span="14" :offset="5">
			  		<div class="grid-content bg-purple-dark">
						<div class="artlist clearfloat" v-for="artcont in artdatas" @click="showdetail(artcont)">
							<div class="imgw" :style="{background:'url(http://7x2wdd.com2.z0.glb.qiniucdn.com/bbc3cd7de572147921d7880fa2436789?imageMogr2/thumbnail/740) center /200px 120px no-repeat'}"></div>
							<!--<div class="imgw" :style="{background:'url('+dd(artcont.content)+') center /200px 120px no-repeat'}"></div>-->
							<div class="contw">
								<h3 class="textoverhide">{{artcont.title}}</h3>
								<p class="artpart">{{artcont.content|contpure}}</p>
								<p class="contattr"><i class="pushtime">{{artcont.sendtime}}</i><i class="autor">发布者 : {{artcont.autor}}</i></p>
							</div>
						</div>
			  		</div>
			  	</el-col>
			</el-row>
			<transition name="leftright">
				<el-row class="popwrap whiteopacity overauto" v-show="showpop" @click.native.self="poptoggle">
	  			<el-col class="artdetailwrap" >
	  				<div class="grid-content bg-purple-dark">
	  					<div class="artshowtitw">
	  						<h3 class="textoverhide">{{artdetail.title}}</h3>
	  						<p class="artshowinfo">
	  							<span>{{artdetail.autor}}</span>
	  							<span>{{artdetail.sendtime}}</span>
	  						</p>
	  					</div>
	  					<div class="line"></div>
						<div v-html="artdetail.content">
							
						</div>
			  		</div>
	  			</el-col>
			</el-row>
			</transition>
		</div>
	</div>
</template>
<style scoped="scoped">
	.imgw,.contw{float:left}
	.imgw{width:200px;height:120px;}
	
	.contw{width:calc(100% - 230px);text-align: left;margin-left:30px;}
	.artlist{margin-top:33px;height:120px;position:relative;cursor: pointer;}
	.contw>h3{font-size:20px;}
	.artpart{margin-top: 5px; overflow: hidden;text-overflow: ellipsis;/*! autoprefixer: off */
	-webkit-box-orient: vertical;
	/* autoprefixer: on */;display: -webkit-box;-webkit-line-clamp: 3;}
	.contw>p{font-size:15px;}
	.contattr{position: absolute;bottom: 0;color:#999}
	.autor{margin-left:39px}
	.artdetailwrap{background:#fff;min-height: 100vh;box-shadow: 0 1px 1px 1px #d0d0d0;width:900px;margin:auto;position: absolute;left:0;right:0;padding:0px 30px;}
	.artshowinfo>span{color:#999;font-size:14px;margin-left:20px;}
	.artshowinfo>span:first-child{margin-left:0}
	.artshowtitw{text-align: center;}
	.artshowtitw>h3{margin: 20px 0;font-size: 23px;}
	/**/
	.popwrap{width:100vw;height:100vh;top:0;position:fixed;}
	.whiteopacity{background:rgba(255, 255, 255, 0.6);filter:Alpha(opacity=60);}
	.textoverhide{overflow:hidden;text-overflow:ellipsis;white-space:nowrap; }
	.line{margin:20px 0;width:100%;height:1px;background:#dee5e7;}
	.overauto{overflow:auto}
	.overhide{overflow:hidden}
	
</style>
<script>
	export default{
		data(){
			return {
				artdatas:null,
				artdetail:{},
				showpop:false
			}
		},
		mounted(){
			var self = this
			self.$http.get('/Index/getartcont')
				.then(function(data) {
					self.artdatas=data.data
			})
   			
		},
		computed: {
			isbodyscroll() {		
				return this.$store.state.custom.isscroll;
			}
		},
		watch: {
			isbodyscroll: function(a, b) {	
				if(b==true){
					document.querySelector("body").setAttribute("style","overflow: auto")
					document.querySelector("body").setAttribute("style","overflow: auto")
				}else{
					document.querySelector("body").setAttribute("style","overflow: hidden")
				}
				
			}
		},
		methods:{
			dd(ddc){
				var regex = /<img.*?src="(.*?)"/;
				if(regex.exec(ddc)){
					var src = regex.exec(ddc)[1];
					console.log(src)
				}
				
				return src
			},
			//
			showdetail(cont){
				let self=this;
				self.artdetail=cont;
				self.showpop=true;
				self.$store.commit('isscrollevent')
			},
			poptoggle(){
				let self=this;
				self.showpop=false;
				self.$store.commit('isscrollevent')
			}
		}
	}
</script>

