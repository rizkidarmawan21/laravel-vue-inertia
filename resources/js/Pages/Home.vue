<template>
    <Layout :title="title">
        <h1>Hello {{ title }} </h1>
    </Layout>
</template>
<style>
</style>

<script>
import Layout from '../Shared/Layout.vue'

export default {
    props: ['title'],
    components: {
        Layout,
    }
}
</script>