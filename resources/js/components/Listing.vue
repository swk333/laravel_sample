<template>
        <main>
            <a href="/listings" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
            <div class="mx-4">
                <div class="bg-gray-50 border border-gray-200 p-10 rounded">
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-6 mb-6"
                            src="images/acme.png"
                            alt=""
                        />

                        <h3 class="text-2xl mb-2">{{ listing.title }}</h3>
                        <div class="text-xl font-bold mb-4">Acme Corp</div>
                        <ul class="flex">
                            <li 
                                v-for="(tag, index) in listing.tags" :key="index"
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">{{ tag }}</a>
                            </li>
                        </ul>
                        <div class="text-lg my-4">
                            <i class="fa-solid fa-location-dot"></i> {{ listing.location }}
                        </div>
                        <div class="border border-gray-200 w-full mb-6"></div>
                        <div>
                            <h3 class="text-3xl font-bold mb-4">
                                Job Description
                            </h3>
                            <div class="text-lg space-y-6">
                                <p>
                                   {{listing.description}}
                                </p>

                                <a
                                    :href="listing.email"
                                    class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-envelope"></i>
                                    Contact Employer</a
                                >

                                <a
                                    :href="listing.website"
                                    target="_blank"
                                    class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-globe"></i> Visit
                                    Website</a
                                >
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
        props: {
            id: String
        },
        data: function() {
            return {
                listing: {}
            }
        },
        methods: {
            getListing() {
                axios.get('/api/listings/' + this.id)
                .then((res) => {
                    this.listing = res.data;
                });
            },
        },
        mounted() {
            this.getListing();
        }
    }

</script>