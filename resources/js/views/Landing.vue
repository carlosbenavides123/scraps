<template>
	<div id="landing" class="text-center">
		<google-map/>
		<div class="scrap-maps__camera text-center">
			<button class="btn btn-dark scrap-maps__camera-button" @click="clickInput">
				Snap a Photo
				<i class="fas fa-camera"/>
			</button>
			<input
				type="file"
				id="imgInput"
				accept="image/*"
				ref="fileInput"
				capture="camera"
				style="display: none;"
				@input="storePhoto"
			>
		</div>
		<confirmation-modal v-if="modal" @closeModal="closeModal" :imageData="imageData"/>
	</div>
</template>

<script>
import googleMap from "./../components/googleMaps/googleMapApi";
import confirmationModal from "./../components/confirmationModal";
export default {
	name: "Landing",
	components: {
		googleMap,
		confirmationModal
	},
	data() {
		return {
            modal: false,
			imageData: null
		};
	},
	methods: {
		clickInput() {
			this.$refs.fileInput.click();
		},

		storePhoto() {
			const input = this.$refs.fileInput;
			const files = input.files;
			if (files && files[0]) {
				const reader = new FileReader();
				reader.onload = e => {
					this.imageData = e.target.result;
				};
				reader.readAsDataURL(files[0]);
                console.log(files[0])
            }
            this.modal = true;
        },

        closeModal() {
            this.modal = false;
            this.imageData = null;
        }
	}
};
</script>

