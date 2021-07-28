import service from '@/store/services/students-service';

const state = {
  student: {}
};

const mutations = {
  SET_RESOURCE: (state, student) => {
    state.student = student;
  }
};

const actions = {
  add({commit, dispatch}, params) {
    return service.add(params)
        .then((student) => { commit('SET_RESOURCE', student); });
  }
};

const getters = {
  student: state => state.student
};

const students = {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
};

export default students;
