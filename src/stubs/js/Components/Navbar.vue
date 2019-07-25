<template>
    <nav class="bg-gray-900 shadow-md">
        <div class="container p-4 flex items-center justify-between flex-wrap">
            <a href="/" class="flex items-center flex-no-shrink text-white mr-6 no-underline">
                <slot name="brand"></slot>
            </a>
            <div class="block lg:hidden">
                <button @click="navOpen = !navOpen" class="flex items-center px-3 py-2 border rounded text-teal-100 border-teal-300 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
            <div class="w-full lg:block flex-grow lg:flex lg:items-center lg:w-auto" :class="{'hidden': !navOpen}">
                <slot name="items"></slot>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    data: () => ({
        navOpen: false
    }),
    mounted() {}
}
</script>
