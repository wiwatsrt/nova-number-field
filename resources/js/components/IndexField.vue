<template>
    <span>{{ formattedValue }}</span>
</template>

<script>
import numeral from 'numeral'

export default {
    props: ['resourceName', 'field'],
    computed: {
        formattedValue() {
            return numeral(this.field.value).format(this.field.format)
        }
    }
}
</script>
