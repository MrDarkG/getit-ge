<template>
    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div :class="`carousel-item ${index === 0 ? 'active' : ''}`" v-for="(slide, index) in slider">
                <div class="d-block w-100 vh-60" :style="`background-image:url('${slide.image}'); background-size:cover; background-position:center`">

                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="custom-text-primary">{{ slide.title }}</h3>
                    <p>{{ slide.subtitle }}</p>
                    <p>{{ slide.description }}</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</template>

<script>
export default {
    name: "CustomSlider",
    props: ['slider'],
    data: function() {
        return {
        }
    },

}
</script>
