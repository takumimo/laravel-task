<template>
    <div>
        <h3 class="text-center">Edit Post</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updatePost">
                    <div class="form-group">
                        <label>タイトル</label>
                        <input type="text" class="form-control" v-model="post.title">
                    </div>
                    <div class="form-group">
                        <label>本文</label>
                        <input type="text" class="form-control" v-model="post.body">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                post: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/posts/${this.$route.params.id}`)
                .then((res) => {
                    this.post = res.data;
                });
        },
        methods: {
            updatePost() {
                this.axios
                    .patch(`http://localhost:8000/api/posts/${this.$route.params.id}`, this.post)
                    .then((res) => {
                        this.$router.push({ title: 'home' });
                    });
            }
        }
    }
</script>