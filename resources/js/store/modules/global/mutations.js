export default {
    POPULATEGOOGLEAPI(state, payload) {
        state.locationPoints = payload;
    },

    FETCH_PHOTO_INFO(state, payload){
        state.photo = JSON.parse(payload)
    },

    SET_COORD(state, payload){
        state.currentCoord = payload
    }
}
