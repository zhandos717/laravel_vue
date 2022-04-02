<template>
        <div>
            <table class="table ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>age</th>
                    <th>job</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <template v-for="person in people">
                    <tr :class="isEdit(person.id)? 'd-none':'' ">
                        <th scope="row">{{person.id}}</th>
                        <th>{{person.name}}</th>
                        <th>{{person.age}}</th>
                        <th>{{person.job}}</th>
                        <th><a href="#" @click.prevent="changeEditPersonId(person.id,person.name,person.age,person.job)" class="btn btn-outline-success">Edit</a></th>
                    </tr>
                    <tr :class="isEdit(person.id)? '':'d-none' ">
                        <th scope="row">{{person.id}}</th>
                        <th><input type="text" v-model="name" class="form-control"></th>
                        <th><input type="number" v-model="age" class="form-control"></th>
                        <th><input type="text" v-model="job" class="form-control"></th>
                        <th><a href="#" @click.prevent="changeEditPersonId(null)"  class="btn btn-outline-warning">Update</a></th>
                    </tr>
                </template>
            </table>
        </div>
</template>

<script>
export default {
    name: "IndexComponent",
    data(){
      return{
          people: null,
          editPersonId: null,
          name: '',
          age: null,
          job: ''
      }
    },
    methods:{
        getPeople: function () {
            axios.get('/api/people')
            .then(res => {
                this.people = res.data
            })
            .catch(err => {
            })
            .finally({
            })
        },
        changeEditPersonId(id,name,age,job){
            this.editPersonId = id
            this.name = name
            this.age = age
            this.job = job
        },
        isEdit(id){
            return this.editPersonId === id
        }
    },
    mounted(){
        this.getPeople()
    },
}
</script>

<style scoped>

</style>
