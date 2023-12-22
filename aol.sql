-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 04:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aol`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_11_29_051002_user', 1),
(3, '2023_11_29_051025_product', 1),
(4, '2023_11_29_051048_user_product', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `series` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `stock`, `image_path`, `price`, `series`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'refrigerator', 88, 'https://media.witanddelight.com/content/uploads/2022/03/21143513/fridge-organization-1-1229x1536.jpg', 155186, 'enim', 'aut nihil dolor voluptatum laborum non qui soluta explicabo mollitia ad nam aliquid hic est dolor illo blanditiis libero officiis praesentium reprehenderit sed qui molestiae corporis vel quibusdam velit quia', '2023-12-14 12:24:37', '2023-12-14 12:24:37'),
(2, 'box', 34, 'https://www.ikea.com/gb/en/images/products/tjog-storage-box-with-lid-dark-grey__0921586_pe787908_s5.jpg?f=s', 206162, 'vitae', 'qui ex itaque corrupti saepe sint velit delectus delectus et similique enim ea ullam dolores numquam nobis vel impedit alias amet quibusdam quis repellendus nihil ea qui molestiae sit eveniet', '2023-12-14 12:24:37', '2023-12-14 12:24:37'),
(3, 'chalk', 13, 'https://via.placeholder.com/640x480.png/00cc55?text=animals+doloribus', 168961, 'mollitia', 'nulla blanditiis molestias et numquam asperiores ducimus omnis impedit voluptatem et doloribus inventore aut eaque tenetur numquam non fuga voluptate aut non est eveniet corrupti alias ut et nulla maiores', '2023-12-14 12:24:37', '2023-12-14 12:24:37'),
(4, 'box', 64, 'https://via.placeholder.com/640x480.png/00ff99?text=animals+id', 147769, 'aut', 'fugit hic sunt incidunt autem accusantium fugiat possimus porro nihil accusantium quos nulla sit velit numquam ullam sint ipsam reiciendis corporis blanditiis sed nesciunt nostrum et qui consequatur quaerat sint', '2023-12-14 12:24:37', '2023-12-14 12:24:37'),
(5, 'refrigerator', 89, 'https://via.placeholder.com/640x480.png/00ee88?text=animals+ut', 154534, 'est', 'quasi rem at accusantium quae corrupti commodi omnis ipsa odio voluptatem debitis delectus id officiis quia quia omnis laudantium hic rerum nobis corrupti blanditiis natus velit porro fuga a pariatur', '2023-12-14 12:24:37', '2023-12-14 12:24:37'),
(6, 'chalk', 32, 'https://via.placeholder.com/640x480.png/008877?text=animals+fuga', 168028, 'magni', 'in voluptatem qui deleniti eos hic sint aut soluta consequatur eum recusandae atque enim possimus est alias dolor accusantium voluptatem omnis assumenda omnis excepturi perspiciatis iure maxime dolores unde omnis', '2023-12-14 12:24:37', '2023-12-14 12:24:37'),
(7, 'box', 98, 'https://via.placeholder.com/640x480.png/00ff44?text=animals+inventore', 239135, 'doloribus', 'nam eveniet et placeat est perspiciatis sunt accusamus illo est saepe commodi iusto eos sint fuga tempore ipsum esse aut reprehenderit ipsa sed repellendus velit sunt fuga ut excepturi tempora', '2023-12-14 12:24:37', '2023-12-14 12:24:37'),
(8, 'table', 12, 'https://via.placeholder.com/640x480.png/00ee55?text=animals+temporibus', 158839, 'recusandae', 'eaque nemo est molestias eligendi sint tempore aliquam suscipit consectetur laboriosam molestias ut consequatur vel voluptates doloremque est eum autem dolor officia ipsum quisquam laudantium vel laboriosam sapiente qui tempore', '2023-12-14 12:24:37', '2023-12-14 12:24:37'),
(9, 'chair', 10, 'https://via.placeholder.com/640x480.png/004444?text=animals+sunt', 278610, 'ipsum', 'soluta consequatur et dolor magnam velit laborum sit dolorum omnis possimus voluptas fuga totam enim earum inventore cupiditate sit et ut sed praesentium quia ea dolor qui esse laboriosam sapiente', '2023-12-14 12:24:37', '2023-12-14 12:24:37'),
(10, 'speaker', 93, 'https://via.placeholder.com/640x480.png/004400?text=animals+quasi', 250355, 'beatae', 'saepe ut consequatur vero rerum eligendi animi id aperiam incidunt qui voluptates ipsam ab ratione suscipit aut alias doloremque dignissimos voluptatem quos voluptatem ad nobis eius velit illum perspiciatis et', '2023-12-14 12:24:37', '2023-12-14 12:24:37'),
(11, 'box', 29, 'https://via.placeholder.com/640x480.png/0044bb?text=animals+deleniti', 104794, 'quidem', 'quo at reiciendis occaecati nam est voluptatum ipsum voluptatibus voluptatem et architecto molestiae magni et reiciendis dolorum vitae temporibus facere commodi qui ipsa non deleniti nulla eveniet veritatis accusantium est', '2023-12-14 12:24:37', '2023-12-14 12:24:37'),
(12, 'table', 3, 'https://via.placeholder.com/640x480.png/000055?text=animals+itaque', 81718, 'itaque', 'facilis perferendis blanditiis saepe est laudantium praesentium magni beatae eveniet odio nam aspernatur quidem dolores id animi velit exercitationem ea sint aliquid et neque distinctio dolor vel consectetur earum ipsum', '2023-12-14 12:24:37', '2023-12-14 12:24:37'),
(13, 'refrigerator', 36, 'https://via.placeholder.com/640x480.png/006633?text=animals+voluptas', 196026, 'hic', 'et cum temporibus expedita minima non saepe consequatur sed nam ut eos sint molestias eveniet natus vel nam sunt aut qui sed exercitationem sapiente voluptatem similique inventore enim iste perferendis', '2023-12-14 12:24:37', '2023-12-14 12:24:37'),
(14, 'refrigerator', 67, 'https://via.placeholder.com/640x480.png/00cc77?text=animals+aperiam', 287364, 'asperiores', 'iure veritatis voluptatem beatae non adipisci vero impedit qui quia eius ad provident sed iure et et quasi et itaque voluptatibus velit enim non nihil odio excepturi quas quo commodi', '2023-12-14 12:24:37', '2023-12-14 12:24:37'),
(15, 'chair', 61, 'https://via.placeholder.com/640x480.png/0000ee?text=animals+sunt', 79786, 'qui', 'facilis explicabo beatae in nemo aut ipsam aut ad harum sint et modi id ad quam earum exercitationem delectus placeat animi officiis aliquid rerum nisi quasi aut reiciendis deserunt nostrum', '2023-12-14 12:24:38', '2023-12-14 12:24:38'),
(16, 'chair', 35, 'https://via.placeholder.com/640x480.png/0022ee?text=animals+reiciendis', 288789, 'quos', 'repellendus sint excepturi corrupti cumque vel quia ut quidem sunt consectetur voluptatem commodi unde quae sunt dolore deserunt repudiandae aspernatur quas numquam placeat sed et facilis cum possimus rerum delectus', '2023-12-14 12:24:38', '2023-12-14 12:24:38'),
(17, 'chair', 56, 'https://via.placeholder.com/640x480.png/00cc66?text=animals+ea', 187744, 'dolorem', 'non cumque odit eum dolor error rerum odio omnis qui magni laudantium vero velit et est dignissimos et numquam consequatur dolor ad necessitatibus voluptatem est saepe itaque aut sit molestias', '2023-12-14 12:24:38', '2023-12-14 12:24:38'),
(18, 'box', 61, 'https://via.placeholder.com/640x480.png/006644?text=animals+necessitatibus', 115381, 'cupiditate', 'reprehenderit ut officiis ut natus qui cumque impedit minima iusto iure quasi blanditiis modi reprehenderit ab molestias amet aut dolorum odio illum officiis vel aliquid voluptatum inventore laboriosam dolor illum', '2023-12-14 12:24:38', '2023-12-14 12:24:38'),
(19, 'chair', 37, 'https://via.placeholder.com/640x480.png/007733?text=animals+est', 104825, 'dolor', 'sed architecto illum accusamus rerum officiis optio et quas repellat perspiciatis expedita esse sit voluptatum ipsam dolorem quis necessitatibus alias itaque officiis illum aspernatur in est molestiae similique omnis velit', '2023-12-14 12:24:38', '2023-12-14 12:24:38'),
(20, 'speaker', 98, 'https://via.placeholder.com/640x480.png/009966?text=animals+dicta', 296828, 'qui', 'dicta mollitia et debitis quos inventore quisquam quibusdam et hic et optio quidem blanditiis eum provident veniam aut eaque magnam est architecto et quod delectus expedita incidunt alias excepturi maiores', '2023-12-14 12:24:38', '2023-12-14 12:24:38'),
(21, 'chalk', 57, 'https://via.placeholder.com/640x480.png/001100?text=animals+consequatur', 290428, 'minus', 'dignissimos ab rerum illo perferendis ut saepe accusamus facilis quos vel ut optio quae animi optio omnis est qui perspiciatis voluptatum non nihil voluptatem unde voluptas tempore sequi explicabo suscipit', '2023-12-14 12:24:38', '2023-12-14 12:24:38'),
(22, 'refrigerator', 30, 'https://via.placeholder.com/640x480.png/0099ee?text=animals+voluptas', 288428, 'sed', 'repellendus nostrum et iste qui deleniti doloribus aut culpa et ullam dolores quia sint amet quod vero labore dolorem error qui ipsum veniam in soluta laborum minima nisi soluta cum', '2023-12-14 12:24:38', '2023-12-14 12:24:38'),
(23, 'fridge', 26, 'https://via.placeholder.com/640x480.png/00cc77?text=animals+minima', 96757, 'nobis', 'dolorum quis amet perferendis sit dolores laborum ratione et quos cupiditate eius voluptatum necessitatibus nihil voluptatem natus maiores deserunt id officiis et tempore earum molestiae similique in laborum ipsum itaque', '2023-12-14 12:24:38', '2023-12-14 12:24:38'),
(24, 'box', 5, 'https://via.placeholder.com/640x480.png/00ff00?text=animals+labore', 249442, 'quis', 'quia aut ea rem reprehenderit magni nobis optio occaecati quibusdam esse autem ipsa hic adipisci qui ratione et non assumenda minima ullam commodi impedit quod ut velit laudantium laudantium nostrum', '2023-12-14 12:24:38', '2023-12-14 12:24:38'),
(25, 'chalk', 69, 'https://via.placeholder.com/640x480.png/009988?text=animals+ut', 158645, 'et', 'aut rem voluptatem est praesentium vel eos quas a aut suscipit dolorum id voluptatibus maxime sequi vitae nostrum tempora natus fugiat iste ut quibusdam autem est magnam sequi sequi quod', '2023-12-14 12:24:38', '2023-12-14 12:24:38'),
(26, 'refrigerator', 12, 'https://via.placeholder.com/640x480.png/0066dd?text=animals+aperiam', 153640, 'corrupti', 'accusamus voluptatibus quia qui et commodi facere numquam quasi dolorum debitis quas reprehenderit fugit labore voluptas molestiae et totam ea id id animi asperiores explicabo non facilis aut expedita quos', '2023-12-14 12:24:38', '2023-12-14 12:24:38'),
(27, 'speaker', 44, 'https://via.placeholder.com/640x480.png/00cc44?text=animals+officiis', 199859, 'possimus', 'autem officiis ut dignissimos tempore quod quia qui aut deserunt non architecto iusto et nam amet accusantium maiores pariatur quo quo itaque rem perspiciatis aliquam vero eos recusandae magni eius', '2023-12-14 12:24:38', '2023-12-14 12:24:38'),
(28, 'table', 22, 'https://via.placeholder.com/640x480.png/00aa11?text=animals+asperiores', 291855, 'maxime', 'quidem eveniet distinctio ut et itaque adipisci quia aspernatur neque repellat voluptates quaerat id numquam qui aut possimus laudantium qui ut assumenda quo dignissimos ea quam sint atque ut veniam', '2023-12-14 12:24:38', '2023-12-14 12:24:38'),
(29, 'chalk', 80, 'https://via.placeholder.com/640x480.png/0044aa?text=animals+perspiciatis', 118626, 'rerum', 'quo sunt sint omnis quasi ipsum temporibus ea ut consequatur ipsum consequatur laudantium voluptatem vero laudantium officiis asperiores deserunt illo id animi aut dolor modi expedita ut hic et aut', '2023-12-14 12:24:38', '2023-12-14 12:24:38'),
(30, 'chalk', 64, 'https://via.placeholder.com/640x480.png/00bb11?text=animals+vel', 263322, 'eveniet', 'culpa asperiores earum et ut fugiat eos repellat modi rerum aut totam id velit veniam harum quia nemo nostrum sequi in est sunt exercitationem in ut ut odit autem molestiae', '2023-12-14 12:24:38', '2023-12-14 12:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `userproducts`
--

CREATE TABLE `userproducts` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userproducts`
--

INSERT INTO `userproducts` (`user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(25, 4, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(28, 22, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(10, 25, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(1, 25, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(28, 16, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(3, 17, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(5, 28, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(11, 18, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(20, 11, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(28, 18, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(18, 22, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(28, 13, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(11, 7, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(18, 18, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(8, 19, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(20, 15, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(3, 27, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(28, 10, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(28, 19, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(8, 13, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(11, 22, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(29, 10, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(25, 6, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(1, 19, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(11, 1, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(11, 26, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(25, 29, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(28, 15, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(10, 2, '2023-12-14 12:25:43', '2023-12-14 12:25:43'),
(7, 19, '2023-12-14 12:25:43', '2023-12-14 12:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `password`, `name`, `email`, `phone_number`, `role`, `created_at`, `updated_at`) VALUES
(1, '?fLbT{T!&Pm1lE', 'Dr. Geoffrey Nolan', 'henri.rohan@example.org', '085751623677', 'customer', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(2, 'lR7zq*Y,b>;<e4~:#', 'Earline Jacobson', 'fermin.macejkovic@example.net', '084207099722', 'admin', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(3, '+\';HFw/dnY\\E[;CR+}F$', 'Gudrun Gerlach', 'douglas.maurice@example.com', '088486612957', 'customer', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(4, '+1rsG96e-`n@N]*0', 'Alexis Walter', 'ehand@example.com', '083325818854', 'admin', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(5, 'z%;FN}0:Nc9*\'*?\\>;ii', 'Judson McGlynn', 'christiansen.sydney@example.com', '086341495733', 'customer', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(6, '4g0A#fmb', 'Abdul Olson', 'rmclaughlin@example.net', '082707144763', 'customer', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(7, '}Z]*xn4sVc@j/4VC.ok', 'Jordon Osinski', 'odessa.stiedemann@example.net', '083208231175', 'customer', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(8, 'M.lUXy5+', 'Dr. Simeon Paucek', 'bethel.roberts@example.com', '082961367222', 'customer', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(9, ',^|H}(k8m', 'Anais Gorczany', 'rose77@example.com', '087588108622', 'admin', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(10, 'ese[9C}$1GNV', 'Colin O\'Hara V', 'okeefe.felipe@example.org', '081209887458', 'customer', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(11, 'Qj%M7g8)$', 'Filiberto Swift', 'iosinski@example.org', '089538217877', 'customer', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(12, 'T7`gTTFq]93u-]+tCX]a', 'Alfreda Mann', 'phammes@example.com', '085852276022', 'admin', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(13, 'HZkPx[DP201AH\\?#5Rp\\', 'Damaris Brekke', 'crist.leo@example.org', '081074841988', 'customer', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(14, 'lT:&;-b?', 'Alexane Rolfson', 'mae.cormier@example.com', '082689738234', 'admin', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(15, '(E6[oJo_z3PMS', 'Prof. Terence Corkery Jr.', 'rframi@example.com', '089214740286', 'admin', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(16, '4R<]TrX{69ayX6Bb', 'Merl Waelchi MD', 'bennett.towne@example.org', '081460005586', 'admin', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(17, 'rg[keJ45UF', 'Ulises Nolan', 'deanna16@example.org', '087648406590', 'admin', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(18, 'qScCs[Q5oH$q', 'Mr. Jess Schroeder', 'labadie.anthony@example.net', '080265115359', 'customer', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(19, '18_;?@OI>E#j', 'Dr. Piper Koelpin', 'uprohaska@example.com', '087322192536', 'admin', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(20, 'Kl);e2!(Qx', 'Myrtle Stamm', 'aron.thiel@example.net', '084162484984', 'customer', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(21, ';7A--Tf2sI!R;B', 'Estella Anderson', 'vanessa96@example.org', '088195006732', 'admin', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(22, 'f(m-R*\"H_y', 'Arne Schmeler Sr.', 'annie.auer@example.com', '084145767530', 'customer', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(23, 'J#pvT04K4\"p', 'Chasity Kovacek', 'emills@example.com', '087103948371', 'admin', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(24, '_+Kd\\n@6X~', 'Erica Kautzer I', 'bheidenreich@example.net', '080217208492', 'admin', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(25, ']lI!NE&!', 'Bartholome Frami', 'autumn19@example.org', '082644869809', 'customer', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(26, '\"ZW2;sXQ350H#0]\'{LG', 'Concepcion Lemke', 'ibins@example.com', '081860335471', 'admin', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(27, '&Q\\Z^.&5^dI-:s!', 'Ayana King', 'champlin.favian@example.net', '083262429194', 'admin', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(28, '!eC#9Dgh', 'Werner Fritsch', 'nolan.abigayle@example.net', '087837519641', 'customer', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(29, 's]M9^Ym#GgpG@-uxy?', 'Jamar Koss', 'wendell79@example.net', '084563618577', 'customer', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(30, '?y~(hUij_L)jRTRO<', 'Veda Miller', 'kamille.kulas@example.net', '088520787796', 'admin', '2023-12-14 12:24:05', '2023-12-14 12:24:05'),
(31, 'aaaaaa', 'Natalia Lairan', 'natalia.lairan@binus.ac.id', '0897642797564', 'customer', '2023-12-14 18:34:35', '2023-12-14 18:34:35'),
(32, 'qwerty', 'VINCENT VINCENT', 'vincent123@gmail.com', '+62123456789', 'admin', '2023-12-19 06:07:05', '2023-12-19 06:07:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `userproducts`
--
ALTER TABLE `userproducts`
  ADD KEY `userproducts_user_id_foreign` (`user_id`),
  ADD KEY `userproducts_product_id_foreign` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `userproducts`
--
ALTER TABLE `userproducts`
  ADD CONSTRAINT `userproducts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `userproducts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
