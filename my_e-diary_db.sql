SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `tbl_diary` (
  `tbl_diary_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `tbl_diary` (`tbl_diary_id`, `title`, `content`, `date`) VALUES
(1, 'My Diary 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Erat velit scelerisque in dictum. Aliquam ut porttitor leo a diam. Sit amet consectetur adipiscing elit ut aliquam. Malesuada bibendum arcu vitae elementum curabitur vitae nunc sed. Laoreet sit amet cursus sit amet dictum sit. Pretium nibh ipsum consequat nisl vel pretium lectus quam. Eget nunc scelerisque viverra mauris. Orci eu lobortis elementum nibh tellus. Ac felis donec et odio. Habitant morbi tristique senectus et. Auctor eu augue ut lectus arcu. Amet massa vitae tortor condimentum lacinia quis vel eros. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Aliquam faucibus purus in massa tempor nec feugiat nisl pretium. Condimentum mattis pellentesque id nibh. Quis commodo odio aenean sed adipiscing diam donec adipiscing. Ut tristique et egestas quis ipsum suspendisse ultrices gravida. Lobortis mattis aliquam faucibus purus. Sodales neque sodales ut etiam sit amet nisl purus in.', '2023-12-26');



ALTER TABLE `tbl_diary`
  ADD PRIMARY KEY (`tbl_diary_id`);


ALTER TABLE `tbl_diary`
  MODIFY `tbl_diary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

