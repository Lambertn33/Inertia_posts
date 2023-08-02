<template>
  <Head title="Posts" />
  <div class="d-flex align-items-center gap-4">
    <h2>My posts List</h2>
    <Link href="/posts/create">Create New Post</Link>
  </div>
  <div v-if="posts.length">
    <MDBRow>
      <MDBCol md="4" sm="12" v-for="post in posts" :key="post.id">
        <card>
          <template v-slot:header>
            {{ post.title }}
          </template>
          <template v-slot:title>
            {{ post.title }}
          </template>
          <template v-slot:body>
            {{ post.description }}
          </template>
          <template v-slot:actions>
            <div class="d-flex gap-4">
              <Link class="btn btn-info">Edit</Link>
              <Link
                class="btn btn-danger"
                method="delete"
                as="button"
                href="/posts/destroy"
                :data="{ postId: post.id }"
                >Delete</Link
              >
            </div>
          </template>
          <template v-slot:footer> </template>
        </card>
      </MDBCol>
    </MDBRow>
  </div>
  <span v-else
    >You have no posts - Please
    <Link href="/posts/create">Create one</Link></span
  >
</template>

<script>
import LayoutVue from "../../components/Layout.vue";
import { Head, Link } from "@inertiajs/vue3";
import { MDBCol, MDBRow } from "mdb-vue-ui-kit";
export default {
  components: { Head, Link, MDBCol, MDBRow },
  layout: LayoutVue,
  props: {
    posts: Array,
  },
};
</script>