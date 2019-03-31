export default {
    saveImageAPI({commit}, payload){
        console.log(payload.photo)
        axios.post('api/trash', {
            photo: payload.photo,
            long: payload.long,
            lat: payload.lat,
            size: payload.size
        })
        .then(response => {
            console.log(response);
            // commit('FETCH_PHOTO_INFO', response.config.data)
        }).catch(
            failure => console.error(failure)
        )
    }
}
