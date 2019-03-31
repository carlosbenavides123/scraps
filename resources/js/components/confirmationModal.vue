<template>
	<div class="modal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Upload this Scrap?</h5>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-6">
							<img class="confirmation__image" :src="imageData" alt>
						</div>
						<div class="col-6">
							<vue-google-heatmap
								class="confirmation__field-heatmap"
								:points="trash.location"
								:height="'100%'"
								:lat="trash.location[0].lat"
								:lng="trash.location[0].lng"
								:initialZoom="15"
							/>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-dark" @click="closeModal">Cancel</button>
					<button type="button" class="btn btn-dark">Confirm</button>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
export default {
    props: ['imageData'],
    data() {
		return {
			trash: {
				size: "large",
				location: [{ lat: 34.828921, lng: -118.943481 }]
			}
		};
    },
    methods: {
        closeModal() {
            this.$emit('closeModal')
        }
    }
};
</script>
