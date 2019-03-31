export default {
    saveImageAPI(payload){
        axios.post('api/saveTrash/', {
            photo: payload.photo,
            long: payload.long,
            lat: payload.lat,
            size: payload.size
        })
        .then(response => {
            console.log(response);
        }).catch(
            failure => console.error(failure)
        )
    }
}
