<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h1>Confirmation Page</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <img class="confirmation__image" src="/images/trash_1.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="confirmation__fields">
            <div class="row">
                <div class="col-12">
                    <div class="text-left">
                        <button v-on:click="sendImage()">Post Image</button>
                        <p class="confirmation__fields-size">Size: {{ trash.size }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text-left">
                        <p class="confirmation__fields-size">Location: {{ trash.location[0].lat}} x {{ trash.location[0].lng }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <vue-google-heatmap class="confirmation__field-heatmap"
                            :points="trash.location"
                            :width="400"
                            :height="325"
                            :lat="trash.location[0].lat"
                            :lng="trash.location[0].lng"
                            :initialZoom="15"
                        />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <router-link class="btn btn-dark" to="/">Confirm and Return to Map</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import {mapActions} from 'vuex'
export default {
    name: 'Confirmation',
    data(){
        return {
            trash: {
                size: 'large',
                location: [
                    { lat: 34.828921, lng:-118.943481}
                ],
            }
        }
    },
    methods: {
        ...mapActions(
            [
                'saveImageAPI'
            ]
        ),
        sendImage: function(data){
            let payload = {
                photo: '/images/trash_1.jpg',
                long: 34.073959,
                lat: -118.065181,
                size: 23
            }
            this.saveImageAPI(payload);
            console.log("hit")
        }
    }
}
</script>
