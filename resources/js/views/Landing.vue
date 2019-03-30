<template>
	<div id="landing" class="text-center">
		<google-map/>
		<div class="scrap-maps__camera text-center">
			<router-link class="btn btn-dark scrap-maps__camera-button" to="photo">Snap a Photo <i class="fas fa-camera" /></router-link>
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
	}
};
</script>

