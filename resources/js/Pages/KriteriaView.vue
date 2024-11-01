<script setup >
import DefaultLayout from '@/Layouts/DefaultLayout.vue'
</script>

<template>
  <DefaultLayout>

  <div class="bg-white py-9 sm:py-9">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
<h1 class="mb-6 text-xl sm:text-4xl font-semibold text-black dark:text-white">Kriteria</h1>
<div class="grid grid-cols-3"> 
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-xl">Harga</h2>
        <p class="mt-2 text-lg leading-8 text-gray-600"> Kurang dari 25.000	= 5<br>
25.000-35.000	= 4<br>
35.000-40.000	= 3<br>
40.000-50.000	= 2<br>
Lebih dari 50.000	= 1
</p>
      </div>
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-xl">Jenis Kain</h2>
        <p class="mt-2 text-lg leading-8 text-gray-600"> Katun Combed = 5 <br>
Katun Carded = 4<br>
Polyester = 3 <br>
Viscose = 2<br>
CVC (Cotton Viscose) = 1
</p>
      </div>
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-xl">Ketersediaan</h2>
        <p class="mt-2 text-lg leading-8 text-gray-600"> Sangat Tersedia = 5 <br>
Tersedia = 4 <br>
Cukup Tersedia = 3 <br>
Terbatas = 2 <br>
Tidak Tersedia = 1 <br>

</p>
      </div>
      </div>
    </div>
  </div>
</DefaultLayout>
</template>

