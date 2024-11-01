
<script setup>
import DefaultCard from '@/Components/Forms/DefaultCard.vue'
import ButtonDefault from '@/Components/Buttons/ButtonDefault.vue'

</script>

<template>
    <!-- ====== Form Elements Section Start -->
    <div class="grid grid-cols-1 gap-9">
      <div class="flex flex-col gap-9">
        <!-- Input Fields Start -->
        <DefaultCard cardTitle="Input Mitra">
          <div class="flex flex-col gap-5.5 p-6.5">
            <div>
              <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                Harga/Meter
              </label>
              <input
                type="text"
                placeholder="Nama Mitra"
                class="w-full rounded-lg border-[1.5px] text-black border-stroke bg-transparent py-3 px-5 font-normal outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:text-white dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
              />
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                Jenis Kain
              </label>
              <input
                type="text"
                placeholder="Jenis Kain"
                class="w-full rounded-lg border-[1.5px] text-black border-stroke bg-transparent py-3 px-5 font-normal outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:text-white dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
              />
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                Ketersediaan Barang
              </label>
              <input
                type="text"
                placeholder="Ketersediaan Barang"
                class="w-full rounded-lg border-[1.5px] text-black border-stroke bg-transparent py-3 px-5 font-normal outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:text-white dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
              />
            </div>
            <div class="grid grid-cols-2">
                <ButtonDefault route="/" label="Submit" customClasses="bg-meta-3 text-white rounded-full mr-3" />
                <ButtonDefault route="/" label="Clear"  customClasses="bg-slate-600 text-white rounded-full ml-3" />
            </div>
        </div>
        </DefaultCard>
        <!-- Input Fields End -->
      </div>
    </div>
    <!-- ====== Form Elements Section End -->
</template>
