<script setup>
import Icon_Cloud from '@/Components/Icons/Icon_Cloud.vue';
import Icon_CaretDown from '@/Components/Icons/Icon_CaretDown.vue';
import { Head } from '@inertiajs/vue3';

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
	<header class="flex justify-between gap-4 items-center">
		<a href="/">
			<Icon_Cloud class="text-pink-600 w-12 h-auto aspect-square"></Icon_Cloud>
		</a>
		<nav class="h-max">
			<ul class="flex gap-2 items-center">
				<li>
					<a href="/" class="uppercase font-bold text-pink-600 text-xl">Startseite</a>
				</li>
				<li class="group relative">
					<button class="flex items-center uppercase font-bold text-pink-600 text-xl">
						Über uns
						<Icon_CaretDown
							class="-mt-[2px] transition-transform duration-300 group-hover:-scale-100 w-6 h-auto aspect-square">
						</Icon_CaretDown>
					</button>
					<ul class="
							opacity-0 pointer-events-none group-hover:block absolute top-full group-hover:pointer-events-auto group-hover:opacity-100 transition-opacity duration-300 bg-pink-100
							rounded-md p-4 right-0
						">
						<li>
							<a href="kontakt" class="uppercase font-bold text-pink-600 text-xl">Kontakt</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>

	<section>
		<div class="text-center">
			<h1 class="text-2xl font-light">Schauen und Staunen.</h1>
			<h2 class="uppercase font-extrabold text-xl sm:text-3xl md:text-4xl lg:text-5xl mt-2 text-pink-600">Willkommen auf
				dieser Seite.</h2>
		</div>
		<swiper-container thumbs-swiper=".swiper" loop="true" space-between="10" class="rounded-md overflow-hidden mt-8">
			<swiper-slide><img src="../../images/home/swiper/lollipop.jpg?w=1900&format=webp"
					class="w-full aspect-[3/1] object-cover"></swiper-slide>
			<swiper-slide><img src="../../images/home/swiper/balloons.jpg?w=1900&format=webp"
					class="w-full aspect-[3/1] object-cover"></swiper-slide>
			<swiper-slide><img src="../../images/home/swiper/blooms.jpg?w=1900&format=webp"
					class="w-full aspect-[3/1] object-cover"></swiper-slide>
		</swiper-container>
		<!-- <div class="flex gap-4 items-center justify-center">
			<button v-for="i in 3" :key="i" @click="">{{ i }}</button>
		</div> -->
		<swiper-container class="swiper [&::part(wrapper)]:justify-center mt-4" space-between="10" slides-per-view="3"
			free-mode="true" watch-slides-progress="true">
			<swiper-slide
				class="border-2 border-transparent [&.swiper-slide-thumb-active]:border-pink-600 !w-max cursor-pointer rounded-md overflow-hidden"><img
					src="../../images/home/swiper/lollipop.jpg?w=50&h=50&format=webp"></swiper-slide>
			<swiper-slide
				class="border-2 border-transparent [&.swiper-slide-thumb-active]:border-pink-600 !w-max cursor-pointer rounded-md overflow-hidden"><img
					src="../../images/home/swiper/balloons.jpg?w=50&h=50&format=webp"></swiper-slide>
			<swiper-slide
				class="border-2 border-transparent [&.swiper-slide-thumb-active]:border-pink-600 !w-max cursor-pointer rounded-md overflow-hidden"><img
					src="../../images/home/swiper/blooms.jpg?w=50&h=50&format=webp"></swiper-slide>
		</swiper-container>
	</section>

	<section>

	</section>
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
