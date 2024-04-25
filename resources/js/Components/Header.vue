<script setup>
import Icon_Cloud from '@/Components/Icons/Icon_Cloud.vue';
import Icon_CaretDown from '@/Components/Icons/Icon_CaretDown.vue';
import Icon_Hamburger from '@/Components/Icons/Icon_Hamburger.vue';
import Icon_Close from '@/Components/Icons/Icon_Close.vue';
import NavLink from './NavLink.vue';
</script>

<template>
	<header class="flex justify-between gap-4 items-center h-32 sticky top-0 z-50 bg-white">
		<a href="/">
			<Icon_Cloud class="text-pink-600 size-12"></Icon_Cloud>
		</a>
		<nav id="nav"
			class="sm-only:!mx-4 sm-only:rounded-t-md sm-only:py-16 sm:h-max sm-only:bg-pink-100 sm:block sm:static sm:m-0 sm:overflow-visible"
			popover>
			<button popovertarget="nav" popovertargetaction="hide" aria-label="Menü schließen"
				class="sm:hidden absolute top-4 right-4 bg-transparent text-pink-600">
				<Icon_Close class="size-6"></Icon_Close>
			</button>
			<ul class="grid sm-only:justify-items-center sm:flex gap-10 items-center">
				<li>
					<NavLink href="/">
						Startseite
					</NavLink>
				</li>
				<li class="group relative has-dropdown">
					<NavLink href="/ueber-uns" class="flex items-center">
						&#xdc;ber uns
						<Icon_CaretDown
							class="sm-only:hidden -mt-[2px] transition-transform duration-300 sm:group-hover:-scale-100 w-6 h-auto aspect-square">
						</Icon_CaretDown>
					</NavLink>
					<ul class="
						sm:opacity-0 sm:pointer-events-none sm:group-hover:block sm:group-focus-within:block sm:absolute top-full sm:group-hover:pointer-events-auto sm:group-focus-within:pointer-events-auto sm:group-hover:opacity-100 sm:group-focus-within:opacity-100 transition-opacity duration-300 sm:bg-pink-100
						rounded-md sm:p-4 right-0
					">
						<li>
							<NavLink href="/kontakt">
								Kontakt
							</NavLink>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
		<button popovertarget="nav" type="button"
			class="sm:hidden cursor-pointer bg-opacity-100 w-16 h-16 flex justify-center items-center rounded-md fixed bottom-4 left-4 z-[60] text-white bg-pink-600 shadow-lg shadow-pink-900"
			aria-label="Menü">
			<Icon_Hamburger class="w-10 h-auto aspect-square"></Icon_Hamburger>
		</button>
	</header>
</template>

<style>
@screen sm-only {
	@supports selector(:popover-open) {
		#nav {
			margin-bottom: 0;
			/* margin-inline: 0; */
			width: auto;
			overflow: hidden;

			transition:
				opacity 0.3s,
				display 0.3s allow-discrete,
				translate 0.3s allow-discrete;
			opacity: 0;
			translate: 0 100%;

			&:popover-open {
				@starting-style {
					opacity: 0;
					translate: 0 100%;
				}

				opacity: 1;
				translate: 0;
			}

			/* :where(a, button) {
				pointer-events: all !important;
			} */


			.has-dropdown>ul>li {
				@apply mt-10;
			}

			&::backdrop {
				@apply bg-black/25 backdrop-blur-md;
			}
		}
	}

	@supports not selector(:popover-open) {
		button[popovertarget="nav"] {
			display: none;
		}

		#nav {
			@apply block h-max px-4 py-2 mb-1 overflow-auto;
			width: calc(100cqw - 2rem);

			&>ul {
				@apply flex;
			}

			button[popovertargetaction="hide"] {
				@apply hidden;
			}

			li {
				@apply whitespace-nowrap;
			}

			.has-dropdown {
				@apply flex;
			}

			.has-dropdown>ul {
				@apply flex-row;


				&>li {
					@apply flex-nowrap ml-10;
				}
			}
		}
	}
}
</style>