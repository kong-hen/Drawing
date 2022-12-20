<template>
<!-- 	<view v-for="(item,index) in Tab" :key="index" data-id="{{item.id}}" @tap="tabbar">
		<view>壁纸</view>
	</view> -->
	<button @tap="tabber">点击</button>
	<view class="b" v-for="(item,index) in tplist" :key="index">
		<image class="b-a" mode="widthFix" src="{{item.zyurl}}"></image>
	</view>
</template>

<script>
	export default {
		data() {
			return {
				TabCur: 0,
				Tab: [
					{
						id: 0,
						text: "壁纸",
					},
					{
						id: 1,
						text: "头像",
					},
					{
						id: 2,
						text: "表情包",
					}
				],
				zylx: "",
				tplist: [],
				
			}
		},
		methods: {
			tabbar(){
				var zyid = this.currentTarget.dataset.id;
				console.log(zyid);
				this.dataset({
					zylx: zyid
				})
			},
			getphoto(){
				var zylx = this.data.zylx;
				uni.request({
					url: 'https://wq.khkj.xyz/tpapi/qtapi.php?fl=wallpaper',
					method: 'POST',
					data: {},
					success: res => {
						console.log(res.data);
						this.dataset({
							tplist: res.data
						})
					},
					fail: () => {},
					complete: () => {}
				});
			}
		}
	}
</script>

<style>
	.b{
		margin-top: 20rpx;
		background-color: white;
	}
	.b-a{
		width: 30%;
		margin-left: 2.5%;
		margin-top: 20rpx;
	}
</style>
