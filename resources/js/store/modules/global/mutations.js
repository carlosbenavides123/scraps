export default {
    POPULATEGOOGLEAPI(state, payload) {
        console.log("mutations");
        console.log(payload);
        console.log("mutations");
        state.locationPoints = payload;
    },

    FETCH_PHOTO_INFO(state, payload){
        state.photo = JSON.parse(payload)
    }
}
