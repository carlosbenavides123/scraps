export default {
    POPULATEGOOGLEAPI(state, payload) {
        console.log("mutations");
        console.log(payload);
        console.log("mutations");
        state.locationPoints = payload;
    }
};
