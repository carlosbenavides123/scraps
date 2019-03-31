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
								:points="[currentCoord]"
								:height="'100%'"
								:lat="currentCoord.lat"
								:lng="currentCoord.lng"
								:initialZoom="15"
							/>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-dark" @click="closeModal">Cancel</button>
					<button type="button" class="btn btn-dark" @click="sendImage">Confirm</button>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import { mapState, mapGetters, mapActions } from "vuex";
export default {
    props: ['imageData'],
    methods: {
        closeModal() {
            this.$emit('closeModal')
        },
        sendImage() {
            this.$emit('sendImage')
            this.$emit('closeModal')
        }
    },
    computed: {
        ...mapGetters([
            'currentCoord'
        ])
    }
};
</script>
