<template>
    <Head title="Vocabulary/Create" />

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Vocabulary/Create Word
        </h2>

        <!-- <Input v-model=""/> -->
 
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Head,
    },
    props: {
        vocabular: {
            type: Object
        }
    }
}
</script>