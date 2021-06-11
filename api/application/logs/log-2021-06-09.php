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
DEBUG - 2021-06-09 11:29:18 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 11:29:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 11:29:18 --> Total execution time: 0.1708
DEBUG - 2021-06-09 11:30:04 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 11:30:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 11:30:04 --> Total execution time: 0.0588
DEBUG - 2021-06-09 11:30:14 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 11:30:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 11:30:14 --> Total execution time: 0.0268
DEBUG - 2021-06-09 11:30:15 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 11:30:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 11:30:15 --> Total execution time: 0.0241
DEBUG - 2021-06-09 11:30:16 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 11:30:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 11:30:16 --> Total execution time: 0.0238
DEBUG - 2021-06-09 11:30:35 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 11:30:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 11:30:35 --> Total execution time: 0.0276
DEBUG - 2021-06-09 11:30:57 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 11:30:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 11:30:57 --> Total execution time: 0.0255
DEBUG - 2021-06-09 11:31:16 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 11:31:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 11:31:16 --> Total execution time: 0.0272
DEBUG - 2021-06-09 18:03:55 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:03:55 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:03:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 18:03:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 18:03:55 --> Total execution time: 0.1320
DEBUG - 2021-06-09 18:03:55 --> Total execution time: 0.1320
DEBUG - 2021-06-09 18:04:22 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:04:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 18:04:22 --> Total execution time: 0.1745
DEBUG - 2021-06-09 18:04:22 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:04:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 18:04:22 --> Total execution time: 0.1010
DEBUG - 2021-06-09 18:08:34 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:08:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 18:08:34 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:08:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 18:08:34 --> Total execution time: 0.1041
DEBUG - 2021-06-09 18:08:34 --> Total execution time: 0.0905
DEBUG - 2021-06-09 18:09:03 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:09:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:09:03 --> Query error: In aggregated query without GROUP BY, expression #17 of SELECT list contains nonaggregated column 'rentors.wish_list.status'; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `products`.*, IFNULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `user_profile`.`profile_pic` as `user_image`, IFNULL(FLOOR(avg(review.star)), "0")  as avg_ratting, `sub_category`.`verification_required`
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 18:09:03 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 18:12:26 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:12:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:12:26 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 18:12:29 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
DEBUG - 2021-06-09 18:12:34 --> Total execution time: 8.0981
DEBUG - 2021-06-09 18:13:27 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:13:27 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:13:27 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 18:13:31 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
DEBUG - 2021-06-09 18:13:34 --> Total execution time: 6.4484
DEBUG - 2021-06-09 18:14:12 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:14:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:14:13 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 18:14:15 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 18:14:42 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 18:14:49 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 18:14:56 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 18:15:03 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 18:15:18 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 18:15:26 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
DEBUG - 2021-06-09 18:16:18 --> Total execution time: 125.5594
DEBUG - 2021-06-09 18:16:21 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:16:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:16:22 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 18:16:23 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 18:16:25 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 18:16:27 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 18:16:41 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
ERROR - 2021-06-09 18:16:45 --> Severity: Warning --> Use of undefined constant item - assumed 'item' (this will throw an Error in a future version of PHP) xdebug://debug-eval 1
DEBUG - 2021-06-09 18:21:11 --> Total execution time: 289.4519
DEBUG - 2021-06-09 18:21:52 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:21:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 18:21:52 --> Total execution time: 0.0502
DEBUG - 2021-06-09 18:21:52 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:21:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 18:21:53 --> Total execution time: 0.0907
DEBUG - 2021-06-09 18:22:37 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:22:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:23:00 --> Query error: In aggregated query without GROUP BY, expression #17 of SELECT list contains nonaggregated column 'rentors.wish_list.status'; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `products`.*, IFNULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `user_profile`.`profile_pic` as `user_image`, IFNULL(FLOOR(avg(review.star)), "0")  as avg_ratting, `sub_category`.`verification_required`
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 18:23:00 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 18:23:20 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:23:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:24:05 --> Query error: In aggregated query without GROUP BY, expression #17 of SELECT list contains nonaggregated column 'rentors.wish_list.status'; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `products`.*, IFNULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `user_profile`.`profile_pic` as `user_image`, IFNULL(FLOOR(avg(review.star)), "0")  as avg_ratting, `sub_category`.`verification_required`
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 18:24:05 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 18:24:27 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:24:27 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:25:59 --> Query error: In aggregated query without GROUP BY, expression #17 of SELECT list contains nonaggregated column 'rentors.wish_list.status'; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `products`.*, IFNULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `user_profile`.`profile_pic` as `user_image`, IFNULL(FLOOR(avg(review.star)), "0")  as avg_ratting, `sub_category`.`verification_required`
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 18:37:43 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 18:37:51 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:37:51 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:38:30 --> Query error: In aggregated query without GROUP BY, expression #17 of SELECT list contains nonaggregated column 'rentors.wish_list.status'; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `products`.*, IFNULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `user_profile`.`profile_pic` as `user_image`, IFNULL(FLOOR(avg(review.star)), "0")  as avg_ratting, `sub_category`.`verification_required`
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 18:38:30 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 18:38:37 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:38:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:38:50 --> Query error: In aggregated query without GROUP BY, expression #17 of SELECT list contains nonaggregated column 'rentors.wish_list.status'; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `products`.*, IFNULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `user_profile`.`profile_pic` as `user_image`, IFNULL(FLOOR(avg(review.star)), "0")  as avg_ratting, `sub_category`.`verification_required`
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 18:38:51 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 18:39:19 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:39:19 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:39:36 --> Query error: In aggregated query without GROUP BY, expression #17 of SELECT list contains nonaggregated column 'rentors.wish_list.status'; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `products`.*, IFNULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `user_profile`.`profile_pic` as `user_image`, IFNULL(FLOOR(avg(review.star)), "0")  as avg_ratting, `sub_category`.`verification_required`
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = 11
ERROR - 2021-06-09 18:39:37 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 18:39:41 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:39:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:40:08 --> Query error: In aggregated query without GROUP BY, expression #17 of SELECT list contains nonaggregated column 'rentors.wish_list.status'; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `products`.*, IFNULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `user_profile`.`profile_pic` as `user_image`, IFNULL(FLOOR(avg(review.star)), "0")  as avg_ratting, `sub_category`.`verification_required`
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = 11
ERROR - 2021-06-09 18:40:57 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 18:41:02 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:41:02 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:41:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `products`.`id` = 11' at line 2 - Invalid query: SELECT *
WHERE `products`.`id` = 11
ERROR - 2021-06-09 18:49:49 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 18:49:52 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:49:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:51:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `products`.`id` = 11' at line 2 - Invalid query: SELECT *
WHERE `products`.`id` = 11
ERROR - 2021-06-09 18:51:49 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 18:52:07 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:52:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:55:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `products`.`id` = 11' at line 2 - Invalid query: SELECT *
WHERE `products`.`id` = 11
ERROR - 2021-06-09 18:55:46 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 18:55:58 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:55:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:56:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `products`.`id` = 11' at line 2 - Invalid query: SELECT *
WHERE `products`.`id` = 11
ERROR - 2021-06-09 18:56:25 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 18:56:47 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:56:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:56:47 --> Severity: error --> Exception: syntax error, unexpected '*' /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 14
DEBUG - 2021-06-09 18:56:52 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:56:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:56:52 --> Severity: error --> Exception: syntax error, unexpected '*' /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 14
DEBUG - 2021-06-09 18:56:59 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:56:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:56:59 --> Severity: error --> Exception: syntax error, unexpected '*' /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 14
DEBUG - 2021-06-09 18:57:02 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:57:02 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:57:02 --> Severity: error --> Exception: syntax error, unexpected '*' /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 14
DEBUG - 2021-06-09 18:57:04 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:57:04 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:57:04 --> Severity: error --> Exception: syntax error, unexpected '*' /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 14
DEBUG - 2021-06-09 18:57:05 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:57:05 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:57:05 --> Severity: error --> Exception: syntax error, unexpected '*' /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 14
DEBUG - 2021-06-09 18:57:06 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:57:06 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:57:06 --> Severity: error --> Exception: syntax error, unexpected '*' /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 14
DEBUG - 2021-06-09 18:57:07 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:57:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:57:07 --> Severity: error --> Exception: syntax error, unexpected '*' /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 14
DEBUG - 2021-06-09 18:57:09 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:57:09 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:57:09 --> Severity: error --> Exception: syntax error, unexpected '*' /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 14
DEBUG - 2021-06-09 18:57:20 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:57:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 18:58:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `products`.`id` = 11' at line 2 - Invalid query: SELECT *
WHERE `products`.`id` = 11
ERROR - 2021-06-09 18:58:10 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 18:58:53 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 18:58:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:00:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `products`.`id` = 11' at line 2 - Invalid query: SELECT *
WHERE `products`.`id` = 11
ERROR - 2021-06-09 19:00:06 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 19:00:08 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:00:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:00:15 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2021-06-09 19:01:57 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 19:02:00 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:02:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 19:02:20 --> Total execution time: 20.0814
DEBUG - 2021-06-09 19:03:36 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:03:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:03:44 --> Query error: In aggregated query without GROUP BY, expression #17 of SELECT list contains nonaggregated column 'rentors.wish_list.status'; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `products`.*, IFNULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `user_profile`.`profile_pic` as `user_image`, IFNULL(FLOOR(avg(review.star)), "0")  as avg_ratting, `sub_category`.`verification_required`
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:03:44 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 19:05:43 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:05:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:05:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `u' at line 1 - Invalid query: SELECT `products`.*, IF NULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `user_profile`.`profile_pic` as `user_image`, IFNULL(FLOOR(avg(review.star)), "0")  as avg_ratting, `sub_category`.`verification_required`
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:05:58 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 19:07:15 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:07:15 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:07:22 --> Query error: Unknown column 'user_profile.name' in 'field list' - Invalid query: SELECT `products`.*, IFNULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `user_profile`.`profile_pic` as `user_image`, IFNULL(FLOOR(avg(review.star)), "0")  as avg_ratting, `sub_category`.`verification_required`
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:07:23 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 19:07:37 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:07:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:07:50 --> Query error: Unknown column 'wish_list.status' in 'field list' - Invalid query: SELECT `products`.*, IFNULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `user_profile`.`profile_pic` as `user_image`, IFNULL(FLOOR(avg(review.star)), "0")  as avg_ratting, `sub_category`.`verification_required`
FROM `products`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:07:51 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 19:08:22 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:08:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:08:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`' at line 1 - Invalid query: SELECT `products`.*, IFNULL(wish_list.status, "0") as is_like, `user_profile`.`name` as `user_name`, `user_profile`.`profile_pic` as `user_image`, IFNULL(FLOOR(avg(review.star)), "0")  as avg_ratting, `sub_category`.`verification_required`, *
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:08:39 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 23
DEBUG - 2021-06-09 19:09:56 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:09:56 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:09:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 19:09:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 19:09:56 --> Total execution time: 0.0439
DEBUG - 2021-06-09 19:10:09 --> Total execution time: 13.1385
DEBUG - 2021-06-09 19:14:30 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:14:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:14:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:14:31 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:15:04 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:15:04 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:15:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:15:05 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:17:34 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:17:34 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:17:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 19:17:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 19:17:34 --> Total execution time: 0.0894
DEBUG - 2021-06-09 19:17:34 --> Total execution time: 0.0996
DEBUG - 2021-06-09 19:17:41 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:17:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:17:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:17:41 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:19:54 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:19:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:19:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '16'
ERROR - 2021-06-09 19:19:54 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:19:54 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:19:54 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:19:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 19:19:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:19:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '100'
ERROR - 2021-06-09 19:19:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:19:54 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
ERROR - 2021-06-09 19:19:54 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:21:51 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:21:51 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:21:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 19:21:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 19:21:52 --> Total execution time: 0.0978
DEBUG - 2021-06-09 19:21:52 --> Total execution time: 0.0896
DEBUG - 2021-06-09 19:22:25 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:22:25 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:22:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:22:25 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:28:18 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:28:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:28:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '16'
ERROR - 2021-06-09 19:28:18 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:29:58 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:29:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 19:29:58 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:29:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 19:29:58 --> Total execution time: 0.0959
DEBUG - 2021-06-09 19:29:58 --> Total execution time: 0.0805
DEBUG - 2021-06-09 19:32:09 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:32:09 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:32:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:32:09 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:32:09 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:32:09 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:32:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '16'
ERROR - 2021-06-09 19:32:09 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:33:13 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:33:13 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:33:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 19:33:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 19:33:13 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:33:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:33:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '16'
ERROR - 2021-06-09 19:33:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:33:13 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
ERROR - 2021-06-09 19:33:13 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:33:13 --> Total execution time: 0.0522
DEBUG - 2021-06-09 19:35:16 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:35:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:35:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '16'
ERROR - 2021-06-09 19:35:16 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:35:26 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:35:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:35:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:35:26 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:35:46 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:35:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:35:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:35:46 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:39:30 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:39:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:39:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:39:30 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:39:42 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:39:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:39:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:39:42 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:39:54 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:39:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:39:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:39:54 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:41:57 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:41:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:41:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:41:57 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:42:09 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:42:09 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:42:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:42:09 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:52:35 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:52:35 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:52:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 19:52:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 19:52:35 --> Total execution time: 0.1294
DEBUG - 2021-06-09 19:52:35 --> Total execution time: 0.1405
DEBUG - 2021-06-09 19:53:09 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:53:09 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:53:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:53:09 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:54:16 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:54:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:54:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:54:16 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:58:02 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:58:02 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:58:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 19:58:02 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:58:19 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:58:19 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:58:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '16'
ERROR - 2021-06-09 19:58:19 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 19:59:53 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 19:59:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 19:59:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '16'
ERROR - 2021-06-09 19:59:54 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 20:03:12 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:03:12 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:03:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:03:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:03:12 --> Total execution time: 0.1050
DEBUG - 2021-06-09 20:03:12 --> Total execution time: 0.1053
DEBUG - 2021-06-09 20:05:17 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:05:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 20:05:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 20:05:18 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 20:05:18 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:05:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 20:05:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 20:05:18 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 20:07:58 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:07:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 20:07:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 20:07:58 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 20:09:30 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:09:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 20:09:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 20:09:30 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 20:15:43 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:15:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:24:55 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:24:55 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:24:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:24:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:24:55 --> Total execution time: 0.1491
DEBUG - 2021-06-09 20:24:55 --> Total execution time: 0.1500
DEBUG - 2021-06-09 20:26:10 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:26:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:26:10 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:26:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:26:10 --> Total execution time: 0.0821
DEBUG - 2021-06-09 20:26:10 --> Total execution time: 0.0948
DEBUG - 2021-06-09 20:26:18 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:26:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:26:18 --> Total execution time: 0.0244
DEBUG - 2021-06-09 20:36:36 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:36:36 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:36:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:36:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:36:37 --> Total execution time: 0.1044
DEBUG - 2021-06-09 20:36:37 --> Total execution time: 0.1045
DEBUG - 2021-06-09 20:36:46 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:36:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:36:46 --> Total execution time: 0.0337
DEBUG - 2021-06-09 20:38:20 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:38:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 20:38:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 20:38:24 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 20:38:35 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:38:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 20:38:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 20:38:39 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
ERROR - 2021-06-09 20:38:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 20:38:44 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 20:40:28 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:40:28 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:40:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:40:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:40:28 --> Total execution time: 0.0228
DEBUG - 2021-06-09 20:40:28 --> Total execution time: 0.0226
DEBUG - 2021-06-09 20:41:00 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:41:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:41:00 --> Total execution time: 0.0225
DEBUG - 2021-06-09 20:41:38 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:41:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:41:38 --> Total execution time: 0.0601
DEBUG - 2021-06-09 20:41:39 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:41:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:41:39 --> Total execution time: 0.0836
DEBUG - 2021-06-09 20:41:51 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:41:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:41:51 --> Total execution time: 0.0246
DEBUG - 2021-06-09 20:42:39 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:42:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:42:39 --> Total execution time: 0.0349
DEBUG - 2021-06-09 20:44:53 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:44:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 20:44:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 20:44:57 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 20:45:05 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:45:05 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 20:45:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 20:45:14 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 20:45:33 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:45:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:45:33 --> Total execution time: 0.0228
DEBUG - 2021-06-09 20:46:32 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:46:32 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 20:46:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `w' at line 2 - Invalid query: SELECT *
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 20:47:32 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 24
DEBUG - 2021-06-09 20:47:36 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:47:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 20:47:39 --> Query error: Not unique table/alias: 'wish_list' - Invalid query: SELECT *
FROM `rentors`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 20:47:41 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 25
DEBUG - 2021-06-09 20:47:54 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:47:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 20:47:57 --> Query error: Not unique table/alias: 'wish_list' - Invalid query: SELECT *
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 20:47:58 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 25
DEBUG - 2021-06-09 20:48:22 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:48:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:48:22 --> Total execution time: 0.0742
DEBUG - 2021-06-09 20:48:46 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:48:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 20:48:51 --> Query error: Not unique table/alias: 'wish_list' - Invalid query: SELECT *
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 20:48:52 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 25
DEBUG - 2021-06-09 20:49:31 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:49:31 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 20:49:35 --> Query error: Not unique table/alias: 'wish_list' - Invalid query: SELECT *
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 20:49:36 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 25
DEBUG - 2021-06-09 20:50:19 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:50:19 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 20:50:23 --> Query error: Not unique table/alias: 'wish_list' - Invalid query: SELECT *
FROM `products`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `wish_list` ON `wish_list`.`product_id` = `products`.`id`
LEFT JOIN `sub_category` ON `sub_category`.`id` = `products`.`sub_category_id`
LEFT JOIN `review` ON `review`.`product_id` = `products`.`id`
LEFT JOIN `user_profile` ON `user_profile`.`user_id` = `products`.`user_id`
WHERE `products`.`id` = '11'
ERROR - 2021-06-09 20:50:24 --> Severity: error --> Exception: Call to a member function row() on bool /Applications/MAMP/htdocs/RentorServer/api/application/models/ProductModel.php 25
DEBUG - 2021-06-09 20:50:58 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:50:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:50:58 --> Total execution time: 0.0242
DEBUG - 2021-06-09 20:51:43 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:51:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:51:43 --> Total execution time: 0.0240
DEBUG - 2021-06-09 20:52:07 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:52:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:52:23 --> Total execution time: 16.4490
DEBUG - 2021-06-09 20:52:45 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:52:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:52:45 --> Total execution time: 0.0229
DEBUG - 2021-06-09 20:52:57 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:52:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:53:02 --> Total execution time: 5.1901
DEBUG - 2021-06-09 20:55:21 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:55:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:55:21 --> Total execution time: 0.0376
DEBUG - 2021-06-09 20:56:44 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:56:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:56:46 --> Total execution time: 2.2863
DEBUG - 2021-06-09 20:56:57 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 20:56:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 20:57:02 --> Total execution time: 4.5462
DEBUG - 2021-06-09 21:02:37 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:02:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:03:49 --> Total execution time: 72.3934
DEBUG - 2021-06-09 21:03:53 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:03:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 21:03:57 --> Severity: Warning --> A non-numeric value encountered /Applications/MAMP/htdocs/RentorServer/api/application/models/MyModel.php 189
DEBUG - 2021-06-09 21:03:58 --> Total execution time: 4.7877
DEBUG - 2021-06-09 21:04:39 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:04:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 21:04:48 --> Severity: Warning --> A non-numeric value encountered /Applications/MAMP/htdocs/RentorServer/api/application/models/MyModel.php 189
ERROR - 2021-06-09 21:05:30 --> Severity: Warning --> A non-numeric value encountered xdebug://debug-eval 1
DEBUG - 2021-06-09 21:05:41 --> Total execution time: 62.9277
DEBUG - 2021-06-09 21:05:47 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:05:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:06:00 --> Total execution time: 12.3425
DEBUG - 2021-06-09 21:12:25 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:12:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:12:25 --> Total execution time: 0.0446
DEBUG - 2021-06-09 21:13:35 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:13:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:13:35 --> Total execution time: 0.0224
DEBUG - 2021-06-09 21:16:45 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:16:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:19:14 --> Total execution time: 149.1968
DEBUG - 2021-06-09 21:19:34 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:19:34 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 21:19:34 --> Severity: error --> Exception: syntax error, unexpected '$q' (T_VARIABLE) /Applications/MAMP/htdocs/RentorServer/api/application/models/MyModel.php 190
DEBUG - 2021-06-09 21:19:44 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:19:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 21:19:44 --> Severity: error --> Exception: syntax error, unexpected '$q' (T_VARIABLE) /Applications/MAMP/htdocs/RentorServer/api/application/models/MyModel.php 190
DEBUG - 2021-06-09 21:19:57 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:19:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 21:19:57 --> Severity: error --> Exception: syntax error, unexpected '$q' (T_VARIABLE) /Applications/MAMP/htdocs/RentorServer/api/application/models/MyModel.php 190
DEBUG - 2021-06-09 21:19:57 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:19:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 21:19:57 --> Severity: error --> Exception: syntax error, unexpected '$q' (T_VARIABLE) /Applications/MAMP/htdocs/RentorServer/api/application/models/MyModel.php 190
DEBUG - 2021-06-09 21:19:58 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:19:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 21:19:58 --> Severity: error --> Exception: syntax error, unexpected '$q' (T_VARIABLE) /Applications/MAMP/htdocs/RentorServer/api/application/models/MyModel.php 190
DEBUG - 2021-06-09 21:19:58 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:19:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 21:19:58 --> Severity: error --> Exception: syntax error, unexpected '$q' (T_VARIABLE) /Applications/MAMP/htdocs/RentorServer/api/application/models/MyModel.php 190
DEBUG - 2021-06-09 21:19:59 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:19:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 21:19:59 --> Severity: error --> Exception: syntax error, unexpected '$q' (T_VARIABLE) /Applications/MAMP/htdocs/RentorServer/api/application/models/MyModel.php 190
DEBUG - 2021-06-09 21:19:59 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:19:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 21:19:59 --> Severity: error --> Exception: syntax error, unexpected '$q' (T_VARIABLE) /Applications/MAMP/htdocs/RentorServer/api/application/models/MyModel.php 190
DEBUG - 2021-06-09 21:19:59 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:19:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 21:19:59 --> Severity: error --> Exception: syntax error, unexpected '$q' (T_VARIABLE) /Applications/MAMP/htdocs/RentorServer/api/application/models/MyModel.php 190
DEBUG - 2021-06-09 21:19:59 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:19:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 21:19:59 --> Severity: error --> Exception: syntax error, unexpected '$q' (T_VARIABLE) /Applications/MAMP/htdocs/RentorServer/api/application/models/MyModel.php 190
DEBUG - 2021-06-09 21:19:59 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:19:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-06-09 21:20:00 --> Severity: error --> Exception: syntax error, unexpected '$q' (T_VARIABLE) /Applications/MAMP/htdocs/RentorServer/api/application/models/MyModel.php 190
DEBUG - 2021-06-09 21:21:51 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:21:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:21:51 --> Total execution time: 0.0605
DEBUG - 2021-06-09 21:22:14 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:22:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:22:14 --> Total execution time: 0.0410
DEBUG - 2021-06-09 21:25:18 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:25:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:25:18 --> Total execution time: 0.0239
DEBUG - 2021-06-09 21:26:14 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:26:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:26:14 --> Total execution time: 0.0860
DEBUG - 2021-06-09 21:28:06 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:28:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:28:06 --> Total execution time: 0.0223
DEBUG - 2021-06-09 21:29:22 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:29:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:29:22 --> Total execution time: 0.0266
DEBUG - 2021-06-09 21:30:44 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:30:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:30:44 --> Total execution time: 0.0279
DEBUG - 2021-06-09 21:30:46 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:30:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:30:46 --> Total execution time: 0.0451
DEBUG - 2021-06-09 21:30:46 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:30:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:30:46 --> Total execution time: 0.0427
DEBUG - 2021-06-09 21:30:47 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:30:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:30:47 --> Total execution time: 0.0317
DEBUG - 2021-06-09 21:31:25 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:31:25 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:31:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:31:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:31:25 --> Total execution time: 0.0946
DEBUG - 2021-06-09 21:31:25 --> Total execution time: 0.0954
DEBUG - 2021-06-09 21:31:27 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:31:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:31:27 --> Total execution time: 0.0302
DEBUG - 2021-06-09 21:31:31 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:31:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:31:31 --> Total execution time: 0.0221
DEBUG - 2021-06-09 21:31:38 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:31:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:31:38 --> Total execution time: 0.0233
DEBUG - 2021-06-09 21:33:52 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:33:52 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:33:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:33:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:33:52 --> Total execution time: 0.1068
DEBUG - 2021-06-09 21:33:52 --> Total execution time: 0.1068
DEBUG - 2021-06-09 21:34:35 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:34:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:34:35 --> Total execution time: 0.0266
DEBUG - 2021-06-09 21:44:33 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:44:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:44:33 --> Total execution time: 0.0650
DEBUG - 2021-06-09 21:46:31 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:46:31 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:46:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:46:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:46:31 --> Total execution time: 0.1047
DEBUG - 2021-06-09 21:46:31 --> Total execution time: 0.1047
DEBUG - 2021-06-09 21:47:19 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:47:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:47:19 --> Total execution time: 0.0404
DEBUG - 2021-06-09 21:53:34 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:53:34 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:53:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:53:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:53:35 --> Total execution time: 0.0996
DEBUG - 2021-06-09 21:53:35 --> Total execution time: 0.1022
DEBUG - 2021-06-09 21:53:47 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 21:53:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 21:53:47 --> Total execution time: 0.0241
DEBUG - 2021-06-09 23:24:21 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 23:24:21 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 23:24:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 23:24:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 23:24:21 --> Total execution time: 0.0688
DEBUG - 2021-06-09 23:24:21 --> Total execution time: 0.0688
DEBUG - 2021-06-09 23:25:35 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 23:25:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 23:25:35 --> Total execution time: 0.0568
DEBUG - 2021-06-09 23:25:56 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 23:25:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 23:25:56 --> Total execution time: 0.0468
DEBUG - 2021-06-09 23:27:27 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 23:27:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 23:27:27 --> Total execution time: 0.0305
DEBUG - 2021-06-09 23:28:07 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 23:28:07 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 23:28:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 23:28:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 23:28:07 --> Total execution time: 0.1157
DEBUG - 2021-06-09 23:28:07 --> Total execution time: 0.1157
DEBUG - 2021-06-09 23:28:36 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 23:28:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 23:28:36 --> Total execution time: 0.0500
DEBUG - 2021-06-09 23:29:26 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 23:29:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 23:29:26 --> Total execution time: 0.0473
DEBUG - 2021-06-09 23:29:56 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 23:29:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 23:29:56 --> Total execution time: 0.0293
DEBUG - 2021-06-09 23:30:16 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 23:30:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 23:30:16 --> Total execution time: 0.0261
DEBUG - 2021-06-09 23:30:51 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 23:30:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 23:30:51 --> Total execution time: 0.0351
DEBUG - 2021-06-09 23:31:31 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 23:31:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 23:31:31 --> Total execution time: 0.0262
DEBUG - 2021-06-09 23:32:26 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 23:32:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 23:32:26 --> Total execution time: 0.0282
DEBUG - 2021-06-09 23:33:43 --> UTF-8 Support Enabled
DEBUG - 2021-06-09 23:33:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-06-09 23:33:43 --> Total execution time: 0.0414
