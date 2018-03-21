<template>
    <a href="javascript:;" class="btn btn-success" @click="updateTable()">Обновить</a>
</template>

<script>
    import EventBus from './EventBusComponent.vue';

    export default {
        props: {
        },
        data() {
            return {
            }
        },
        methods: {
            updateTable: function() {
                EventBus.$emit('tableupdate', []);
            },
        },
        mounted() {
        }
    }
</script>
