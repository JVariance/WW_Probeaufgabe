<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import PageHeading from './Partials/PageHeading.vue';
import Layout from '@/Layouts/Layout.vue';

defineProps({
	success: {
		type: Boolean,
	}
})

const form = useForm({
	vorname: '',
	nachname: '',
	email: '',
	telefon: '',
	einwilligung: false
});

const submit = () => {
	form.post(route('/kontakt/formular'), {
	});
};
</script>


<template>

	<Head title="Kontakt"></Head>
	<Layout>
		<main class="grid justify-items-center">
			<PageHeading>
				<template v-slot:subtitle>Kontakt</template>
				<template v-slot:title>Wir sind f&#xfc;r Sie da.</template>
			</PageHeading>
			<section class="mt-[119px] animate-fade-up">
				<div v-if="success" class="flex justify-center items-center">
					<p class="font-extralight text-[38px] leading-[45px] text-center">
						Vielen Dank für Ihre Nachricht.<br>
						Wir melden uns in Kürze bei Ihnen zurück!
					</p>
				</div>
				<template v-else>
					<h2 class="text-[38px] leading-[45px] font-extralight">Kontaktformular</h2>
					<form class="grid gap-4 sm:grid-cols-2 mt-[30px] max-w-[1088px]" @submit.prevent="submit" novalidate>
						<label class="flex flex-wrap gap-1">
							<input type="text" name="vorname" class="border-none rounded-sm bg-[#ececed] w-full"
								v-model="form.vorname" required>
							Vorname<span aria-hidden="true">*</span>
						</label>
						<label class="flex flex-wrap gap-1">
							<input type="text" name="nachname" class="border-none rounded-sm bg-[#ececed] w-full" required
								v-model="form.nachname">
							Nachname<span aria-hidden="true">*</span>
						</label>
						<label class="flex flex-wrap gap-1">
							<input type="email" name="email" class="border-none rounded-sm bg-[#ececed] w-full" required
								v-model="form.email">
							E-Mail<span aria-hidden="true">*</span>
						</label>
						<label class="flex flex-wrap gap-1">
							<input type="tel" name="telefon" class="border-none rounded-sm bg-[#ececed] w-full"
								v-model="form.telefon">
							Telefon
						</label>
						<div v-if="Object.keys(form.errors).length" class="text-red-500 mt-[45px]">
							<p>Fehler:</p>
							<ul>
								<li v-if="form.errors.vorname">{{ form.errors.vorname }}</li>
								<li v-if="form.errors.nachname">{{ form.errors.nachname }}</li>
								<li v-if="form.errors.email">{{ form.errors.email }}</li>
								<li v-if="form.errors.einwilligung">{{ form.errors.einwilligung }}</li>
							</ul>
						</div>
						<p class="col-span-full mt-6 text-2xl font-light">* Pflichtfelder</p>
						<label class="col-span-full mt-4">
							<input type="checkbox" name="einwilligung" id="" v-model="form.einwilligung" required>
							Hiermit erkl&#xe4;re ich, dass: meine Daten zur weiteren Verarbeitung gespeichert werden d&#xfc;rfen.
							Diese
							Einwilligung kann
							jederzeit widerrufen werden. Weitere Informationen unter Datenschutz.<span aria-hidden="true">*</span>
						</label>
						<button class="btn-secondary mt-14 w-fit">Absenden</button>
					</form>
				</template>
			</section>
		</main>
	</Layout>
</template>