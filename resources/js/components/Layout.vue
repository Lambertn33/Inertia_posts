<template>
  <Navbar />
  <MDBContainer>
    <MDBRow>
      <slot></slot>
    </MDBRow>
  </MDBContainer>
</template>

<script>
import Navbar from "./Navbar.vue";
import { MDBRow, MDBContainer } from "mdb-vue-ui-kit";

export default {
  components: {
    MDBContainer,
    MDBRow,
    Navbar,
  },
};
</script>