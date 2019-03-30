<template>
    <div>
        <p>Take Photo View</p>
        <image-capture></image-capture>
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
