<template>
  <Head title="Home" />
  <div class="grid">
    <div class="d-flex align-items-center" style="height: 90vh">
      <MDBCol md="4" sm="12" class="offset-md-4">
        <h3 class="text-center">Welcome to Posts app</h3>
        <form @submit.prevent="register" class="d-grid gap-3">
          <div>
            <MDBInput label="Your names" v-model="user.names" />
            <span v-if="$page.props.errors.names" class="text-danger">{{
              $page.props.errors.names
            }}</span>
          </div>
          <div>
            <MDBInput label="Email address" v-model="user.email" />
            <span v-if="$page.props.errors.email" class="text-danger">{{
              $page.props.errors.email
            }}</span>
          </div>
          <div>
            <MDBInput
              label="Passowrd"
              type="password"
              v-model="user.password"
            />
            <span v-if="$page.props.errors.password" class="text-danger">{{
              $page.props.errors.password
            }}</span>
          </div>
          <MDBBtn color="primary" type="submit">Register</MDBBtn>
        </form>
      </MDBCol>
    </div>
  </div>
</template>
  
  <script>
import { Head } from "@inertiajs/vue3";
import { MDBInput, MDBCol, MDBBtn } from "mdb-vue-ui-kit";
import Layout from "../../components/Layout.vue";

export default {
  layout: Layout,
  components: {
    MDBInput,
    MDBCol,
    MDBBtn,
    Head,
  },
  data() {
    return {
      user: {
        names: "",
        email: "",
        password: "",
      },
      isRegistering: false,
    };
  },

  methods: {
    register() {
      this.$inertia.post(
        "/auth/register",
        this.user,
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