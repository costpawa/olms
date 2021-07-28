<template>
  <div class="md-layout">
    <div class="md-layout-item md-size-100">
      <md-card>
        <md-card-header class="md-card-header-icon md-card-header-green">
          <div class="card-text">
            <h4 class="title">{{ $route.name }}</h4>
          </div>
        </md-card-header>
        <md-card-content>
          <form action="">
            <div class="md-layout">
              <div class="md-layout-item md-size-50 md-small-size-100">
                <md-field class="md-invalid">
                  <label>Name</label>
                  <md-input v-model="datas.name" type="text" />
                </md-field>
              </div>
              <div class="md-layout-item md-size-50 md-small-size-100">
                <md-field class="md-invalid">
                  <label>Page Count</label>
                  <md-input v-model="datas.pageCount" type="number" />
                </md-field>
              </div>
              <div class="md-layout-item md-size-100">
                <input type='button' class='btn btn-finish btn-fill btn-primary btn-lg' name='save' value='Save' />
              </div>
            </div>
          </form>
        </md-card-content>
      </md-card>
    </div>
  </div>
</template>
<script>
import "@/assets/css/material-bootstrap-wizard.css"
export default {
  data() {
    return {
      formAction: `${process.env.VUE_APP_APP_BASE_URL}/books`,
      datas: {
        name: "",
        pageCount: 0,
      }
    }
  },
  methods: {
    async submitForm() {
      try {
        await this.$store.dispatch("books/add", this.datas)
        await this.$store.dispatch("alerts/success", "Book added successfully.")
      } catch (e) {
        await this.$store.dispatch("alerts/error", "Oops, something went wrong!")
      }
    }
  }
}
</script>

<style></style>
