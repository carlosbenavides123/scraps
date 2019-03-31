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
		<confirmation-modal
			v-if="modal"
			@closeModal="closeModal"
			@sendImage="sendImage"
			:imageData="imageData"
		/>
	</div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
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
			file: null,
			modal: false,
			imageData: null,
			timer: "",
		};
	},
	created() {
		this.$getLocation({
			enableHighAccuracy: true,
			timeout: Infinity
		}).then(coordinates => {
			this.$store.dispatch("setCoord", {
				lng: coordinates.lng,
				lat: coordinates.lat
			});
		});
    },
    computed: {
        ...mapGetters([
            'currentCoord'
        ])
    },
	methods: {
		clickInput() {
			$("#imgInput").click();
		},
		sendImage() {
			let formData = new FormData();
			formData.append("photo", this.file);
			formData.append("lng", this.currentCoord.lng);
			formData.append("lat", this.currentCoord.lat);
			formData.append("size", 23);

			this.$store.dispatch("saveImageAPI", formData);
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
				this.file = files[0];
				this.modal = true;
			}
		},

		closeModal() {
			this.modal = false;
			this.imageData = null;
		}
	}
};
</script>

