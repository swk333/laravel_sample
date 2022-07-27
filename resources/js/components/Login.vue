<template>

  <main>
    <button v-on:click="logout">logout</button>
      <div class="mx-4">
          <div
              class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
          >
              <header class="text-center">
                  <h2 class="text-2xl font-bold uppercase mb-1">
                      Log In
                  </h2>
                  <p class="mb-4">Log in to post gigs</p>
              </header>

              <form @submit.prevent="login">
                  <div class="mb-6">
                      <label for="email" class="inline-block text-lg mb-2"
                          >Email</label
                      >
                      <input
                          v-model="email"
                          type="email"
                          class="border border-gray-200 rounded p-2 w-full"
                          name="email"
                      />
                  </div>

                  <div class="mb-6">
                      <label
                          for="password"
                          class="inline-block text-lg mb-2"
                      >
                          Password
                      </label>
                      <input
                          v-model="password"
                          type="password"
                          class="border border-gray-200 rounded p-2 w-full"
                          name="password"
                      />
                  </div>

                  <div class="mb-6">
                      <button
                          type="submit"
                          class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                      >
                          Sign In
                      </button>
                  </div>

                  <div class="mt-8">
                      <p>
                          Don't have an account?
                          <a href="register.html" class="text-laravel"
                              >Register</a
                          >
                      </p>
                  </div>
              </form>
          </div>
      </div>
  </main>
</template>

<script>
import axios from 'axios';

  export default {
    data: function() {
      return {
        email: "",
        password: ""
      }
    },
    methods: {
      login() {
          axios.get("/sanctum/csrf-cookie").then((response) => {
            axios.post('/api/login', {
              email: this.email,
              password: this.password,
              }).then((res) => {
                  this.$store.dispatch('setUser', {
                    name: res.data.name,
                    email: res.data.email,
                  })
                  this.$router.push('/');
              })
        })
      },
      logout() {
        axios.post('/api/logout', {

        }).then(() => {
          console.log('logout');
        }).catch((err) => {
          console.log(err);
        })
      }
    }

  }


</script>