<template>
    <panel-item :field="field">
        <template slot="value">
            <p v-if="field.value" class="text-90">{{ formattedValue }}</p>
        </template>
    </panel-item>
</template>

<script>
import numeral from 'numeral'

export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
    computed: {
        formattedValue() {
            return numeral(this.field.value).format(this.field.format)
        }
    }
}
</script>
