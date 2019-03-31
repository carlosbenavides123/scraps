export default {
    populategoogleapi({ commit }) {
        let path = "/api/trash/all";
        axios.get(path).then(function(res) {
            console.log(res)
            commit("POPULATEGOOGLEAPI", res.data);
        });
    },
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
};
