<template>
    <nav class="flex justify-between items-center mb-4">
        <a href="/listings">Top</a>
        {{ name }}
        <ul class="flex space-x-6 mr-6 text-lg">
            <li>
                <router-link to="/register" class="hover:text-laravel"
                    ><i class="fa-solid fa-user-plus"></i> Register</router-link
                >
            </li>
            <li>
                <router-link to="/login" class="hover:text-laravel"
                    ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</router-link>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    data() {
        return {
            name: '---',
        }
    },
    computed: {
        username() {
            return this.$store.getters.user.name
        }
    },
    watch: {
    username(val, old) {
        this.name = val
    }
  },
}

</script>