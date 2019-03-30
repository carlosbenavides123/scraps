
<template>
	<vue-google-heatmap
		:points="points"
		:height="'93vh'"
		:lat="ucla.lat"
		:lng="ucla.lng"
		:initialZoom="16"
	/>
</template>

<script>
export default {
	name: "googleMap",
	data() {
		return {
			ucla: { lat: 34.068921, lng: -118.445181 },
			points: [
                { lat: 34.068921, lng: -118.445181 },
                { lat: 34.062500, lng: -118.448020 },
                { lat: 34.063030, lng: -118.447990 },
				{ lat: 33.068952, lng: -127.445181 },
				{ lat: 34.068959, lng: -118.045181 },
				{ lat: 34.071300, lng: -118.439670 },
				{ lat: 34.075240, lng: -118.444440 },
				{ lat: 34.069190, lng: -118.445140 },
				{ lat: 34.070190, lng: -118.555140 },
				{ lat: 34.064830, lng: -118.444370 },
				{ lat: 34.071300, lng: -118.639670 },
				{ lat: 34.068729, lng: -118.445007 },
				{ lat: 34.088729, lng: -118.445007 },
				{ lat: 34.128729, lng: -118.445007 },
				{ lat: 34.168921, lng: -119.445181 },
				{ lat: 34.072921, lng: -118.475181 },
				{ lat: 34.068921, lng: -118.445181 }
			]
		};
	}
};
</script>
