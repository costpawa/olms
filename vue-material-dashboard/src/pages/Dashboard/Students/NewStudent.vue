<template>
  <div class="md-layout">
    <div class="md-layout-item md-size-100">
      <!-- Wizard container -->
      <div class="wizard-container" ref="container">
        <!-- You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple" -->
        <div class="card wizard-card" data-color="red" id="wizard">
          <form @submit.prevent="submitForm">
            <div class="wizard-navigation">
              <ul class="nav nav-pills" ref="steps">
                <li v-bind:style="{ width: tabWidth+'%' }"><a href="#" @click.prevent="changeStep(1)" class="nav-link" v-bind:style="{color: firstTabColor}">Personal Informations</a></li>
                <li v-bind:style="{ width: tabWidth+'%' }"><a href="#" @click.prevent="changeStep(2)" class="nav-link" v-bind:style="{color: secondTabColor}">Education Informations</a></li>
                <li v-bind:style="{ width: tabWidth+'%' }"><a href="#" @click.prevent="changeStep(3)" class="nav-link" v-bind:style="{color: thirdTabColor}">Contact Informations</a></li>
              </ul>
              <div class="clear"></div>
              <div class="moving-tab" v-bind:style="{ width: movingTabWidth, transform: 'translate3d('+movingTabLeft+'px, 0px, 0px)' }"></div>
            </div>
            <div class="tab-content">
              <div class="tab-pane" id="details" v-if="step === 1">
                <div class="row">
                  <div class="md-layout">
                    <div class="md-layout-item md-size-50">
                      <md-field class="md-invalid">
                        <label>Card Id or Fingerprint Id</label>
                        <md-input v-model="student.cardId" name="cardId" type="text"/>
                      </md-field>
                    </div>
                    <div class="md-layout-item md-size-50">
                      <md-field class="md-invalid">
                        <label>Turkish Id Number</label>
                        <md-input v-model="student.tcno" name="tcno" type="text"/>
                      </md-field>
                    </div>
                    <div class="md-layout-item md-size-50">
                        <md-field class="md-invalid">
                          <label>Name</label>
                          <md-input v-model="student.name" name="name" type="text"/>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-size-50">
                      <md-field class="md-invalid">
                        <label>Surname</label>
                        <md-input v-model="student.surname" name="surname" type="text"/>
                      </md-field>
                    </div>
                    <div class="md-layout-item md-size-50">
                      <md-field class="md-invalid">
                        <label>Cellphone Number</label>
                        <md-input v-model="student.phone" name="phone" type="text"/>
                      </md-field>
                    </div>
                    <div class="md-layout-item md-size-50">
                      <md-field class="md-invalid">
                        <label>E-mail</label>
                        <md-input v-model="student.email" name="email" type="email"/>
                      </md-field>
                    </div>
                    <div class="md-layout-item md-size-50">
                      <md-datepicker v-model="student.birthdate" name="birthdate">
                        <label>Birth date</label>
                      </md-datepicker>
                    </div>
                    <div class="md-layout-item md-size-50">
                      <md-radio v-model="student.gender" name="gender" value="0">Male</md-radio>
                      <md-radio v-model="student.gender" name="gender" value="1">Female</md-radio>
                    </div>
                    <div class="md-layout-item md-size-100">
                      <md-field class="md-invalid">
                        <label>Picture</label>
                        <md-file v-model="student.picture" name="picture" accept="image/x-png,image/gif,image/jpeg" />
                      </md-field>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="captain" v-if="step === 2">
                <div class="row">
                  <div class="md-layout">
                    <div class="md-layout-item md-size-50">
                      <md-field class="md-invalid">
                        <label>Student Year</label>
                        <md-select v-model="student.year" name="year">
                          <md-option value="1">1</md-option>
                          <md-option value="2">2</md-option>
                        </md-select>
                      </md-field>
                    </div>
                    <div class="md-layout-item md-size-50">
                      <md-field class="md-invalid">
                        <label>Branch</label>
                        <md-select v-model="student.branch" name="branch">
                        </md-select>
                      </md-field>
                    </div>
                    <div class="md-layout-item md-size-50">
                      <md-field class="md-invalid">
                        <label>Course</label>
                        <md-select v-model="student.course" name="course">
                        </md-select>
                      </md-field>
                    </div>
                    <div class="md-layout-item md-size-50">
                      <md-field class="md-invalid">
                        <label>Student Number</label>
                        <md-input v-model="student.number" name="number" type="text"/>
                      </md-field>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="description" v-if="step === 3">
                <div class="row">
                  <div class="md-layout">
                    <div class="md-layout-item md-size-50">
                      <md-field class="md-invalid">
                        <label>City</label>
                        <md-select v-model="student.city" name="city" />
                      </md-field>
                    </div>
                    <div class="md-layout-item md-size-50">
                      <md-field class="md-invalid">
                        <label>District</label>
                        <md-select v-model="student.district" name="district" />
                      </md-field>
                    </div>
                    <div class="md-layout-item md-size-50">
                      <md-field class="md-invalid">
                        <label>Neighborhood</label>
                        <md-select v-model="student.neighborhood" name="neighborhood" />
                      </md-field>
                    </div>
                    <div class="md-layout-item md-size-50">
                      <md-field class="md-invalid">
                        <label>Avenue / Street</label>
                        <md-select v-model="student.street" name="street" />
                      </md-field>
                    </div>
                    <div class="md-layout-item md-size-50">
                      <md-field class="md-invalid">
                        <label>Building Number</label>
                        <md-select v-model="student.buildingNumber" name="buildingNumber" />
                      </md-field>
                    </div>
                    <div class="md-layout-item md-size-50">
                      <md-field class="md-invalid">
                        <label>Phone Number that SMSs will be sent</label>
                        <md-input v-model="student.smsNumber" name="smsNumber" type="text"/>
                      </md-field>
                    </div>
                    <div class="md-layout-item md-size-50">
                      <md-field class="md-invalid">
                        <label>Student's mother's cellphone number</label>
                        <md-input v-model="student.motherNumber" name="motherNumber" type="text"/>
                      </md-field>
                    </div>
                    <div class="md-layout-item md-size-50">
                      <md-field class="md-invalid">
                        <label>Student's father's cellphone number</label>
                        <md-input v-model="student.fatherNumber" name="fatherNumber" type="text"/>
                      </md-field>
                    </div>
                    <div class="md-layout-item md-size-50">
                      <md-field class="md-invalid">
                        <label>Student's sibling's cellphone number</label>
                        <md-input v-model="student.siblingNumber" name="siblingNumber" type="text"/>
                      </md-field>
                    </div>
                    <div class="md-layout-item md-size-50">
                      <md-field class="md-invalid">
                        <label>Other cellphone number</label>
                        <md-input v-model="student.otherNumber" name="otherNumber" type="text"/>
                      </md-field>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="wizard-footer">
              <div class="pull-right">
                <input type='button' class='btn btn-next btn-fill btn-wd' name='next' value='Next' @click="nextStep" v-bind:class="nextButtonClass" v-if="this.step !== 3" />
                <input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' v-if="this.step === 3"/>
              </div>
              <div class="pull-left">
                <input type='button' class='btn btn-previous btn-fill btn-wd' name='previous' value='Previous' @click="prevStep" v-bind:class="prevButtonClass" />
              </div>
              <div class="clear"></div>
            </div>
          </form>
        </div>
      </div>
      <!-- wizard container -->
    </div>
  </div>
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
      movingTabLeft: "0px",
      formAction: `${process.env.VUE_APP_APP_BASE_URL}/students`,
      student: {
        cardId: "",
        name: "",
        surname: "",
        tcno: "",
        gender: "0",
        phone: "",
        email: "",
        birthdate: "2021-01-01",
        picture: "",
        year: null,
        branch: null,
        course: null,
        number: "",
        city: null,
        district: null,
        neighborhood: null,
        street: null,
        buildingNumber: null,
        smsNumber: null,
        motherNumber: null,
        fatherNumber: null,
        siblingNumber: null,
        otherNumber: null,
      }
    }
  },
  methods: {
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
    },
    async submitForm() {
      try {
        await this.$store.dispatch("students/add", this.student)
        await this.$store.dispatch("alerts/success", "Student added successfully.")
      } catch (e) {
        await this.$store.dispatch("alerts/error", "Oops, something went wrong!")
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
