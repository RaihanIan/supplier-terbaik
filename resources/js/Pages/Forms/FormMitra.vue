<script setup>
import { useForm, router } from '@inertiajs/vue3';
import DefaultCard from '@/Components/Forms/DefaultCard.vue';
import ButtonDefault from '@/Components/Buttons/ButtonDefault.vue';
import { ref } from 'vue';

defineProps({
    errors: {
        type: Object,
        default: () => ({}),
    },
    mitra: {
        type: Array,
        default: () => [],
    },
});

const form = useForm({
    name_mitra: null,
    logo_mitra: null,
});

const logoPreview = ref(null);

function handleLogoChange(event) {
    const file = event.target.files[0];
    form.logo_mitra = file;

    // Preview the selected image
    if (file) {
        const reader = new FileReader();
        reader.onload = () => {
            logoPreview.value = reader.result;
        };
        reader.readAsDataURL(file);
    } else {
        logoPreview.value = null;
    }
}

function submit() {
    form.post('/mitra', {
        forceFormData: true, // Ensures file uploads are sent as multipart/form-data
        onSuccess: () => {
            clearForm();
            router.get(route('mitra.index')); // Redirect after successful form submission
        },
    });
}

function clearForm() {
    form.reset();
    logoPreview.value = null;
}

function destroy(id) {
    router.delete(`/mitra/${id}`);
}
</script>

<template>
    <!-- Form -->
    <DefaultCard cardTitle="Input Mitra">
        <form @submit.prevent="submit">
            <div class="flex flex-col gap-5.5 p-6.5">
                <!-- Nama Mitra Field -->
            <div class="flex flex-col gap-2">
                <label class="block text-sm font-medium text-black dark:text-white">Nama Mitra</label>
                <input 
                    type="text" 
                    v-model="form.name_mitra" 
                    placeholder="Nama Mitra" 
                    class="w-full rounded-lg border border-stroke bg-transparent py-3 px-4 text-black placeholder-gray-400 outline-none focus:border-primary dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                />
                <div class="text-danger text-xs" v-if="errors.name_mitra">{{ errors.name_mitra }}</div>
            </div>

            <!-- Logo Mitra Field -->
            <div class="flex flex-col gap-2">
                <label class="block text-sm font-medium text-black dark:text-white">Logo Mitra</label>
                <input 
                    type="file" 
                    @change="handleLogoChange" 
                    class="w-full rounded-lg border border-stroke bg-transparent py-2 px-4 text-black placeholder-gray-400 outline-none focus:border-primary dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                />
                <div v-if="logoPreview" class="mt-4 flex justify-center">
                    <img :src="logoPreview" alt="Logo Preview" class="w-32 h-32 object-cover rounded-lg shadow-md"/>
                </div>
                <div class="text-danger text-xs" v-if="errors.logo_mitra">{{ errors.logo_mitra }}</div>
            </div>
                <div class="grid grid-cols-2">
                    <button type="submit" class="bg-meta-3 text-white rounded-full mr-3 px-8 py-4 text-lg">Submit</button>
                    <button type="button" @click="clearForm" class="bg-slate-600 text-white rounded-full ml-3 px-8 py-4 text-lg">Clear</button>
                </div>
            </div>
        </form>
    </DefaultCard>
</template>
