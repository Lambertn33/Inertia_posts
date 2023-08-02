<template>
  <MDBNavbar expand="lg" dark bg="primary" container class="main-nav">
    <MDBNavbarBrand href="#">Posts</MDBNavbarBrand>
    <span>Welcome</span>
    <MDBNavbarToggler
      target="#navbarText"
      @click="collapsed = !collapsed"
    ></MDBNavbarToggler>
    <MDBCollapse id="navbarText" v-model="collapsed">
      <MDBNavbarNav right>
        <Link class="nav-link" href="/">Home</Link>
        <Link class="nav-link" href="#">Posts</Link>
        <Link href="/auth/register" class="nav-link">Register</Link>
        <Link href="/auth/login" class="nav-link">Login</Link>
      </MDBNavbarNav>
    </MDBCollapse>
  </MDBNavbar>
</template>

<script>
import {
  MDBNavbar,
  MDBNavbarBrand,
  MDBNavbarToggler,
  MDBNavbarNav,
  MDBCollapse,
} from "mdb-vue-ui-kit";
import { Link } from "@inertiajs/vue3";

export default {
  components: {
    Link,
    MDBNavbar,
    MDBNavbarBrand,
    MDBNavbarToggler,
    MDBNavbarNav,
    MDBCollapse,
  },
  data() {
    return {
      collapsed: false,
    };
  },
};
</script>

<style scoped>
  .main-nav {
    padding: 0.5rem 2rem;
    display: flex;
    align-items: center;
  }
  .main-nav span {
    color: #fff;
  }
  .nav-link {
    color: #fff;
    font-weight: 400;
  }
  .nav-link:hover {
    text-decoration: underline;
  }
</style>