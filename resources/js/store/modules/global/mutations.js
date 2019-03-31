export default {
    POPULATEGOOGLEAPI(state, payload) {
        console.log(payload);
        state.locationPoints = payload;
    },

    FETCH_PHOTO_INFO(state, payload){
        state.photo = JSON.parse(payload)
    }
}
