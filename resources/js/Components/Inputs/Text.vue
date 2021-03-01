<template>
  <div>
    <label v-if="label" :for="id" class="block text-gray-300 text-lg font-medium mb-1">{{ label }} <span v-if="required" class="text-red-600">*</span></label>

    <input
        :id="id"
        ref="input"
        v-bind="$attrs"
        class="bg-gray-800 border border-gray-600 focus:border-gray-500 w-full p-3 text-white  text-lg focus:ring-2 focus:ring-gray-500"
        :class="{ error: error }"
        :type="type"
        :value="value"
        @input="$emit('input', $event.target.value)"
    />
    <div v-if="error" class="text-red-400">{{ error }}</div>
  </div>
</template>

<script>
export default {
  inheritAttrs: true,
  props: {
    id: {
      type: String,
      default() {
        return `text-input-${Math.random()}`
      },
    },
    type: {
      type: String,
      default: 'text',
    },
    value: String,
    label: String,
    error: String,
  },
  methods: {
    focus() {
      this.$refs.input.focus()
    },
    select() {
      this.$refs.input.select()
    },
    setSelectionRange(start, end) {
      this.$refs.input.setSelectionRange(start, end)
    },
  },
}
</script>
