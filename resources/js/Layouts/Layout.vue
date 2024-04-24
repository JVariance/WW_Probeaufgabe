<script setup>
import Header from '@/Components/Header.vue';
</script>

<template>
	<div class="max-w-[1640px] mx-auto p-[10px]">
		<Header></Header>
		<slot></slot>
	</div>
</template>