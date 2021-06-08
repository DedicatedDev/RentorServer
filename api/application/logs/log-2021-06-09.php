<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2021-06-09 02:52:15 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 02:52:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 02:52:15 --> Total execution time: 0.2708
DEBUG - 2021-06-09 02:52:15 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 02:52:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 02:52:15 --> Total execution time: 0.0668
DEBUG - 2021-06-09 02:55:59 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 02:55:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 02:55:59 --> Total execution time: 0.0439
DEBUG - 2021-06-09 02:55:59 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 02:55:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 02:56:00 --> Total execution time: 0.0597
DEBUG - 2021-06-09 04:04:41 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:04:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:04:41 --> Total execution time: 0.0766
DEBUG - 2021-06-09 04:04:41 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:04:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:04:42 --> Total execution time: 0.0862
DEBUG - 2021-06-09 04:08:02 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:08:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:08:02 --> Total execution time: 0.0442
DEBUG - 2021-06-09 04:09:10 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:09:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:09:10 --> Total execution time: 0.1145
DEBUG - 2021-06-09 04:16:21 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:16:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:16:21 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:16:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:16:21 --> Total execution time: 0.0413
DEBUG - 2021-06-09 04:16:21 --> Total execution time: 0.0255
DEBUG - 2021-06-09 04:16:22 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:16:22 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:16:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:16:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:16:22 --> Total execution time: 0.0311
ERROR - 2021-06-09 04:16:22 --> Query error: In aggregated query without GROUP BY, expression #17 of SELECT list contains nonaggregated column 'rentors.wish_list.status'; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `products`.*, IFNULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `user_profile`.`profile_pic` as `user_image`, IFNULL(FLOOR(avg(review.star)), "0")  as avg_ratting, `sub_category`.`verification_required`
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '23'
ERROR - 2021-06-09 04:16:22 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 04:16:22 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:16:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 04:16:22 --> Query error: In aggregated query without GROUP BY, expression #17 of SELECT list contains nonaggregated column 'rentors.wish_list.status'; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `products`.*, IFNULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `user_profile`.`profile_pic` as `user_image`, IFNULL(FLOOR(avg(review.star)), "0")  as avg_ratting, `sub_category`.`verification_required`
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '19'
ERROR - 2021-06-09 04:16:23 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 04:18:12 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:18:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:18:12 --> Total execution time: 0.1047
DEBUG - 2021-06-09 04:18:16 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:18:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 04:18:16 --> Query error: In aggregated query without GROUP BY, expression #17 of SELECT list contains nonaggregated column 'rentors.wish_list.status'; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `products`.*, IFNULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `user_profile`.`profile_pic` as `user_image`, IFNULL(FLOOR(avg(review.star)), "0")  as avg_ratting, `sub_category`.`verification_required`
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '16'
ERROR - 2021-06-09 04:18:17 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 04:20:48 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:20:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:20:48 --> Total execution time: 0.1001
DEBUG - 2021-06-09 04:20:58 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:20:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:20:58 --> Total execution time: 0.0927
DEBUG - 2021-06-09 04:20:59 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:20:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:21:00 --> Total execution time: 0.0798
DEBUG - 2021-06-09 04:21:00 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:21:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:21:01 --> Total execution time: 0.4872
DEBUG - 2021-06-09 04:21:01 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:21:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:21:02 --> Total execution time: 0.0788
DEBUG - 2021-06-09 04:21:02 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:21:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:21:02 --> Total execution time: 0.0796
DEBUG - 2021-06-09 04:21:03 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:21:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:21:03 --> Total execution time: 0.0785
DEBUG - 2021-06-09 04:21:04 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:21:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:21:04 --> Total execution time: 0.0767
DEBUG - 2021-06-09 04:21:06 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:21:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:21:06 --> Total execution time: 0.0766
DEBUG - 2021-06-09 04:21:07 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:21:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:21:07 --> Total execution time: 0.0775
DEBUG - 2021-06-09 04:21:47 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:21:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:21:47 --> Total execution time: 0.0817
DEBUG - 2021-06-09 04:21:49 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:21:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:21:49 --> Total execution time: 0.0779
DEBUG - 2021-06-09 04:21:50 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:21:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:21:50 --> Total execution time: 0.0779
DEBUG - 2021-06-09 04:21:51 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:21:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:21:51 --> Total execution time: 0.0810
DEBUG - 2021-06-09 04:21:51 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:21:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:21:51 --> Total execution time: 0.0766
DEBUG - 2021-06-09 04:21:53 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:21:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:21:53 --> Total execution time: 0.0772
DEBUG - 2021-06-09 04:22:02 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:22:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:22:02 --> Total execution time: 0.0780
DEBUG - 2021-06-09 04:22:04 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:22:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:22:04 --> Total execution time: 0.1629
DEBUG - 2021-06-09 04:22:05 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:22:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:22:05 --> Total execution time: 0.2394
DEBUG - 2021-06-09 04:22:07 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:22:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:22:07 --> Total execution time: 0.0784
DEBUG - 2021-06-09 04:23:11 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:23:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:23:11 --> Total execution time: 0.0777
DEBUG - 2021-06-09 04:23:14 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:23:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:23:14 --> Total execution time: 0.0811
DEBUG - 2021-06-09 04:23:15 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:23:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:23:15 --> Total execution time: 0.0767
DEBUG - 2021-06-09 04:23:16 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:23:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:23:16 --> Total execution time: 0.0826
DEBUG - 2021-06-09 04:23:17 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:23:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:23:17 --> Total execution time: 0.0791
DEBUG - 2021-06-09 04:23:17 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:23:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:23:17 --> Total execution time: 0.0776
DEBUG - 2021-06-09 04:23:18 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:23:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:23:18 --> Total execution time: 0.0791
DEBUG - 2021-06-09 04:23:18 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:23:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:23:19 --> Total execution time: 0.0790
DEBUG - 2021-06-09 04:23:19 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:23:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:23:19 --> Total execution time: 0.0782
DEBUG - 2021-06-09 04:27:45 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:27:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:29:02 --> Total execution time: 76.6149
DEBUG - 2021-06-09 04:30:01 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:30:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:33:10 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:33:10 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 04:33:16 --> Severity: Warning --> opendir(/Applications/MAMP/htdocsRentorServer/api/uploads/home/): failed to open dir: No such file or directory /Applications/MAMP/htdocs/RentorServer/api/application/models/HomeModel.php 19
ERROR - 2021-06-09 04:33:16 --> Severity: Warning --> closedir() expects parameter 1 to be resource, bool given /Applications/MAMP/htdocs/RentorServer/api/application/models/HomeModel.php 29
DEBUG - 2021-06-09 04:34:49 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:34:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:35:47 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:35:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 04:36:00 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 04:36:14 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 04:36:54 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 04:36:55 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
DEBUG - 2021-06-09 04:36:57 --> Total execution time: 69.3794
DEBUG - 2021-06-09 04:39:35 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:39:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 04:39:35 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 04:39:38 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 04:39:39 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
DEBUG - 2021-06-09 04:44:36 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:44:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:44:36 --> Total execution time: 0.1070
DEBUG - 2021-06-09 04:44:48 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:44:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:44:48 --> Total execution time: 0.2306
DEBUG - 2021-06-09 04:45:42 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:45:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 04:45:42 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 04:45:44 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 04:45:46 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 04:45:59 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 04:47:11 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
DEBUG - 2021-06-09 04:47:36 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:47:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:47:37 --> Total execution time: 0.1192
DEBUG - 2021-06-09 04:50:10 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:50:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:50:10 --> Total execution time: 0.0596
DEBUG - 2021-06-09 04:50:10 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 04:50:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 04:50:10 --> Total execution time: 0.0821
