<script setup>
import { useForm } from "@inertiajs/vue3";
import { Head, Link } from "@inertiajs/vue3";
import { useI18n } from "vue-i18n"; // Import vue-i18n hook

// Import your components
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";

// Get the i18n instance to use translation
const { t } = useI18n();

const form = useForm({
    firstname: "",
    lastname: "",
    email: "",
    phone: "",
    password: "",
    password_confirmation: "",
});

const submit = () => {
    form.post(route("register"), {
        onFinish: () => form.reset("auth.password", "password_confirmation"),
    });
};
</script>

<template>
    <GuestLayout>
        <Head :title="t('auth.register')" />

        <form @submit.prevent="submit">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <InputLabel
                        :for="'firstname'"
                        :value="t('auth.firstname')"
                    />

                    <TextInput
                        id="firstname"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.firstname"
                        required
                        autofocus
                        autocomplete="firstname"
                    />

                    <InputError class="mt-2" :message="form.errors.firstname" />
                </div>

                <div>
                    <InputLabel :for="'lastname'" :value="t('auth.lastname')" />

                    <TextInput
                        id="lastname"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.lastname"
                        required
                        autocomplete="lastname"
                    />

                    <InputError class="mt-2" :message="form.errors.lastname" />
                </div>
            </div>
            <div class="mt-4">
                <InputLabel :for="'email'" :value="t('auth.email')" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel :for="'phone'" :value="t('auth.phone')" />

                <div class="flex items-center space-x-3 mt-1">
                    <select
                        class="rounded-md border-gray-300 shadow-sm text-gray-500"
                        disabled
                    >
                        <option value="+253" selected>+253</option>
                    </select>

                    <TextInput
                        id="phone"
                        type="number"
                        class="mt-1 block w-full"
                        v-model="form.phone"
                        required
                        autocomplete="phone"
                    />
                </div>

                <InputError class="mt-2" :message="form.errors.phone" />
            </div>

            <div class="mt-4">
                <InputLabel :for="'password'" :value="t('auth.password')" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel
                    :for="'password_confirmation'"
                    :value="t('auth.confirm_password')"
                />

                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <InputError
                    class="mt-2"
                    :message="form.errors.password_confirmation"
                />
            </div>

            <div class="mt-4 flex items-center justify-end">
                <Link
                    :href="route('login')"
                    class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                >
                    {{ t("auth.already_registered") }}
                </Link>

                <PrimaryButton
                    class="ms-4"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    {{ t("auth.register_button") }}
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>
