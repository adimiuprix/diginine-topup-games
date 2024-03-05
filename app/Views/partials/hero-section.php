<style>
    .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border-radius: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 0px;
    }
    .slider-image {
        max-width: 100%; /* Maksimumkan lebar gambar agar sesuai dengan kotak slider */
        max-height: 100%; /* Maksimumkan tinggi gambar agar sesuai dengan kotak slider */
        border-radius: 20px; /* Sesuaikan dengan radius border slide */
    }
    .slider-text {
        font-size: 24px;
        color: #333;
        text-align: center;
    }
    @keyframes slideInRight {
        0% {
            transform: translateX(100%);
            opacity: 0;
        }
        100% {
            transform: translateX(0%);
            opacity: 1;
        }
    }
    .pagination-container {
        display: flex;
        justify-content: center;
        margin-top: 20px; /* Sesuaikan jarak antara slider dan pagination */
    }
    .pagination-item {
        width: 10px;
        height: 10px;
        background-color: #ccc;
        border-radius: 50%;
        margin: 0 5px;
        cursor: pointer;
    }
    .pagination-item.active {
        background-color: #e2fe26;
    }
</style>
<div class="relative">
    <div class="swiper-container slider-3d">
        <div class="swiper-wrapper">

            <?php foreach($sliders as $slider): ?>
            <div class="swiper-slide">
                <div class="card-media">
                    <img class="slider-image" src="<?= base_url('public/assets/images/box-carousel/' . $slider->image)?>" alt="Slider 1 Image">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    
    </div>

    <div class="pagination-container">
        <?php foreach($sliders as $slider): ?>
        <div class="pagination-item"></div>
        <?php endforeach; ?>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.slider-3d', {
        // Konfigurasi Swiper
        pagination: {
            el: '.pagination-number',
            type: 'bullets',
            clickable: true,
        },
        on: {
            slideChange: function () {
                updatePagination();
            },
        },
    });

    function updatePagination() {
        const bullets = document.querySelectorAll('.pagination-item');
        bullets.forEach((bullet, index) => {
            if (index === swiper.realIndex) {
                bullet.classList.add('active');
            } else {
                bullet.classList.remove('active');
            }
        });
    }

    // Memuat pagination awal
    updatePagination();

    // Menambahkan event listener untuk pagination
    const paginationItems = document.querySelectorAll('.pagination-item');
    paginationItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            swiper.slideTo(index);
        });
    });
</script>
