<template>
  <Head title="Home" />
  <div>
    <h2>Home Page</h2>
  </div>
</template>

<script>
import { Head } from "@inertiajs/vue3";
import Layout from "../components/Layout.vue";

export default {
  layout: Layout,
  components: {
    Head
  }
};
</script>