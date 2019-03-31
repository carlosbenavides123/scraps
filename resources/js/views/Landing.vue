<template>
	<div id="landing" class="text-center">
		<google-map/>
		<div class="scrap-maps__camera text-center">
			<button class="btn btn-dark scrap-maps__camera-button" @click="clickInput">Snap a Photo <i class="fas fa-camera"/></button>
            <input ref="file" type="file" id="imgInput" accept="image/*" capture="camera" style="display: none;">
		</div>
	</div>
</template>

<script>
import googleMap from "./../components/googleMaps/googleMapApi";
import {mapActions} from 'vuex'
export default {
	name: "Landing",
	components: {
		googleMap
	},
	data() {
		return {
            file:''
        };
    },
    methods: {
        clickInput() {
            $("#imgInput").click();
        },
        ...mapActions(
            [
                'saveImageAPI'
            ]
        ),
        sendImage: function(){
            let payload = {
                photo: '/images/trash_1.jpg',
                // photo: 'trash_1.jpg',
                // photo: 'http://localhost:8080/images/trash_1.jpg',
                long: 34.073959,
                lat: -118.065181,
                size: 23
            }
            this.saveImageAPI(payload);
            console.log("hit")
        }
    }
};
</script>

