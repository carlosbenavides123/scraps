<template>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="text-center mb-3">
					<h1>Confirmation Page</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-6 text-center">
				<h3>Scrap Snap</h3>
				<img class="confirmation__image" src="/images/trash_1.jpg" alt>
				<p
					class="confirmation__fields-size"
				>Location: {{ trash.location[0].lat}} x {{ trash.location[0].lng }}</p>
			</div>
			<div class="col-6 text-center">
				<h3>Scrap Location</h3>
				<vue-google-heatmap
					class="confirmation__field-heatmap"
					:points="trash.location"
					:height="'100%'"
					:lat="trash.location[0].lat"
					:lng="trash.location[0].lng"
					:initialZoom="15"
				/>
				<p class="confirmation__fields-size">Size: {{ trash.size }}</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="text-center">
					<router-link class="btn btn-dark" to="/">Confirm and Return to Map</router-link>
				</div>
			</div>
		</div>
        <div class="row">
            <div class="col-12">
                <button v-on:click="sendImage()"></button>
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
}
</script>
