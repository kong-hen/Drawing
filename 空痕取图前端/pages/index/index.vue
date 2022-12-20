<template>
	<view>
	<view class="bg-video bg-mask flex align-center" style="height: 422upx;">
		<video src="https://yz.lol.qq.com/v1/assets/videos/aatrox-splashvideo.webm" autoplay loop muted :show-play-btn="false"
		 :controls="false" objectFit="cover"></video>
		<cover-view class="padding-xl text-white ">
			<cover-view class="padding-xs  text-xxl text-bold">
				空痕取图
			</cover-view>
			<cover-view class="padding-xs">
				我必须连同希望一起毁坏……
			</cover-view>
		</cover-view>
	</view>
	<!-- <view class="a"></view> -->
	<view class="b">
		<text class="b-c text-red cuIcon-search"></text>
		<input class="b-a" type="text" placeholder="请输入取图口令">
		<input class="b-b" type="submit" value="搜索">
	</view>
	<view class="c">
		<view class="c-a">近期精选</view>
		<text class="c-b text-red cuIcon-crown"></text>
	</view>
	</view>
</template>

<script>
	export default {
		data() {
			return {
				
			}
		},
		onLoad() {

		},
		methods: {

		}
	}
</script>

<style>
/* 	.a{
		height: 80rpx;
		background-image: linear-gradient(176deg,#000,#3b1f23,#46222250);
	} */
	.b{
		padding: 5%;
		border-top-left-radius: 25rpx;
		border-top-right-radius: 25rpx;
	}
	.b-a{
		background-color: #fff;
		height: 80rpx;
		text-align: center;
		border-radius: 40rpx;
		border: 2rpx solid black;
		margin-top: -80rpx;
	}
	.b-b{
		height: 80rpx;
		width: 150rpx;
		margin-top: -80rpx;
		background-color: aqua;
		border-radius: 40rpx;
		text-align: center;
		float: right;
		border: 2rpx solid black;
	}
	.b-c{
		height: 80rpx;
		line-height: 80rpx;
		margin-left: 20rpx;
		font-size: 40rpx;
	}
	.c{
		width: 100%;
		margin-top: 30%;
		font-size: 34rpx;
		text-align: center;
	}
	.c-a{
		font-weight: 700;
	}
	.c-b{
		font-size: 60rpx;
	}
</style>
