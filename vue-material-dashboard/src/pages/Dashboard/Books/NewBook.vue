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
              <div class="md-layout-item md-size-50 md-small-size-100" style="position:relative;">
                <md-field class="md-invalid" style="padding-right: 50px;">
                  <label>ISBN 13*</label>
                  <md-input v-model="datas.isbn13" type="text"/>
                </md-field>
                <button type="button" class="md-button md-primary md-just-icon md-round md-theme-default" style="position: absolute; top: 2px; right: 13px; border-radius: 10px 10px 0 0;">
                  <div class="md-ripple">
                    <div class="md-button-content">
                      <i class="md-icon md-icon-font md-theme-default">search</i>
                    </div>
                  </div>
                </button>
              </div>
              <div class="md-layout-item md-size-50 md-small-size-100" style="position:relative;">
                <md-field class="md-invalid" style="padding-right: 50px;">
                  <label>ISBN 10</label>
                  <md-input v-model="datas.isbn10" type="text"/>
                </md-field>
                <button type="button" class="md-button md-primary md-just-icon md-round md-theme-default" style="position: absolute; top: 2px; right: 13px; border-radius: 10px 10px 0 0;">
                  <div class="md-ripple">
                    <div class="md-button-content">
                      <i class="md-icon md-icon-font md-theme-default">search</i>
                    </div>
                  </div>
                </button>
              </div>
              <div class="md-layout-item md-size-50 md-small-size-100">
                <md-field class="md-invalid">
                  <label>Title*</label>
                  <md-input v-model="datas.title" type="text"/>
                </md-field>
              </div>
              <div class="md-layout-item md-size-50 md-small-size-100">
                <md-field>
                  <label for="authors">Author(s)*</label>
                  <md-select v-model="datas.authors" name="authors" id="authors" multiple>
                    <md-option value="1">Mason Cross</md-option>
                    <md-option value="2">Dan Brown</md-option>
                  </md-select>
                </md-field>
              </div>
              <div class="md-layout-item md-size-50 md-small-size-100">
                <md-field>
                  <label for="categories">Category(s)*</label>
                  <md-select v-model="datas.categories" name="categories" id="categories" multiple>
                    <md-option value="1">Detective</md-option>
                    <md-option value="2">Fantastic</md-option>
                    <md-option value="3">Love</md-option>
                    <md-option value="4">Adventure</md-option>
                  </md-select>
                </md-field>
              </div>
              <div class="md-layout-item md-size-50 md-small-size-100">
                <md-field>
                  <label for="genre">Genre*</label>
                  <md-select v-model="datas.genre" name="genre" id="genre">
                    <md-option value="1">Novel</md-option>
                    <md-option value="2">Encyclopedia</md-option>
                  </md-select>
                </md-field>
              </div>
              <div class="md-layout-item md-size-50 md-small-size-100">
                <md-field class="md-invalid">
                  <label>Number of Pages*</label>
                  <md-input v-model="datas.numberOfPages" type="number"/>
                </md-field>
              </div>
              <div class="md-layout-item md-size-50 md-small-size-100">
                <md-field class="md-invalid">
                  <label>Publisher*</label>
                  <md-input v-model="datas.publisher" type="text"/>
                </md-field>
              </div>
              <div class="md-layout-item md-size-50 md-small-size-100">
                <label>Release Date*</label>
                <md-datepicker v-model="datas.releaseDate" style="margin-top: -11px;" />
              </div>
              <div class="md-layout-item md-size-50 md-small-size-100">
                <md-field>
                  <label for="languages">Language(s)*</label>
                  <md-select v-model="datas.languages" name="languages" id="languages" multiple>
                    <md-option value="1">Turkish</md-option>
                    <md-option value="2">English</md-option>
                    <md-option value="3">Portuguese</md-option>
                  </md-select>
                </md-field>
              </div>
              <div class="md-layout-item md-size-100">
                <input type='button' class='btn btn-finish btn-fill btn-primary btn-lg' name='save' value='Save'/>
              </div>
            </div>
          </form>
        </md-card-content>
      </md-card>
    </div>
  </div>
</template>
<script>
export default {
  name: 'MultipleSelect',
  data() {
    return {
      formAction: `${process.env.VUE_APP_APP_BASE_URL}/books`,
      datas: {
        isbn13: "",
        isbn10: "",
        title: "",
        numberOfPages: null,
        authors: [],
        categories: [],
        genre: "",
        publisher: "",
        releaseDate: "",
        languages: "",
        dateFormat: "yyyy-MM-dd",
        firstDayOfAWeek: "Monday",
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
  },
  computed: {
    firstDayOfAWeek: {
      set () {
        this.$material.locale.firstDayOfAWeek = this.datas.firstDayOfAWeek
      }
    },
    dateFormat: {
      set () {
        this.$material.locale.dateFormat = this.datas.dateFormat
      }
    }
  }
}
</script>

<style></style>
