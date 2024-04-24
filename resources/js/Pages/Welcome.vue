<script setup>
import { Head } from '@inertiajs/vue3';
import Layout from '@/Layouts/Layout.vue';

import { register as registerSwiper } from "swiper/element/bundle";
registerSwiper();

defineProps({
	canLogin: {
		type: Boolean,
	},
	canRegister: {
		type: Boolean,
	},
	laravelVersion: {
		type: String,
		required: true,
	},
	phpVersion: {
		type: String,
		required: true,
	},
});
</script>

<template>

	<Head title="Willkommen"></Head>
	<Layout>
		<section>
			<div class="text-center">
				<h1 class="text-[38px] leading-[45px] font-extralight">Schauen und Staunen.</h1>
				<h2
					class="uppercase font-extrabold text-xl sm:text-3xl md:text-4xl lg:text-[54px] lg:leading-[64px] mt-[13px] text-pink-600">
					Willkommen
					auf
					dieser Seite.</h2>
			</div>
			<swiper-container thumbs-swiper=".swiper" loop="true" space-between="10" class="rounded-md overflow-hidden mt-10">
				<swiper-slide>
					<picture>
						<source srcset="../../images/home/swiper/mann-1.png?w=200;400;1900&format=webp&as=srcset" type="image/webp">
						<img src="../../images/home/swiper/mann-1.png?w=300&format=webp" width="300" height="90"
							class="w-full aspect-[3/1] object-cover" alt="astonished man with raised eyebrows">
					</picture>
				</swiper-slide>
				<swiper-slide>
					<picture>
						<source srcset="../../images/home/swiper/mann-2.png?w=200;400;1900&format=webp&as=srcset">
						<img src="../../images/home/swiper/mann-2.png?w=300&format=webp" width="300" height="90"
							class="w-full aspect-[3/1] object-cover" alt="man in a thoughtful pose">
					</picture>
				</swiper-slide>
				<swiper-slide>
					<picture>
						<source srcset="../../images/home/swiper/mann-3.png?w=200;400;1900&format=webp&as=srcset">
						<img src="../../images/home/swiper/mann-3.png?w=300&format=webp" width="300" height="90"
							class="w-full aspect-[3/1] object-cover" alt="man looking upwards">
					</picture>
				</swiper-slide>
			</swiper-container>
			<swiper-container class="swiper [&::part(wrapper)]:justify-center mt-[37px]" space-between="10"
				slides-per-view="3" free-mode="true" watch-slides-progress="true">
				<swiper-slide
					class="border-2 border-transparent [&.swiper-slide-thumb-active]:border-pink-600 !w-max cursor-pointer rounded-md overflow-hidden"><img
						src="../../images/home/swiper/mann-1.png?w=50&h=50&format=webp"></swiper-slide>
				<swiper-slide
					class="border-2 border-transparent [&.swiper-slide-thumb-active]:border-pink-600 !w-max cursor-pointer rounded-md overflow-hidden"><img
						src="../../images/home/swiper/mann-2.png?w=50&h=50&format=webp"></swiper-slide>
				<swiper-slide
					class="border-2 border-transparent [&.swiper-slide-thumb-active]:border-pink-600 !w-max cursor-pointer rounded-md overflow-hidden"><img
						src="../../images/home/swiper/mann-3.png?w=50&h=50&format=webp"></swiper-slide>
			</swiper-container>
			<p class="max-w-[812px] text-center text-lg leading-[31px] mx-auto font-light mt-[60px]">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
				ut labore et dolore magna aliquyam erat. sed diam voluptua. At vero eos et accusam et justo duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsurn dolor sit.
			</p>
		</section>

		<section class="h-dvh grid place-content-center">
			<h2 class="uppercase mt-6">Unser Team</h2>
			<div class="flex flex-wrap gap-4 mt-[30px]">
				<section v-for="i in 2" class="grid justify-center">
					<img src="" alt="">
					<h3>Test Test</h3>
					<a href="mailto:test@test.de" class="font-light">test@test.de</a>
				</section>
			</div>
			<a class="bg-pink-100 uppercase py-2 px-16 text-pink-600 rounded-md mt-[103px] text-2xl font-extrabold"
				href="/ueber-uns">&#xDC;ber
				uns</a>
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
