---------------ADDED BY:Kai-29-03-2021
ALTER TABLE `contact_us` ADD `mobile` VARCHAR(100) NULL DEFAULT NULL AFTER `email`;
---------------ADDED BY: Ruman-03-04-2020
ALTER TABLE `life_members` ADD `designation` VARCHAR(255) NULL DEFAULT NULL AFTER `name`;
ALTER TABLE `executive_committees` ADD `designation` VARCHAR(255) NULL DEFAULT NULL AFTER `name`