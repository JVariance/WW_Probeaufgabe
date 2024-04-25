import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import containerQueries from "@tailwindcss/container-queries";
import tailwindCSSAnimated from "tailwindcss-animated";

/** @type {import('tailwindcss').Config} */
export default {
	content: [
		'./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
		'./storage/framework/views/*.php',
		'./resources/views/**/*.blade.php',
		'./resources/js/**/*.vue',
	],

	theme: {
		extend: {
			fontFamily: {
				sans: ['Figtree', ...defaultTheme.fontFamily.sans],
			},
			screens: {
				'sm-only': { max: '640px' }
			}
		},
	},

	plugins: [containerQueries, tailwindCSSAnimated, forms],
};
