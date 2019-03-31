export default {
    saveImageAPI({commit}, payload){
        axios.post('api/trash/', {
            photo: payload.photo,
            long: payload.long,
            lat: payload.lat,
            size: payload.size
        })
        .then(response => {
            commit('FETCH_PHOTO_INFO', response.config.data)
        }).catch(
            failure => console.error(failure)
        )
    }
}
