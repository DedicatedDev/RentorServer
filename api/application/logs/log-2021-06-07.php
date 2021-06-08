<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2021-06-07 12:07:39 --> UTF-8 Support Enabled
DEBUG - 2021-06-07 12:07:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-07 12:07:39 --> Query error: Column 'users_id' cannot be null - Invalid query: INSERT INTO `users_authentication` (`users_id`, `token`, `expired_at`) VALUES (NULL, '$6$rounds=5042$60bda99b431b67.9$naHdkYJUn.3kvzcxlOBVqOlohFW/dogpoEbWWkGG0kQtvPP6B.PvBQlBhA3IsIYHDyVZy8a010/Ddwo/9r9GL0', '2021-06-08 00:07:39')
DEBUG - 2021-06-07 12:07:39 --> Total execution time: 0.1501
DEBUG - 2021-06-07 12:07:39 --> UTF-8 Support Enabled
DEBUG - 2021-06-07 12:07:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-07 12:07:39 --> Total execution time: 0.0831
DEBUG - 2021-06-07 12:08:49 --> UTF-8 Support Enabled
DEBUG - 2021-06-07 12:08:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-07 12:08:49 --> Total execution time: 0.1020
DEBUG - 2021-06-07 12:08:49 --> UTF-8 Support Enabled
DEBUG - 2021-06-07 12:08:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-07 12:08:49 --> Total execution time: 0.2094
DEBUG - 2021-06-07 12:09:22 --> UTF-8 Support Enabled
DEBUG - 2021-06-07 12:09:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-07 12:09:22 --> Total execution time: 0.3116
DEBUG - 2021-06-07 12:09:31 --> UTF-8 Support Enabled
DEBUG - 2021-06-07 12:09:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-07 12:09:31 --> Total execution time: 0.0758
DEBUG - 2021-06-07 12:09:32 --> UTF-8 Support Enabled
DEBUG - 2021-06-07 12:09:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-07 12:09:32 --> Total execution time: 0.0769
DEBUG - 2021-06-07 12:09:54 --> UTF-8 Support Enabled
DEBUG - 2021-06-07 12:09:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-07 12:09:54 --> Query error: In aggregated query without GROUP BY, expression #17 of SELECT list contains nonaggregated column 'rentors.wish_list.status'; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `products`.*, IFNULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `user_profile`.`profile_pic` as `user_image`, IFNULL(FLOOR(avg(review.star)), "0")  as avg_ratting, `sub_category`.`verification_required`
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-07 12:09:54 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-07 12:10:04 --> UTF-8 Support Enabled
DEBUG - 2021-06-07 12:10:04 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-07 12:10:04 --> Query error: In aggregated query without GROUP BY, expression #17 of SELECT list contains nonaggregated column 'rentors.wish_list.status'; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `products`.*, IFNULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `user_profile`.`profile_pic` as `user_image`, IFNULL(FLOOR(avg(review.star)), "0")  as avg_ratting, `sub_category`.`verification_required`
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '16'
ERROR - 2021-06-07 12:10:04 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-07 12:10:16 --> UTF-8 Support Enabled
DEBUG - 2021-06-07 12:10:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-07 12:10:16 --> Total execution time: 0.1215
DEBUG - 2021-06-07 12:10:41 --> UTF-8 Support Enabled
DEBUG - 2021-06-07 12:10:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-07 12:10:41 --> Query error: In aggregated query without GROUP BY, expression #17 of SELECT list contains nonaggregated column 'rentors.wish_list.status'; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `products`.*, IFNULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `user_profile`.`profile_pic` as `user_image`, IFNULL(FLOOR(avg(review.star)), "0")  as avg_ratting, `sub_category`.`verification_required`
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '23'
ERROR - 2021-06-07 12:10:41 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-07 12:10:47 --> UTF-8 Support Enabled
DEBUG - 2021-06-07 12:10:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-07 12:10:48 --> Query error: In aggregated query without GROUP BY, expression #17 of SELECT list contains nonaggregated column 'rentors.wish_list.status'; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `products`.*, IFNULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `user_profile`.`profile_pic` as `user_image`, IFNULL(FLOOR(avg(review.star)), "0")  as avg_ratting, `sub_category`.`verification_required`
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '23'
ERROR - 2021-06-07 12:10:48 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-07 12:11:08 --> UTF-8 Support Enabled
DEBUG - 2021-06-07 12:11:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-07 12:11:09 --> Total execution time: 0.1424
DEBUG - 2021-06-07 12:11:16 --> UTF-8 Support Enabled
DEBUG - 2021-06-07 12:11:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-07 12:11:16 --> Total execution time: 0.0574
DEBUG - 2021-06-07 12:11:16 --> UTF-8 Support Enabled
DEBUG - 2021-06-07 12:11:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-07 12:11:17 --> Total execution time: 0.0558
DEBUG - 2021-06-07 12:11:32 --> UTF-8 Support Enabled
DEBUG - 2021-06-07 12:11:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-07 12:11:32 --> Total execution time: 0.0639
DEBUG - 2021-06-07 12:11:33 --> UTF-8 Support Enabled
DEBUG - 2021-06-07 12:11:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-07 12:11:33 --> Total execution time: 0.0618
DEBUG - 2021-06-07 12:11:38 --> UTF-8 Support Enabled
DEBUG - 2021-06-07 12:11:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-07 12:11:38 --> Total execution time: 0.2375
