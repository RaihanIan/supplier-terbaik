
<script setup>
import { ref } from 'vue'
import DefaultCard from '@/Components/Forms/DefaultCard.vue'
import ButtonDefault from '@/Components/Buttons/ButtonDefault.vue'
const isOptionSelected = ref<boolean>(false)

const changeTextColor = () => {
  isOptionSelected.value = true
}
</script>

<template>
    <!-- ====== Form Elements Section Start -->
    <div class="grid grid-cols-1 gap-9">
      <div class="flex flex-col gap-9">
        <!-- Input Fields Start -->
        <DefaultCard cardTitle="Input Supplier">
        <div class="flex flex-col gap-5.5 p-6.5 grid grid-cols-3">
            <div>
              <label class="mb-3 block text-sm font-semibold text-black dark:text-white">
                Nama Supplier
              </label>
              <input
                type="text"
                placeholder="Nama Supplier"
                class="w-full rounded-lg border-[1.5px] font-semibold text-black border-stroke bg-transparent py-3 px-5 font-normal outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:text-white dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
              />
            </div>
            <div>
              <label class="mb-3 block text-sm font-semibold text-black dark:text-white">
                Alamat
              </label>
              <input
                type="text"
                placeholder="Alamat"
                class="w-full rounded-lg border-[1.5px] font-semibold text-black border-stroke bg-transparent py-3 px-5 font-normal outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:text-white dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
              />
            </div>
            <div>
              <label class="mb-3 block text-sm font-semibold text-black dark:text-white">
                E-Mail
              </label>
              <input
                type="text"
                placeholder="E-Mail"
                class="w-full rounded-lg border-[1.5px] font-semibold text-black border-stroke bg-transparent py-3 px-5 font-normal outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:text-white dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
              />
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                Catatan Tambahan
              </label>
              <input
                type="text"
                placeholder="Catatan Tambahan"
                class="w-full rounded-lg border-[1.5px] text-black border-stroke bg-transparent py-3 px-5 font-normal outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:text-white dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
              />
            </div>
            <div>
                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                Harga/Meter
              </label>
                <select
                    class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 px-5 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                    :class="{ 'text-black dark:text-white': isOptionSelected }"
                    @change="changeTextColor"
                >
                    <option value="" disabled selected>Pilih Harga/Meter</option>
                    <option value="Katun Combed">Katun Combed</option>
                    <option value="Katun Carded">Katun Carded</option>
                    <option value="Polyester">Polyester</option>
                    <option value="Viscose">Viscose</option>
                    <option value="CVC (Cotton Viscose)">CVC (Cotton Viscose)</option>
                </select>
            </div>
            <div>
                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                Jenis Kain
              </label>
                <select
                    class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 px-5 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                    :class="{ 'text-black dark:text-white': isOptionSelected }"
                    @change="changeTextColor"
                >
                    <option value="" disabled selected>Pilih Jenis Kain</option>
                    <option value="Katun Combed">Katun Combed</option>
                    <option value="Katun Carded">Katun Carded</option>
                    <option value="Polyester">Polyester</option>
                    <option value="Viscose">Viscose</option>
                    <option value="CVC (Cotton Viscose)">CVC (Cotton Viscose)</option>
                </select>
            </div>
            
            <div>
                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                Ketersediaan Barang
              </label>
                <select
                    class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 px-5 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                    :class="{ 'text-black dark:text-white': isOptionSelected }"
                    @change="changeTextColor"
                >
                    <option value="" disabled selected>Pilih Ketersediaan Barang</option>
                    <option value="Sangat Tersedia">Sangat Tersedia</option>
                    <option value="Tersedia">Tersedia</option>
                    <option value="Cukup Tersedia">Cukup Tersedia</option>
                    <option value="Terbatas">Terbatas</option>
                    <option value="Tidak Tersedia">Tidak Tersedia</option>
                </select>
            </div>
        </div>
            <div class="flex flex-col gap-5.5 p-6.5 grid grid-cols-2">
                <ButtonDefault route="/" label="Submit" customClasses="bg-meta-3 text-white rounded-full mr-3" />
                <ButtonDefault route="/" label="Clear"  customClasses="bg-slate-600 text-white rounded-full ml-3" />
            </div>
        </DefaultCard>
        <!-- Input Fields End -->
      </div>
    </div>
    <!-- ====== Form Elements Section End -->
</template>
