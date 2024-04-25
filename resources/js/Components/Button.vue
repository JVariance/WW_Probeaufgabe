<script setup>
import { computed } from 'vue';

const props = defineProps({
	variant: {
		type: String,
		required: false,
		default: 'primary',
	}
});

const classes = computed(() =>
	props.variant === "primary"
		? 'bg-pink-100'
		: props.variant === "secondary"
			? 'bg-neutral-100'
			: ''
);
</script>

<template>
	<button :class="`uppercase text-pink-600 font-extrabold text-2xl px-16 py-2 rounded-md ${classes}`">
		<slot></slot>
	</button>
</template>