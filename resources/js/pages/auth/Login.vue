<template>
  <Head title="Home" />
  <div class="grid">
    <div class="d-flex align-items-center" style="height: 90vh;">
      <MDBCol col="4" class="offset-md-4">
        <h3 class="text-center">Welcome to Posts app</h3>
        <form class="d-grid gap-3">
          <MDBInput label="Email address" />
          <MDBInput label="Passowrd" />
          <MDBBtn color="primary">Login</MDBBtn>
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
};
</script>

<style scoped>
form {
  border: 1px solid gray;
  padding: 2rem;
  border-radius: 0.5rem;
}
</style>