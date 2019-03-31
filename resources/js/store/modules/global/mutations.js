export default {
    FETCH_PHOTO_INFO(state, payload){
        state.photo = JSON.parse(payload)
    }
}
