<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

        <div class="pt-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-xl">
                    <div
                        class="flex flex-col items-center justify-center min-h-screen"
                    >
                        <h1
                            class="text-4xl font-bold text-center text-gray-800 mb-4"
                        >
                            Bienvenue {{ $page.props.auth.user.firstname }} !
                        </h1>
                        <p class="text-lg text-center text-gray-600 mb-8">
                            Commencez votre enroulement en quelques étapes
                            simples.
                        </p>

                        <div
                            class="w-full max-w-lg bg-white shadow-md rounded-lg p-6"
                        >
                            <h2
                                class="text-2xl font-semibold text-gray-800 mb-4"
                            >
                                La procédure d'enroulement
                            </h2>
                            <ol class="list-decimal list-inside space-y-2">
                                <li class="flex items-center">
                                    <span class="text-green-500 font-bold mr-2"
                                        ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4"
                                            fill="currentcolor"
                                            viewBox="0 0 512 512"
                                        >
                                            <path
                                                d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"
                                            />
                                        </svg>
                                    </span>
                                    <span class="text-gray-700"
                                        >Créer un compte</span
                                    >
                                </li>
                                <li class="flex items-center">
                                    <span class="text-indigo-500 font-bold mr-2"
                                        ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4"
                                            fill="currentcolor"
                                            viewBox="0 0 512 512"
                                        >
                                            <path
                                                d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"
                                            />
                                        </svg>
                                    </span>
                                    <span class="text-gray-700"
                                        >Remplir vos informations d'identification</span
                                    >
                                </li>
                                <li class="flex items-center">
                                    <span class="text-indigo-500 font-bold mr-2"
                                        ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4"
                                            fill="currentcolor"
                                            viewBox="0 0 512 512"
                                        >
                                            <path
                                                d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"
                                            />
                                        </svg>
                                    </span>
                                    <span class="text-gray-700"
                                        >Soumettre vos papiers
                                        d'identification</span
                                    >
                                </li>
                                <li class="flex items-center">
                                    <span class="text-indigo-500 font-bold mr-2"
                                        ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4"
                                            fill="currentcolor"
                                            viewBox="0 0 512 512"
                                        >
                                            <path
                                                d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"
                                            />
                                        </svg>
                                    </span>
                                    <span class="text-gray-700"
                                        >Télécharger votre permis</span
                                    >
                                </li>
                            </ol>

                            <div class="flex justify-end">
                                <div class="">
                                    <Link
                                        :href="route('onboarding')"
                                        class="flex items-center justify-between mt-6 w-full bg-indigo-600 text-white font-semibold px-6 py-2 rounded hover:bg-indigo-500 transition duration-200"
                                    >
                                        <span>Continuer</span>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 ml-6"
                                            fill="currentcolor"
                                            viewBox="0 0 448 512"
                                        >
                                            <path
                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
                                            />
                                        </svg>
                                    </Link>
                                </div>
                            </div>
                        </div>

                        <footer class="mt-24 text-gray-500 text-sm">
                            &copy; 2024 Enroulement. Tous droits réservés.
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
