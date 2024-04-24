<script setup>
	import Icon_Cloud from '@/Components/Icons/Icon_Cloud.vue';
	import Icon_CaretDown from '@/Components/Icons/Icon_CaretDown.vue';
</script>

<template>
	<header class="flex justify-between gap-4 items-center h-32">
		<a href="/">
			<Icon_Cloud class="text-pink-600 w-12 h-auto aspect-square"></Icon_Cloud>
		</a>
		<nav class="h-max">
			<ul class="flex gap-10 items-center">
				<li>
					<a href="/" class="uppercase font-extrabold text-pink-600 text-2xl">Startseite</a>
				</li>
				<li class="group relative">
					<button class="flex items-center uppercase font-extrabold text-pink-600 text-2xl">
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
							<a href="kontakt" class="uppercase font-extrabold text-pink-600 text-2xl">Kontakt</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>
</template>