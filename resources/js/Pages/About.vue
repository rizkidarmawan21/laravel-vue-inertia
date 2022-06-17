<template>
    <Layout title="Halaman About ">
        <h1>About {{ title }} </h1>
    </Layout>

</template>


<script>
import Layout from '../Shared/Layout.vue'

export default {
    props: ['title'],
    components: {
        Layout
    }
}
</script>