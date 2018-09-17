<template>
	<div class="homewrap">
		<div class="homew">
		  	<waterfall :line-gap="200" :watch="items">
			    <waterfall-slot v-for="(item, index) in items" :width="200" :height="100" :order="index" :key="item.id">
    				<img :src="item.src" alt="" />
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
//					'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1537205443067&di=69b2e2756f47d81c9493b87970f1131a&imgtype=0&src=http%3A%2F%2Fscimg.jb51.net%2Fallimg%2F170211%2F106-1F21114011EN.jpg',
					{"src":"../../../assets/img/2.jpg"},
					{"src":"www.dreamer90.com/img/2.jpg"},
				]
			}
		}
	}
</script>

<style>
</style>