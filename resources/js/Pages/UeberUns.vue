<script setup>
import { Head } from '@inertiajs/vue3';
import Layout from '@/Layouts/Layout.vue';
import Team from '@/Pages/Partials/Team.vue';
import PageHeading from './Partials/PageHeading.vue';

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
		<main class="grid justify-items-center">
			<PageHeading>
				<template v-slot:subtitle>&#xDC;ber uns</template>
				<template v-slot:title>Zusammen als Team.</template>
			</PageHeading>
			<p class="text-center font-light sm:text-lg sm:leading-[31px] max-w-[812px] mt-[88px] mx-auto animate-fade-up">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
				dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
				clita
				kasd
				gubergren, no sea takimata sanctus est Lorem ipsum dolor sit.</p>
			<div class="flex flex-wrap gap-x-4 gap-y-12 mt-[92px] justify-center animate-fade-up">
				<Team :teamMembers></Team>
			</div>
		</main>
	</Layout>
</template>