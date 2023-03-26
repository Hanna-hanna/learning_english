<template>
    <div class="flex flex-col justify-center items-center pt-10 my-5 text-center relative bg-white rounded-2xl">
        <h3 class="font-bold text-gray-700 text-3xl font-archivo">Add New Word or Phrase</h3>
        <Link :href="route('vocabulary.index')" class="rounded bg-gray-800 text-white font-archivo px-2">Vocabulary</Link>
        <div class="p-4 flex flex-row flex-wrap gap-6 justify-center items-center w-96">
            <form @submit.prevent="store()" class="flex flex-col w-full">     
                <div>
                    <Input type="text" v-model="form.eng_word" :label="'English Word'" required
                    :placeholder="'English Word'"
                    class="placeholder-gray-400 font-light text-sm bg-gray-100 text-black border border-gray-300 
                    rounded-lg mb-4" />
                </div>
                <div>
                    <span class="mr-4 text-gray-700 dark:text-gray-100 font-bold inline-block my-2">English Description:</span>
                    <textarea v-model="form.eng_description" :label="'English Description'" required
                        :placeholder="'English Description'" class="h-32 border-transparent bg-gray-100 text-gray-800 w-full outline-none rounded block text-sm"
                    ></textarea>
                </div>
                <div>
                    <Input type="text" v-model="form.ru_word" :label="'Russian Word'" required
                    :placeholder="'Russian Word'"
                    class="placeholder-gray-400 font-light text-sm bg-gray-100 text-black border border-gray-300 
                    rounded-lg mb-4" />
                </div> 
                <div>
                    <span class="mr-4 text-gray-700 dark:text-gray-100 font-bold inline-block my-2">Russian Description:</span>
                    <textarea v-model="form.ru_description" :label="'Russian Description'"
                        :placeholder="'Russian Description'" class="h-32 border-transparent bg-gray-100 text-gray-800 w-full outline-none rounded block text-sm"
                    ></textarea>
                </div>
                <Button class="w-full block text-xs md:text-sm text-black bg-yellow-400 hover:bg-yellow-500 text-center px-4 py-2 mt-4 rounded-md border border-gray-300 disabled:opacity-25 disabled:cursor-default">Add</Button>
            </form>
        </div>
    </div>    
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
    data() {
        return {
            form: this.$inertia.form({
                eng_word: null,
                ru_word: null,
                eng_description: null,
                ru_description: null,
            }),
        }
    },
    methods: {
        store() {           
            this.form.post(this.route('vocabulary.store'), {
                preserveScroll: true,
                onSuccess: () => {
                    this.$toast.success('The new word was added'); 
                    this.form.reset('eng_word', 'ru_word', 'eng_description', 'ru_description');                        
                },     
                onError: errors => {
                    this.$toast.error(errors.statuserror);
                },
            })
        }
    },
}

</script>
