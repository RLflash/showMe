<template>
	 <div class="edit">
    	
	    <div id="editor" style="width:1000px;height:120px;"></div>
	    {{value}}
	  </div>
</template>

<script>
	export default {
    name:'ue',
    props:{
        value:{
            type:String,
            default:""
        }
    },
    data() {
      return {
        editor: null,
      };
    },
    mounted() {
      // 实例化editor编辑器
      this.editor = window.UE.getEditor("editor");
      //设置编辑器默认内容
      this.editor.addListener('ready', () => {
        this.editor.setContent(this.value)
      })
     this.editor.addListener('contentChange', () => {
     	var a=this.editor.getContent()
        this.$emit('update:value', a)
      })

    },
    
     methods: {
     //获取编辑器中的内容
      getUEContent () {
        return this.editor.getContent()
      }
    },
    destroyed() {
      // 将editor进行销毁
      this.editor.destroy();
    }
}
</script>

<style>
</style>