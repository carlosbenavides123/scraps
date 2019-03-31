<template>
	<div id="landing" class="text-center">
		<google-map/>
		<div class="scrap-maps__camera text-center">
			<button class="btn btn-dark scrap-maps__camera-button" @click="clickInput">Snap a Photo <i class="fas fa-camera"/></button>
            <input type="file" id="imgInput" accept="image/*" capture="camera" style="display: none;">
		</div>
	</div>
</template>

<script>
import googleMap from "./../components/googleMaps/googleMapApi";
export default {
	name: "Landing",
	components: {
		googleMap
	},
	data() {
		return {};
    },
    methods: {
        clickInput() {
            $("#imgInput").click();
        }
    }
};
</script>

