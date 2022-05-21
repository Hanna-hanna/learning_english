<template>
    <Head title="Dashboard" />

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
       

        <div v-for="(word, index) in vocabular" class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        Eng: {{ word.eng_word }}<br/>
                        Ru: {{ word.ru_word }}<br/>
                        Eng_desc: {{ word.eng_description }}
                    </div>
                </div>
            </div>
        </div>
 
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
