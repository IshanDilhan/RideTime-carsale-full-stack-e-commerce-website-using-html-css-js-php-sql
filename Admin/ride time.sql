SELECT `car_id`, `car_name`, `car_brand`,`car_status`,`display_price`,`seling_price`,`engine_power`,`km`,`giar_type`,`car_image_url`,`car_is_enable`
				FROM `cars` WHERE `car_id`= $  ORDER BY `car_id` DESC  LIMIT 6
