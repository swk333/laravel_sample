<template>
  <!-- Hero -->
  <main>
  <section
      class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4"
  >
      <div
          class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
      ></div>
        
      <div class="z-10">
          <h1 class="text-6xl font-bold uppercase text-white">
              Lara<span class="text-black">Gigs</span>
          </h1>
          <p class="text-2xl text-gray-200 font-bold my-4">
              Find or post Laravel jobs & projects
          </p>
          <div>
              <a
                  href="register.html"
                  class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
                  >Sign Up to List a Gig</a
              >
          </div>
      </div>
  </section>

      <!-- Search -->
      <form action="">
          <div class="relative border-2 border-gray-100 m-4 rounded-lg">
              <div class="absolute top-4 left-3">
                  <i
                      class="fa fa-search text-gray-400 z-20 hover:text-gray-500"
                  ></i>
              </div>
              <input
                  type="text"
                  name="search"
                  class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                  placeholder="Search Laravel Gigs..."
              />
              <div class="absolute top-2 right-2">
                  <button
                      type="submit"
                      class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600"
                  >
                      Search
                  </button>
              </div>
          </div>
      </form>

      <div
          class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
      >

          <!-- Item 1 -->


          <div v-for="(listing, index) in listings" :key="index" class="bg-gray-50 border border-gray-200 rounded p-6">
            <button class="bg-blue-500 font-bold py-2 px-4 rounded">Click Me!</button>
              <div class="flex">
                  <img
                      class="hidden w-48 mr-6 md:block"
                      src="images/acme.png"
                      alt=""
                  />
                  <div>
                      <h3 class="text-2xl">
                        <router-link v-bind:to="{name: 'listings.show', params: {id: 1}}">{{ listing.title  }}</router-link>
                          <a href="show.html"></a>
                      </h3>
                      <div class="text-xl font-bold mb-4">{{ listing.company }}</div>
                      <ul class="flex">
                          <li
                            v-for="(tag, index) in splitTags(listing.tags)" :key="index"
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                          >
                              <a href="#">{{ tag }}</a>
                          </li>
                      </ul>
                      <div class="text-lg mt-4">
                          <i class="fa-solid fa-location-dot"></i> 
                          {{ listing.location }}
                      </div>
                  </div>
              </div>
          </div>

      </div>
  </main>
</template>

<script>
import axios from 'axios'

    export default {
        data: function() {
            return {
                listings: []
            }
        },
        methods: {
            getTasks() {
                axios.get('/api/listings')
                .then((res) => {
                    this.listings = res.data;
                });
            },
            splitTags: function(tags) {
                return tags.split(',');
            }
        },
        mounted() {
            this.getTasks();
        }
    }
</script>