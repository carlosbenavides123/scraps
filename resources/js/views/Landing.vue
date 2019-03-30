<template>
    <div id="landing" class="text-center">
        <google-map></google-map>
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
