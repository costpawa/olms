<template>
  <div
    class="wrapper"
    :class="[
      { 'nav-open': $sidebar.showSidebar },
      { rtl: $route.meta.rtlActive },
    ]"
  >
    <notifications></notifications>
    <side-bar
      :active-color="sidebarBackground"
      :background-image="sidebarBackgroundImage"
      :data-background-color="sidebarBackgroundColor"
    >
      <user-menu></user-menu>
      <mobile-menu></mobile-menu>
      <template slot="links">
        <sidebar-item
          :link="{ name: 'Dashboard', icon: 'dashboard', path: '/dashboard' }"
        />

        <sidebar-item
            :link="{ name: 'Books', icon: 'book', path: '/books' }"
        >
          <sidebar-item
              :link="{ name: 'All Books', icon: 'menu_book', path: '/books' }"
          />
          <sidebar-item
              :link="{ name: 'New Book', icon: 'add', path: '/books/new' }"
          />
        </sidebar-item>

        <sidebar-item
            :link="{ name: 'Students', icon: 'people', path: '/students' }"
        >
          <sidebar-item
              :link="{ name: 'All Students', icon: 'people', path: '/students' }"
          />
          <sidebar-item
              :link="{ name: 'New Student', icon: 'person_add', path: '/students/new' }"
          />
        </sidebar-item>

        <sidebar-item :link="{ name: 'Examples (API)', image: image }">
          <sidebar-item
            :link="{ name: 'User Profile', path: '/examples/user-profile' }"
          />
          <sidebar-item
            :link="{
              name: 'User Management',
              path: '/examples/user-management/list-users',
            }"
          />
        </sidebar-item>

        <sidebar-item :link="{ name: 'Components', icon: 'apps' }">
          <sidebar-item
              :link="{ name: 'Sweet Alert', path: '/components/sweetalert' }"
          />
          <sidebar-item
              :link="{ name: 'Typography', path: '/components/typography' }"
          />
          <sidebar-item
              :link="{ name: 'Icons', path: '/components/icons' }"
          />
          <sidebar-item
              :link="{ name: 'Notifications', icon: 'notifications', path: '/components/notifications' }"
          />
        </sidebar-item>

        <sidebar-item
            :link="{ name: 'Forms', icon: 'content_paste', path: '/forms' }"
        >
          <sidebar-item
              :link="{ name: 'Wizard', icon: 'content_paste', path: '/forms/wizard' }"
          />
        </sidebar-item>

        <sidebar-item
            :link="{ name: 'Table', icon: 'grid_on', path: '/components/table' }"
        />

        <sidebar-item
          :link="{ name: 'Maps', icon: 'place', path: '/components/maps' }"
        />

      </template>
    </side-bar>

    <div class="main-panel">
      <top-navbar></top-navbar>

      <div :class="{ content: !$route.meta.hideContent }" style="padding-top: 0;">
        <zoom-center-transition :duration="200" mode="out-in">
          <router-view />
        </zoom-center-transition>
      </div>
      <content-footer v-if="!$route.meta.hideFooter"></content-footer>
    </div>
  </div>
</template>
<script>
/* eslint-disable no-new */
import PerfectScrollbar from "perfect-scrollbar";
import "perfect-scrollbar/css/perfect-scrollbar.css";

function hasElement(className) {
  return document.getElementsByClassName(className).length > 0;
}

function initScrollbar(className) {
  if (hasElement(className)) {
    new PerfectScrollbar(`.${className}`);
    document.getElementsByClassName(className)[0].scrollTop = 0;
  } else {
    // try to init it later in case this component is loaded async
    setTimeout(() => {
      initScrollbar(className);
    }, 100);
  }
}

function reinitScrollbar() {
  let docClasses = document.body.classList;
  let isWindows = navigator.platform.startsWith("Win");
  if (isWindows) {
    // if we are on windows OS we activate the perfectScrollbar function
    initScrollbar("sidebar");
    initScrollbar("sidebar-wrapper");
    initScrollbar("main-panel");

    docClasses.add("perfect-scrollbar-on");
  } else {
    docClasses.add("perfect-scrollbar-off");
  }
}

import TopNavbar from "./TopNavbar.vue";
import ContentFooter from "./ContentFooter.vue";
import MobileMenu from "./Extra/MobileMenu.vue";
import UserMenu from "./Extra/UserMenu.vue";

export default {
  components: {
    TopNavbar,
    ContentFooter,
    MobileMenu,
    UserMenu,
  },
  data() {
    return {
      sidebarBackgroundColor: "black",
      sidebarBackground: "green",
      sidebarBackgroundImage:
        process.env.VUE_APP_APP_BASE_URL + "/img/sidebar-2.jpg",
      sidebarMini: true,
      sidebarImg: true,
      image: process.env.VUE_APP_APP_BASE_URL + "/img/laravel-vue.svg",
    };
  },
  methods: {
    toggleSidebar() {
      if (this.$sidebar.showSidebar) {
        this.$sidebar.displaySidebar(false);
      }
    },
    minimizeSidebar() {
      if (this.$sidebar) {
        this.$sidebar.toggleMinimize();
      }
    },
  },
  updated() {
    reinitScrollbar();
  },
  mounted() {
    reinitScrollbar();
  },
  watch: {
    sidebarMini() {
      this.minimizeSidebar();
    },
  },
};
</script>
<style lang="scss">
$scaleSize: 0.95;
@keyframes zoomIn95 {
  from {
    opacity: 0;
    transform: scale3d($scaleSize, $scaleSize, $scaleSize);
  }
  to {
    opacity: 1;
  }
}
.main-panel .zoomIn {
  animation-name: zoomIn95;
}
@keyframes zoomOut95 {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
    transform: scale3d($scaleSize, $scaleSize, $scaleSize);
  }
}
.main-panel .zoomOut {
  animation-name: zoomOut95;
}
.md-card{
  margin: 30px 0;
}
.btn-primary, .btn-info{
  cursor: pointer;
}
</style>
