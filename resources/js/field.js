Nova.booting((Vue, router) => {
    Vue.component('index-nova-number-field', require('./components/IndexField'));
    Vue.component('detail-nova-number-field', require('./components/DetailField'));
    Vue.component('form-nova-number-field', require('./components/FormField'));
})
