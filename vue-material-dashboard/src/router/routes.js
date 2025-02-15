import DashboardLayout from "@/pages/Dashboard/Layout/DashboardLayout.vue";
import AuthLayout from "@/pages/Dashboard/Pages/AuthLayout.vue";

// Dashboard pages
import Dashboard from "@/pages/Dashboard/Dashboard.vue";

// Profile
import UserProfile from "@/pages/Dashboard/Examples/UserProfile.vue";

// User Management
import ListUserPage from "@/pages/Dashboard/Examples/UserManagement/ListUserPage.vue";

// Books pages
import Books from "@/pages/Dashboard/Books/Books.vue";
import NewBook from "@/pages/Dashboard/Books/NewBook.vue";

// Students pages
import Students from "@/pages/Dashboard/Students/Students.vue";
import NewStudent from "@/pages/Dashboard/Students/NewStudent.vue";

// Pages
import RtlSupport from "@/pages/Dashboard/Pages/RtlSupport.vue";
import Login from "@/pages/Dashboard/Pages/Login.vue";
import Register from "@/pages/Dashboard/Pages/Register.vue";

// Components pages
import SweetAlert from "@/pages/Dashboard/Components/SweetAlert.vue";
import Notifications from "@/pages/Dashboard/Components/Notifications.vue";
import Icons from "@/pages/Dashboard/Components/Icons.vue";
import Typography from "@/pages/Dashboard/Components/Typography.vue";

// Forms pages
import Wizard from "@/pages/Dashboard/Forms/Wizard.vue";

// TableList pages
import RegularTables from "@/pages/Dashboard/Tables/RegularTables.vue";

// Maps pages
import FullScreenMap from "@/pages/Dashboard/Maps/FullScreenMap.vue";

//import middleware
import auth from "@/middleware/auth";
import guest from "@/middleware/guest";

let booksMenu = {
  path: "/books",
  component: DashboardLayout,
  name: "Books",
  meta: {
    icon: "book",
  },
  children: [
    {
      path: "",
      name: "All Books",
      components: { default: Books },
      meta: { icon: "menu_book", middleware: auth }
    },
    {
      path: "new",
      name: "New Book",
      components: { default: NewBook },
      meta: { icon: "add", middleware: auth }
    }
  ]
};

let studentsMenu = {
  path: "/students",
  component: DashboardLayout,
  name: "Students",
  children: [
    {
      path: "",
      name: "All Students",
      components: { default: Students },
      meta: { middleware: auth }
    },
    {
      path: "new",
      name: "New Student",
      components: { default: NewStudent },
      meta: { middleware: auth }
    }
  ]
};

let componentsMenu = {
  path: "/components",
  component: DashboardLayout,
  redirect: "/components/notification",
  name: "Components",
  children: [
    {
      path: "sweetalert",
      name: "SweetAlert",
      components: { default: SweetAlert },
      meta: { middleware: auth }
    },
    {
      path: "table",
      name: "Table",
      components: { default: RegularTables },
      meta: { middleware: auth }
    },
    {
      path: "typography",
      name: "Typography",
      components: { default: Typography },
      meta: { middleware: auth }
    },
    {
      path: "icons",
      name: "Icons",
      components: { default: Icons },
      meta: { middleware: auth }
    },
    {
      path: "maps",
      name: "Maps",
      meta: {
        hideContent: true,
        hideFooter: true,
        navbarAbsolute: true,
        middleware: auth
      },
      components: { default: FullScreenMap }
    },
    {
      path: "notifications",
      name: "Notifications",
      components: { default: Notifications },
      meta: { middleware: auth }
    },
    {
      path: "rtl",
      name: "وحة القيادة",
      meta: {
        rtlActive: true,
        middleware: auth
      },
      components: { default: RtlSupport }
    }
  ]
};

let formsMenu = {
  path: "/forms",
  component: DashboardLayout,
  name: "Forms",
  children: [
    {
      path: "wizard",
      name: "Wizard",
      components: { default: Wizard },
      meta: { middleware: auth }
    }
  ]
};

let examplesMenu = {
  path: "/examples",
  component: DashboardLayout,
  name: "Examples",
  children: [
    {
      path: "user-profile",
      name: "User Profile",
      components: { default: UserProfile },
      meta: { middleware: auth }
    },
    {
      path: "user-management/list-users",
      name: "User Management",
      components: { default: ListUserPage },
      meta: { middleware: auth }
    }
  ]
};

let authPages = {
  path: "/",
  component: AuthLayout,
  name: "Authentication",
  children: [
    {
      path: "/login",
      name: "Login",
      component: Login,
      meta: { middleware: guest }
    },
    {
      path: "/register",
      name: "Register",
      component: Register,
      meta: { middleware: guest }
    }
  ]
};

const routes = [
  {
    path: "/",
    redirect: "/dashboard",
    name: "Home"
  },
  {
    path: "/",
    component: DashboardLayout,
    meta: { middleware: auth },
    children: [
      {
        path: "dashboard",
        name: "Dashboard",
        components: { default: Dashboard },
        meta: { middleware: auth }
      }
    ]
  },
  booksMenu,
  studentsMenu,
  componentsMenu,
  formsMenu,
  examplesMenu,
  authPages
];

export default routes;
