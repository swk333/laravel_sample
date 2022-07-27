import { createStore } from 'vuex'


const state = {
  user: {
    name: null,
    auth : null,
  }
}

const getters = {
  user: (state) => state.user,
}

const mutations = {
  setUser(state, user) {
    state.user = user;
  },
}

const actions = {
  setUser(context, user) {
    context.commit('setUser', user);
  },
}


export const store = createStore({
  state,
  getters,
  mutations,
  actions
})
