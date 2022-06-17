<template>
    <Layout :title="title">
        <h1>Daftar User Detail </h1>

        <ul >
            <li>
                <p>Nama : {{user.name}}</p>
            </li>
            <li>
                <p>Email : {{user.email}}</p>
            </li>
            <li>
                <p>Created : {{user.created_at}}</p>
            </li>
        </ul>
        <Link @click.prevent="deleteUser">Delete</Link>
        <Link :href="`/users/${user.id}/edit`">Edit</Link>
    </Layout>

</template>



<script>
import { Link } from '@inertiajs/inertia-vue'
import Layout from '../../Shared/Layout.vue'

export default {
    props: {
        title: String,
        user: Array
    },
    components: {
        Layout,
        Link
    },
    methods: {
        deleteUser() {
            if(confirm('Are you sure?')){
                this.$inertia.delete('/users/'+this.user.id+'/delete')
            }else{
                return false
            }
        }
    }
}
</script>