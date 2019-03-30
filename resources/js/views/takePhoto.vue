<template>
    <div>
        <p>Take Photo View</p>
        <image-capture></image-capture>
        <router-link to="/">Back to Map</router-link>
        <router-link to="/photo">Take Photo</router-link>

    </div>
</template>

<script>
import imageCapture from './../components/imageCapture'
export default {
    name: 'takePhoto',
    components: {
        imageCapture
    }

}
</script>
