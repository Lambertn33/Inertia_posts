<template>
  <MDBNavbar expand="lg" dark bg="primary" container>
    <MDBNavbarBrand href="#">Posts</MDBNavbarBrand>
    <MDBNavbarToggler
      target="#navbarText"
      @click="collapsed = !collapsed"
    ></MDBNavbarToggler>
    <MDBCollapse id="navbarText" v-model="collapsed">
      <MDBNavbarNav right>
        <MDBNavbarItem href="#"> Home </MDBNavbarItem>
        <MDBNavbarItem href="#"> Posts </MDBNavbarItem>
        <MDBNavbarItem href="#"> Register </MDBNavbarItem>
        <MDBNavbarItem href="#"> Login </MDBNavbarItem>

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
  MDBNavbarItem,
  MDBCollapse,
} from "mdb-vue-ui-kit";

export default {
  components: {
    MDBNavbar,
    MDBNavbarBrand,
    MDBNavbarToggler,
    MDBNavbarNav,
    MDBNavbarItem,
    MDBCollapse,
  },
  data() {
    return {
      collapsed: false,
    };
  },
};
</script>