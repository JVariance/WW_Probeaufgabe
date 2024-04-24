<script setup>
import { Head } from '@inertiajs/vue3';
import Layout from '@/Layouts/Layout.vue';
import Team from '@/Pages/Partials/Team.vue';

defineProps({
	teamMembers: {
		type: Array,
		required: true,
	}
});
</script>

<template>

	<Head title="Über Uns"></Head>
	<Layout>
		<h1 class="font-extralight text-[38px] leading-[45px] mx-auto w-max">&#xDC;ber uns</h1>
		<h2 class="uppercase text-pink-600 text-[54px] leading-[64px] mt-[13px] mx-auto w-max">Zusammen als Team.</h2>
		<p class="text-center font-light text-lg leading-[31px] max-w-[812px] mt-[88px] mx-auto">Lorem ipsum dolor sit amet,
			consetetur
			sadipscing elitr,
			sed diam nonumy eirmod tempor invidunt ut labore et
			dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita
			kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit.</p>
		<div class="flex flex-wrap gap-x-4 gap-y-12 mt-[92px]">
			<Team :teamMembers></Team>
		</div>
	</Layout>
</template>