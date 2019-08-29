const state = {
  my_number: 0,
}

const getters = {
  getMyNumber(state) {
    return {
      number: state.my_number,
    }
  }
}

const mutations = {
  increaseNumber(state, data) {
    state.my_number += data.gia_tri;
  },
  decreaseNumber(state, data) {
    state.my_number -= data.gia_tri;
  }
}

const actions = {
  increaseNumber({commit, rootState}, data) {
    commit('increaseNumber', data);
  },
  decreaseNumber({commit, rootState}, data) {
    commit('decreaseNumber', data);
  }
}


export default {
  namespace: true,
  state,
  getters,
  actions,
  mutations,
}
