export default {
    saveImageAPI({commit}, payload){
        axios.post('api/trash',
        payload,
        {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }
        ).then(response => {
            console.log(response);
        }).catch(
            failure => console.error(failure)
        )
    }
}
