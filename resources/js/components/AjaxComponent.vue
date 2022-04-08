<template>
    <div class="container">
        <div class="row">
            <button @click="update" class="btn btn-default" v-if="!is_refresh"> Обновить - {{id}}...</button>
            <span class="badge badge-pimary mb-1" v-if="is_refresh">Обновление...</span>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Наименование</th>
                            <th>Описание</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="url in urldata">
                            <td>{{url.title}}</td>
                            <td>{{url.description}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                urldata: [],
                is_refresh: false,
                id: 0
            }
        },
        mounted() {
            this.update()
        },
        methods: {
            update: function () {
                this.is_refresh = true;

                axios.get('/test/get-json').then((response) => {
                    this.urldata = response.data;
                    this.is_refresh = false;
                    this.id++;
                });
            }
        }
    }
</script>
