<template>
  <main>
    {{ name }}
    {{ email }}
      <div class="mx-4">
          <div
              class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
          >
              <header class="text-center">
                  <h2 class="text-2xl font-bold uppercase mb-1">
                      Register
                  </h2>
                  <p class="mb-4">Create an account to post gigs</p>
              </header>

              <form @submit.prevent @submit="onSubmit">
                  <div class="mb-6">
                      <label for="name" class="inline-block text-lg mb-2">
                          Name
                      </label>
                      <input
                          v-model="name"
                          type="text"
                          class="border border-gray-200 rounded p-2 w-full"
                          name="name"
                      />
                  </div>

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
                      <!-- Error Example -->
                      <p class="text-red-500 text-xs mt-1">
                          Please enter a valid email
                      </p>
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
                      <label
                          for="password2"
                          class="inline-block text-lg mb-2"
                      >
                          Confirm Password
                      </label>
                      <input
                          v-model="password_confirmation"
                          type="password"
                          class="border border-gray-200 rounded p-2 w-full"
                          name="password2"
                      />
                  </div>

                  <div class="mb-6">
                      <button
                          type="submit"
                          class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                      >
                          Sign Up
                      </button>
                  </div>

                  <div class="mt-8">
                      <p>
                          Already have an account?
                          <a href="login.html" class="text-laravel"
                              >Login</a
                          >
                      </p>
                  </div>
              </form>
          </div>
      </div>
  </main>
</template>

<script>
import axios from 'axios'

export default {
  data: function() {
    return {
      name: "",
      email: "",
      password: "",
      password_confirmation: ""
    }
  },
  methods: {
    onSubmit() {

        axios.get("/sanctum/csrf-cookie").then((response) => {
            axios.post('/api/register', {
            name: this.name,
            email: this.email,
            password: this.password,
            password_confirmation: this.password_confirmation
            }).then((res) => {
                this.$router.push('/');
            })
        })
    }
  }
}

</script>