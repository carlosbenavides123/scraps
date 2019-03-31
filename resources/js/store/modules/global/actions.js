export default {
    populategoogleapi({ commit }) {
        let path = "/api/trash/all";
        axios.get(path).then(function(res) {
            commit("POPULATEGOOGLEAPI", res.data);
        });
    }
};
