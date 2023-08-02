<template>
  <Head title="Home" />
  <div>
    <h2>All Posts List</h2>
    <div v-if="$page.props.posts.data.length">
      <MDBRow>
        <MDBCol
          md="4"
          sm="12"
          v-for="post in $page.props.posts.data"
          :key="post.id"
        >
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
            <template v-slot:actions v-if="canViewActions(post)">
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
            <template v-slot:footer>
              <MDBCardFooter class="text-muted"
                >Post by: {{ post.user.names }}</MDBCardFooter
              >
            </template>
          </card>
        </MDBCol>
      </MDBRow>
    </div>
    <span v-else>No Post Available</span>
  </div>
</template>

<script>
import { Head } from "@inertiajs/vue3";
import Layout from "../components/Layout.vue";
import { MDBCol, MDBRow } from "mdb-vue-ui-kit";

export default {
  layout: Layout,
  components: {
    Head,
    MDBCol,
    MDBRow,
  },
  props: {
    posts: Object,
  },

  methods: {
    canViewActions: function (post) {
      return this.$page.props.auth.isAuth &&
        this.$page.props.auth.user.id === post.user_id
        ? true
        : false;
    },
  },
};
</script>