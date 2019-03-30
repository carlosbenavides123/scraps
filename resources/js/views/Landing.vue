<template>
    <div id="landing">
        <google-map></google-map>
        <h1>Landing Page</h1>
        <router-link to="photo">Take Photo</router-link>
    </div>
</template>

<script>
import googleMap from './../components/googleMaps/googleMapApi'
export default {
    name:'Landing',
    components: {
        googleMap
    },
    data(){
        return {
        }
    }
}
</script>
