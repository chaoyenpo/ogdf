<template>
  <Link :href="'/'">
    <img class="h-16 w-auto" src="/images/logo.png" alt="" />
  </Link>
</template>

<script>
import { defineComponent } from "vue";
import { Link } from "@inertiajs/inertia-vue3";

export default defineComponent({
  components: {
    Link,
  },
});
</script>
