<template>
  <MDBNavbar expand="lg" dark bg="primary" container class="main-nav">
    <MDBNavbarBrand href="#">Posts</MDBNavbarBrand>
    <span>Welcome {{ authInfo.isAuth ? authInfo.user.names : '' }}</span>
    <MDBNavbarToggler
      target="#navbarText"
      @click="collapsed = !collapsed"
    ></MDBNavbarToggler>
    <MDBCollapse id="navbarText" v-model="collapsed">
      <MDBNavbarNav right>
        <Link class="nav-link" href="/">All Posts</Link>
        <Link class="nav-link" href="/posts" v-if="authInfo.isAuth">My Posts</Link>
        <Link href="/auth/register" class="nav-link" v-if="!authInfo.isAuth">Register</Link>
        <Link href="/auth/login" class="nav-link" v-if="!authInfo.isAuth">Login</Link>
        <Link href="/auth/logout" class="nav-btn" method="post" as="button" v-if="authInfo.isAuth">Logout</Link>
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
  computed: {
    authInfo() {
      return this.$page.props.auth
    }
  }
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