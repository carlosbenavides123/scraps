<template>
    <div id="landing" class="text-center">
        <google-map></google-map>
        <button class="btn btn-primary btn-lg scrap-maps__camera" to="photo"><i class="fas fa-camera fa-2x" /></button>
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
