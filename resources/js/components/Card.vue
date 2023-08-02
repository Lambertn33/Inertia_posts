<template>
  <MDBCard text="center">
    <MDBCardHeader><slot name="header"></slot></MDBCardHeader>
    <MDBCardBody>
      <MDBCardTitle><slot name="title"></slot></MDBCardTitle>
      <MDBCardText>
        <slot name="body"></slot>
      </MDBCardText>
      <slot name="actions">
        <!-- <MDBBtn tag="a" href="#!" color="primary">Button</MDBBtn> -->
      </slot>
    </MDBCardBody>
    <slot name="footer">
      <!-- <MDBCardFooter class="text-muted">2 days ago</MDBCardFooter> -->
    </slot>
  </MDBCard>
</template>

<script>
import {
  MDBCard,
  MDBCardHeader,
  MDBCardBody,
  MDBCardTitle,
  MDBCardText,
  MDBBtn,
} from "mdb-vue-ui-kit";
export default {
  components: {
    MDBCard,
    MDBCardHeader,
    MDBCardBody,
    MDBCardTitle,
    MDBCardText,
    MDBBtn,
  },
};
</script>