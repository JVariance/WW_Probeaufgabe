<script setup>
defineProps({
	subtitleClasses: { type: String, default: '' },
	titleClasses: { type: String, default: '' },
});
</script>

<template>
	<h2
		:class="`font-extralight text-2xl sm:text-[38px] sm:leading-[45px] mx-auto w-max animate-fade-right animation-duration-1000 ${subtitleClasses}`">
		<slot name="subtitle"></slot>
	</h2>
	<h1
		:class="`font-extrabold uppercase text-primary text-3xl sm:text-[54px] sm:leading-[64px] mt-[13px] text-center animate-fade-left animation-duration-1000 ${titleClasses}`">
		<slot name="title"></slot>
	</h1>
</template>