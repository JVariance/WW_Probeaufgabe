<script setup>
defineProps({
	href: {
		type: String,
		required: true,
	}
});
</script>


<template>
	<a :href
		:class="`${route().current(href) ? 'underline' : ''} uppercase font-extrabold text-pink-600 text-2xl`">
		<slot></slot>
	</a>
</template>