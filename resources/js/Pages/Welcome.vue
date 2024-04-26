<script setup>
import { Head } from '@inertiajs/vue3';
import Layout from '@/Layouts/Layout.vue';
import Team from './Partials/Team.vue';

import { register as registerSwiper } from "swiper/element/bundle";
import PageHeading from './Partials/PageHeading.vue';
registerSwiper();

defineProps({
	teamMembers: {
		type: Array,
		required: true,
	}
});
</script>

<template>

	<Head title="Willkommen"></Head>
	<Layout>
		<section>
			<div class="text-center">
				<PageHeading>
					<template v-slot:subtitle>Schauen und Staunen.</template>
					<template v-slot:title>Willkommen auf dieser Seite.</template>
				</PageHeading>
			</div>
			<swiper-container thumbs-swiper=".swiper" loop="true" space-between="10"
				class="rounded-md overflow-hidden mt-10 animate-fade-up">
				<swiper-slide>
					<picture>
						<source srcset="../../images/home/swiper/mann-1.png?w=200;400;1900&format=webp&as=srcset" type="image/webp">
						<img src="../../images/home/swiper/mann-1.png?w=300&format=webp" width="300" height="90"
							class="w-full aspect-[3/1] object-cover" alt="Erstaunter Mann mit hochgezogenen Augenbrauen">
					</picture>
				</swiper-slide>
				<swiper-slide>
					<picture>
						<source srcset="../../images/home/swiper/mann-2.png?w=200;400;1900&format=webp&as=srcset">
						<img src="../../images/home/swiper/mann-2.png?w=300&format=webp" width="300" height="90"
							class="w-full aspect-[3/1] object-cover" alt="Mann in nachdenklicher Pose">
					</picture>
				</swiper-slide>
				<swiper-slide>
					<picture>
						<source srcset="../../images/home/swiper/mann-3.png?w=200;400;1900&format=webp&as=srcset">
						<img src="../../images/home/swiper/mann-3.png?w=300&format=webp" width="300" height="90"
							class="w-full aspect-[3/1] object-cover" alt="Mann schaut nach oben">
					</picture>
				</swiper-slide>
			</swiper-container>
			<swiper-container class="swiper [&::part(wrapper)]:justify-center mt-[37px] animate-fade-up" space-between="10"
				slides-per-view="3" free-mode="true" watch-slides-progress="true">
				<swiper-slide
					class="border-2 border-transparent [&.swiper-slide-thumb-active]:border-primary !w-max cursor-pointer rounded-md overflow-hidden"><img
						src="../../images/home/swiper/mann-1.png?w=50&h=50&format=webp"
						alt="Erstaunter Mann mit hochgezogenen Augenbrauen - Thumbnail"></swiper-slide>
				<swiper-slide
					class="border-2 border-transparent [&.swiper-slide-thumb-active]:border-primary !w-max cursor-pointer rounded-md overflow-hidden"><img
						src="../../images/home/swiper/mann-2.png?w=50&h=50&format=webp"
						alt="Mann in nachdenklicher Pose - Thumbnail"></swiper-slide>
				<swiper-slide
					class="border-2 border-transparent [&.swiper-slide-thumb-active]:border-primary !w-max cursor-pointer rounded-md overflow-hidden"><img
						src="../../images/home/swiper/mann-3.png?w=50&h=50&format=webp"
						alt="Mann schaut nach oben - Thumbnail"></swiper-slide>
			</swiper-container>
			<p class="max-w-[812px] text-center text-lg leading-[31px] mx-auto font-light mt-[60px] animate-fade-up">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
				ut labore et dolore magna aliquyam erat. sed diam voluptua. At vero eos et accusam et justo duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsurn dolor sit.
			</p>
		</section>

		<section class="min-h-dvh grid place-content-center fade-in-from-bottom ![--from:50dvh]">
			<h2 class="uppercase mt-6 text-[38px] leading-[45px] font-extralight text-center @[1107px]:text-left">Unser Team
			</h2>
			<div class="flex flex-wrap justify-center gap-x-4 gap-y-12 mt-[30px]">
				<Team :teamMembers></Team>
			</div>
			<a class="btn-secondary mt-[103px] w-max justify-self-center" href="/ueber-uns">
				&#xDC;ber uns
			</a>
		</section>
	</Layout>
</template>

<style>
.bg-dots-darker {
	background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}

@media (prefers-color-scheme: dark) {
	.dark\:bg-dots-lighter {
		background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
	}
}
</style>
