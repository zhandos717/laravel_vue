<template>
        <div class="w-25">
            <div class="mb-3">
            <input type="text" v-model="name"  class="form-control"  placeholder="name">
            </div>
            <div class="mb-3">
            <input type="number" v-model="age"   class="form-control"  placeholder="age">
            </div>
            <div class="mb-3">
            <input type="text"  v-model="job" class="form-control"  placeholder="job">
            </div>
            <div class="mb-3">
                <input type="button" @click.prevent="addPerson" class="btn btn-primary" value="Добавить" >
            </div>
        </div>
</template>

<script>
export default {
    name: "CreateComponent",
    data(){
      return{
          name:null,
          age:null,
          job:null,
      }
    },
    methods:{
        addPerson(){
            axios.post('/api/people',{name: this.name, age: this.age, job: this.job})
            .then(res=>{
                this.name = null
                this.age = null
                this.job = null

                console.log(res)
            })
        }
    },
    mounted(){

    },
}
</script>

<style scoped>

</style>
