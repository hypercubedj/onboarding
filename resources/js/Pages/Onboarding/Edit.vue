<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { ref } from "vue";

const steper = ref(0);

const nextStep = () => {
    steper.value++;
};

const prevStep = () => {
    steper.value--;
};
</script>

<template>

    <Head title="Onboarding" />

    <div class="fixed bottom-0 left-0 right-0 top-0">
        <div class="max-w-2xl mx-auto flex h-full w-full flex-col rounded-lg bg-white p-6 shadow-lg" v-if="steper == 0">
            <!-- Image SVG -->
            <div class="mb-4 flex flex-grow items-center justify-center">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="max-w-xs w-full text-indigo-500"
                    viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="currentcolor"
                        stroke="none">
                        <path d="M2440 5054 c-188 -35 -299 -76 -427 -159 -205 -134 -353 -338 -421
-583 -24 -86 -27 -114 -27 -252 0 -138 3 -166 28 -254 72 -259 239 -478 466
-612 319 -187 734 -176 1047 28 204 134 358 348 422 587 35 132 37 353 5 481
-94 370 -373 650 -738 741 -77 20 -297 34 -355 23z m285 -125 c335 -59 614
-325 696 -666 30 -121 29 -284 0 -408 -20 -82 -89 -243 -125 -289 -14 -17 -16
-16 -48 20 -100 115 -307 235 -473 275 -125 31 -305 31 -429 0 -169 -41 -357
-149 -466 -267 -50 -54 -47 -56 -115 81 -197 398 -56 896 320 1130 199 124
407 164 640 124z" />
                        <path d="M2491 4750 c-184 -38 -304 -210 -279 -402 14 -112 93 -217 198 -267
47 -22 69 -26 150 -26 81 0 103 4 150 26 281 132 262 551 -29 654 -54 19 -138
25 -190 15z m164 -129 c46 -21 99 -70 121 -113 23 -44 29 -121 13 -175 -17
-62 -96 -143 -155 -161 -94 -28 -169 -8 -239 63 -54 53 -75 103 -75 171 2 167
185 284 335 215z" />
                        <path d="M636 4174 c-146 -35 -299 -155 -368 -289 -72 -138 -68 -66 -68 -1332
0 -987 2 -1147 15 -1198 49 -193 199 -351 395 -418 64 -21 72 -22 788 -25 599
-2 723 -5 719 -16 -3 -8 -49 -170 -102 -362 -53 -191 -98 -352 -101 -356 -3
-4 -54 -8 -114 -8 -85 0 -112 -3 -124 -16 -21 -21 -20 -57 2 -77 17 -16 97
-17 944 -17 883 0 926 1 941 18 20 22 22 65 4 80 -7 6 -64 13 -126 14 l-114 3
-98 355 c-54 195 -99 360 -99 367 0 9 153 13 658 15 726 4 689 1 827 70 83 43
202 164 243 248 65 134 62 70 62 1323 0 1267 4 1194 -68 1332 -48 92 -145 189
-238 237 -121 64 -155 68 -556 68 l-358 0 -17 -26 c-15 -24 -15 -29 -2 -53
l15 -26 369 -5 c353 -5 373 -6 430 -28 158 -59 269 -187 304 -350 8 -37 11
-332 11 -992 l0 -940 -2250 0 -2250 0 0 943 c0 1005 1 1010 49 1106 53 104
152 191 266 233 57 22 77 23 430 28 l369 5 15 26 c13 24 13 29 -2 53 l-17 26
-363 -1 c-276 0 -376 -4 -421 -15z m4174 -2618 c0 -51 -5 -117 -10 -147 -33
-174 -181 -329 -351 -368 -59 -14 -3717 -14 -3776 -1 -128 30 -251 127 -308
244 -42 86 -55 149 -55 272 l0 94 2250 0 2250 0 0 -94z m-1704 -1008 c55 -200
99 -366 97 -370 -2 -5 -265 -8 -584 -8 -444 0 -579 3 -579 12 0 10 183 681
195 716 3 9 90 12 387 12 l383 0 101 -362z" />
                        <path d="M3140 1393 c-41 -15 -51 -62 -20 -93 18 -18 33 -20 158 -20 122 0
141 2 155 18 24 26 21 68 -5 86 -18 13 -50 16 -148 15 -69 0 -132 -3 -140 -6z" />
                        <path d="M3630 1393 c-41 -15 -51 -62 -20 -93 18 -18 33 -20 153 -20 150 0
177 9 177 60 0 50 -28 60 -170 59 -69 0 -132 -3 -140 -6z" />
                        <path d="M4100 1380 c-27 -27 -26 -65 2 -84 18 -13 51 -16 153 -16 148 0 175
9 175 60 0 51 -27 60 -177 60 -120 0 -135 -2 -153 -20z" />
                        <path d="M1232 2930 c-49 -30 -62 -72 -62 -197 0 -122 13 -157 72 -193 32 -20
53 -20 1318 -20 1265 0 1286 0 1318 20 59 36 72 71 72 193 0 125 -13 167 -62
197 -33 20 -47 20 -1328 20 -1281 0 -1295 0 -1328 -20z m2603 -113 c3 -12 5
-56 3 -97 l-3 -75 -1275 0 -1275 0 -3 75 c-2 41 0 85 3 97 l5 23 1270 0 1270
0 5 -23z" />
                        <path d="M1241 2312 c-57 -30 -71 -70 -71 -195 0 -125 13 -165 65 -197 32 -20
46 -20 1325 -20 1279 0 1293 0 1325 20 52 32 65 72 65 197 0 125 -14 165 -71
195 -32 17 -93 18 -1319 18 -1226 0 -1287 -1 -1319 -18z m2587 -104 c16 -16
16 -170 0 -186 -17 -17 -2519 -17 -2536 0 -7 7 -12 43 -12 93 0 50 5 86 12 93
17 17 2519 17 2536 0z" />
                    </g>
                </svg>
            </div>
            <!-- Texte -->
            <h1 class="mb-6 text-center text-3xl font-bold text-indigo-500 uppercase">
                commencer votre enroulement
            </h1>
            <p class="mb-6 text-justify text-gray-600">
                Assurez-vous d'avoir vos papiers d'identité avant de commencer
                votre procédure d'enroulement. Cliquez ensuite sur le bouton
                ci-dessous pour commencer.
            </p>

            <!-- Footer -->
            <div class="flex justify-between border-t border-gray-300 pt-4">
                <div class="">
                    <Link :href="route('dashboard')"
                        class="flex items-center w-full rounded bg-gray-500 px-4 py-2 text-center font-semibold text-white transition duration-200 hover:bg-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentcolor" class="w-4 mr-4" viewBox="0 0 448 512">
                        <path
                            d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                    </svg>
                    Revenir
                    </Link>
                </div>
                <div class="">
                    <Link :href="route('form.show')"
                        class="flex items-center w-full rounded bg-indigo-500 px-4 py-2 text-center font-semibold text-white transition duration-200 hover:bg-indigo-600">
                        Commencer
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentcolor"
                            class="w-4 ml-4">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </Link>
                </div>
            </div>
        </div>
        <div class="max-w-2xl mx-auto flex h-full w-full flex-col rounded-lg bg-white p-6 shadow-lg" v-if="steper == 1">
            <!-- Main -->
            <div class="mb-4 flex flex-grow items-center justify-center"></div>

            <!-- Footer -->
            <div class="flex justify-between border-t border-gray-300 pt-4">
                <div class="">
                    <button @click="prevStep()"
                        class="flex items-center w-full rounded bg-gray-500 px-4 py-2 text-center font-semibold text-white transition duration-200 hover:bg-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentcolor" class="w-4 mr-4"
                            viewBox="0 0 448 512">
                            <path
                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                        </svg>
                        Revenir
                    </button>
                </div>
                <div class="">
                    <button @click="nextStep()"
                        class="flex items-center w-full rounded bg-indigo-500 px-4 py-2 text-center font-semibold text-white transition duration-200 hover:bg-indigo-600">
                        Continuer
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentcolor"
                            class="w-4 ml-4">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="max-w-2xl mx-auto flex h-full w-full flex-col rounded-lg bg-white p-6 shadow-lg" v-if="steper == 2">
            <!-- Main -->
            <div class="mb-4 flex flex-grow items-center justify-center"></div>

            <!-- Footer -->
            <div class="flex justify-between border-t border-gray-300 pt-4">
                <div class="">
                    <button @click="prevStep()"
                        class="flex items-center w-full rounded bg-gray-500 px-4 py-2 text-center font-semibold text-white transition duration-200 hover:bg-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentcolor" class="w-4 mr-4"
                            viewBox="0 0 448 512">
                            <path
                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                        </svg>
                        Revenir
                    </button>
                </div>
                <div class="">
                    <button @click="nextStep()"
                        class="flex items-center w-full rounded bg-indigo-500 px-4 py-2 text-center font-semibold text-white transition duration-200 hover:bg-indigo-600">
                        Continuer
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentcolor"
                            class="w-4 ml-4">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="max-w-2xl mx-auto flex h-full w-full flex-col rounded-lg bg-white p-6 shadow-lg" v-if="steper == 3">
            <!-- Main -->
            <div class="mb-4 flex flex-grow items-center justify-center"></div>

            <!-- Footer -->
            <div class="flex justify-between border-t border-gray-300 pt-4">
                <div class="">
                    <button @click="prevStep()"
                        class="flex items-center w-full rounded bg-gray-500 px-4 py-2 text-center font-semibold text-white transition duration-200 hover:bg-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentcolor" class="w-4 mr-4"
                            viewBox="0 0 448 512">
                            <path
                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                        </svg>
                        Revenir
                    </button>
                </div>
                <div class="">
                    <Link :href="route('dashboard')"
                        class="flex items-center w-full rounded bg-indigo-500 px-4 py-2 text-center font-semibold text-white transition duration-200 hover:bg-indigo-600">
                    Soumettre
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentcolor" class="w-4 ml-4">
                        <path
                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                    </svg>
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>
