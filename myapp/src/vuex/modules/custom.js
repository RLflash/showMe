const custom = {
	state: {
		//展示文件详情时，禁止body滑动
		isscroll:false,
	},
	mutations: {
		isscrollevent(state) {
    		state.isscroll = !state.isscroll
  		},
	}
}
export default custom
