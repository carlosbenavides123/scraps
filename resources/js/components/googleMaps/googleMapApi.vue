
<template>
    <vue-google-heatmap
        :points="points"
        :width="400"
        :height="350"
        :lat="ucla.lat"
        :lng="ucla.lng"
        :initialZoom="12"
    />
</template>

<script>
export default {
    name:'googleMap',
    data(){
        return {
            ucla: {lat: 34.068921, lng:-118.445181},
            points: [
                {lat: 34.068921, lng:-118.445181},
                {lat: 34.828921, lng:-118.943481},
                {lat: 34.169021, lng:-118.665181},
                {lat: 33.068952, lng:-127.445181},
                {lat: 34.068959, lng:-118.045181},
                {lat: 34.168921, lng:-119.445181},
                {lat: 34.072921, lng:-118.475181},
                {lat: 34.068921, lng:-118.445181},
            ],
        }
    },

}
</script>
