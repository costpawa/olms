<template>
  <div>
    <div class="header text-center">
      <h3 class="title">Sweet Alert 2</h3>
      <p class="category">
        Sweet Alert 2 Examples
      </p>
    </div>
    <div class="md-layout">
      <div class="md-layout-item md-size-25 md-small-size-50 md-xsmall-size-100">
        <md-card>
          <md-card-content class="text-center">
            <h5 class="card-text" style="margin-top: 0;">Basic</h5>
            <button type="button" class="md-button md-success md-theme-default" @click="basic">
              <div class="md-ripple">
                <div class="md-button-content">Try!</div>
              </div>
            </button>
          </md-card-content>
        </md-card>
      </div>
      <div class="md-layout-item md-size-25 md-small-size-50 md-xsmall-size-100">
        <md-card>
          <md-card-content class="text-center">
            <h5 class="card-text" style="margin-top: 0;">With title and text</h5>
            <button type="button" class="md-button md-success md-theme-default" @click="titleText">
              <div class="md-ripple">
                <div class="md-button-content">Try!</div>
              </div>
            </button>
          </md-card-content>
        </md-card>
      </div>
      <div class="md-layout-item md-size-25 md-small-size-50 md-xsmall-size-100">
        <md-card>
          <md-card-content class="text-center">
            <h5 class="card-text" style="margin-top: 0;">Success, title and text</h5>
            <button type="button" class="md-button md-success md-theme-default" @click="titleTextSuccess">
              <div class="md-ripple">
                <div class="md-button-content">Try!</div>
              </div>
            </button>
          </md-card-content>
        </md-card>
      </div>
      <div class="md-layout-item md-size-25 md-small-size-50 md-xsmall-size-100">
        <md-card>
          <md-card-content class="text-center">
            <h5 class="card-text" style="margin-top: 0;">Error, title and text</h5>
            <button type="button" class="md-button md-success md-theme-default" @click="titleTextError">
              <div class="md-ripple">
                <div class="md-button-content">Try!</div>
              </div>
            </button>
          </md-card-content>
        </md-card>
      </div>
      <div class="md-layout-item md-size-25 md-small-size-50 md-xsmall-size-100">
        <md-card>
          <md-card-content class="text-center">
            <h5 class="card-text" style="margin-top: 0;">Confirm</h5>
            <button type="button" class="md-button md-success md-theme-default" @click="confirmAlert">
              <div class="md-ripple">
                <div class="md-button-content">Try!</div>
              </div>
            </button>
          </md-card-content>
        </md-card>
      </div>
    </div>
  </div>
</template>

<script>
// ES6 Modules or TypeScript
import Swal from 'sweetalert2'
export default {
  methods: {
    basic() {
      Swal.fire('Hello world!')
    },
    titleText() {
      Swal.fire(
          'Hello world!',
          'Your imaginary file has been deleted.'
      )
    },
    titleTextSuccess() {
      Swal.fire(
          'Hello world!',
          'Your imaginary file has been deleted.',
          'success'
      )
    },
    titleTextError() {
      Swal.fire(
          'Hello world!',
          'Your imaginary file has been deleted.',
          'error'
      )
    },
    confirmAlert() {
      Swal.fire({
        title: 'Are you sure?',
        text: 'You will not be able to recover this imaginary file!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, keep it'
      }).then((result) => {
        if (result.value) {
          Swal.fire(
              'Deleted!',
              'Your imaginary file has been deleted.',
              'success'
          )
          // For more information about handling dismissals please visit
          // https://sweetalert2.github.io/#handling-dismissals
        } else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire(
              'Cancelled',
              'Your imaginary file is safe :)',
              'error'
          )
        }
      })
    }
  }
};
</script>
<style lang="scss">
.text-center {
  text-align: center;
}

.places-buttons + div .md-button:not(:last-child) {
  margin-right: 5px;
}
</style>
