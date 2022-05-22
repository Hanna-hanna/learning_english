<template>
    <div class="flex flex-col justify-center items-center pt-10 my-5 text-center relative bg-white rounded-2xl w-full">
        <h3 class="font-bold text-gray-700 text-3xl font-archivo">Vocabulary {{ vocabular.length }}</h3>
        <div class="flex gap-2">
            <Link :href="route('vocabulary.create')" class="rounded bg-gray-800 text-white font-archivo px-2">Add Word</Link>
            <Link :href="route('vocabulary.trening')" class="rounded bg-gray-800 text-white font-archivo px-2">Trening</Link>
        </div>
        <div class="p-3 w-11/12">
            <table class="w-full">
                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                    <tr>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">English Word</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Russian Word</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">English Description</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Russian Description</div>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-sm divide-y divide-gray-100">
                    <tr v-for="(word, index) in vocabular" class="border-b border-gray-200">
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="font-bold text-gray-800">{{ word.eng_word }}</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">{{ word.ru_word }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left font-medium text-gray-700">{{ word.eng_description }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left font-medium text-gray-700">{{ word.ru_description }}</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Head,
        Link
    },
    props: {
        vocabular: {
            type: Object
        }
    }
}
</script>
