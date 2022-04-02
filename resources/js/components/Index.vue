<template>
    <div>
        <router-link :to="{name:'person.index'}">people</router-link>
        <router-link :to="{name:'person.create'}">Create person</router-link>
        <router-link :to="{name:'person.edit'}"> Edit people</router-link>
        <router-link :to="{name:'person.show'}">Show people</router-link>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: "Index"
}
</script>

<style scoped>

</style>
