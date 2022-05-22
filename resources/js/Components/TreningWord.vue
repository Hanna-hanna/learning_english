<template>
    <tr class="border-b border-gray-200">
        <td class="p-2 whitespace-nowrap">
            <div class="flex items-center">
                <div class="font-bold text-gray-800">{{ word.eng_word }}</div>
            </div>
        </td>
        <td class="p-2 whitespace-nowrap">
            <form @submit.prevent="checkWord()" class="flex flex-col w-full">
                <div>
                    <Input type="text" v-model="form.ru_translation" required
                    :placeholder="'Write Russian translation'"
                    class="placeholder-gray-400 font-light text-sm bg-gray-100 text-black border border-gray-300 
                    rounded-lg" />
                </div>
                <Button class="w-full block text-xs md:text-sm text-black bg-yellow-400 hover:bg-yellow-500 text-center px-4 py-2 mt-4 rounded-md border border-gray-300 disabled:opacity-25 disabled:cursor-default">Check</Button>
            </form>
        </td>
        <td class="p-2 whitespace-nowrap">
            <div class="text-left" v-if="check_word">{{ word.ru_word }}</div>
        </td>
        <td class="p-2 whitespace-nowrap">
            <div class="text-left font-medium text-gray-700" v-if="check_word">{{ word.eng_description }}</div>
        </td>
        <td class="p-2 whitespace-nowrap">
            <div class="text-left font-medium text-gray-700" v-if="check_word">{{ word.ru_description }}</div>
        </td>
    </tr>
</template>


<script>
import { Link } from '@inertiajs/inertia-vue3';
import Button from '@/Components/Button.vue';
import Input from '@/Components/Input.vue';

export default {
    components: {
        Link,
        Button,
        Input,
    },
    props: {
        word: {
            type: Object
        },
    },
    data() {
        return {
            form: this.$inertia.form({
                ru_translation: null,
            }),
            check_word: false
        }
    },
    methods: {
        checkWord() {           
            this.form.post(this.route('vocabulary.check-word', this.word.id), {
                preserveScroll: true,
                onSuccess: () => {
                    this.check_word = true;
                    this.$toast.success('Good Job');
             
                },     
                onError: () => {
                    this.check_word = false;
                    this.$toast.error('Try again:)');
                },
            })
        }
    },
}
</script>