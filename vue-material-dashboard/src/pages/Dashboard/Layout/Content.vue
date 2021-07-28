<template>
  <div class="content" style="padding-top: 0 !important;">
    <FadeTransition :duration="200" mode="out-in">
      <!-- your content here -->
      <router-view></router-view>
    </FadeTransition>
  </div>
</template>
<script>
export default {};
</script>
<style></style>
