<script setup lang="ts">
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';
import ReserveForm from './Partials/ReserveForm.vue';

type reservableSlotItem = {
    reservableDateTime: string
}

defineProps<{
    reservableSlotList: reservableSlotItem[];
}>();

</script>

<template>
    <Head title="Reserve" />

    <GuestLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">予約枠一覧</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div v-for="item in reservableSlotList">
                        {{ item.reservableDateTime }}
                    </div>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <ReserveForm class="max-w-xl" />
            </div>
        </div>
    </GuestLayout>
</template>
