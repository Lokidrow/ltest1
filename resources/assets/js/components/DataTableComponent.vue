<template>
    <table class="tablecontent table table-striped table-sm">
        <thead>
            <tr>
                <th>Название валюты</th>
                <th>Цена</th>
                <th>Количество</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="row in rows">
                <td v-html="row.name"></td>
                <td v-html="row.volume"></td>
                <td v-html="row.amount"></td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    import EventBus from './EventBusComponent.vue';

    export default {
        props: {
            dataAjaxUrl: {
                type: String,
                required: true
            },
        },
        data() {
            return {
                rows: []
            }
        },
        methods: {
            loadRows() {
                let url = this.dataAjaxUrl;
                this.rows = [];

                return axios.get(url)
                    .then(response => {
                        response.data.items.map(item => {
                            this.rows.push(item)
                        })
                    })
                    .catch(error => {
                        console.log(error)
                    });
            },
        },
        mounted() {
            const self = this;
            this.loadRows();
            setInterval(function() {
                self.loadRows();
            }, 15000);
            EventBus.$on('tableupdate', () => {
                this.loadRows();
            });
        }
    }
</script>
