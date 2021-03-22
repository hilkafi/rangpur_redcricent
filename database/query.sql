-------19-03-2021:Added By Kafi---------
ALTER TABLE `projects` ADD `status` ENUM('proposed','running','completed') NULL DEFAULT NULL AFTER `description`; 
ALTER TABLE `projects` CHANGE `category_id` `category_id` INT(11) NULL DEFAULT NULL;
ALTER TABLE `projects` CHANGE `strat_date` `start_date` DATE NULL DEFAULT NULL; 

------22-03-2021:Added by Kafi-----------
ALTER TABLE `donate_us` ADD `intro` TEXT NULL DEFAULT NULL AFTER `id`;