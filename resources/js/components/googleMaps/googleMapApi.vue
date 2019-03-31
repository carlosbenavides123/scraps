
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
import { mapGetters, mapActions } from "vuex";
export default {
  name: "googleMap",
  data() {
    return {
      ucla: { lat: 34.068921, lng: -118.445181 },
      points: [
        { lat: 34.068921, lng: -118.445181 },
        { lat: 34.0625, lng: -118.44802 },
        { lat: 34.06303, lng: -118.44799 },
        { lat: 33.068952, lng: -127.445181 },
        { lat: 34.068959, lng: -118.045181 },
        { lat: 34.0713, lng: -118.43967 },
        { lat: 34.07524, lng: -118.44444 },
        { lat: 34.06919, lng: -118.44514 },
        { lat: 34.07019, lng: -118.55514 },
        { lat: 34.06483, lng: -118.44437 },
        { lat: 34.0713, lng: -118.63967 },
        { lat: 34.068729, lng: -118.445007 },
        { lat: 34.088729, lng: -118.445007 },
        { lat: 34.128729, lng: -118.445007 },
        { lat: 34.168921, lng: -119.445181 },
        { lat: 34.072921, lng: -118.475181 },
        { lat: 34.068921, lng: -118.445181 }
      ]
    };
  },
  created() {
    console.log("hello");
    this.$store.dispatch("populategoogleapi");
  }
  //   mounted() {
  //     console.log("mounted");
  //     this.$store.dispatch("populategoogleapi");
  //   }
};
</script>
