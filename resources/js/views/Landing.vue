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
import { mapActions } from "vuex";
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
			file: "",
			modal: false,
			imageData: null
		};
	},
	methods: {
        ...mapActions(["saveImageAPI"]),
		clickInput() {
			$("#imgInput").click();
		},
		sendImage: function() {
			let payload = {
				photo: "/images/trash_1.jpg",
				// photo: 'trash_1.jpg',
				// photo: 'http://localhost:8080/images/trash_1.jpg',
				long: 34.073959,
				lat: -118.065181,
				size: 23
			};
			this.saveImageAPI(payload);
			console.log("hit");
		},
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
				console.log(files[0]);
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

