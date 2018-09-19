<template>
	<div class="homewrap">
		<div class="homew">
		  	<waterfall :line-gap="200" :auto-resize="true" :watch="items">
			    <waterfall-slot v-for="(item, index) in items" :width="300" :height="300" :order="index" :key="item.id">
    				<img :src="item" alt="" />
  				</waterfall-slot>
			</waterfall>
		</div>
	</div>
</template>

<script>
	import Waterfall from 'vue-waterfall/lib/waterfall'
	import WaterfallSlot from 'vue-waterfall/lib/waterfall-slot'
	export default{
		name:'home',
		components:{
			Waterfall,
    		WaterfallSlot
		},
		data(){
			return {
				items:[
//				'http://www.dreamer90.com/img/1.jpg',
//				'http://www.dreamer90.com/img/2.jpg',
//				'http://www.dreamer90.com/img/3.jpg',
//				'http://www.dreamer90.com/img/4.jpg',
//				'http://www.dreamer90.com/img/5.jpg',
//				'http://www.dreamer90.com/img/6.jpg',
//				'http://www.dreamer90.com/img/7.jpg',
//				'http://www.dreamer90.com/img/20.jpg',
//				'http://www.dreamer90.com/img/9.jpg',
//				'http://www.dreamer90.com/img/10.jpg',
//				'http://www.dreamer90.com/img/11.jpg',
//				'http://www.dreamer90.com/img/12.jpg',
//				'http://www.dreamer90.com/img/13.jpg',
//				'http://www.dreamer90.com/img/14.jpg',
//				'http://www.dreamer90.com/img/15.jpg',
//				'http://www.dreamer90.com/img/16.jpg',
//				'http://www.dreamer90.com/img/17.jpg',
//				'http://www.dreamer90.com/img/18.jpg',
//				'http://www.dreamer90.com/img/19.jpg',
//				'http://www.dreamer90.com/img/20.jpg',
				]
			}
		}
	}
</script>

<style scoped="scoped">
	img{width:100%;height:100%}
</style>