<template>
    <div>
        <label v-if="label" class="mr-4 text-gray-700 font-bold inline-block mb-2" :for="id">{{ label }}:</label>
        <input :id="id" v-bind="$attrs" 
        class="h-10 border-transparent bg-white py-2 px-4 w-full outline-none focus:ring-2 focus:ring-indigo-400 rounded" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="input" :class="{ error: error }">
    </div>
</template>

<script>
import uniqueId from 'lodash.uniqueid';

export default {
    inheritAttrs: false,
    props: {
        id: {
            type: String,
                default() {
                    return `input-${uniqueId()}`
            },
        },
        modelValue: String,
        label: String,
        error: String,
    },
    emits: ['update:modelValue'],

    methods: {
        focus() {
            this.$refs.input.focus()
        }
    }
}
</script>