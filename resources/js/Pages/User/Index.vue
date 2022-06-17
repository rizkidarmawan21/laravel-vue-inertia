<template>
    <Layout :title="title">
        <h1>Daftar Users </h1>
        <Link href="/users/create">Tambah Data User</Link>
        <br>
        <div v-if="$page.props.flash.message" class="alert">
            {{ $page.props.flash.message }}
        </div>
        <ul>
            <li v-for="user in users" :key="user.id">
                <p>{{ user.name }}</p>
                <Link :href="`/users/${user.id}`">Lihat User</Link>
            </li>
        </ul>
    </Layout>

</template>



<script>
import { Link } from '@inertiajs/inertia-vue'
import Layout from '../../Shared/Layout.vue'

export default {
    props: {
        title: String,
        users: Array
    },
    components: {
        Layout,
        Link
    }
}
</script>