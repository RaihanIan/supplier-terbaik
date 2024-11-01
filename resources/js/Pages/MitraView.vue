<script setup>
import { ref } from 'vue';
import FormMitra from '@/Pages/Forms/FormMitra.vue';
import TableMitra from '@/Components/Tables/TableMitra.vue';
import DefaultLayout from '@/Layouts/DefaultLayout.vue';
import { usePage } from '@inertiajs/vue3';

const { props } = usePage();
const mitraData = ref(props.mitra || []);
</script>

<template>
  <DefaultLayout>
    <FormMitra :mitra="mitraData" />
    <TableMitra :mitra="mitraData" />
  </DefaultLayout>
</template>
