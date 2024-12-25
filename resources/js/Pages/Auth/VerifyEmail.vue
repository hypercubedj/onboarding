<script setup>
import { computed } from "vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const props = defineProps({
    status: {
        type: String,
    },
});

const form = useForm({});

const submit = () => {
    form.post(route("verification.send"));
};

const verificationLinkSent = computed(
    () => props.status === "verification-link-sent"
);
</script>

<template>
    <GuestLayout>
        <!-- Title in Head -->
        <Head :title="$t('auth.email_verification.title')" />

        <!-- Thank you message -->
        <div class="mb-4 text-sm text-gray-600">
            {{ $t("auth.email_verification.thank_you") }}
        </div>

        <!-- Verification Link Sent Message -->
        <div
            class="mb-4 text-sm font-medium text-green-600"
            v-if="verificationLinkSent"
        >
            {{ $t("auth.email_verification.verification_sent") }}
        </div>

        <!-- Resend Email Form -->
        <form @submit.prevent="submit">
            <div class="mt-4 flex items-center justify-between">
                <PrimaryButton
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    {{ $t("auth.email_verification.resend_button") }}
                </PrimaryButton>

                <!-- Logout Button -->
                <Link
                    :href="route('logout')"
                    method="post"
                    as="button"
                    class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    >{{ $t("auth.email_verification.logout_button") }}</Link
                >
            </div>
        </form>
    </GuestLayout>
</template>
