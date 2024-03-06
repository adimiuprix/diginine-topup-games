<style>
    /* Gambar akan berubah menjadi grayscale */
    .author-poster img {
        filter: grayscale(35%);
        transition: filter 0.6s ease-in-out;
    }

    .card-back:hover{
        border: 1px solid #e2fe26;
    }

    /* Efek akan dihapus saat dihover */
    .author-poster img:hover {
        filter: grayscale(0%);
    }
</style>


<div class="flat-title-page">
    <div class="themesflat-container">
        <div class="col-12">
            <h1 class="heading text-center mb-5">Paling Favorit</h1>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="widget-tabs relative">
                    <div class="top-collections style-bottom mb-40">
                        <div class="featured carousel3-type1">
                            <div class="tf-card-collection card-back">
                                <a href="">
                                    <div class="author-poster">
                                        <img src="public/uploads/favourite/favo1.jpg" alt="" class="w-full">
                                    </div>
                                    <div class="author-infor ">
                                        <h4 class="heading"><a href="">Object bagian 1</a></h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="widget-tabs relative">
                    <div class="top-collections mb-40">
                        <div class="featured">
                            <div class="tf-card-collection">
                                <a href="">
                                    <div class="card-media">
                                        <div class="author-poster">
                                            <img src="public/uploads/favourite/favo1.jpg" alt="" class="w-full">
                                        </div>
                                    </div>
                                    <div class="author-infor ">
                                        <h4 class="heading"><a href="">Object bagian 2</a></h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
