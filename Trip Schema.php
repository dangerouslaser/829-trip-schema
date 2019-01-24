<!-- Version 1.0 -->

<?php if( have_rows('trip_schema') ): ?>
	<?php while( have_rows('trip_schema') ): the_row();
		// vars
		$trip_name = get_sub_field('trip_name');
		$trip_description = get_sub_field('trip_description');
		$trip_city = get_sub_field('trip_city');
		$trip_city_description = get_sub_field('trip_city_description');
		$trip_city_url = get_sub_field('trip_city_url');
	?>
		<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Trip",
			"name": "<?php echo $trip_name; ?>",
			"description": "<?php echo $trip_description; ?>",
			"itinerary": [
			    {
			        "@type": "City",
			        "name": "<?php echo $trip_city; ?>",
			        "description": "<?php echo $trip_city_description; ?>",
			        "url": "<?php echo $trip_city_url; ?>"
			    }
			]
		}
		</script>
	<?php endwhile; ?>
<?php endif; ?>


<!-- Version 2.0 Includes Offers -->

<?php if( have_rows('trip_schema') ): ?>
	<?php while( have_rows('trip_schema') ): the_row();
		// vars
		$trip_name = get_sub_field('trip_name');
		$trip_description = get_sub_field('trip_description');
		$trip_city = get_sub_field('trip_city');
		$trip_city_description = get_sub_field('trip_city_description');
		$trip_city_url = get_sub_field('trip_city_url');
		$trip_price = get_sub_field('trip_price');
		$trip_url = get_sub_field('trip_url');
	?>
		<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Trip",
			"name": "<?php echo $trip_name; ?>",
			"description": "<?php echo $trip_description; ?>",
			"itinerary": [
			    {
			        "@type": "City",
			        "name": "<?php echo $trip_city; ?>",
			        "description": "<?php echo $trip_city_description; ?>",
			        "url": "<?php echo $trip_city_url; ?>"
			    }
			],
			"offers": [
				{
				    "@type": "Offer",
				    "price": "<?php echo $trip_price; ?>",
				    "priceCurrency": "USD",
				    "url": "<?php echo $trip_url; ?>"
				}
			]
		}
		</script>
	<?php endwhile; ?>
<?php endif; ?>


<!-- Version 2.5 - Includes Offers - Conditional -->

<?php if( have_rows('trip_schema') ): ?>
	<?php while( have_rows('trip_schema') ): the_row();
		// vars
		$trip_name = get_sub_field('trip_name');
		$trip_description = get_sub_field('trip_description');
		$trip_city = get_sub_field('trip_city');
		$trip_city_description = get_sub_field('trip_city_description');
		$trip_city_url = get_sub_field('trip_city_url');
		$trip_price = get_sub_field('trip_price');
		$trip_url = get_sub_field('trip_url');
		$trip_include_offer = get_sub_field('trip_include_offer');
	?>
		<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Trip",
			"name": "<?php echo $trip_name; ?>",
			"description": "<?php echo $trip_description; ?>",
			"itinerary": [
			    {
			        "@type": "City",
			        "name": "<?php echo $trip_city; ?>",
			        "description": "<?php echo $trip_city_description; ?>",
			        "url": "<?php echo $trip_city_url; ?>"
			    }
			]
			<?php if (get_sub_field ('trip_include_offer') == true ): ?>
			,
			"offers": [
				{
				    "@type": "Offer",
				    "price": "<?php echo $trip_price; ?>",
				    "priceCurrency": "USD",
				    "url": "<?php echo $trip_url; ?>"
				}
			]
			<?php endif; ?>
		}
		</script>
	<?php endwhile; ?>
<?php endif; ?>


<!-- Version 3.0 - Includes Provider -->

<?php if( have_rows('trip_schema') ): ?>
	<?php while( have_rows('trip_schema') ): the_row();
		// vars
		$trip_name = get_sub_field('trip_name');
		$trip_description = get_sub_field('trip_description');
		$trip_city = get_sub_field('trip_city');
		$trip_city_description = get_sub_field('trip_city_description');
		$trip_city_url = get_sub_field('trip_city_url');
		$trip_price = get_sub_field('trip_price');
		$trip_url = get_sub_field('trip_url');
		$trip_include_offer = get_sub_field('trip_include_offer');
	?>
		<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Trip",
			"name": "<?php echo $trip_name; ?>",
			"description": "<?php echo $trip_description; ?>",
			"itinerary": [
			    {
			        "@type": "City",
			        "name": "<?php echo $trip_city; ?>",
			        "description": "<?php echo $trip_city_description; ?>",
			        "url": "<?php echo $trip_city_url; ?>"
			    }
			]
			<?php if (get_sub_field ('trip_include_offer') == true ): ?>
			,
			"offers": [
				{
				    "@type": "Offer",
				    "price": "<?php echo $trip_price; ?>",
				    "priceCurrency": "USD",
				    "url": "<?php echo $trip_url; ?>"
				}
			]
			<?php endif; ?>
			,
			"schema:provider": [
				{
					"@type": "LocalBusiness",
					"address": {
						"@type": "PostalAddress",
						"addressLocality": "Idaho Springs",
						"addressRegion": "CO",
						"postalCode": "80452",
						"streetAddress": "2697 Stanley Rd"
					},
					"aggregateRating": {
						"@type": "AggregateRating",
						"ratingValue": "4",
						"reviewCount": "257"
					},
					"name": "Colorado Adventure Center",
					"telephone": "+1(877) 947-7238",
					"openingHours": "Mo, Tu, We, Th, Fr, Sa, Su 08:00-18:00",
					"priceRange": "$$",
					"contactPoint": {
						"@type": "ContactPoint",
						"telephone": "+1(877) 947-7238",
						"contactType": "Sales"
					},
					"url": "https://www.raftingcolorado.com",
					"logo": "https://www.raftingcolorado.com/wp-content/uploads/2018/01/logo.png",
					"image": "https://www.raftingcolorado.com/wp-content/uploads/2018/03/home-slider-2.jpg"
				}
			]
		}
		</script>
	<?php endwhile; ?>
<?php endif; ?>

<!-- Version 4.0 - Add additional itinerary -->

<?php if( have_rows('trip_schema') ): ?>
	<?php while( have_rows('trip_schema') ): the_row();
		// vars
		$trip_name = get_sub_field('trip_name');
		$trip_description = get_sub_field('trip_description');
		$trip_city = get_sub_field('trip_city');
		$trip_city_description = get_sub_field('trip_city_description');
		$trip_city_url = get_sub_field('trip_city_url');
		$trip_price = get_sub_field('trip_price');
		$trip_url = get_sub_field('trip_url');
		$trip_include_offer = get_sub_field('trip_include_offer');
	?>
		<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Trip",
			"name": "<?php echo $trip_name; ?>",
			"description": "<?php echo $trip_description; ?>",
			"itinerary": [
			    {
			        "@type": "City",
			        "name": "<?php echo $trip_city; ?>",
			        "description": "<?php echo $trip_city_description; ?>",
			        "url": "<?php echo $trip_city_url; ?>"
			    }
			<?php if (get_sub_field ('trip_additional_itinerary') == true ): ?>
				<?php while( have_rows('additional_city') ): the_row();
					// vars
					$trip_aditional_city = get_sub_field('trip_aditional_city');
					$trip_additional_city_description = get_sub_field('trip_additional_city_description');
					$trip_additional_city_url = get_sub_field('trip_additional_city_url');
				?>
					,
					{
					        "@type": "City",
					        "name": "<?php echo $trip_aditional_city; ?>",
					        "description": "<?php echo $trip_additional_city_description; ?>",
					        "url": "<?php echo $trip_additional_city_url; ?>"
					    }
				<?php endwhile; ?>
			<?php endif; ?>
			]
			<?php if (get_sub_field ('trip_include_offer') == true ): ?>
			,
			"offers": [
				{
				    "@type": "Offer",
				    "price": "<?php echo $trip_price; ?>",
				    "priceCurrency": "USD",
				    "url": "<?php echo $trip_url; ?>"
				}
			]
			<?php endif; ?>
			,
			"schema:provider": [
				{
					"@type": "LocalBusiness",
					"address": {
						"@type": "PostalAddress",
						"addressLocality": "Idaho Springs",
						"addressRegion": "CO",
						"postalCode": "80452",
						"streetAddress": "2697 Stanley Rd"
					},
					"aggregateRating": {
						"@type": "AggregateRating",
						"ratingValue": "4",
						"reviewCount": "257"
					},
					"name": "Colorado Adventure Center",
					"telephone": "+1(877) 947-7238",
					"openingHours": "Mo, Tu, We, Th, Fr, Sa, Su 08:00-18:00",
					"priceRange": "$$",
					"contactPoint": {
						"@type": "ContactPoint",
						"telephone": "+1(877) 947-7238",
						"contactType": "Sales"
					},
					"url": "https://www.raftingcolorado.com",
					"logo": "https://www.raftingcolorado.com/wp-content/uploads/2018/01/logo.png",
					"image": "https://www.raftingcolorado.com/wp-content/uploads/2018/03/home-slider-2.jpg"
				}
			]
		}
		</script>
	<?php endwhile; ?>
<?php endif; ?>

<!-- Version 4.5 - Provider Schema Modifiable -->

<?php if( have_rows('trip_schema') ): ?>
	<?php while( have_rows('trip_schema') ): the_row();
		// vars
		$trip_name = get_sub_field('trip_name');
		$trip_description = get_sub_field('trip_description');
		$trip_city = get_sub_field('trip_city');
		$trip_city_description = get_sub_field('trip_city_description');
		$trip_city_url = get_sub_field('trip_city_url');
		$trip_price = get_sub_field('trip_price');
		$trip_url = get_sub_field('trip_url');
		$trip_include_offer = get_sub_field('trip_include_offer');
	?>
		<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Trip",
			"name": "<?php echo $trip_name; ?>",
			"description": "<?php echo $trip_description; ?>",
			"itinerary": [
			    {
			        "@type": "City",
			        "name": "<?php echo $trip_city; ?>",
			        "description": "<?php echo $trip_city_description; ?>",
			        "url": "<?php echo $trip_city_url; ?>"
			    }
			<?php if (get_sub_field ('trip_additional_itinerary') == true ): ?>
				<?php while( have_rows('additional_city') ): the_row();
					// vars
					$trip_aditional_city = get_sub_field('trip_aditional_city');
					$trip_additional_city_description = get_sub_field('trip_additional_city_description');
					$trip_additional_city_url = get_sub_field('trip_additional_city_url');
				?>
					,
					{
					        "@type": "City",
					        "name": "<?php echo $trip_aditional_city; ?>",
					        "description": "<?php echo $trip_additional_city_description; ?>",
					        "url": "<?php echo $trip_additional_city_url; ?>"
					    }
				<?php endwhile; ?>
			<?php endif; ?>
			]
			<?php if (get_sub_field ('trip_include_offer') == true ): ?>
			,
			"offers": [
				{
				    "@type": "Offer",
				    "price": "<?php echo $trip_price; ?>",
				    "priceCurrency": "USD",
				    "url": "<?php echo $trip_url; ?>"
				}
			]
			<?php endif; ?>
			
			<?php if( have_rows('provider') ): ?>
				<?php while( have_rows('provider') ): the_row();
					// vars
					$provider_name = get_sub_field('provider_name');
					$provider_locality = get_sub_field('provider_locality');
					$provider_region = get_sub_field('provider_region');
					$provider_postal_code = get_sub_field('provider_postal_code');
					$provider_address = get_sub_field('provider_address');
					$provider_review_count = get_sub_field('provider_review_count');
					$provider_average_rating = get_sub_field('provider_average_rating');
					$provider_hours = get_sub_field('provider_hours');
					$provider_url = get_sub_field('provider_url');
					$provider_logo = get_sub_field('provider_logo');
					$provider_image = get_sub_field('provider_image');
					$provider_price_range = get_sub_field('provider_price_range');
					$provider_telephone = get_sub_field('provider_telephone');
					$provider_telephone_contact_type = get_sub_field('provider_telephone_contact_type');
				?>
					,
					"schema:provider": [
						{
							"@type": "LocalBusiness",
							"address": {
								"@type": "PostalAddress",
								"addressLocality": "<?php echo $provider_locality; ?>",
								"addressRegion": "<?php echo $provider_region; ?>",
								"postalCode": "<?php echo $provider_postal_code; ?>",
								"streetAddress": "<?php echo $provider_address; ?>"
							},
							"aggregateRating": {
								"@type": "AggregateRating",
								"ratingValue": "<?php echo $provider_average_rating; ?>",
								"reviewCount": "<?php echo $provider_review_count; ?>"
							},
							"name": "<?php echo $provider_name; ?>",
							"telephone": "<?php echo $provider_telephone; ?>",
							"openingHours": "<?php echo $provider_hours; ?>",
							"priceRange": "<?php echo $provider_price_range; ?>",
							"contactPoint": {
								"@type": "ContactPoint",
								"telephone": "<?php echo $provider_telephone; ?>",
								"contactType": "<?php echo $provider_telephone_contact_type; ?>"
							},
							"url": "<?php echo $provider_url; ?>",
							"logo": "<?php echo $provider_logo; ?>",
							"image": "<?php echo $provider_image; ?>"
						}
						
					]
				<?php endwhile; ?>
			<?php endif; ?>
		}
		</script>
	<?php endwhile; ?>
<?php endif; ?>