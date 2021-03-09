<template>
    <div>
        <h2 class="text-center">Posts List</h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>タイトル</th>
                <th>本文</th>
                <!-- <th>Actions</th> -->
            </tr>
            </thead>
            <tbody>
            <tr v-for="post in posts" :key="post.id">
                <td>{{ post.title }}</td>
                <td>{{ post.body }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: post.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deletePost(post.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                posts: []
            }
        },
        created() {
            this.axios
                .get('http://127.0.0.1:10080/api/posts/')
                .then(response => {
                    this.posts = response.data;
                });
        },
        methods: {
            deletePost(id) { 
                this.axios
                    .delete(`http://127.0.0.1:10080/api/posts/${id}`)
                    .then(response => {
                        let i = this.posts.map(data => data.id).indexOf(id);
                        this.posts.splice(i, 1)
                    });
            }
        }
    }
</script>