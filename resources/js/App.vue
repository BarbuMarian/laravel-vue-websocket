<template>
    <div>
        adasdas
        <Navbar/>
        <tasks-page/>
        <Footer/>
    </div>
</template>

<script>

export default {
    name: "App",
    components: {Footer, TasksPage, Navbar}
}
import Navbar from "./components/Navbar.vue";
import TasksPage from "../pages/TasksPage.vue";
import Footer from "./components/Footer.vue";
</script>

<style scoped>

</style>
