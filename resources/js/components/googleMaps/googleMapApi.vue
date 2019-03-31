
<template>
  <vue-google-heatmap
    :points="locationPoints"
    :height="'93vh'"
    :lat="ucla.lat"
    :lng="ucla.lng"
    :initialZoom="16"
  />
</template>

<script>
import { mapState, mapGetters, mapActions } from "vuex";

export default {
  name: "googleMap",
  data() {
    return {
      ucla: { lat: 34.068921, lng: -118.445181 },
    };
  },
  created(){
    this.$store.dispatch("populategoogleapi");
    this.interval = setInterval(() => this.loadData(), 12000);
  },
  computed: {
      ...mapGetters(
          [
              'locationPoints',
              'photoId'
          ]
      )
  },
  mounted(){
  },
  methods: {
    loadData: function() {
      this.$store.dispatch("populategoogleapi");
    }
  },
  beforeDestroy(){
    // clearInterval(this.photoId)
  },
};
</script>
