export default {
    // majorData: state => index => state.majorCards[index].majorData
    photoId: state => index  =>
        state.locationsPoints[index].id
    //  state.locationPoints[Object.keys(state.locationPoints).length].id
};
