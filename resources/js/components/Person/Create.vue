<template>
    <div class="w-25">
        <div class="mb-3">
            <input type="text"  v-model="name" placeholder="Name" class="form-control">
        </div>
        <div class="mb-3">
            <input type="number"  v-model="age" placeholder="age"  class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" v-model="job" placeholder="Job"  class="form-control">
        </div>
        <div class="mb-3">
            <input @click.prevent="store" type="submit" class="btn btn-primary" value="Add">
        </div>
    </div>
</template>
<script>
export default {
    name: "Index",
    data(){
        return{
            name:null,
            age:null,
            job:null
        }
    },
    methods:{
        store(){
            axios.post('/api/people',{name:this.name,age:this.age,job:this.job})
            .then(res=>{
            })
        }
    }
}
</script>
<style scoped>

</style>
