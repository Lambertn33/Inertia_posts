<template>
    <Head title="Login" />
    <div class="grid">
      <div class="d-flex align-items-center" style="height: 90vh">
        <MDBCol md="4" sm="12" class="offset-md-4">
          <h3 class="text-center">New post</h3>
          <form class="d-grid gap-3" @submit.prevent="createPost">
            <div>
              <MDBInput label="Title" v-model="post.title" />
              <span v-if="$page.props.errors.title" class="text-danger">{{
                $page.props.errors.title
              }}</span>
            </div>
            <div>
              <MDBTextarea label="Description" rows="4"  v-model="post.description"/>
              <span v-if="$page.props.errors.description" class="text-danger">{{
                $page.props.errors.description
              }}</span>
            </div>
            <MDBBtn color="primary" type="submit">Create</MDBBtn>
          </form>
        </MDBCol>
      </div>
    </div>
  </template>
    
    <script>
  import { Head } from "@inertiajs/vue3";
  import { MDBInput, MDBCol, MDBBtn, MDBTextarea } from "mdb-vue-ui-kit";
  import Layout from "../../components/Layout.vue";
  
  export default {
    layout: Layout,
    components: {
      MDBInput,
      MDBCol,
      MDBBtn,
      MDBTextarea,
      Head,
    },
    data() {
      return {
        post: {
          title: "",
          description: "",
        },
        isRegistering: false,
      };
    },
  
    methods: {
      createPost() {
        this.$inertia.post(
          "/posts/create",
          this.post,
          { preserveState: true },
          {
            onStart: () => (this.isRegistering = true),
            onFinish: () => (this.isRegistering = false),
          }
        );
      },
    },
  };
  </script>
  
  <style scoped>
  form {
    border: 1px solid gray;
    padding: 2rem;
    border-radius: 0.5rem;
  }
  </style>