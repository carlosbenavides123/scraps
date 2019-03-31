export default {
    populategoogleapi({ commit }) {
        let path = "/api/trash/all";
        axios.get(path).then(function(res) {
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
        ).catch(
            failure => console.error(failure)
        )
    },
    setCoord({commit}, payload){
        commit('SET_COORD', payload)
    }
};
