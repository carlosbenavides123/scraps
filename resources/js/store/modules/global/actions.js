export default {
    saveImageAPI({commit}, formData){
        axios.post('api/trash',
        formData,
        {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }
        ).then(response => {
            console.log(response.data);
        }).catch(
            failure => console.error(failure)
        )
    }
}
