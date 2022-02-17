-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table mahasiswa.mahasiswa: ~100 rows (approximately)
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `alamat`, `no_hp`) VALUES
	(1, 'Amira Weber', '80758136', 'Apt. 871', '+01(5)4401423687'),
	(2, 'Erik Weber MD', '77582737', 'Suite 875', '+55(5)7868841131'),
	(3, 'Freda Eichmann', '74158935', 'Apt. 375', '(424)287-2193x3977'),
	(4, 'Yasmine Koepp', '53211057', 'Suite 650', '980.131.2667x9371'),
	(5, 'Bobbie Hilll', '28603788', 'Apt. 556', '387.973.0028'),
	(6, 'Nikita Schuppe', '52162503', 'Suite 400', '227-957-7835x8033'),
	(7, 'Devyn Ruecker', '19448954', 'Suite 075', '+17(8)6688057644'),
	(8, 'Mr. Santino Hackett', '84162915', 'Apt. 211', '185-668-5508x30571'),
	(9, 'Mrs. Emmanuelle Smitham', '79822411', 'Suite 280', '1-050-724-0402'),
	(10, 'Reagan Hirthe', '17848015', 'Apt. 109', '944-210-3627'),
	(11, 'Broderick Wehner', '40393018', 'Apt. 528', '1-614-504-7193'),
	(12, 'Blanca Kautzer', '47690745', 'Suite 164', '646.196.7952x682'),
	(13, 'Wilfrid Ferry', '03406946', 'Apt. 702', '1-262-639-2739'),
	(14, 'Conrad Strosin', '50618927', 'Apt. 444', '203-790-2510x5904'),
	(15, 'Otis Hegmann Jr.', '90781056', 'Apt. 239', '145-997-6572'),
	(16, 'Everette Schulist', '94519211', 'Suite 021', '788.628.3798'),
	(17, 'Liliana Predovic', '26736679', 'Suite 101', '1-091-486-3886'),
	(18, 'Ena Connelly', '79470414', 'Suite 988', '+23(3)5638056083'),
	(19, 'Bennie Kshlerin', '59196242', 'Apt. 963', '038.381.9317x762'),
	(20, 'Naomie Willms', '68893873', 'Apt. 273', '906.433.1008x86173'),
	(21, 'Layla Emard', '05459650', 'Apt. 870', '(553)716-8337x919'),
	(22, 'Ruth Strosin Sr.', '18174243', 'Apt. 715', '1-746-999-2823x7628'),
	(23, 'Ms. Yvette Ziemann', '52625114', 'Apt. 507', '1-502-052-0438x016'),
	(24, 'Alexandrea Beier', '25784459', 'Apt. 700', '167-177-5373x268'),
	(25, 'Lizeth Mills', '14734182', 'Suite 626', '246.261.7658'),
	(26, 'Matt Runte', '78393776', 'Suite 993', '527-681-8750x8175'),
	(27, 'Alvina Collier', '83661167', 'Apt. 448', '415.573.5297x61002'),
	(28, 'Daryl Schaden II', '47210400', 'Apt. 922', '06547457761'),
	(29, 'Charlie Breitenberg', '57927725', 'Suite 115', '859-755-1369'),
	(30, 'Kamille Wolf Jr.', '84240262', 'Suite 312', '(212)704-7853'),
	(31, 'Rebekah Satterfield', '80885382', 'Apt. 472', '+68(0)1363228454'),
	(32, 'Mr. Jayme Huels', '94838626', 'Apt. 350', '067.044.1438x40702'),
	(33, 'Jeff Kub III', '63693034', 'Suite 373', '1-416-194-4446'),
	(34, 'Duane Ziemann', '51840747', 'Suite 324', '1-520-639-8496'),
	(35, 'Prof. Zion Johnson', '97332237', 'Suite 017', '(671)084-8738x978'),
	(36, 'Berta Mills', '09162525', 'Apt. 643', '633-498-8281'),
	(37, 'Prof. Reid Crooks III', '40646084', 'Suite 168', '633-329-0289'),
	(38, 'Mrs. Carolanne Halvorson MD', '42789963', 'Suite 460', '(906)315-0059'),
	(39, 'Retta Bailey', '60359421', 'Suite 874', '139.165.4343'),
	(40, 'Irwin Daniel', '18407259', 'Apt. 413', '+77(8)6162041432'),
	(41, 'Prof. Milford White DVM', '09459915', 'Apt. 342', '083-392-8781x281'),
	(42, 'Adell Bins', '12794546', 'Suite 469', '+59(9)1929885892'),
	(43, 'Adrain Bartell', '17539678', 'Suite 190', '+07(6)9938069764'),
	(44, 'Miss Name Cummings', '14374852', 'Apt. 828', '1-473-443-1832x21100'),
	(45, 'Alec Emard', '16548237', 'Apt. 077', '1-961-359-9711x0226'),
	(46, 'Antone Kuhn', '83178924', 'Suite 430', '+89(7)6859691579'),
	(47, 'Meagan Jakubowski', '55909730', 'Suite 972', '1-722-237-1305'),
	(48, 'Prof. Jeanne Maggio', '78055636', 'Suite 742', '04768097957'),
	(49, 'Monique Anderson', '44423605', 'Suite 331', '169.378.4075x9891'),
	(50, 'Steve Romaguera II', '43864898', 'Apt. 168', '1-985-660-8911x031'),
	(51, 'Pasquale Schiller PhD', '30380011', 'Apt. 585', '+65(6)8720254517'),
	(52, 'Ursula Renner', '70625462', 'Apt. 834', '09065189822'),
	(53, 'Sydnee Leannon IV', '45858673', 'Apt. 611', '823.914.5188'),
	(54, 'Mrs. Myrtie Ratke', '91480194', 'Suite 439', '09454966258'),
	(55, 'Gregg Grady', '67568185', 'Suite 260', '(004)649-6148x473'),
	(56, 'Eda Jacobi', '68492380', 'Suite 735', '1-339-030-3704x1539'),
	(57, 'Emie McGlynn', '92919624', 'Apt. 662', '800-370-9191x92364'),
	(58, 'Edward Osinski', '38212925', 'Suite 676', '+60(8)9217001865'),
	(59, 'Cornell Schmidt', '04670766', 'Apt. 337', '(558)811-3827x0483'),
	(60, 'Ole Tremblay', '95237466', 'Suite 066', '440.378.2521x75407'),
	(61, 'Mallie Franecki', '44080525', 'Suite 474', '456.860.5238x92224'),
	(62, 'Brooke Wolf', '78250673', 'Suite 943', '626-012-2680'),
	(63, 'Aida Marvin', '13036232', 'Apt. 325', '995.656.3590'),
	(64, 'Prof. Gracie Bayer III', '04599081', 'Apt. 656', '(004)954-6534'),
	(65, 'Merle Dare II', '00270052', 'Suite 060', '572-999-9196x53946'),
	(66, 'Christophe Nienow', '41002193', 'Apt. 842', '431-559-6954'),
	(67, 'Tito Wiza IV', '19005843', 'Apt. 910', '653-758-2954'),
	(68, 'Lexus Heidenreich MD', '39853028', 'Apt. 538', '(844)762-0407x0759'),
	(69, 'Ms. Alene Hegmann', '98084807', 'Suite 670', '658.549.8283'),
	(70, 'Vernice Cummerata', '25690583', 'Apt. 368', '656-791-4197x91432'),
	(71, 'Clare Fay', '33099668', 'Apt. 432', '(218)525-9667x940'),
	(72, 'Miss Mercedes Bergstrom III', '73621010', 'Apt. 106', '+10(4)3240269986'),
	(73, 'Mrs. Amira Dickinson IV', '23499041', 'Suite 925', '04181455840'),
	(74, 'Anderson Stroman', '19563985', 'Apt. 341', '(876)095-5757'),
	(75, 'Miss Tiana Adams', '08478252', 'Apt. 017', '060-735-1516'),
	(76, 'Cruz Gibson', '87994704', 'Suite 261', '1-960-449-4178x840'),
	(77, 'Kale Satterfield', '38406355', 'Suite 294', '+88(3)5211151770'),
	(78, 'Alize Wilkinson', '74977338', 'Suite 218', '1-598-013-9399x9922'),
	(79, 'Tyreek Bosco', '97937913', 'Apt. 460', '051-180-3012'),
	(80, 'Dr. Sierra Swaniawski PhD', '17325493', 'Suite 664', '1-141-789-1857'),
	(81, 'Bella Lueilwitz', '97876045', 'Suite 111', '05359316031'),
	(82, 'Alexandrine Quigley', '75075682', 'Apt. 931', '+92(9)6456797328'),
	(83, 'Mr. Ansley Kovacek', '43985227', 'Apt. 927', '07671928092'),
	(84, 'Zaria Runolfsdottir', '55393973', 'Suite 137', '04279066674'),
	(85, 'Dr. Erika Labadie', '84539489', 'Suite 027', '627.097.6341'),
	(86, 'Remington Spencer DVM', '18619911', 'Suite 273', '284-151-5641x650'),
	(87, 'Miss Thelma Fahey', '10212110', 'Suite 715', '391.311.3300x7653'),
	(88, 'Mozelle D\'Amore', '18824971', 'Suite 604', '371-739-7258'),
	(89, 'Prof. Marilie Schneider Jr.', '64021348', 'Suite 354', '(493)445-3598x1771'),
	(90, 'Dr. Javonte Schmeler IV', '25601824', 'Apt. 510', '396-626-1358x12273'),
	(91, 'Estevan Balistreri', '22260772', 'Apt. 993', '796.615.7662x1834'),
	(92, 'Prof. Dewayne O\'Kon PhD', '89732274', 'Apt. 137', '365-311-6904x5647'),
	(93, 'Miss Antonia Thiel I', '91788009', 'Apt. 773', '1-048-505-5597'),
	(94, 'Layla Schamberger', '18833751', 'Suite 441', '1-784-909-2747x079'),
	(95, 'Joannie Hettinger', '55329194', 'Apt. 800', '(419)003-2812'),
	(96, 'Dr. Shayna Lang PhD', '32002218', 'Apt. 410', '+84(3)7946240545'),
	(97, 'Natasha Frami', '86610827', 'Apt. 348', '861.695.8472'),
	(98, 'Ward Wisozk', '68381738', 'Suite 574', '378-353-8352'),
	(99, 'Ara Schuster MD', '43182473', 'Suite 500', '1-086-947-9438'),
	(100, 'Maximo Kiehn', '95404028', 'Apt. 959', '+10(0)6375499612');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;

-- Dumping data for table mahasiswa.role: ~2 rows (approximately)
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` (`id`, `role`) VALUES
	(1, 'administrator'),
	(2, 'member');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

-- Dumping data for table mahasiswa.user: ~1 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `nama`, `email`, `passcode`, `role_id`) VALUES
	(1, 'Samuel Septa', 'samuel@gmail.com', '$2y$10$0L/39kE8eLu5l.QsOLgEk.uW5uc8l./bqeCjr0QqIjewaH0fJTCDa', 1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
