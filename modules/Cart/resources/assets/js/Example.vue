<template>

    <div class="card" style="margin:auto; width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"> {{ message }} </h5>
            <h6 class="card-subtitle mb-2 text-muted">I'm a <strong>Vue</strong> component!</h6>
            <p class="card-text">Tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla.</p>
        </div>
    </div>

</template>

<script>
    export default {
        name: "Example",
        props: ['message']
    }
</script>

<style scoped>

</style>