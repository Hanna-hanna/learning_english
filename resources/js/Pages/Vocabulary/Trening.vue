<template>
    <div class="flex flex-col justify-center items-center pt-10 my-5 text-center relative bg-white rounded-2xl w-full">
        <h3 class="font-bold text-gray-700 text-3xl font-archivo">Trening {{ vocabular.length }}</h3>
        <Link :href="route('vocabulary.create')" class="rounded bg-gray-800 text-white font-archivo px-2">Add Word</Link>
        <div class="p-3 w-11/12">
            <table class="w-full">
                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                    <tr>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">English Word</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Write Russian translation</div>
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
                    <TreningWord 
                        v-for="(word, index) in vocabular"
                        :word="word">
                    </TreningWord>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import Button from '@/Components/Button.vue';
import Input from '@/Components/Input.vue';
import TreningWord from '@/Components/TreningWord.vue';

export default {
    components: {
        Link,
        Button,
        Input,
        TreningWord
    },
    props: {
        vocabular: {
            type: Object
        }
    },
}
</script>
