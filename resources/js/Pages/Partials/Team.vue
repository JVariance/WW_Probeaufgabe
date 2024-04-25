<script setup>

defineProps({
	teamMembers: {
		type: Array,
		required: true,
	},
});

// function getTeamMemberImageSrcset(imageUrl) {
// 	return new URL(`../../images/team/${imageUrl.replace('.png', '')}.png?w=536&format=webp`, import.meta.url).href;
// }

function getTeamMemberImageSrc(imageUrl) {
	return new URL(`../../../images/team/${imageUrl.replace('.png', '')}.png?w=536&format=webp`, import.meta.url).href;
}
</script>

<template>
	<section v-for="member in teamMembers" class="grid justify-center">
		<!-- <picture>
						<source :srcset="getTeamMemberImageSrcset(member.image_url)" type="image/webp"> -->
		<img :src="getTeamMemberImageSrc(member.image_url)" width="536" height="316"
			:alt="`picture of ${member.first_name} ${member.last_name}`" class="rounded-md w-full">
		<!-- </picture> -->
		<h3 class="text-center mt-6 uppercase text-pink-600 font-extrabold text-2xl">{{ member?.first_name ?? '' }} {{
			member?.last_name ?? '' }}</h3>
		<a :href="`mailto: ${member?.email ?? ''}`" class="font-light text-center sm:text-2xl">{{ member?.email ?? '-'
			}}</a>
	</section>
</template>