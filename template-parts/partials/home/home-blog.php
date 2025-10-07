<section class="o-section c-section--home-blog relative radius-rounded-btm-lft bg-gradiant-btm-top">
	<div class="o-section__wrapper">
		<h2 class="sec-title u-flex u-flex--column gap-sm m-0">
								<span class="txt-before u-flex items-center">
									بـــــــرق آپـــــــــــــــــــــــ
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/txt-before.svg"
										 alt="برقآپ">
								</span>
			آخـریـــــــن اخـبـــــــار و مقــــــــالــات
		</h2>
		<div class="c-home-blog u-flex space-between items-center">
			<div class="c-home-blog__items u-flex u-flex--column gap-md">
				<p class="txt-justify">
					لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
					چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لک است، و برای شرایط فعلی تکنولوژی مورد
				</p>
				<div class="c-slider-blogs"
					 data-flickity='{"wrapAround": true, "autoPlay": 3500,"pageDots":false,"prevNextButtons": false,"rightToLeft": true,"cellAlign": "right","freeScroll": true}'>
						<?php
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 6,
							'orderby' => 'date',
							'order' => 'DESC'
						);

						$latest_posts = new WP_Query($args);

						if ($latest_posts->have_posts()) :
							while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
								<div class="item-before carousel-cell">
									<div class="item-before-content u-flex gap-md u-flex--column relative">
										<a class="c-blog__img u-flex w-100" href="<?php the_permalink(); ?>">
											<img class="w-100 border-radius"
												 src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
												 alt="<?php the_title_attribute(); ?>">
										</a>
										<div class="c-home-blog__item-info u-flex gap-sm u-flex--column">
											<div class="txt-overflow c-blog__meta u-flex gap-sm space-between">
												<p class="m-0">
													<svg width="18" height="18" viewBox="0 0 24 24" fill="none"
														 xmlns="http://www.w3.org/2000/svg">
														<path d="M20.75 13.25C20.75 18.08 16.83 22 12 22C7.17 22 3.25 18.08 3.25 13.25C3.25 8.42 7.17 4.5 12 4.5C16.83 4.5 20.75 8.42 20.75 13.25Z"
															  stroke="#42465399" stroke-width="1.5" stroke-linecap="round"
															  stroke-linejoin="round"/>
														<path d="M12 8V13" stroke="#42465399" stroke-width="1.5"
															  stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M9 2H15" stroke="#42465399" stroke-width="1.5"
															  stroke-miterlimit="10" stroke-linecap="round"
															  stroke-linejoin="round"/>
													</svg>
													مطالعه : 2 دقیقه
												</p>
												<p class="m-0">
													<svg width="18" height="18" viewBox="0 0 24 24" fill="none"
														 xmlns="http://www.w3.org/2000/svg">
														<path d="M8 2V5" stroke="#42465399" stroke-width="1.5"
															  stroke-miterlimit="10" stroke-linecap="round"
															  stroke-linejoin="round"/>
														<path d="M16 2V5" stroke="#42465399" stroke-width="1.5"
															  stroke-miterlimit="10" stroke-linecap="round"
															  stroke-linejoin="round"/>
														<path d="M3.5 9.09H20.5" stroke="#42465399" stroke-width="1.5"
															  stroke-miterlimit="10" stroke-linecap="round"
															  stroke-linejoin="round"/>
														<path d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
															  stroke="#42465399" stroke-width="1.5" stroke-miterlimit="10"
															  stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M15.6947 13.7H15.7037" stroke="#42465399" stroke-width="2"
															  stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M15.6947 16.7H15.7037" stroke="#42465399" stroke-width="2"
															  stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M11.9955 13.7H12.0045" stroke="#42465399" stroke-width="2"
															  stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M11.9955 16.7H12.0045" stroke="#42465399" stroke-width="2"
															  stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M8.29431 13.7H8.30329" stroke="#42465399" stroke-width="2"
															  stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M8.29431 16.7H8.30329" stroke="#42465399" stroke-width="2"
															  stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
													20 دی 1403
												</p>
											</div>
											<div class="c-blog__info u-flex u-flex--column gap-sm">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												<p class="clamp m-0 txt-justify"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
											</div>
										</div>

									</div>
									<div class="c-btn-read-more relative items-center u-flex justify-center">
										<svg width="613" height="208" viewBox="0 0 613 208" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M574.989 167.103C574.989 187.362 591.413 203.786 611.673 203.786C612.406 203.786 613 204.38 613 205.113V205.998C613 206.731 612.405 207.324 611.673 207.324H1.32715C0.594501 207.324 0.00023676 206.731 0 205.998V205.113C0 204.38 0.594355 203.786 1.32715 203.786C21.3707 203.786 37.6191 187.538 37.6191 167.494V60.7793C37.6191 27.6422 64.4821 0.779297 97.6191 0.779297H514.989C548.126 0.779297 574.989 27.6422 574.989 60.7793V167.103Z" fill="#213D61"/>
										</svg>



										<a href="<?php the_permalink(); ?>" type="submit" class="c-btn-primary p-0">
											<span>ادامه مطلب</span>
										</a>
									</div>
								</div>
							<?php endwhile;
							wp_reset_postdata();
						else : ?>
							<div>هیچ مطلبی یافت نشد.</div>
						<?php endif; ?>
				</div>
			</div>
			<div class="c-home-blog__img txt-left">
				<img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/home-blog.png"
					 alt="برقآپ">
			</div>
		</div>
	</div>
	<div class="before-bottom-img">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bottom-before-light.svg"
			 alt="برقآپ">
	</div>
</section>
