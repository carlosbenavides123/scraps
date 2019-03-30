<template>
    <div>
        <h1>Landing Page</h1>
        <p>{{ welcomeString }}</p>
    </div>
</template>

<script>
export default {
    name:'Landing',
    data(){
        return {
            welcomeString:"Sup"
        }
    }
}
</script>
