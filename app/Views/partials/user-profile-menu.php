<div class="section-menu-left">
    <div class="box-logo">
        <a href="/"><img src="<?= base_url('public/assets/images/logo/logo.png'); ?>" alt="" /></a>
    </div>
    <div class="over-content">
        <div class="content mt-30">
            <h6>Account</h6>
            <ul class="menu-tab">
                <li class="tablinks" data-tabs="dashboard" data-url="dashboard">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.2">
                            <mask id="mask0_1075_14628" style="mask-type: luminance;" maskUnits="userSpaceOnUse" x="1" y="1" width="20" height="20">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.83398 1.83334H20.8059V20.7798H1.83398V1.83334Z" fill="white" />
                            </mask>
                            <g mask="url(#mask0_1075_14628)">
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M7.00673 3.20834C4.34473 3.20834 3.20898 4.56134 3.20898 7.73026V14.8793C3.20898 17.798 4.82048 19.4049 7.74648 19.4049H14.88C17.7987 19.4049 19.4056 17.798 19.4056 14.8793V14.8766L19.4312 10.3253C19.4312 7.20959 18.3624 5.99501 15.617 5.99501H13.0228C12.1529 5.99409 11.3224 5.57884 10.7999 4.88401L9.96299 3.77118C9.6999 3.41826 9.27915 3.20926 8.83915 3.20834H7.00673ZM14.88 20.7799H7.74648C4.09998 20.7799 1.83398 18.5185 1.83398 14.8793V7.73026C1.83398 3.81701 3.57473 1.83334 7.00673 1.83334H8.84007C9.71182 1.83426 10.5423 2.25043 11.063 2.94618L11.8981 4.05718C12.163 4.40918 12.5837 4.61909 13.0237 4.62001H15.617C19.1572 4.62001 20.8062 6.43409 20.8062 10.329L20.7806 14.8821C20.7797 18.5194 18.5192 20.7799 14.88 20.7799Z"
                                    fill="white"
                                    />
                            </g>
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M15.3235 14.4034H7.31641C6.93691 14.4034 6.62891 14.0954 6.62891 13.7159C6.62891 13.3364 6.93691 13.0284 7.31641 13.0284H15.3235C15.703 13.0284 16.011 13.3364 16.011 13.7159C16.011 14.0954 15.703 14.4034 15.3235 14.4034Z"
                                fill="white"
                                />
                        </g>
                    </svg>
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.3279 4.47353H15.142C18.5245 4.47353 20.1745 6.27936 20.1654 9.9827V14.4469C20.1654 17.9852 17.9837 20.1669 14.4362 20.1669H7.55203C4.02286 20.1669 1.83203 17.9852 1.83203 14.4377V7.55353C1.83203 3.75853 3.5187 1.83353 6.8462 1.83353H8.29453C9.14795 1.82436 9.94453 2.21853 10.467 2.8877L11.2737 3.9602C11.5304 4.28103 11.9154 4.47353 12.3279 4.47353ZM6.75391 14.016H15.2422C15.6181 14.016 15.9206 13.7044 15.9206 13.3285C15.9206 12.9435 15.6181 12.641 15.2422 12.641H6.75391C6.36891 12.641 6.06641 12.9435 6.06641 13.3285C6.06641 13.7044 6.36891 14.016 6.75391 14.016Z"
                            fill="#DDF247"
                            />
                    </svg>
                    Dashboard
                </li>
            </ul>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var tabLinks = document.querySelectorAll(".tablinks");
                    tabLinks.forEach(function(tab) {
                        tab.addEventListener("click", function() {
                            var url = this.getAttribute("data-url");
                            if (url) {
                                window.location.href = url;
                            }
                        });
                    });
                });
            </script>

        </div>
    </div>
    <div class="bottom">
        <p>© 2023 Hakcipta</p>
        <p>Di buat oleh Adimiuprix</p>
    </div>
</div>