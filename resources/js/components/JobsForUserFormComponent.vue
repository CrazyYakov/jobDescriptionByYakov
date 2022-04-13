<template>
    <div v-if="jobs.length != 0" class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">Jobs</label>

        <div class="col-md-6">                                
                <select class="form-control" name="job_id">
                <option 
                    v-for="(job,index) in jobs"
                    :value="job.id"
                    :key="index"> 
                        {{ job.name }}
                </option>
                
                </select>                                        
        </div>                            
    </div>
    <div v-else class="alert alert-danger form-group" style="width: 700px; left: 20%;" role="alert">
        Для этого института нет должностей
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                jobs: []
            }
        },
        props: {
            institutData : { type:Object}
        },
        mounted() {
            this.updateJob
        },
        computed: {
            updateJob() {
                this.getInstitutJobs()
            }
        },
        methods: {
            getInstitutJobs() {
                axios
                .get('/api/getInstitutJobs?institutId=' + this.institutData.institut)
                .then((response) => {
                    this.jobs = response.data;
                });
            }
        }
    }
</script>
