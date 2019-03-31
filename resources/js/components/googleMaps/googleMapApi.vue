
<template>
  <vue-google-heatmap
    :points="locationPoints"
    :height="'93vh'"
    :lat="currentCoord.lat"
    :lng="currentCoord.lng"
    :initialZoom="16"
  />
</template>

<script>
import { mapState, mapGetters, mapActions } from "vuex";

export default {
  name: "googleMap",
  created(){
    this.$store.dispatch("populategoogleapi");
    this.interval = setInterval(() => this.loadData(), 10000);
  },
  computed: {
      ...mapGetters(
          [
              'locationPoints',
              'photoId',
              'currentCoord'
          ]
      )
  },
  methods: {
    loadData: function() {
      this.$store.dispatch("populategoogleapi");
    }
  },
};
</script>
