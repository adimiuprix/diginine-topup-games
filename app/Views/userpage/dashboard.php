<?= $this->extend('layouts/isuser'); ?>
<?= $this->section('user_valid') ?>

<div class="flat-tabs">

    <?= $this->include('partials/menu-user'); ?>

	<div class="content-tabs">

		<div id="dashboard" class="tabcontent active">
			<div class="wrapper-content">
				<div class="inner-content">
					<div class="add-new-collection mb-40">
						<div class="w-full">
							<h6><i class="icon-add"></i> Add new collection</h6>
							<p>create and store the best collections of NFTs</p>
						</div>
						<a href="#" class="tf-button style-1 w174 h50">Create<i class="icon-arrow-up-right2"></i></a>
					</div>
					<div class="heading-section">
						<h2 class="tf-title pb-20">China collection</h2>
					</div>
					<div class="top-collections style-bottom mb-40">
						<div
							class="featured pt-10 swiper-container carousel3-type1"
							data-swiper='{
                                        "loop":false,
                                        "slidesPerView": 1,
                                        "spaceBetween": 25,
                                        "observer": true,
                                        "observeParents": true,
                                        "navigation": {
                                            "clickable": true,
                                            "nextEl": ".next-type1",
                                            "prevEl": ".prev-type1"
                                        },
                                        "pagination": {
                                            "el": ".pagination-type1",
                                            "clickable": true
                                        },
                                        "breakpoints": {
                                            "768": {
                                                "slidesPerView": 2
                                            },
                                            "1024": {
                                                "slidesPerView": 3
                                            }
                                        }
                                    }'
						>
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-pagination pagination-type1"></div>
							<div class="swiper-button-next next-type1"></div>
							<div class="swiper-button-prev prev-type1"></div>
						</div>
					</div>
					<div class="heading-section">
						<h2 class="tf-title style-1 pb-20">Themesflat collection</h2>
					</div>
					<div class="top-collections style-bottom mb-40">
						<div
							class="featured pt-10 swiper-container carousel3-type1"
							data-swiper='{
                                        "loop":false,
                                        "slidesPerView": 1,
                                        "spaceBetween": 25,
                                        "observer": true,
                                        "observeParents": true,
                                        "navigation": {
                                            "clickable": true,
                                            "nextEl": ".next-type1",
                                            "prevEl": ".prev-type1"
                                        },
                                        "pagination": {
                                            "el": ".pagination-type1",
                                            "clickable": true
                                        },
                                        "breakpoints": {
                                            "768": {
                                                "slidesPerView": 2
                                            },
                                            "1024": {
                                                "slidesPerView": 3
                                            }
                                        }
                                    }'
						>
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-pagination pagination-type1"></div>
							<div class="swiper-button-next next-type1"></div>
							<div class="swiper-button-prev prev-type1"></div>
						</div>
					</div>
					<div class="heading-section">
						<h2 class="tf-title style-1 pb-20">My collection</h2>
					</div>
					<div class="top-collections style-bottom">
						<div
							class="featured pt-10 swiper-container carousel3-type1"
							data-swiper='{
                                        "loop":false,
                                        "slidesPerView": 1,
                                        "spaceBetween": 25,
                                        "observer": true,
                                        "observeParents": true,
                                        "navigation": {
                                            "clickable": true,
                                            "nextEl": ".next-type1",
                                            "prevEl": ".prev-type1"
                                        },
                                        "pagination": {
                                            "el": ".pagination-type1",
                                            "clickable": true
                                        },
                                        "breakpoints": {
                                            "768": {
                                                "slidesPerView": 2
                                            },
                                            "1024": {
                                                "slidesPerView": 3
                                            }
                                        }
                                    }'
						>
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-pagination pagination-type1"></div>
							<div class="swiper-button-next next-type1"></div>
							<div class="swiper-button-prev prev-type1"></div>
						</div>
					</div>
				</div>
				<div class="side-bar">
					<div class="widget widget-recently">
						<h5 class="title-widget">Recently added</h5>
						<div class="card-small-main">
							<img src="public/assets/images/blog/sidebar-05.jpg" alt="" />
							<div class="card-bottom">
								<h5><a href="#">Photography</a></h5>
								<span class="date">16hr ago</span>
							</div>
						</div>
						<div class="card-small">
							<div class="author">
								<img src="public/assets/images/blog/sidebar-06.jpg" alt="" />
								<div class="info">
									<h6><a href="#">Propw</a></h6>
									<p><a href="#">@themes</a></p>
								</div>
							</div>
							<span class="date">Mon, 08 May </span>
						</div>
						<div class="card-small">
							<div class="author">
								<img src="public/assets/images/blog/sidebar-07.jpg" alt="" />
								<div class="info">
									<h6><a href="#">Propw</a></h6>
									<p><a href="#">@themes</a></p>
								</div>
							</div>
							<span class="date">Mon, 08 May </span>
						</div>
						<div class="card-small">
							<div class="author">
								<img src="public/assets/images/blog/sidebar-08.jpg" alt="" />
								<div class="info">
									<h6><a href="#">Propw</a></h6>
									<p><a href="#">@themes</a></p>
								</div>
							</div>
							<span class="date">Mon, 08 May </span>
						</div>
					</div>
					<div class="widget widget-creators">
						<div class="flex items-center justify-between">
							<h5 class="title-widget">Top Creators</h5>
							<a class="see-all" href="#">See all</a>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="order">1.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="order">2.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-02.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="order">3.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-03.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="order">4.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-04.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
						<div class="widget-creators-item flex items-center">
							<div class="order">5.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
					</div>
					<div class="widget widget-coins">
						<h5 class="title-widget">Trending coins</h5>
						<div class="widget-coins-item flex items-center mb-20">
							<img src="public/assets/images/box-icon/coin-01.png" alt="" />
							<p><a href="#">Bitcoin</a></p>
						</div>
						<div class="widget-coins-item flex items-center mb-20">
							<img src="public/assets/images/box-icon/coin-02.png" alt="" />
							<p><a href="#">Ethereum</a></p>
						</div>
						<div class="widget-coins-item flex items-center mb-20">
							<img src="public/assets/images/box-icon/coin-03.png" alt="" />
							<p><a href="#">Cardano</a></p>
						</div>
						<div class="widget-coins-item flex items-center mb-20">
							<img src="public/assets/images/box-icon/coin-04.png" alt="" />
							<p><a href="#">Solana</a></p>
						</div>
						<div class="widget-coins-item flex items-center">
							<img src="public/assets/images/box-icon/coin-05.png" alt="" />
							<p><a href="#">Litecoin</a></p>
						</div>
					</div>
					<div class="widget widget-history">
						<div class="flex items-center justify-between">
							<h5 class="title-widget">History</h5>
							<a class="see-all" href="#">See all</a>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
								<div class="info">
									<h6><a href="#">Lorem NFT sold</a></h6>
									<span><a href="#">Sold at 1.32 ETH</a></span>
								</div>
							</div>
							<span class="time">Just now</span>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-02.png" alt="" />
								<div class="info">
									<h6><a href="#">New NFT uploaded</a></h6>
									<span><a href="#">By Marisol Pena</a></span>
								</div>
							</div>
							<span class="time">1hr ago</span>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-03.png" alt="" />
								<div class="info">
									<h6><a href="#">You followed a creator</a></h6>
									<span><a href="#">Jane Cooper</a></span>
								</div>
							</div>
							<span class="time">2hr ago</span>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-04.png" alt="" />
								<div class="info">
									<h6><a href="#">You placed a bid</a></h6>
									<span><a href="#">Whirl wind NFT</a></span>
								</div>
							</div>
							<span class="time">4hr ago</span>
						</div>
						<div class="widget-creators-item flex items-center">
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
								<div class="info">
									<h6><a href="#">You followed a creator</a></h6>
									<span><a href="#">Courtney Henry</a></span>
								</div>
							</div>
							<span class="time">16hr ago</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="history-trx" class="tabcontent">
			<div class="wrapper-content">
				<div class="inner-content">
					<div class="action__body w-full mb-40">
						<div class="tf-tsparticles">
							<div id="tsparticles5" data-color="#161616" data-line="#000"></div>
						</div>
						<h2>Discover, create and sell your own NFT</h2>
						<div class="flat-button flex">
							<a href="#" class="tf-button style-2 h50 w190 mr-10">Explore now<i class="icon-arrow-up-right2"></i></a>
							<a href="#" class="tf-button style-2 h50 w230">Create your first NFT<i class="icon-arrow-up-right2"></i></a>
						</div>
						<div class="bg-home7">
							<div
								class="swiper-container autoslider3reverse"
								data-swiper='{
                                        "loop":true,
                                        "slidesPerView": "auto",
                                        "spaceBetween": 14,
                                        "direction": "vertical",
                                        "speed": 10000,
                                        "observer": true,
                                        "observeParents": true,
                                        "autoplay": {
                                            "delay": "0",
                                            "disableOnInteraction": false
                                        }
                                    }'
							>
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
								</div>
							</div>
							<div
								class="swiper-container autoslider4reverse"
								data-swiper='{
                                        "loop":true,
                                        "slidesPerView": "auto",
                                        "spaceBetween": 14,
                                        "direction": "vertical",
                                        "speed": 10000,
                                        "observer": true,
                                        "observeParents": true,
                                        "autoplay": {
                                            "delay": "0",
                                            "disableOnInteraction": false,
                                            "reverseDirection": true
                                        }
                                    }'
							>
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
								</div>
							</div>
							<div
								class="swiper-container autoslider3reverse"
								data-swiper='{
                                        "loop":true,
                                        "slidesPerView": "auto",
                                        "spaceBetween": 14,
                                        "direction": "vertical",
                                        "speed": 10000,
                                        "observer": true,
                                        "observeParents": true,
                                        "autoplay": {
                                            "delay": "0",
                                            "disableOnInteraction": false
                                        }
                                    }'
							>
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="heading-section">
						<h2 class="tf-title pb-20">Favorite collection</h2>
					</div>
					<div class="top-collections style-bottom mb-40">
						<div
							class="featured pt-10 swiper-container carousel3-type1"
							data-swiper='{
                                        "loop":false,
                                        "slidesPerView": 1,
                                        "spaceBetween": 25,
                                        "observer": true,
                                        "observeParents": true,
                                        "navigation": {
                                            "clickable": true,
                                            "nextEl": ".next-type1",
                                            "prevEl": ".prev-type1"
                                        },
                                        "pagination": {
                                            "el": ".pagination-type1",
                                            "clickable": true
                                        },
                                        "breakpoints": {
                                            "768": {
                                                "slidesPerView": 2
                                            },
                                            "1024": {
                                                "slidesPerView": 3
                                            }
                                        }
                                    }'
						>
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-05.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-06.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-07.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-08.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-09.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-10.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-11.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-12.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="tf-card-collection">
										<a href="author-2.html">
											<div class="media-images-collection">
												<img src="public/assets/images/box-item/img-collection-01.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-02.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-03.jpg" alt="" />
												<img src="public/assets/images/box-item/img-collection-04.jpg" alt="" />
												<div class="author-poster">
													<img src="public/assets/images/avatar/avatar-01.png" alt="" class="w-full" />
												</div>
											</div>
										</a>
										<div class="card-bottom">
											<div class="author">
												<h5><a href="author-1.html">Bored ape#21</a></h5>
												<div class="infor">@Themesflat</div>
											</div>
											<div class="bottom-right">
												<div class="shop">
													<div class="icon">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z"
																stroke="white"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
															></path>
														</svg>
													</div>
													<p>12 Item</p>
												</div>
												<div class="like">
													<span class="wishlist-button icon-heart"></span>
													<p>97 like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-pagination pagination-type1"></div>
							<div class="swiper-button-next next-type1"></div>
							<div class="swiper-button-prev prev-type1"></div>
						</div>
					</div>
					<div class="heading-section">
						<h2 class="tf-title pb-30">My favorite</h2>
					</div>
					<div class="widget-tabs relative">
						<div class="tf-soft">
							<div class="soft-right">
								<div class="dropdown">
									<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M3.125 5.625H16.875M3.125 10H16.875M3.125 14.375H10" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										<span>Sort by: recently added</span>
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<h6>Sort by</h6>
										<a href="#" class="dropdown-item">
											<div class="sort-filter" href="#">
												<span>Recently added</span>
												<span class="icon-tick"><span class="path2"></span></span>
											</div>
										</a>
										<a href="#" class="dropdown-item">
											<div class="sort-filter active" href="#">
												<span>Price: Low to High</span>
												<span class="icon-tick"><span class="path2"></span></span>
											</div>
										</a>
										<a href="#" class="dropdown-item">
											<div class="sort-filter" href="#">
												<span>Price: High to Low</span>
												<span class="icon-tick"><span class="path2"></span></span>
											</div>
										</a>
										<a href="#" class="dropdown-item">
											<div class="sort-filter" href="#">
												<span>Auction ending soon</span>
												<span class="icon-tick"><span class="path2"></span></span>
											</div>
										</a>

										<h6>Options</h6>
										<a href="#" class="dropdown-item">
											<div class="sort-filter" href="#">
												<span>Auction ending soon</span>
												<input class="check" type="checkbox" value="checkbox" name="check" checked="" />
											</div>
										</a>
										<a href="#" class="dropdown-item">
											<div class="sort-filter" href="#">
												<span>Show lazy minted</span>
												<input class="check" type="checkbox" value="checkbox" name="check" />
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<ul class="widget-menu-tab">
							<li class="item-title">
								<span class="inner">Category</span>
							</li>
							<li class="item-title active">
								<span class="inner">Items</span>
							</li>
							<li class="item-title">
								<span class="inner">Status</span>
							</li>
							<li class="item-title">
								<span class="inner">Price range</span>
							</li>
						</ul>
						<div class="widget-content-tab">
							<div class="widget-content-inner">
								<div class="wrap-box-card">
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-25.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-01.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-26.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-02.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-27.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-03.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-28.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-04.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-29.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-04.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-30.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-03.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-31.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-02.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-32.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-01.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="widget-content-inner active">
								<div class="wrap-box-card">
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-25.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-01.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-26.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-02.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-27.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-03.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-28.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-04.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-29.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-04.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-30.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-03.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-31.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-02.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-32.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-01.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="widget-content-inner">
								<div class="wrap-box-card">
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-25.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-01.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-26.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-02.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-27.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-03.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-28.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-04.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-29.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-04.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-30.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-03.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-31.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-02.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-32.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-01.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="widget-content-inner">
								<div class="wrap-box-card">
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-25.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-01.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-26.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-02.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-27.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-03.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-28.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-04.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-29.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-04.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-30.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-03.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-31.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-02.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
									<div class="col-item">
										<div class="tf-card-box style-1">
											<div class="card-media">
												<a href="#">
													<img src="public/assets/images/box-item/card-item-32.jpg" alt="" />
												</a>
												<span class="wishlist-button icon-heart"></span>
												<div class="featured-countdown">
													<span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
												</div>
												<div class="button-place-bid">
													<a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
												</div>
											</div>
											<h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
											<div class="author flex items-center">
												<div class="avatar">
													<img src="public/assets/images/avatar/avatar-box-01.jpg" alt="Image" />
												</div>
												<div class="info">
													<span>Posted by:</span>
													<h6><a href="author-2.html">Cody Fisher</a></h6>
												</div>
											</div>
											<div class="divider"></div>
											<div class="meta-info flex items-center justify-between">
												<span class="text-bid">Current Bid</span>
												<h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="side-bar">
					<div class="widget widget-recently">
						<h5 class="title-widget">Recently added</h5>
						<div class="card-small-main">
							<img src="public/assets/images/blog/sidebar-05.jpg" alt="" />
							<div class="card-bottom">
								<h5><a href="#">Photography</a></h5>
								<span class="date">16hr ago</span>
							</div>
						</div>
						<div class="card-small">
							<div class="author">
								<img src="public/assets/images/blog/sidebar-06.jpg" alt="" />
								<div class="info">
									<h6><a href="#">Propw</a></h6>
									<p><a href="#">@themes</a></p>
								</div>
							</div>
							<span class="date">Mon, 08 May </span>
						</div>
						<div class="card-small">
							<div class="author">
								<img src="public/assets/images/blog/sidebar-07.jpg" alt="" />
								<div class="info">
									<h6><a href="#">Propw</a></h6>
									<p><a href="#">@themes</a></p>
								</div>
							</div>
							<span class="date">Mon, 08 May </span>
						</div>
						<div class="card-small">
							<div class="author">
								<img src="public/assets/images/blog/sidebar-08.jpg" alt="" />
								<div class="info">
									<h6><a href="#">Propw</a></h6>
									<p><a href="#">@themes</a></p>
								</div>
							</div>
							<span class="date">Mon, 08 May </span>
						</div>
					</div>
					<div class="widget widget-creators">
						<div class="flex items-center justify-between">
							<h5 class="title-widget">Top Creators</h5>
							<a class="see-all" href="#">See all</a>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="order">1.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="order">2.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-02.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="order">3.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-03.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="order">4.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-04.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
						<div class="widget-creators-item flex items-center">
							<div class="order">5.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
					</div>
					<div class="widget widget-coins">
						<h5 class="title-widget">Trending coins</h5>
						<div class="widget-coins-item flex items-center mb-20">
							<img src="public/assets/images/box-icon/coin-01.png" alt="" />
							<p><a href="#">Bitcoin</a></p>
						</div>
						<div class="widget-coins-item flex items-center mb-20">
							<img src="public/assets/images/box-icon/coin-02.png" alt="" />
							<p><a href="#">Ethereum</a></p>
						</div>
						<div class="widget-coins-item flex items-center mb-20">
							<img src="public/assets/images/box-icon/coin-03.png" alt="" />
							<p><a href="#">Cardano</a></p>
						</div>
						<div class="widget-coins-item flex items-center mb-20">
							<img src="public/assets/images/box-icon/coin-04.png" alt="" />
							<p><a href="#">Solana</a></p>
						</div>
						<div class="widget-coins-item flex items-center">
							<img src="public/assets/images/box-icon/coin-05.png" alt="" />
							<p><a href="#">Litecoin</a></p>
						</div>
					</div>
					<div class="widget widget-history">
						<div class="flex items-center justify-between">
							<h5 class="title-widget">History</h5>
							<a class="see-all" href="#">See all</a>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
								<div class="info">
									<h6><a href="#">Lorem NFT sold</a></h6>
									<span><a href="#">Sold at 1.32 ETH</a></span>
								</div>
							</div>
							<span class="time">Just now</span>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-02.png" alt="" />
								<div class="info">
									<h6><a href="#">New NFT uploaded</a></h6>
									<span><a href="#">By Marisol Pena</a></span>
								</div>
							</div>
							<span class="time">1hr ago</span>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-03.png" alt="" />
								<div class="info">
									<h6><a href="#">You followed a creator</a></h6>
									<span><a href="#">Jane Cooper</a></span>
								</div>
							</div>
							<span class="time">2hr ago</span>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-04.png" alt="" />
								<div class="info">
									<h6><a href="#">You placed a bid</a></h6>
									<span><a href="#">Whirl wind NFT</a></span>
								</div>
							</div>
							<span class="time">4hr ago</span>
						</div>
						<div class="widget-creators-item flex items-center">
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
								<div class="info">
									<h6><a href="#">You followed a creator</a></h6>
									<span><a href="#">Courtney Henry</a></span>
								</div>
							</div>
							<span class="time">16hr ago</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="history-deposit" class="tabcontent">
			<div class="wrapper-content">
				<div class="inner-content">
					<div class="action__body w-full mb-40">
						<div class="tf-tsparticles">
							<div id="tsparticles6" data-color="#161616" data-line="#000"></div>
						</div>
						<h2>Discover, create and sell your own NFT</h2>
						<div class="flat-button flex">
							<a href="#" class="tf-button style-2 h50 w190 mr-10">Explore now<i class="icon-arrow-up-right2"></i></a>
							<a href="#" class="tf-button style-2 h50 w230">Create your first NFT<i class="icon-arrow-up-right2"></i></a>
						</div>
						<div class="bg-home7">
							<div
								class="swiper-container autoslider3reverse"
								data-swiper='{
                                        "loop":true,
                                        "slidesPerView": "auto",
                                        "spaceBetween": 14,
                                        "direction": "vertical",
                                        "speed": 10000,
                                        "observer": true,
                                        "observeParents": true,
                                        "autoplay": {
                                            "delay": "0",
                                            "disableOnInteraction": false
                                        }
                                    }'
							>
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
								</div>
							</div>
							<div
								class="swiper-container autoslider4reverse"
								data-swiper='{
                                        "loop":true,
                                        "slidesPerView": "auto",
                                        "spaceBetween": 14,
                                        "direction": "vertical",
                                        "speed": 10000,
                                        "observer": true,
                                        "observeParents": true,
                                        "autoplay": {
                                            "delay": "0",
                                            "disableOnInteraction": false,
                                            "reverseDirection": true
                                        }
                                    }'
							>
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
								</div>
							</div>
							<div
								class="swiper-container autoslider3reverse"
								data-swiper='{
                                        "loop":true,
                                        "slidesPerView": "auto",
                                        "spaceBetween": 14,
                                        "direction": "vertical",
                                        "speed": 10000,
                                        "observer": true,
                                        "observeParents": true,
                                        "autoplay": {
                                            "delay": "0",
                                            "disableOnInteraction": false
                                        }
                                    }'
							>
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="heading-section">
						<h2 class="tf-title">Connect your wallet</h2>
					</div>
					<p>If you don't have a wallet, you can select a provider and create one now. <span class="tf-color button-connect-wallet">Learn more</span></p>
					<div id="connect-wallet-grid">
						<div class="wrap-box-card">
							<div class="col-item">
								<div class="box-wallet">
									<img src="public/assets/images/box-icon/wallet-01.png" alt="" />
									<h6><a href="#">MetaMask</a></h6>
									<p>Throw myself down among the tall</p>
								</div>
							</div>
							<div class="col-item">
								<div class="box-wallet">
									<img src="public/assets/images/box-icon/wallet-02.png" alt="" />
									<h6><a href="#">Coibase Wallet</a></h6>
									<p>Lorem ipsum dolor sit amet, consectetur</p>
								</div>
							</div>
							<div class="col-item">
								<div class="box-wallet">
									<img src="public/assets/images/box-icon/wallet-03.png" alt="" />
									<h6><a href="#">WalletConnect</a></h6>
									<p>Sed euismod ante et leo commodo, ac faucibus</p>
								</div>
							</div>
							<div class="col-item">
								<div class="box-wallet">
									<img src="public/assets/images/box-icon/wallet-04.png" alt="" />
									<h6><a href="#">Ledger</a></h6>
									<p>Proin suscipit sem a nunc eleifend</p>
								</div>
							</div>
							<div class="col-item">
								<div class="box-wallet">
									<img src="public/assets/images/box-icon/wallet-05.png" alt="" />
									<h6><a href="#">Phantom</a></h6>
									<p>Vestibulum malesuada tortor vel erat</p>
								</div>
							</div>
							<div class="col-item">
								<div class="box-wallet">
									<img src="public/assets/images/box-icon/wallet-06.png" alt="" />
									<h6><a href="#">Bitkeep</a></h6>
									<p>Morbi vel eros sit amet quam viverra</p>
								</div>
							</div>
							<div class="col-item">
								<div class="box-wallet">
									<img src="public/assets/images/box-icon/wallet-07.png" alt="" />
									<h6><a href="#">Core</a></h6>
									<p>Mauris nec orci ac urna luctus</p>
								</div>
							</div>
							<div class="col-item">
								<div class="box-wallet">
									<img src="public/assets/images/box-icon/wallet-08.png" alt="" />
									<h6><a href="#">Glow</a></h6>
									<p>Pellentesque pretium felis vitae augue</p>
								</div>
							</div>
							<div class="col-item">
								<div class="box-wallet">
									<img src="public/assets/images/box-icon/wallet-09.png" alt="" />
									<h6><a href="#">Fortmatic</a></h6>
									<p>Nunc eget eros at tellus euismod</p>
								</div>
							</div>
							<div class="col-item">
								<div class="box-wallet">
									<img src="public/assets/images/box-icon/wallet-10.png" alt="" />
									<h6><a href="#">Kaikas</a></h6>
									<p>Aenean quis odio ultricies ex faucibus</p>
								</div>
							</div>
							<div class="col-item">
								<div class="box-wallet">
									<img src="public/assets/images/box-icon/wallet-11.png" alt="" />
									<h6><a href="#">Bitski</a></h6>
									<p>Fusce sed felis non purus pellentesque</p>
								</div>
							</div>
							<div class="col-item">
								<div class="box-wallet">
									<img src="public/assets/images/box-icon/wallet-12.png" alt="" />
									<h6><a href="#">Solflare</a></h6>
									<p>Donec in diam vulputate molestie</p>
								</div>
							</div>
							<div class="col-item">
								<div class="box-wallet">
									<img src="public/assets/images/box-icon/wallet-13.png" alt="" />
									<h6><a href="#">OperaTouch</a></h6>
									<p>Morbi vehicula ante eget cursus posuere</p>
								</div>
							</div>
							<div class="col-item">
								<div class="box-wallet">
									<img src="public/assets/images/box-icon/wallet-14.png" alt="" />
									<h6><a href="#">OperaTouch</a></h6>
									<p>Morbi vehicula ante eget cursus posuere</p>
								</div>
							</div>
						</div>
					</div>
					<div id="connect-wallet-list">
						<div class="box-wallet style-1">
							<img src="public/assets/images/box-icon/wallet-01.png" alt="" />
							<div class="info">
								<h6><a href="#">Glow</a></h6>
								<p>Popular</p>
							</div>
							<a href="#" class="tf-button style-3">Connect <i class="icon-arrow-up-right2"></i></a>
						</div>
						<div class="box-wallet style-1">
							<img src="public/assets/images/box-icon/wallet-02.png" alt="" />
							<div class="info">
								<h6><a href="#">Coibase Wallet</a></h6>
							</div>
							<a href="#" class="tf-button style-3">Connect <i class="icon-arrow-up-right2"></i></a>
						</div>
						<div class="box-wallet style-1">
							<img src="public/assets/images/box-icon/wallet-03.png" alt="" />
							<div class="info">
								<h6><a href="#">WalletConnect</a></h6>
							</div>
							<a href="#" class="tf-button style-3">Connect <i class="icon-arrow-up-right2"></i></a>
						</div>
						<div class="box-wallet style-1">
							<img src="public/assets/images/box-icon/wallet-04.png" alt="" />
							<div class="info">
								<h6><a href="#">Ledger</a></h6>
							</div>
							<a href="#" class="tf-button style-3">Connect <i class="icon-arrow-up-right2"></i></a>
						</div>
						<div class="box-wallet style-1">
							<img src="public/assets/images/box-icon/wallet-05.png" alt="" />
							<div class="info">
								<h6><a href="#">Phantom</a></h6>
								<p>Solana</p>
							</div>
							<a href="#" class="tf-button style-3">Connect <i class="icon-arrow-up-right2"></i></a>
						</div>
						<div class="box-wallet style-1">
							<img src="public/assets/images/box-icon/wallet-06.png" alt="" />
							<div class="info">
								<h6><a href="#">Bitkeep</a></h6>
								<p>BNB Chain</p>
							</div>
							<a href="#" class="tf-button style-3">Connect <i class="icon-arrow-up-right2"></i></a>
						</div>
						<div class="box-wallet style-1">
							<img src="public/assets/images/box-icon/wallet-07.png" alt="" />
							<div class="info">
								<h6><a href="#">Core</a></h6>
								<p>Avalanche</p>
							</div>
							<a href="#" class="tf-button style-3">Connect <i class="icon-arrow-up-right2"></i></a>
						</div>
						<div class="box-wallet style-1">
							<img src="public/assets/images/box-icon/wallet-08.png" alt="" />
							<div class="info">
								<h6><a href="#">Glow</a></h6>
								<p>Solana</p>
							</div>
							<a href="#" class="tf-button style-3">Connect <i class="icon-arrow-up-right2"></i></a>
						</div>
						<div class="box-wallet style-1">
							<img src="public/assets/images/box-icon/wallet-09.png" alt="" />
							<div class="info">
								<h6><a href="#">Fortmatic</a></h6>
							</div>
							<a href="#" class="tf-button style-3">Connect <i class="icon-arrow-up-right2"></i></a>
						</div>
						<div class="box-wallet style-1">
							<img src="public/assets/images/box-icon/wallet-10.png" alt="" />
							<div class="info">
								<h6><a href="#">Kaikas</a></h6>
								<p>Klaytn</p>
							</div>
							<a href="#" class="tf-button style-3">Connect <i class="icon-arrow-up-right2"></i></a>
						</div>
						<div class="box-wallet style-1">
							<img src="public/assets/images/box-icon/wallet-11.png" alt="" />
							<div class="info">
								<h6><a href="#">Bitski</a></h6>
							</div>
							<a href="#" class="tf-button style-3">Connect <i class="icon-arrow-up-right2"></i></a>
						</div>
						<div class="box-wallet style-1">
							<img src="public/assets/images/box-icon/wallet-12.png" alt="" />
							<div class="info">
								<h6><a href="#">Solflare</a></h6>
								<p>Solana</p>
							</div>
							<a href="#" class="tf-button style-3">Connect <i class="icon-arrow-up-right2"></i></a>
						</div>
						<div class="box-wallet style-1">
							<img src="public/assets/images/box-icon/wallet-13.png" alt="" />
							<div class="info">
								<h6><a href="#">OperaTouch</a></h6>
								<p>Mobile only</p>
							</div>
							<a href="#" class="tf-button style-3">Connect <i class="icon-arrow-up-right2"></i></a>
						</div>
						<div class="box-wallet style-1">
							<img src="public/assets/images/box-icon/wallet-14.png" alt="" />
							<div class="info">
								<h6><a href="#">OperaTouch</a></h6>
								<p>Mobile only</p>
							</div>
							<a href="#" class="tf-button style-3">Connect <i class="icon-arrow-up-right2"></i></a>
						</div>
					</div>
				</div>
				<div class="side-bar">
					<div class="widget widget-recently">
						<h5 class="title-widget">Recently added</h5>
						<div class="card-small-main">
							<img src="public/assets/images/blog/sidebar-05.jpg" alt="" />
							<div class="card-bottom">
								<h5><a href="#">Photography</a></h5>
								<span class="date">16hr ago</span>
							</div>
						</div>
						<div class="card-small">
							<div class="author">
								<img src="public/assets/images/blog/sidebar-06.jpg" alt="" />
								<div class="info">
									<h6><a href="#">Propw</a></h6>
									<p><a href="#">@themes</a></p>
								</div>
							</div>
							<span class="date">Mon, 08 May </span>
						</div>
						<div class="card-small">
							<div class="author">
								<img src="public/assets/images/blog/sidebar-07.jpg" alt="" />
								<div class="info">
									<h6><a href="#">Propw</a></h6>
									<p><a href="#">@themes</a></p>
								</div>
							</div>
							<span class="date">Mon, 08 May </span>
						</div>
						<div class="card-small">
							<div class="author">
								<img src="public/assets/images/blog/sidebar-08.jpg" alt="" />
								<div class="info">
									<h6><a href="#">Propw</a></h6>
									<p><a href="#">@themes</a></p>
								</div>
							</div>
							<span class="date">Mon, 08 May </span>
						</div>
					</div>
					<div class="widget widget-creators">
						<div class="flex items-center justify-between">
							<h5 class="title-widget">Top Creators</h5>
							<a class="see-all" href="#">See all</a>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="order">1.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="order">2.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-02.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="order">3.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-03.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="order">4.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-04.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
						<div class="widget-creators-item flex items-center">
							<div class="order">5.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
					</div>
					<div class="widget widget-coins">
						<h5 class="title-widget">Trending coins</h5>
						<div class="widget-coins-item flex items-center mb-20">
							<img src="public/assets/images/box-icon/coin-01.png" alt="" />
							<p><a href="#">Bitcoin</a></p>
						</div>
						<div class="widget-coins-item flex items-center mb-20">
							<img src="public/assets/images/box-icon/coin-02.png" alt="" />
							<p><a href="#">Ethereum</a></p>
						</div>
						<div class="widget-coins-item flex items-center mb-20">
							<img src="public/assets/images/box-icon/coin-03.png" alt="" />
							<p><a href="#">Cardano</a></p>
						</div>
						<div class="widget-coins-item flex items-center mb-20">
							<img src="public/assets/images/box-icon/coin-04.png" alt="" />
							<p><a href="#">Solana</a></p>
						</div>
						<div class="widget-coins-item flex items-center">
							<img src="public/assets/images/box-icon/coin-05.png" alt="" />
							<p><a href="#">Litecoin</a></p>
						</div>
					</div>
					<div class="widget widget-history">
						<div class="flex items-center justify-between">
							<h5 class="title-widget">History</h5>
							<a class="see-all" href="#">See all</a>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
								<div class="info">
									<h6><a href="#">Lorem NFT sold</a></h6>
									<span><a href="#">Sold at 1.32 ETH</a></span>
								</div>
							</div>
							<span class="time">Just now</span>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-02.png" alt="" />
								<div class="info">
									<h6><a href="#">New NFT uploaded</a></h6>
									<span><a href="#">By Marisol Pena</a></span>
								</div>
							</div>
							<span class="time">1hr ago</span>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-03.png" alt="" />
								<div class="info">
									<h6><a href="#">You followed a creator</a></h6>
									<span><a href="#">Jane Cooper</a></span>
								</div>
							</div>
							<span class="time">2hr ago</span>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-04.png" alt="" />
								<div class="info">
									<h6><a href="#">You placed a bid</a></h6>
									<span><a href="#">Whirl wind NFT</a></span>
								</div>
							</div>
							<span class="time">4hr ago</span>
						</div>
						<div class="widget-creators-item flex items-center">
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
								<div class="info">
									<h6><a href="#">You followed a creator</a></h6>
									<span><a href="#">Courtney Henry</a></span>
								</div>
							</div>
							<span class="time">16hr ago</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="mutation" class="tabcontent">
			<div class="wrapper-content">
				<div class="inner-content">
					<div class="action__body w-full mb-40">
						<div class="tf-tsparticles">
							<div id="tsparticles7" data-color="#161616" data-line="#000"></div>
						</div>
						<h2>Discover, create and sell your own NFT</h2>
						<div class="flat-button flex">
							<a href="#" class="tf-button style-2 h50 w190 mr-10">Explore now<i class="icon-arrow-up-right2"></i></a>
							<a href="#" class="tf-button style-2 h50 w230">Create your first NFT<i class="icon-arrow-up-right2"></i></a>
						</div>
						<div class="bg-home7">
							<div
								class="swiper-container autoslider3reverse"
								data-swiper='{
                                        "loop":true,
                                        "slidesPerView": "auto",
                                        "spaceBetween": 14,
                                        "direction": "vertical",
                                        "speed": 10000,
                                        "observer": true,
                                        "observeParents": true,
                                        "autoplay": {
                                            "delay": "0",
                                            "disableOnInteraction": false
                                        }
                                    }'
							>
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
								</div>
							</div>
							<div
								class="swiper-container autoslider4reverse"
								data-swiper='{
                                        "loop":true,
                                        "slidesPerView": "auto",
                                        "spaceBetween": 14,
                                        "direction": "vertical",
                                        "speed": 10000,
                                        "observer": true,
                                        "observeParents": true,
                                        "autoplay": {
                                            "delay": "0",
                                            "disableOnInteraction": false,
                                            "reverseDirection": true
                                        }
                                    }'
							>
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
								</div>
							</div>
							<div
								class="swiper-container autoslider3reverse"
								data-swiper='{
                                        "loop":true,
                                        "slidesPerView": "auto",
                                        "spaceBetween": 14,
                                        "direction": "vertical",
                                        "speed": 10000,
                                        "observer": true,
                                        "observeParents": true,
                                        "autoplay": {
                                            "delay": "0",
                                            "disableOnInteraction": false
                                        }
                                    }'
							>
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="heading-section">
						<h2 class="tf-title pb-30">History</h2>
					</div>
					<div class="widget-tabs relative">
						<div class="tf-soft">
							<div class="soft-right">
								<div class="dropdown">
									<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M3.125 5.625H16.875M3.125 10H16.875M3.125 14.375H10" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										<span>Sort by: 7 Day</span>
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<h6>Sort by</h6>
										<a href="#" class="dropdown-item">
											<div class="sort-filter" href="#">
												<span>1 Day</span>
												<span class="icon-tick"><span class="path2"></span></span>
											</div>
										</a>
										<a href="#" class="dropdown-item">
											<div class="sort-filter active" href="#">
												<span>7 Day</span>
												<span class="icon-tick"><span class="path2"></span></span>
											</div>
										</a>
										<a href="#" class="dropdown-item">
											<div class="sort-filter" href="#">
												<span>1 Month</span>
												<span class="icon-tick"><span class="path2"></span></span>
											</div>
										</a>
										<a href="#" class="dropdown-item">
											<div class="sort-filter" href="#">
												<span>1 Year</span>
												<span class="icon-tick"><span class="path2"></span></span>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<ul class="widget-menu-tab">
							<li class="item-title active">
								<span class="inner">All history</span>
							</li>
							<li class="item-title">
								<span class="inner">Transaction</span>
							</li>
							<li class="item-title">
								<span class="inner">Upload</span>
							</li>
							<li class="item-title">
								<span class="inner">Operation</span>
							</li>
						</ul>
						<div class="widget-content-tab pt-10">
							<div class="widget-content-inner active">
								<div class="widget-history">
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
											<div class="info">
												<h6><a href="#">Lorem NFT sold</a></h6>
												<span><a href="#">Sold at 1.32 ETH</a></span>
											</div>
										</div>
										<span class="time">Just now</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-02.png" alt="" />
											<div class="info">
												<h6><a href="#">New NFT uploaded</a></h6>
												<span><a href="#">By Marisol Pena</a></span>
											</div>
										</div>
										<span class="time">1hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-03.png" alt="" />
											<div class="info">
												<h6><a href="#">You followed a creator</a></h6>
												<span><a href="#">Jane Cooper</a></span>
											</div>
										</div>
										<span class="time">2hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-04.png" alt="" />
											<div class="info">
												<h6><a href="#">You placed a bid</a></h6>
												<span><a href="#">Whirl wind NFT</a></span>
											</div>
										</div>
										<span class="time">4hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
											<div class="info">
												<h6><a href="#">You followed a creator</a></h6>
												<span><a href="#">Courtney Henry</a></span>
											</div>
										</div>
										<span class="time">16hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
											<div class="info">
												<h6><a href="#">Lorem NFT sold</a></h6>
												<span><a href="#">Sold at 1.32 ETH</a></span>
											</div>
										</div>
										<span class="time">Just now</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-02.png" alt="" />
											<div class="info">
												<h6><a href="#">New NFT uploaded</a></h6>
												<span><a href="#">By Marisol Pena</a></span>
											</div>
										</div>
										<span class="time">1hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-03.png" alt="" />
											<div class="info">
												<h6><a href="#">You followed a creator</a></h6>
												<span><a href="#">Jane Cooper</a></span>
											</div>
										</div>
										<span class="time">2hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-04.png" alt="" />
											<div class="info">
												<h6><a href="#">You placed a bid</a></h6>
												<span><a href="#">Whirl wind NFT</a></span>
											</div>
										</div>
										<span class="time">4hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
											<div class="info">
												<h6><a href="#">You followed a creator</a></h6>
												<span><a href="#">Courtney Henry</a></span>
											</div>
										</div>
										<span class="time">16hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-03.png" alt="" />
											<div class="info">
												<h6><a href="#">You followed a creator</a></h6>
												<span><a href="#">Jane Cooper</a></span>
											</div>
										</div>
										<span class="time">2hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-04.png" alt="" />
											<div class="info">
												<h6><a href="#">You placed a bid</a></h6>
												<span><a href="#">Whirl wind NFT</a></span>
											</div>
										</div>
										<span class="time">4hr ago</span>
									</div>
								</div>
							</div>
							<div class="widget-content-inner">
								<div class="widget-history">
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
											<div class="info">
												<h6><a href="#">Lorem NFT sold</a></h6>
												<span><a href="#">Sold at 1.32 ETH</a></span>
											</div>
										</div>
										<span class="time">Just now</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-02.png" alt="" />
											<div class="info">
												<h6><a href="#">New NFT uploaded</a></h6>
												<span><a href="#">By Marisol Pena</a></span>
											</div>
										</div>
										<span class="time">1hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-03.png" alt="" />
											<div class="info">
												<h6><a href="#">You followed a creator</a></h6>
												<span><a href="#">Jane Cooper</a></span>
											</div>
										</div>
										<span class="time">2hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-04.png" alt="" />
											<div class="info">
												<h6><a href="#">You placed a bid</a></h6>
												<span><a href="#">Whirl wind NFT</a></span>
											</div>
										</div>
										<span class="time">4hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
											<div class="info">
												<h6><a href="#">You followed a creator</a></h6>
												<span><a href="#">Courtney Henry</a></span>
											</div>
										</div>
										<span class="time">16hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
											<div class="info">
												<h6><a href="#">Lorem NFT sold</a></h6>
												<span><a href="#">Sold at 1.32 ETH</a></span>
											</div>
										</div>
										<span class="time">Just now</span>
									</div>
								</div>
							</div>
							<div class="widget-content-inner">
								<div class="widget-history">
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
											<div class="info">
												<h6><a href="#">Lorem NFT sold</a></h6>
												<span><a href="#">Sold at 1.32 ETH</a></span>
											</div>
										</div>
										<span class="time">Just now</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-02.png" alt="" />
											<div class="info">
												<h6><a href="#">New NFT uploaded</a></h6>
												<span><a href="#">By Marisol Pena</a></span>
											</div>
										</div>
										<span class="time">1hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-03.png" alt="" />
											<div class="info">
												<h6><a href="#">You followed a creator</a></h6>
												<span><a href="#">Jane Cooper</a></span>
											</div>
										</div>
										<span class="time">2hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-04.png" alt="" />
											<div class="info">
												<h6><a href="#">You placed a bid</a></h6>
												<span><a href="#">Whirl wind NFT</a></span>
											</div>
										</div>
										<span class="time">4hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
											<div class="info">
												<h6><a href="#">You followed a creator</a></h6>
												<span><a href="#">Courtney Henry</a></span>
											</div>
										</div>
										<span class="time">16hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
											<div class="info">
												<h6><a href="#">Lorem NFT sold</a></h6>
												<span><a href="#">Sold at 1.32 ETH</a></span>
											</div>
										</div>
										<span class="time">Just now</span>
									</div>
								</div>
							</div>
							<div class="widget-content-inner">
								<div class="widget-history">
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
											<div class="info">
												<h6><a href="#">Lorem NFT sold</a></h6>
												<span><a href="#">Sold at 1.32 ETH</a></span>
											</div>
										</div>
										<span class="time">Just now</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-02.png" alt="" />
											<div class="info">
												<h6><a href="#">New NFT uploaded</a></h6>
												<span><a href="#">By Marisol Pena</a></span>
											</div>
										</div>
										<span class="time">1hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-03.png" alt="" />
											<div class="info">
												<h6><a href="#">You followed a creator</a></h6>
												<span><a href="#">Jane Cooper</a></span>
											</div>
										</div>
										<span class="time">2hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-04.png" alt="" />
											<div class="info">
												<h6><a href="#">You placed a bid</a></h6>
												<span><a href="#">Whirl wind NFT</a></span>
											</div>
										</div>
										<span class="time">4hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
											<div class="info">
												<h6><a href="#">You followed a creator</a></h6>
												<span><a href="#">Courtney Henry</a></span>
											</div>
										</div>
										<span class="time">16hr ago</span>
									</div>
									<div class="widget-creators-item flex items-center">
										<div class="author flex items-center flex-grow">
											<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
											<div class="info">
												<h6><a href="#">Lorem NFT sold</a></h6>
												<span><a href="#">Sold at 1.32 ETH</a></span>
											</div>
										</div>
										<span class="time">Just now</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="side-bar">
					<div class="widget widget-recently">
						<h5 class="title-widget">Recently added</h5>
						<div class="card-small-main">
							<img src="public/assets/images/blog/sidebar-05.jpg" alt="" />
							<div class="card-bottom">
								<h5><a href="#">Photography</a></h5>
								<span class="date">16hr ago</span>
							</div>
						</div>
						<div class="card-small">
							<div class="author">
								<img src="public/assets/images/blog/sidebar-06.jpg" alt="" />
								<div class="info">
									<h6><a href="#">Propw</a></h6>
									<p><a href="#">@themes</a></p>
								</div>
							</div>
							<span class="date">Mon, 08 May </span>
						</div>
						<div class="card-small">
							<div class="author">
								<img src="public/assets/images/blog/sidebar-07.jpg" alt="" />
								<div class="info">
									<h6><a href="#">Propw</a></h6>
									<p><a href="#">@themes</a></p>
								</div>
							</div>
							<span class="date">Mon, 08 May </span>
						</div>
						<div class="card-small">
							<div class="author">
								<img src="public/assets/images/blog/sidebar-08.jpg" alt="" />
								<div class="info">
									<h6><a href="#">Propw</a></h6>
									<p><a href="#">@themes</a></p>
								</div>
							</div>
							<span class="date">Mon, 08 May </span>
						</div>
					</div>
					<div class="widget widget-creators">
						<div class="flex items-center justify-between">
							<h5 class="title-widget">Top Creators</h5>
							<a class="see-all" href="#">See all</a>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="order">1.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="order">2.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-02.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="order">3.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-03.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="order">4.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-04.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
						<div class="widget-creators-item flex items-center">
							<div class="order">5.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
					</div>
					<div class="widget widget-coins">
						<h5 class="title-widget">Trending coins</h5>
						<div class="widget-coins-item flex items-center mb-20">
							<img src="public/assets/images/box-icon/coin-01.png" alt="" />
							<p><a href="#">Bitcoin</a></p>
						</div>
						<div class="widget-coins-item flex items-center mb-20">
							<img src="public/assets/images/box-icon/coin-02.png" alt="" />
							<p><a href="#">Ethereum</a></p>
						</div>
						<div class="widget-coins-item flex items-center mb-20">
							<img src="public/assets/images/box-icon/coin-03.png" alt="" />
							<p><a href="#">Cardano</a></p>
						</div>
						<div class="widget-coins-item flex items-center mb-20">
							<img src="public/assets/images/box-icon/coin-04.png" alt="" />
							<p><a href="#">Solana</a></p>
						</div>
						<div class="widget-coins-item flex items-center">
							<img src="public/assets/images/box-icon/coin-05.png" alt="" />
							<p><a href="#">Litecoin</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="report" class="tabcontent">
			<div class="wrapper-content">
				<div class="inner-content">
					<div class="action__body w-full mb-40">
						<div class="tf-tsparticles">
							<div id="tsparticles8" data-color="#161616" data-line="#000"></div>
						</div>
						<h2>Discover, create and sell your own NFT</h2>
						<div class="flat-button flex">
							<a href="#" class="tf-button style-2 h50 w190 mr-10">Explore now<i class="icon-arrow-up-right2"></i></a>
							<a href="#" class="tf-button style-2 h50 w230">Create your first NFT<i class="icon-arrow-up-right2"></i></a>
						</div>
						<div class="bg-home7">
							<div
								class="swiper-container autoslider3reverse"
								data-swiper='{
                                        "loop":true,
                                        "slidesPerView": "auto",
                                        "spaceBetween": 14,
                                        "direction": "vertical",
                                        "speed": 10000,
                                        "observer": true,
                                        "observeParents": true,
                                        "autoplay": {
                                            "delay": "0",
                                            "disableOnInteraction": false
                                        }
                                    }'
							>
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
								</div>
							</div>
							<div
								class="swiper-container autoslider4reverse"
								data-swiper='{
                                        "loop":true,
                                        "slidesPerView": "auto",
                                        "spaceBetween": 14,
                                        "direction": "vertical",
                                        "speed": 10000,
                                        "observer": true,
                                        "observeParents": true,
                                        "autoplay": {
                                            "delay": "0",
                                            "disableOnInteraction": false,
                                            "reverseDirection": true
                                        }
                                    }'
							>
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
								</div>
							</div>
							<div
								class="swiper-container autoslider3reverse"
								data-swiper='{
                                        "loop":true,
                                        "slidesPerView": "auto",
                                        "spaceBetween": 14,
                                        "direction": "vertical",
                                        "speed": 10000,
                                        "observer": true,
                                        "observeParents": true,
                                        "autoplay": {
                                            "delay": "0",
                                            "disableOnInteraction": false
                                        }
                                    }'
							>
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
									<div class="swiper-slide">
										<img src="public/assets/images/item-background/bg-action-1.png" alt="" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="heading-section">
						<h2 class="tf-title pb-30">Setting</h2>
					</div>
					<div class="widget-edit mb-30 avatar">
						<div class="title">
							<h4>Edit your avatar</h4>
							<i class="icon-keyboard_arrow_up"></i>
						</div>
						<form action="#">
							<div class="uploadfile flex">
								<img src="public/assets/images/avatar/avatar-07.png" alt="" />
								<div>
									<h6>Upload a new avatar”</h6>
									<label>
										<input type="file" class="" name="file" />
										<span class="text filename">No files selected</span>
									</label>
									<p class="text">JPEG 100x100</p>
								</div>
							</div>
						</form>
					</div>
					<div class="widget-edit mb-30 profile">
						<div class="title">
							<h4>Edit your profile</h4>
							<i class="icon-keyboard_arrow_up"></i>
						</div>
						<form id="commentform" class="comment-form" novalidate="novalidate">
							<div class="flex gap30">
								<fieldset class="name">
									<label>Your name*</label>
									<input type="text" id="name" placeholder="Enter your name" name="name" tabindex="2" value="" aria-required="true" required="" />
								</fieldset>
								<fieldset class="email">
									<label>Email address*</label>
									<input type="email" id="email" placeholder="Your email" name="email" tabindex="2" value="" aria-required="true" required="" />
								</fieldset>
								<fieldset class="tel">
									<label>Phone number</label>
									<input type="tel" id="tel" placeholder="Your phone" name="tel" tabindex="2" value="" aria-required="true" required="" />
								</fieldset>
							</div>
							<fieldset class="message">
								<label>Your Bio</label>
								<textarea id="message" name="message" rows="4" placeholder="Say something about yourself" tabindex="4" aria-required="true" required=""></textarea>
							</fieldset>
							<div class="flex gap30">
								<fieldset class="name">
									<label>Store name</label>
									<input type="text" id="name" placeholder="Enter your name" name="name" tabindex="2" value="" aria-required="true" required="" />
								</fieldset>
								<fieldset class="curency">
									<label>Curency</label>
									<select class="select" name="curency" id="curency">
										<option>Us Dollar ($)</option>
										<option value="100$">100$</option>
										<option value="1000$">1000$</option>
										<option value="10000$">10000$</option>
									</select>
								</fieldset>
							</div>
							<div class="flex gap30">
								<fieldset class="location">
									<label>Location</label>
									<select class="select" name="location" id="location">
										<option>United States</option>
										<option value="English">English</option>
										<option value="Japan">Japan</option>
										<option value="China">China</option>
									</select>
								</fieldset>
								<fieldset class="address">
									<label>Address</label>
									<input type="text" id="address" placeholder="Your address" name="address" tabindex="2" value="" aria-required="true" required="" />
								</fieldset>
							</div>
							<fieldset class="address">
								<label>Address</label>
								<input type="text" id="address" placeholder="Your address" name="address" tabindex="2" value="" aria-required="true" required="" />
							</fieldset>
							<div class="btn-submit">
								<button class="w242 active mr-30">Cancel</button>
								<button class="w242" type="submit">Save</button>
							</div>
						</form>
					</div>
					<div class="widget-edit mb-30 password">
						<div class="title">
							<h4>Change password</h4>
							<i class="icon-keyboard_arrow_up"></i>
						</div>
						<form id="commentform" class="comment-form" novalidate="novalidate">
							<div class="flex gap30">
								<fieldset class="tel">
									<label>Phone number</label>
									<input type="tel" id="tel" placeholder="Your phone" name="tel" tabindex="2" value="" aria-required="true" required="" />
								</fieldset>
								<fieldset class="email">
									<label>Email address</label>
									<input type="email" id="email" placeholder="Your email" name="email" tabindex="2" value="" aria-required="true" required="" />
								</fieldset>
							</div>
							<fieldset class="password">
								<label>Old password</label>
								<input type="text" id="password" placeholder="Enter your Old password" name="password" tabindex="2" value="" aria-required="true" required="" />
							</fieldset>
							<fieldset class="password">
								<label>New password</label>
								<input type="text" id="password" placeholder="Enter your New password" name="password" tabindex="2" value="" aria-required="true" required="" />
							</fieldset>
							<fieldset class="password">
								<label>Confirm password</label>
								<input type="text" id="password" placeholder="Confirm password" name="password" tabindex="2" value="" aria-required="true" required="" />
							</fieldset>
							<div class="btn-submit">
								<button class="w242 active mr-30">Cancel</button>
								<button class="w242" type="submit">Save</button>
							</div>
						</form>
					</div>
					<div class="widget-edit mb-30 setting">
						<div class="title">
							<h4>Notification setting</h4>
							<i class="icon-keyboard_arrow_up"></i>
						</div>
						<form id="commentform" class="comment-form" novalidate="novalidate">
							<div class="notification-setting-item">
								<div class="content">
									<h6>Order confirmation</h6>
									<p>will be notified when customer order any product</p>
								</div>
								<input class="check" type="checkbox" value="checkbox" name="check" checked="" />
							</div>
							<div class="notification-setting-item">
								<div class="content">
									<h6>New Items Notification</h6>
									<p>Mauris a velit commodo erat lobortis eleifend</p>
								</div>
								<input class="check" type="checkbox" value="checkbox" name="check" />
							</div>
							<div class="notification-setting-item">
								<div class="content">
									<h6>Payment Card Notification</h6>
									<p>Proin rutrum nulla non</p>
								</div>
								<input class="check" type="checkbox" value="checkbox" name="check" checked="" />
							</div>
							<div class="notification-setting-item">
								<div class="content">
									<h6>Notification for approving product</h6>
									<p>Nam in mi ac felis venenatis ultrices</p>
								</div>
								<input class="check" type="checkbox" value="checkbox" name="check" />
							</div>
							<div class="notification-setting-item">
								<div class="content">
									<h6>Email notification</h6>
									<p>Turn on email notification to get updates through email</p>
								</div>
								<input class="check" type="checkbox" value="checkbox" name="check" />
							</div>
							<div class="btn-submit">
								<button class="w242 active mr-30">Cancel</button>
								<button class="w242" type="submit">Save</button>
							</div>
						</form>
					</div>
				</div>
				<div class="side-bar">
					<div class="widget widget-recently">
						<h5 class="title-widget">Recently added</h5>
						<div class="card-small-main">
							<img src="public/assets/images/blog/sidebar-05.jpg" alt="" />
							<div class="card-bottom">
								<h5><a href="#">Photography</a></h5>
								<span class="date">16hr ago</span>
							</div>
						</div>
						<div class="card-small">
							<div class="author">
								<img src="public/assets/images/blog/sidebar-06.jpg" alt="" />
								<div class="info">
									<h6><a href="#">Propw</a></h6>
									<p><a href="#">@themes</a></p>
								</div>
							</div>
							<span class="date">Mon, 08 May </span>
						</div>
						<div class="card-small">
							<div class="author">
								<img src="public/assets/images/blog/sidebar-07.jpg" alt="" />
								<div class="info">
									<h6><a href="#">Propw</a></h6>
									<p><a href="#">@themes</a></p>
								</div>
							</div>
							<span class="date">Mon, 08 May </span>
						</div>
						<div class="card-small">
							<div class="author">
								<img src="public/assets/images/blog/sidebar-08.jpg" alt="" />
								<div class="info">
									<h6><a href="#">Propw</a></h6>
									<p><a href="#">@themes</a></p>
								</div>
							</div>
							<span class="date">Mon, 08 May </span>
						</div>
					</div>
					<div class="widget widget-creators">
						<div class="flex items-center justify-between">
							<h5 class="title-widget">Top Creators</h5>
							<a class="see-all" href="#">See all</a>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="order">1.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="order">2.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-02.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="order">3.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-03.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="order">4.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-04.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
						<div class="widget-creators-item flex items-center">
							<div class="order">5.</div>
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
								<div class="info">
									<h6><a href="#">Brooklyn Simmons</a></h6>
									<span><a href="#">@themes</a></span>
								</div>
							</div>
							<button class="follow">Follow</button>
						</div>
					</div>
					<div class="widget widget-coins">
						<h5 class="title-widget">Trending coins</h5>
						<div class="widget-coins-item flex items-center mb-20">
							<img src="public/assets/images/box-icon/coin-01.png" alt="" />
							<p><a href="#">Bitcoin</a></p>
						</div>
						<div class="widget-coins-item flex items-center mb-20">
							<img src="public/assets/images/box-icon/coin-02.png" alt="" />
							<p><a href="#">Ethereum</a></p>
						</div>
						<div class="widget-coins-item flex items-center mb-20">
							<img src="public/assets/images/box-icon/coin-03.png" alt="" />
							<p><a href="#">Cardano</a></p>
						</div>
						<div class="widget-coins-item flex items-center mb-20">
							<img src="public/assets/images/box-icon/coin-04.png" alt="" />
							<p><a href="#">Solana</a></p>
						</div>
						<div class="widget-coins-item flex items-center">
							<img src="public/assets/images/box-icon/coin-05.png" alt="" />
							<p><a href="#">Litecoin</a></p>
						</div>
					</div>
					<div class="widget widget-history">
						<div class="flex items-center justify-between">
							<h5 class="title-widget">History</h5>
							<a class="see-all" href="#">See all</a>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
								<div class="info">
									<h6><a href="#">Lorem NFT sold</a></h6>
									<span><a href="#">Sold at 1.32 ETH</a></span>
								</div>
							</div>
							<span class="time">Just now</span>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-02.png" alt="" />
								<div class="info">
									<h6><a href="#">New NFT uploaded</a></h6>
									<span><a href="#">By Marisol Pena</a></span>
								</div>
							</div>
							<span class="time">1hr ago</span>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-03.png" alt="" />
								<div class="info">
									<h6><a href="#">You followed a creator</a></h6>
									<span><a href="#">Jane Cooper</a></span>
								</div>
							</div>
							<span class="time">2hr ago</span>
						</div>
						<div class="widget-creators-item flex items-center mb-20">
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-04.png" alt="" />
								<div class="info">
									<h6><a href="#">You placed a bid</a></h6>
									<span><a href="#">Whirl wind NFT</a></span>
								</div>
							</div>
							<span class="time">4hr ago</span>
						</div>
						<div class="widget-creators-item flex items-center">
							<div class="author flex items-center flex-grow">
								<img src="public/assets/images/avatar/avatar-small-01.png" alt="" />
								<div class="info">
									<h6><a href="#">You followed a creator</a></h6>
									<span><a href="#">Courtney Henry</a></span>
								</div>
							</div>
							<span class="time">16hr ago</span>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<?= $this->endSection() ?>