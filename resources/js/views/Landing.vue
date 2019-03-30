<template>
    <div>
        <google-map></google-map>
        <h1>Landing Page</h1>
        <p>{{ welcomeString }}</p>
    </div>
</template>

<script>
import googleMap from './../googleMaps/googleMapApi'
export default {
    name:'Landing',
    components: {
        googleMap
    },
    data(){
        return {
            welcomeString:"Sup"
        }
    }
}
</script>
