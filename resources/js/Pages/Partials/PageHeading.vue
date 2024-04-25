<script setup>
</script>

<template>
	<h2 class="font-extralight text-2xl sm:text-[38px] sm:leading-[45px] mx-auto w-max">
		<slot name="subtitle"></slot>
	</h2>
	<h1 class="font-extrabold uppercase text-pink-600 text-3xl sm:text-[54px] sm:leading-[64px] mt-[13px] text-center">
		<slot name="title"></slot>
	</h1>
</template>