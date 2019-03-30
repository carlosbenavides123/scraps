<template>
    <div>
        <google-map></google-map>
        <h1>Landing Page</h1>
        <router-link to="takePhoto">Camera View</router-link>
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
        }
    }
}
</script>
