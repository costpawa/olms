<template>
  <!-- Wizard container -->
  <div class="wizard-container" ref="container">
    <!-- You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple" -->
    <div class="card wizard-card" data-color="red" id="wizard">
      <form action="" method="">
        <div class="wizard-header">
          <h3 class="wizard-title">
            Book a Room
          </h3>
          <h5>This information will let us know more about you.</h5>
        </div>
        <div class="wizard-navigation">
          <ul class="nav nav-pills" ref="steps">
            <li v-bind:style="{ width: tabWidth+'%' }"><a href="#" @click.prevent="changeStep(1)" class="nav-link" v-bind:style="{color: firstTabColor}">Account</a></li>
            <li v-bind:style="{ width: tabWidth+'%' }"><a href="#" @click.prevent="changeStep(2)" class="nav-link" v-bind:style="{color: secondTabColor}">Room Type</a></li>
            <li v-bind:style="{ width: tabWidth+'%' }"><a href="#" @click.prevent="changeStep(3)" class="nav-link" v-bind:style="{color: thirdTabColor}">Extra Details</a></li>
          </ul>
          <div class="clear"></div>
          <div class="moving-tab" v-bind:style="{ width: movingTabWidth, transform: 'translate3d('+movingTabLeft+'px, 0px, 0px)' }"></div>
        </div>
        <div class="tab-content">
          <div class="tab-pane" id="details" v-if="step === 1">
            <div class="row">
              <div class="col-sm-12">
                <h4 class="info-text"> Let's start with the basic details.</h4>
              </div>
              <div class="md-layout">
                <div class="md-layout-item md-size-100">
                  <md-field class="md-invalid">
                    <i class="md-icon md-icon-font md-theme-default">face</i>
                    <label>Name</label>
                    <md-input v-model="name" type="text"/>
                  </md-field>
                </div>
                <div class="md-layout-item md-size-100">
                  <md-field class="md-invalid">
                    <i class="md-icon md-icon-font md-theme-default">mail</i>
                    <label>Email</label>
                    <md-input v-model="email" type="text"/>
                  </md-field>
                </div>
                <div class="md-layout-item md-size-100">
                  <md-field class="md-theme-default">
                    <label for="movie">Movie</label>
                    <div class="md-menu md-select">
                      <input type="text" id="md-input" name="movie" readonly="readonly" class="md-input md-input md-select-value">
                      <i class="md-icon md-icon-font md-icon-image md-theme-default">
                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                          <path d="M7 10l5 5 5-5z"></path>
                          <path d="M0 0h24v24H0z" fill="none"></path>
                        </svg>
                      </i>
                      <div style="display: none;">
                        <li class="md-list-item md-menu-item md-theme-default">
                          <button type="button" class="md-list-item-button md-list-item-container md-button-clean">
                            <div class="md-list-item-content md-ripple">
                              <span class="md-list-item-text">Fight Club</span>
                            </div>
                          </button>
                        </li>
                        <li class="md-list-item md-menu-item md-theme-default md-selected">
                          <button type="button" class="md-list-item-button md-list-item-container md-button-clean">
                            <div class="md-list-item-content md-ripple">
                              <span class="md-list-item-text">Godfather</span></div>
                          </button>
                        </li>
                        <li class="md-list-item md-menu-item md-theme-default">
                          <button type="button" class="md-list-item-button md-list-item-container md-button-clean">
                            <div class="md-list-item-content md-ripple">
                              <span class="md-list-item-text">Godfather II</span>
                            </div>
                          </button>
                        </li>
                      </div>
                      <input readonly="readonly" tabindex="-1" class="md-input-fake">
                      <select readonly="readonly" tabindex="-1" id="movie" name="movie"></select>
                    </div>
                  </md-field>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group label-floating">
                  <label class="control-label">Country</label>
                  <select class="form-control">
                    <option disabled="" selected=""></option>
                    <option value="Afghanistan"> Afghanistan</option>
                    <option value="Albania"> Albania</option>
                    <option value="Algeria"> Algeria</option>
                    <option value="American Samoa"> American Samoa</option>
                    <option value="Andorra"> Andorra</option>
                    <option value="Angola"> Angola</option>
                    <option value="Anguilla"> Anguilla</option>
                    <option value="Antarctica"> Antarctica</option>
                    <option value="...">...</option>
                  </select>
                </div>
                <div class="form-group label-floating">
                  <label class="control-label">Daily Budget</label>
                  <select class="form-control">
                    <option disabled="" selected=""></option>
                    <option value="Afghanistan"> $100</option>
                    <option value="Albania"> $100 - $499</option>
                    <option value="Algeria"> $499 - $999</option>
                    <option value="American Samoa"> $999+</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="captain" v-if="step === 2">
            <h4 class="info-text">What type of room would you want? </h4>
            <div class="row">
              <div class="md-layout">
                <div class="md-layout-item md-medium-size-100">
                  <div class="choice" data-toggle="wizard-radio" rel="tooltip"
                       title="This is good if you travel alone.">
                    <input type="radio" name="job" value="Design">
                    <div class="icon">
                      <i class="material-icons">weekend</i>
                    </div>
                    <h6>Single</h6>
                  </div>
                </div>
                <div class="md-layout-item md-medium-size-100">
                  <div class="choice" data-toggle="wizard-radio" rel="tooltip"
                       title="Select this room if you're traveling with your family.">
                    <input type="radio" name="job" value="Code">
                    <div class="icon">
                      <i class="material-icons">home</i>
                    </div>
                    <h6>Family</h6>
                  </div>
                </div>
                <div class="md-layout-item md-medium-size-100">
                  <div class="choice" data-toggle="wizard-radio" rel="tooltip"
                       title="Select this option if you are coming with your team.">
                    <input type="radio" name="job" value="Code">
                    <div class="icon">
                      <i class="material-icons">business</i>
                    </div>
                    <h6>Business</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="description" v-if="step === 3">
            <div class="row">
              <h4 class="info-text"> Drop us a small description.</h4>
              <div class="col-sm-6 col-sm-offset-1">
                <div class="form-group">
                  <label>Room description</label>
                  <textarea class="form-control" placeholder="" rows="6"></textarea>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label">Example</label>
                  <p class="description">"The room really nice name is recognized as being a really awesome room. We use
                    it every sunday when we go fishing and we catch a lot. It has some kind of magic shield around
                    it."</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="wizard-footer">
          <div class="pull-right">
            <input type='button' class='btn btn-next btn-fill btn-wd' name='next' value='Next' @click="nextStep" v-bind:class="nextButtonClass" />
            <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish'/>
          </div>
          <div class="pull-left">
            <input type='button' class='btn btn-previous btn-fill btn-wd' name='previous' value='Previous' @click="prevStep" v-bind:class="prevButtonClass" />
            <div class="footer-checkbox">
              <div class="col-sm-12">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="optionsCheckboxes">
                  </label>
                  Subscribe to our newsletter
                </div>
              </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </form>
    </div>
  </div>
  <!-- wizard container -->
</template>
<script>
import "@/assets/css/material-bootstrap-wizard.css"
export default {
  data() {
    return {
      step: 1,
      maxSteps: 3,
      firstTabColor: "#fff !important",
      secondTabColor: "#555 !important",
      thirdTabColor: "#555 !important",
      movingTabLeft: "0px"
    }
  },
  methods:{
    changeStep(changedStep) {
      this.step = changedStep;
      this.changeMovingTabPosition(changedStep);
    },
    prevStep() {
      if(this.step > 1) {
        this.step --;
        this.changeMovingTabPosition(this.step);
      }
    },
    nextStep() {
      if(this.step < this.maxSteps) {
        this.step ++;
        this.changeMovingTabPosition(this.step);
      }
    },
    changeMovingTabPosition(changedStep) {
      let clientWidth = this.$refs.container.clientWidth;
      let width = clientWidth / this.maxSteps;
      this.movingTabLeft = (this.step - 1) * width - 8;
      switch(changedStep) {
        case 1:
          this.firstTabColor = "#fff !important";
          this.secondTabColor = "#555 !important";
          this.thirdTabColor = "#555 !important";
          break;
        case 2:
          this.firstTabColor = "#555 !important";
          this.secondTabColor = "#fff !important";
          this.thirdTabColor = "#555 !important";
          break;
        case 3:
          this.firstTabColor = "#555 !important";
          this.secondTabColor = "#555 !important";
          this.thirdTabColor = "#fff !important";
          break;
      }
    }
  },
  computed: {
    prevButtonClass: function() {
      return {
        'btn-danger': this.step !== 1
      }
    },
    nextButtonClass: function() {
      return {
        'btn-danger': this.step !== this.maxSteps
      }
    },
    tabWidth() {
      return 100 / this.maxSteps;
    },
    movingTabWidth() {
      return 'calc('+this.tabWidth+'% + 16px)';
    },
    tabColor() {
      return "#FFFFFF !important";
    }
  },
  mounted() {
    this.changeMovingTabPosition();
  }
}
</script>
<style scoped>
.clear{clear: both;}
.nav-pills{position:relative;z-index: 2;margin:0;padding:0;}
.nav-pills li{float:left;list-style: none;margin:0;box-sizing:border-box;}
.nav-link{display:block;width:100%;padding: 10px 0;}
.btn-danger{cursor: pointer;}
.moving-tab{height: 46px;}
</style>
