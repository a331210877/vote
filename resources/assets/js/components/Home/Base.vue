<template>
	<div style="margin-bottom:50px;">
		<section class="content-container" style="overflow:hidden;">
			<transition name="fade" mode="out-in">
				<router-view></router-view>
			</transition>
		</section>
		<div style="line-height:40px;"></div>
		<tabbar on-index-change="itemChange()" style="position: fixed;">
			<tabbar-item :selected="selIndex" link="/index">
				<img slot="icon" src="/images/home.png">
				<img slot="icon-active" src="/images/home_fill.png">
				<span slot="label">首页</span>
			</tabbar-item>
			<tabbar-item :selected="selMe" link="/me">
				<img slot="icon" src="/images/me.png">
				<img slot="icon-active" src="/images/me_fill.png">
				<span slot="label">我</span>
			</tabbar-item>
		</tabbar>
	</div>
</template>

<script>
	import { Tabbar, TabbarItem, Group, Cell } from 'vux'

	export default {
		data() {
			return {
				selIndex:false,
				selMe:false
			}
		},
		methods: {
			itemChange : function(){
				console.log("切换了");
			}
		},
		components: {
			Tabbar,
			TabbarItem,
			Group,
			Cell
		},
		mounted() {
			if(this.$route.path.indexOf("/index")!=-1){
				this.selIndex=true;
			}else if(this.$route.path.indexOf("/me")!=-1){
				this.selMe=true;
			}
		},
	}
</script>

<style>
	.weui-tabbar__item.weui-bar__item_on .weui-tabbar__icon, .weui-tabbar__item.weui-bar__item_on .weui-tabbar__icon > i, .weui-tabbar__item.weui-bar__item_on .weui-tabbar__label{
		color:#F70968 !important; 
	}
	a:-webkit-any-link {
    	text-decoration: none;
	}
</style>