import Vue from 'vue';// =========================================================
// * Vue Material Dashboard PRO - v1.4.0
// =========================================================
//
// * Product Page: https://www.creative-tim.com/product/vue-material-dashboard-pro
// * Copyright 2019 Creative Tim (https://www.creative-tim.com)
//
// * Coded by Creative Tim
//
// =========================================================
//
// * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
import Vuex from 'vuex';

import auth from "./modules/auth";
import alerts from "./modules/alerts-module";
import profile from "./modules/profile-module";
import users from "./modules/users-module";
import students from "./modules/students-module";

Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
    auth,
    alerts,
    profile,
    users,
    students
  }
});
