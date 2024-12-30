<script>
import { Inertia } from "@inertiajs/inertia";
import { Head } from "@inertiajs/vue3";
import { computed, reactive, ref } from "vue";

export default {
    name: "MultiStepForm",
    setup() {
        const currentStep = ref(0);
        const formData = reactive({
            name: "",
            last_name: "",
            dob: "",
            birth_place: "",
            gender: "",
            email: "",
            phone: "",
            postal_address: "",
            street: "",
            city: "",
            postal_code: "",
        });
        const errors = reactive({});

        const steps = [
            {
                title: "Informations personnelles",
                fields: [
                    { name: "name", label: "Nom", type: "text", placeholder: "Entrez votre nom" },
                    { name: "last_name", label: "Prénom", type: "text", placeholder: "Entrez votre prénom" },
                    { name: "dob", label: "Date de naissance", type: "date", placeholder: "", value: "2000-01-01" },
                    { name: "birth_place", label: "Lieu de naissance", type: "text", placeholder: "", },
                    { name: "gender", label: "Sexe", type: "select", options: ["Male", "Female"] },
                    { name: "email", label: "Email", type: "email", placeholder: "Entrez votre email" },

                ],
            },
            {
                title: "Informations de contact",
                fields: [
                    { name: "phone", label: "Téléphone", type: "text", placeholder: "Entrez votre téléphone" },
                    { name: "postal_address", label: "Adresse postale", type: "text", placeholder: "Adresse postal" },
                    { name: "street", label: "Rue", type: "text", placeholder: "Rue" },
                    { name: "city", label: "Ville", type: "text", placeholder: "Ville" },
                    { name: "postal_code", label: "Code postal", type: "text", placeholder: "Code postal" },
                ],
            },
        ];

        const validateStep = () => {
            const stepFields = steps[currentStep.value].fields;
            let isValid = true;

            stepFields.forEach((field) => {
                if (!formData[field.name] || formData[field.name].trim().length === 0) {
                    errors[field.name] = `Le champ ${field.label} est requis.`;
                    isValid = false;
                } else {
                    errors[field.name] = "";
                }
            });

            return isValid;
        };

        const nextStep = () => {
            if (validateStep()) {
                if (currentStep.value < steps.length - 1) currentStep.value++;
            }
        };

        const prevStep = () => {
            if (currentStep.value > 0) currentStep.value--;
        };

        const goToStep = (index) => {
            if (index <= currentStep.value || validateStep()) {
                currentStep.value = index;
            }
        };

        const handleSubmit = () => {
            if (validateStep()) {
                Inertia.post("/form", formData, {
                    onError: (serverErrors) => {
                        Object.assign(errors, serverErrors);
                    },
                });
            }
        };

        const progress = computed(() => ((currentStep.value + 1) / steps.length) * 100);

        return { currentStep, steps, formData, errors, nextStep, prevStep, goToStep, handleSubmit, progress };
    },
};
</script>

<template>

    <Head title="Formulaire" />
    <div class="container">
        <!-- Indicateurs d'étape
        <ul class="nav nav-pills mb-4">
            <li v-for="(step, index) in steps" :key="index" class="nav-item">
                <button class="nav-link" :class="{ active: currentStep === index }" @click="goToStep(index)">
                    {{ step.title }}
                </button>
            </li>
        </ul> -->

        <!-- Barre de progression -->
        <div class="progress mb-4">
            <div class="progress-bar progress-bar-striped bg-success" :style="{ width: progress + '%' }"
                role="progressbar" :aria-valuenow="progress" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <!-- Formulaire -->
        <form @submit.prevent="handleSubmit">
            <div v-for="(step, index) in steps" :key="index" v-show="currentStep === index">
                <h2 class="text-center mb-4">{{ step.title }}</h2>
                <div v-for="(field, fieldIndex) in step.fields" :key="fieldIndex" class="mb-3">
                    <label :for="field.name" class="form-label">{{ field.label }}</label>
                    <input v-if="field.type !== 'select'" :type="field.type" v-model="formData[field.name]"
                        :id="field.name" class="form-control" :placeholder="field.placeholder" />
                    <select v-if="field.type === 'select'" v-model="formData[field.name]" :id="field.name"
                        class="form-select">
                        <option v-for="option in field.options" :key="option" :value="option">
                            {{ option }}
                        </option>
                    </select>
                    <div v-if="errors[field.name]" class="text-danger">
                        {{ errors[field.name] }}
                    </div>
                </div>
            </div>

            <!-- Boutons de navigation -->
            <div class="form-footer">
                <button type="button" id="prevBtn" class="btn btn-outline-primary" @click="prevStep"
                    v-if="currentStep > 0">
                    Précédent
                </button>
                <button type="button" id="nextBtn" class="btn btn-primary" @click="nextStep"
                    v-if="currentStep < steps.length - 1">
                    Suivant
                </button>
                <button type="submit" class="btn btn-success" v-if="currentStep === steps.length - 1">
                    Soumettre
                </button>
            </div>
        </form>
    </div>
</template>



<style scoped>
body {
    font-family: 'Open Sans', sans-serif;
    background-color: #f8f9fa;
}

.container {
    max-width: 550px;
    background-color: #ffffff;
    margin: 40px auto;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0px 6px 18px rgba(0, 0, 0, 0.1);
}

.step {
    display: none;
}

.active {
    display: block;
}

input {
    padding: 15px 20px;
    width: 100%;
    font-size: 1em;
    border: 1px solid #e3e3e3;
    border-radius: 5px;
}

input:focus {
    border: 1px solid #009688;
    outline: 0;
}

p {
    padding: 15px 20px;
    width: 100%;
    font-size: 20px;
}

p:focus {
    border: 1px solid #009688;
    outline: 0;
}

.invalid {
    border: 1px solid #ffaba5;
}

#nextBtn,
#prevBtn {
    background-color: #009688;
    color: #ffffff;
    border: none;
    padding: 13px 30px;
    font-size: 1em;
    cursor: pointer;
    border-radius: 5px;
    flex: 1;
    margin-top: 5px;
    transition: background-color 0.3s ease;
}

#prevBtn {
    background-color: #ffffff;
    color: #009688;
    border: 1px solid #009688;
}

#prevBtn:hover,
#nextBtn:hover {
    background-color: #00796b;
    color: #ffffff;
}

.progress {
    margin-bottom: 20px;
}

.form-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.step p {
    font-size: 1.1em;
    font-weight: 600;
}

.form-footer button {
    margin: 0 40px;

}

#submitBtn {
    background-color: #009688;
    color: #ffffff;
    border: none;
    padding: 13px 30px;
    font-size: 1em;
    cursor: pointer;
    border-radius: 5px;
    flex: 1;
    margin-top: 5px;
    transition: background-color 0.3s ease;
}

#submitBtn:hover {
    background-color: #00796b;
    color: #ffffff;
}

#submitBtn:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}

.card {
    border: none;
    border-radius: 15px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

.card-title {
    font-size: 1.5em;
    font-weight: bold;
}

.list-group-item {
    font-size: 1em;
    padding: 10px 15px;
    border: none;
    border-bottom: 1px solid #e9ecef;
}

.list-group-item:last-child {
    border-bottom: none;
}

.btn {
    padding: 10px 20px;
    font-size: 1em;
    border-radius: 5px;
}

.form-label {
    font-weight: bold;
    font-size: 1rem;
    color: #333;
}

.form-control,
.form-select {
    border-radius: 10px;
    padding: 15px;
    border: 1px solid #ced4da;
    font-size: 1rem;
    transition: all 0.3s ease-in-out;
}

.form-control:focus,
.form-select:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    outline: none;
}

button {
    border-radius: 5px;
}

input::placeholder {
    font-style: italic;
    color: #aaa;
}

p {
    margin-bottom: 20px;
    font-size: 1.2rem;
}

#dob {
    border: 1px solid #007bff;
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
}

#dob:focus {
    outline: none;
    border-color: #0056b3;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}
</style>