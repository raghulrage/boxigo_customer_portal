-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 10:13 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boxigo`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `user_id` varchar(120) NOT NULL,
  `first_name` varchar(120) NOT NULL,
  `last_name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` varchar(120) NOT NULL,
  `verification_key` varchar(120) NOT NULL,
  `is_email_verified` varchar(20) NOT NULL DEFAULT 'no',
  `is_phone_verified` varchar(20) NOT NULL DEFAULT 'no',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`user_id`, `first_name`, `last_name`, `email`, `phone`, `verification_key`, `is_email_verified`, `is_phone_verified`, `date_created`) VALUES
('B10309', 'jeevan', 'M', 'jeevanm@gmail.com', '9876543219', '1374c90f783cd7b871e704ca6e805102', 'no', 'no', '2019-08-27 08:09:42'),
('B25645', 'sam', 'cladson', 'samcladson01@gmail.com', '8300656107', '2ef0a058f2428dbdd193e9ff356222fa', 'no', 'no', '2019-08-26 17:15:30'),
('B99381', 'Style', 'Lit', 'samcladson08@gmail.com', '7397567689', '055d8958eee7183346a2d861aa2de575', 'no', 'no', '2019-08-16 19:33:11');

-- --------------------------------------------------------

--
-- Table structure for table `estimate`
--

CREATE TABLE `estimate` (
  `estimate_id` varchar(121) NOT NULL,
  `user_id` varchar(121) NOT NULL,
  `city_type` varchar(50) NOT NULL,
  `select_city` varchar(50) NOT NULL,
  `moving_from` varchar(121) NOT NULL,
  `moving_to` varchar(121) NOT NULL,
  `moving_on` varchar(121) NOT NULL,
  `distance` varchar(121) NOT NULL DEFAULT '0',
  `duration` varchar(121) NOT NULL DEFAULT '0',
  `property_size` varchar(121) NOT NULL,
  `old_floor_no` int(11) NOT NULL,
  `new_floor_no` int(11) NOT NULL,
  `old_elevator_availability` varchar(50) NOT NULL,
  `packing_service` varchar(20) NOT NULL,
  `new_elevator_availability` varchar(50) NOT NULL,
  `unpacking_service` varchar(20) NOT NULL,
  `old_parking_distance` int(11) NOT NULL,
  `new_parking_distance` int(11) NOT NULL,
  `items` text NOT NULL,
  `total_items` int(11) NOT NULL,
  `service_type` varchar(121) NOT NULL,
  `notification_sent` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `estimate`
--

INSERT INTO `estimate` (`estimate_id`, `user_id`, `city_type`, `select_city`, `moving_from`, `moving_to`, `moving_on`, `distance`, `duration`, `property_size`, `old_floor_no`, `new_floor_no`, `old_elevator_availability`, `packing_service`, `new_elevator_availability`, `unpacking_service`, `old_parking_distance`, `new_parking_distance`, `items`, `total_items`, `service_type`, `notification_sent`, `status`, `date_created`) VALUES
('E11525', 'B99381', '', '', 'Palakkad, Kerala', 'Trichur, Kerala', '08/25/2019 4:37 PM', '0', '0', '3 + BHK', 1, 1, 'No', '', 'No', '', 1, 1, 'center_table=1|computer_table=2|foldable_chair=1|home_theater=2|non_foldable_chair=1|plastic_chair=3|side_table=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|tv_cabinet=1|study_table=1|fan=3|television=1|computer=1|baby_bed=1|bed_mattress=2|bunk_bed=1|diwan_bed=2|double_cot_bed_boxed=1|double_cot_bed_regular=3|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wooden=1|air_cooler=1|table_fan=1|split_ac=1|windows_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=2|utensils_stand=3|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|shoe_rack=1|vaccuum_cleaner=2|washing_machine=1|book_boxes=1|cloth_boxes=3|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|bike_geared=1|car_hatchback=1', 74, 'Premium', 0, 0, '2019-08-18 12:10:26'),
('E15183', 'B99381', '', '', 'Coimbatore, Tamil Nadu', 'Tiruppur, Tamil Nadu', '08/26/2019 9:49 PM', '0', '0', '1 BHK', 1, 1, 'Yes', '', 'Yes', '', 77, 2, 'center_table=1|computer_table=2|foldable_chair=1|home_theater=2|non_foldable_chair=1|plastic_chair=3|side_table=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|tv_cabinet=1|study_table=1|fan=3|television=1|computer=1|baby_bed=1|bed_mattress=2|bunk_bed=1|diwan_bed=2|double_cot_bed_boxed=1|double_cot_bed_regular=3|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wooden=1|air_cooler=1|table_fan=1|split_ac=1|windows_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=2|utensils_stand=3|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|shoe_rack=1|vaccuum_cleaner=2|washing_machine=1|book_boxes=1|cloth_boxes=3|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|bike_geared=1|car_hatchback=1', 74, 'Economy', 0, 0, '2019-08-18 16:20:28'),
('E18752', 'B99381', '', '', 'Palladam, Tamil Nadu', 'Tiruppur, Tamil Nadu', '08/27/2019 9:59 PM', '0', '0', '2 BHK', 23, 78, 'Yes', '', 'Yes', '', 90, 89, 'center_table=1|computer_table=2|foldable_chair=1|home_theater=2|non_foldable_chair=1|plastic_chair=3|side_table=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|tv_cabinet=1|study_table=1|fan=3|television=1|computer=1|baby_bed=1|bed_mattress=2|bunk_bed=1|diwan_bed=2|double_cot_bed_boxed=1|double_cot_bed_regular=3|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wooden=1|air_cooler=1|table_fan=1|split_ac=1|windows_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=2|utensils_stand=3|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|shoe_rack=1|vaccuum_cleaner=2|washing_machine=1|book_boxes=5|cloth_boxes=8|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|bike_geared=1|car_hatchback=1', 83, 'Economy1', 0, 0, '2019-08-18 16:30:22'),
('E23875', 'B99381', '', '', 'Palladam, Tamil Nadu', 'Mumbai, Maharashtra', '08/19/2019 10:04 PM', '0', '0', '1 BHK', 11, 11, 'No', '', 'Yes', '', 11, 22, 'center_table=1|computer_table=2|foldable_chair=1|home_theater=2|non_foldable_chair=1|plastic_chair=3|side_table=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|tv_cabinet=1|study_table=1|fan=3|television=1|computer=1|baby_bed=1|bed_mattress=2|bunk_bed=1|diwan_bed=2|double_cot_bed_boxed=1|double_cot_bed_regular=3|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wooden=1|air_cooler=1|table_fan=1|split_ac=1|windows_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=2|utensils_stand=3|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|shoe_rack=1|vaccuum_cleaner=2|washing_machine=1|book_boxes=1|cloth_boxes=3|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|bike_geared=1|car_hatchback=1', 74, 'Economy1', 0, 0, '2019-08-18 16:34:37'),
('E30872', 'B99381', '', '', 'Coimbatore, Tamil Nadu', 'Chennai, Tamil Nadu', '08/19/2019 9:07 PM', '0', '0', '3 BHK', 22, 66, 'Yes', '', 'No', '', 55, 1, 'center_table=1|computer_table=2|foldable_chair=1|home_theater=2|non_foldable_chair=1|plastic_chair=3|side_table=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|tv_cabinet=1|study_table=1|fan=3|television=1|computer=1|baby_bed=1|bed_mattress=2|bunk_bed=1|diwan_bed=2|double_cot_bed_boxed=1|double_cot_bed_regular=3|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wooden=1|air_cooler=1|table_fan=1|split_ac=1|windows_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=2|utensils_stand=3|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|shoe_rack=1|vaccuum_cleaner=2|washing_machine=1|book_boxes=1|cloth_boxes=3|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|bike_geared=1|car_hatchback=1', 74, 'Economy1', 0, 0, '2019-08-18 15:38:16'),
('E37697', 'B99381', '', '', 'Coimbatore, Tamil Nadu', 'West Palm Beach, FL, USA', '08/18/2019 3:29 PM', '0', '0', '3 BHK', 11, 21, 'Yes', '', 'No', '', 22, 22, 'center_table=1|computer_table=2|foldable_chair=1|home_theater=2|non_foldable_chair=1|plastic_chair=3|side_table=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|tv_cabinet=1|study_table=1|fan=3|television=1|computer=1|baby_bed=1|bed_mattress=2|bunk_bed=1|diwan_bed=2|double_cot_bed_boxed=1|double_cot_bed_regular=3|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wooden=1|air_cooler=1|table_fan=1|split_ac=1|windows_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=2|utensils_stand=3|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|shoe_rack=1|vaccuum_cleaner=2|washing_machine=1|book_boxes=1|cloth_boxes=3|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|bike_geared=1|car_hatchback=1', 74, 'silver', 0, 0, '2019-08-18 11:01:28'),
('E41516', 'B99381', '', '', 'Kovai Pudur, Coimbatore, Tamil Nadu', 'Pitchampalayam Pudur, Tiruppur, Tamil Nadu', '08/26/2019 9:58 PM', '0', '0', '2 BHK', 8, 12, 'Yes', '', 'No', '', 22, 2, 'center_table=1|computer_table=2|foldable_chair=1|home_theater=2|non_foldable_chair=1|plastic_chair=3|side_table=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|tv_cabinet=1|study_table=1|fan=3|television=1|computer=1|baby_bed=1|bed_mattress=2|bunk_bed=1|diwan_bed=2|double_cot_bed_boxed=1|double_cot_bed_regular=3|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wooden=1|air_cooler=1|table_fan=1|split_ac=1|windows_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=2|utensils_stand=3|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|shoe_rack=1|vaccuum_cleaner=2|washing_machine=1|book_boxes=1|cloth_boxes=3|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|bike_geared=1|car_hatchback=1', 74, 'Economy1', 0, 0, '2019-08-18 16:28:50'),
('E48432', 'B99381', '', '', 'Palakkad, Kerala', 'Trichur, Kerala', '08/25/2019 4:37 PM', '0', '0', '3 + BHK', 1, 1, 'No', '', 'No', '', 1, 1, 'center_table=1|computer_table=2|foldable_chair=1|home_theater=2|non_foldable_chair=1|plastic_chair=3|side_table=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|tv_cabinet=1|study_table=1|fan=3|television=1|computer=1|baby_bed=1|bed_mattress=2|bunk_bed=1|diwan_bed=2|double_cot_bed_boxed=1|double_cot_bed_regular=3|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wooden=1|air_cooler=1|table_fan=1|split_ac=1|windows_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=2|utensils_stand=3|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|shoe_rack=1|vaccuum_cleaner=2|washing_machine=1|book_boxes=1|cloth_boxes=3|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|bike_geared=1|car_hatchback=1', 74, 'silver', 0, 0, '2019-08-18 11:31:08'),
('E50357', 'B99381', '', '', 'Coimbatore, Tamil Nadu', 'Palladam, Tamil Nadu', '08/26/2019 9:46 PM', '0', '0', '2 BHK', 22, 22, 'Yes', '', 'Yes', '', 222, 2, 'center_table=1|computer_table=2|foldable_chair=1|home_theater=2|non_foldable_chair=1|plastic_chair=3|side_table=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|tv_cabinet=1|study_table=1|fan=3|television=1|computer=1|baby_bed=1|bed_mattress=2|bunk_bed=1|diwan_bed=2|double_cot_bed_boxed=1|double_cot_bed_regular=3|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wooden=1|air_cooler=1|table_fan=1|split_ac=1|windows_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=2|utensils_stand=3|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|shoe_rack=1|vaccuum_cleaner=2|washing_machine=1|book_boxes=1|cloth_boxes=3|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|bike_geared=1|car_hatchback=1', 74, 'Economy1', 0, 0, '2019-08-18 16:17:21'),
('E52560', 'B99381', '', '', 'America', 'Mexico City, CDMX, Mexico', '08/27/2019 10:28 PM', '0', '0', '2 BHK', 22, 11, 'Yes', '', 'No', '', 22, 21, 'center_table=1|computer_table=2|foldable_chair=1|home_theater=2|non_foldable_chair=1|plastic_chair=3|side_table=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|tv_cabinet=1|study_table=1|fan=3|television=1|computer=1|baby_bed=1|bed_mattress=2|bunk_bed=1|diwan_bed=2|double_cot_bed_boxed=1|double_cot_bed_regular=3|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wooden=1|air_cooler=1|table_fan=1|split_ac=1|windows_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=2|utensils_stand=3|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|shoe_rack=1|vaccuum_cleaner=2|washing_machine=1|book_boxes=1|cloth_boxes=3|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|bike_geared=1|car_hatchback=1', 74, 'Economy', 0, 0, '2019-08-18 16:58:51'),
('E59338', 'B99381', '', '', 'Chennai, Tamil Nadu', 'Pondicherry, Puducherry', '08/26/2019 8:29 PM', '0', '0', '3 BHK', 2, 2, 'Yes', '', 'No', '', 22, 22, 'center_table=1|computer_table=2|foldable_chair=1|home_theater=2|non_foldable_chair=1|plastic_chair=3|side_table=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|tv_cabinet=1|study_table=1|fan=3|television=1|computer=1|baby_bed=1|bed_mattress=2|bunk_bed=1|diwan_bed=2|double_cot_bed_boxed=1|double_cot_bed_regular=3|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wooden=1|air_cooler=1|table_fan=1|split_ac=1|windows_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=2|utensils_stand=3|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|shoe_rack=1|vaccuum_cleaner=2|washing_machine=1|book_boxes=1|cloth_boxes=3|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|bike_geared=1|car_hatchback=1', 74, 'Economy', 0, 0, '2019-08-18 15:00:36'),
('E59915', 'B99381', '', '', 'Coimbatore, Tamil Nadu', 'Kanyakumari, Tamil Nadu', '08/26/2019 10:18 PM', '0', '0', '2 BHK', 21, 10, 'Yes', '', 'No', '', 50, 50, 'center_table=1|computer_table=2|foldable_chair=1|home_theater=2|non_foldable_chair=1|plastic_chair=3|side_table=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|tv_cabinet=1|study_table=1|fan=3|television=1|computer=1|baby_bed=1|bed_mattress=2|bunk_bed=1|diwan_bed=2|double_cot_bed_boxed=1|double_cot_bed_regular=3|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wooden=1|air_cooler=1|table_fan=1|split_ac=1|windows_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=2|utensils_stand=3|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|shoe_rack=1|vaccuum_cleaner=2|washing_machine=1|book_boxes=1|cloth_boxes=3|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|bike_geared=1|car_hatchback=1', 74, 'Economy', 0, 0, '2019-08-18 16:49:50'),
('E69878', 'B99381', 'Within City', 'Coimbatore, Tamil Nadu', 'Peelamedu, Coimbatore, Tamil Nadu', 'Gandhipuram, Coimbatore, Tamil Nadu', '08/28/2019 4:14 PM', '8.0 km', '23 mins', '1 BHK', 2, 1, 'No', 'Yes', 'No', 'Yes', 100, 250, 'foldable_chair=1|home_theater=2|non_foldable_chair=1|plastic_chair=3|side_table=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|tv_cabinet=1|study_table=1|fan=1|television=1|computer=1|baby_bed=1|bed_mattress=2|bunk_bed=1|diwan_bed=2|double_cot_bed_boxed=1|double_cot_bed_regular=3|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wooden=1|air_cooler=1|table_fan=1|split_ac=1|windows_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=2|utensils_stand=1|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|shoe_rack=1|vaccuum_cleaner=2|washing_machine=1|book_boxes=1|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|car_hatchback=1', 63, 'sample', 0, 1, '2019-08-23 10:45:13'),
('E71000', 'B99381', '', '', 'Coimbatore, Tamil Nadu', 'Ooty, Tamil Nadu', '08/27/2019 11:44 PM', 'Distance: 84.9 km', 'Duration: 2 hours 54 mins', '2 BHK', 21, 41, 'Yes', '', 'Yes', '', 33, 100, 'center_table=1|computer_table=2|foldable_chair=1|home_theater=2|non_foldable_chair=1|plastic_chair=3|side_table=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|tv_cabinet=1|study_table=1|fan=3|television=1|computer=1|baby_bed=1|bed_mattress=2|bunk_bed=1|diwan_bed=2|double_cot_bed_boxed=1|double_cot_bed_regular=3|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wooden=1|air_cooler=1|table_fan=1|split_ac=1|windows_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=2|utensils_stand=3|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|shoe_rack=1|vaccuum_cleaner=2|washing_machine=1|book_boxes=1|cloth_boxes=3|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|bike_geared=1|car_hatchback=1', 74, 'Elite', 0, 1, '2019-08-18 18:15:14'),
('E75865', 'B99381', '', '', 'Chithambalam, Tamil Nadu', 'Pitchampalayam Pudur, Tiruppur, Tamil Nadu', '08/28/2019 10:45 PM', '0', '0', '2 BHK', 11, 2, 'Yes', '', 'No', '', 222, 22, 'center_table=1|computer_table=2|foldable_chair=1|home_theater=2|non_foldable_chair=1|plastic_chair=3|side_table=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|tv_cabinet=1|study_table=1|fan=3|television=1|computer=1|baby_bed=1|bed_mattress=2|bunk_bed=1|diwan_bed=2|double_cot_bed_boxed=1|double_cot_bed_regular=3|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wooden=1|air_cooler=1|table_fan=1|split_ac=1|windows_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=2|utensils_stand=3|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|shoe_rack=1|vaccuum_cleaner=2|washing_machine=1|book_boxes=1|cloth_boxes=3|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|bike_geared=1|car_hatchback=1', 74, 'Economy', 0, 0, '2019-08-18 17:17:15'),
('E79129', 'B99381', '', '', 'Chicago, IL, USA', 'Dallas, TX, USA', '08/27/2019 10:30 PM', '0', '0', '2 BHK', 23, 10, 'No', '', 'Yes', '', 22, 11, 'center_table=1|computer_table=2|foldable_chair=1|home_theater=2|non_foldable_chair=1|plastic_chair=3|side_table=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|tv_cabinet=1|study_table=1|fan=3|television=1|computer=1|baby_bed=1|bed_mattress=2|bunk_bed=1|diwan_bed=2|double_cot_bed_boxed=1|double_cot_bed_regular=3|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wooden=1|air_cooler=1|table_fan=1|split_ac=1|windows_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=2|utensils_stand=3|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|shoe_rack=1|vaccuum_cleaner=2|washing_machine=1|book_boxes=1|cloth_boxes=3|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|bike_geared=1|car_hatchback=1', 74, 'Economy1', 0, 0, '2019-08-18 17:01:19'),
('E82354', 'B99381', '', '', 'Palladam, Tamil Nadu', 'Chidambaram, Tamil Nadu', '08/28/2019 4:35 PM', '0', '0', 'FEW ITEMS', 20, 50, 'Yes', '', 'No', '', 10, 10, 'center_table=1|computer_table=2|foldable_chair=1|home_theater=2|non_foldable_chair=1|plastic_chair=3|side_table=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|tv_cabinet=1|study_table=1|fan=3|television=1|computer=1|baby_bed=1|bed_mattress=2|bunk_bed=1|diwan_bed=2|double_cot_bed_boxed=1|double_cot_bed_regular=3|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wooden=1|air_cooler=1|table_fan=1|split_ac=1|windows_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=2|utensils_stand=3|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|shoe_rack=1|vaccuum_cleaner=2|washing_machine=1|book_boxes=1|cloth_boxes=3|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|bike_geared=1|car_hatchback=1', 74, 'silver', 0, 0, '2019-08-18 11:06:04'),
('E83150', 'B99381', '', '', 'Chennai, Tamil Nadu', 'Tiruppur, Tamil Nadu', '08/26/2019 8:46 PM', '0', '0', '3 BHK', 11, 2, 'Yes', '', 'No', '', 22, 22, 'center_table=1|computer_table=2|foldable_chair=1|home_theater=2|non_foldable_chair=1|plastic_chair=3|side_table=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|tv_cabinet=1|study_table=1|fan=3|television=1|computer=1|baby_bed=1|bed_mattress=2|bunk_bed=1|diwan_bed=2|double_cot_bed_boxed=1|double_cot_bed_regular=3|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wooden=1|air_cooler=1|table_fan=1|split_ac=1|windows_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=2|utensils_stand=3|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|shoe_rack=1|vaccuum_cleaner=2|washing_machine=1|book_boxes=1|cloth_boxes=3|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|bike_geared=1|car_hatchback=1', 74, 'Economy', 0, 0, '2019-08-18 15:17:34'),
('E83975', 'B99381', '', '', 'Palakkad, Kerala', 'Trichur, Kerala', '08/25/2019 4:37 PM', '0', '0', '3 + BHK', 1, 1, 'No', '', 'No', '', 1, 1, 'center_table=1|computer_table=2|foldable_chair=1|home_theater=2|non_foldable_chair=1|plastic_chair=3|side_table=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|tv_cabinet=1|study_table=1|fan=3|television=1|computer=1|baby_bed=1|bed_mattress=2|bunk_bed=1|diwan_bed=2|double_cot_bed_boxed=1|double_cot_bed_regular=3|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wooden=1|air_cooler=1|table_fan=1|split_ac=1|windows_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=2|utensils_stand=3|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|shoe_rack=1|vaccuum_cleaner=2|washing_machine=1|book_boxes=1|cloth_boxes=3|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|bike_geared=1|car_hatchback=1', 74, 'silver', 0, 0, '2019-08-18 11:07:52'),
('E84644', 'B99381', '', '', 'Chennai, Tamil Nadu', 'Mumbai, Maharashtra', '08/18/2019 8:59 PM', '0', '0', '3 BHK', 1, 1, 'Yes', '', 'No', '', 1, 2, 'center_table=1|computer_table=2|foldable_chair=1|home_theater=2|non_foldable_chair=1|plastic_chair=3|side_table=1|sofa_1_seater=1|sofa_2_seater=1|sofa_3_seater=1|tv_cabinet=1|study_table=1|fan=3|television=1|computer=1|baby_bed=1|bed_mattress=2|bunk_bed=1|diwan_bed=2|double_cot_bed_boxed=1|double_cot_bed_regular=3|dressing_table=1|folding_bed=1|single_cot_bed_regular=1|trolley_bag=1|wardrobe_steel=1|wardrobe_wooden=1|air_cooler=1|table_fan=1|split_ac=1|windows_ac=1|coffee_maker=1|dish_washer=1|mixer_grinder=1|oven=1|refrigerator=1|water_purifier=2|utensils_stand=3|dining_table_4_chairs=1|dining_table_6_chairs=1|gas_cylinder=1|gas_stove=1|book_shelf=1|cross_trainer=1|exercise_cycle=1|geyser=1|plastic_drum=1|shoe_rack=1|vaccuum_cleaner=2|washing_machine=1|book_boxes=1|cloth_boxes=3|kitchen_boxes=1|misc_boxes=1|bicycle=1|bike=1|bike_geared=1|car_hatchback=1', 74, 'Economy1', 0, 0, '2019-08-18 15:29:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `estimate`
--
ALTER TABLE `estimate`
  ADD PRIMARY KEY (`estimate_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
