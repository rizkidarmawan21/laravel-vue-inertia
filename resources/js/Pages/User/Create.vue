<template>
    <Layout :title="title">
        <h1>Halaman Tambah User</h1>
        <br>
        <form @submit.prevent="register">
            <div class="form-group">
                <label for="">Name :</label>
                <input type="text" placeholder="Name" v-model="form.name">
                <p class="error" v-if="errors.name">{{errors.name}}</p>
            </div>
            <div class="form-group">
                <label for="">Email :</label>
                <input type="email" placeholder="Email" v-model="form.email" >
                <p class="error" v-if="errors.password">{{errors.password}}</p>
            </div>
            <div class="form-group">
                <label for="">Password :</label>
                <input type="password" placeholder="Password" v-model="form.password" >
                <p class="error" v-if="errors.password">{{errors.password}}</p>
            </div>
            <button type="submit">Simpan</button>
        </form>
    </Layout>

</template>



<script>
import { Link } from '@inertiajs/inertia-vue'
import Layout from '../../Shared/Layout.vue'

export default {
    props: {
        title: String,
        errors: Object
    },
    data(){
        return {
            form: {
                name: '',
                email: '',
                password: ''
            }
        }
    },
    components: {
        Layout,
        Link
    },
    methods: {
        register() {
            // console.log(this.form)
            this.$inertia.post('/users',this.form)
        }
    }
}
</script>

<style>
.form-group {
    margin-bottom: 5px;
}

.form-group p {
    color: rgb(222, 17, 10)
}
</style>