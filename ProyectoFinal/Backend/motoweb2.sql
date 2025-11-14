-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2025 a las 23:59:42
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `motoweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motos`
--

CREATE TABLE `motos` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `tipo` text NOT NULL,
  `cilindrada` text NOT NULL,
  `presupuesto` text NOT NULL,
  `potencia` int(11) NOT NULL,
  `combustible` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `imagen` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `motos`
--

INSERT INTO `motos` (`id`, `nombre`, `tipo`, `cilindrada`, `presupuesto`, `potencia`, `combustible`, `peso`, `imagen`) VALUES
(1, 'Honda crf 250r', 'todoterreno', '249', 'medio', 44, 17, 75, 'data:image/webp;base64,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'),
(6, 'Yamaha YZF-R1', 'deportiva', '998', 'medio', 200, 17, 200, 'https://th.bing.com/th/id/OIP._5XYIEkfStyx1Z3Zt2hOuAHaE7?w=263&h=180&c=7&r=0&o=7&cb=ucfimgc2&pid=1.7&rm=3'),
(7, 'Honda CBR600RR', 'deportiva', '599', 'medio', 113, 17, 186, 'https://th.bing.com/th/id/OIP.R1i1aX9nGh87b2wJjZFRmwHaE7?w=243&h=180&c=7&r=0&o=7&cb=ucfimgc2&pid=1.7&rm=3'),
(8, 'Kawasaki Ninja ZX-10R', 'deportiva', '998', 'medio', 203, 17, 207, 'https://th.bing.com/th?id=OIF.chOKv5Wo%2bZx4NIf8%2bxZRrQ&w=252&h=189&c=7&r=0&o=7&cb=ucfimgc2&pid=1.7&rm=3'),
(9, 'Ducati Panigale V4', 'deportiva', '1103', 'medio', 214, 17, 198, 'https://th.bing.com/th/id/OIP.HqGrUB5V7jJ0az5dyGT1RQHaE7?w=247&h=180&c=7&r=0&o=7&cb=ucfimgc2&pid=1.7&rm=3'),
(10, 'BMW R1250 GS', 'todoterreno', '1254', 'medio', 136, 14, 249, 'https://th.bing.com/th/id/OIP.IqstIC5zNfaGwyj5Ju6IDwHaFP?w=273&h=193&c=7&r=0&o=7&cb=ucfimgc2&pid=1.7&rm=3'),
(11, 'Triumph Bonneville T120', 'ciudad', '1200', 'medio', 80, 10, 224, 'https://th.bing.com/th/id/OIP.3t5yGiS34sod672SVLQ_lAHaFj?w=240&h=180&c=7&r=0&o=7&cb=ucfimgc2&pid=1.7&rm=3'),
(12, 'KTM 390 Duke', 'ciudad', '373', 'bajo', 43, 10, 172, 'https://th.bing.com/th/id/OIP.W2N8TCEPu5S_pIYBX2WX1wHaE8?w=286&h=191&c=7&r=0&o=7&cb=ucfimgc2&pid=1.7&rm=3'),
(13, 'Suzuki V-Strom 650', 'todoterreno', '645', 'bajo', 71, 14, 213, 'https://th.bing.com/th/id/OIP.SAortWgiXBQ_kZpDPX_FVQHaE7?w=297&h=198&c=7&r=0&o=7&cb=ucfimgc2&pid=1.7&rm=3'),
(14, 'Harley-Davidson Sportster Iron 883', 'ciudad', '883', 'medio', 50, 10, 256, 'https://th.bing.com/th/id/OIP.CXYgbDxe5kayDoWDOqQz7AHaE7?w=233&h=180&c=7&r=0&o=7&cb=ucfimgc2&pid=1.7&rm=3'),
(15, 'Aprilia RS 660', 'deportiva', '659', 'medio', 100, 17, 183, 'https://th.bing.com/th/id/OIP.PqPfi8_k7i8keg_zrgBlewHaEK?w=333&h=187&c=7&r=0&o=7&cb=ucfimgc2&pid=1.7&rm=3'),
(16, 'Honda CB500X', 'todoterreno', '471', 'medio', 47, 14, 197, 'https://th.bing.com/th/id/OIP.PqPfi8_k7i8keg_zrgBlewHaEK?w=333&h=187&c=7&r=0&o=7&pid=1.7&rm=3'),
(17, 'Yamaha MT-07', 'ciudad', '689', 'alto', 74, 10, 179, 'https://th.bing.com/th/id/OIP.TrDZoQ6w_q8-DPeY5UHtLgHaGD?w=223&h=183&c=7&r=0&o=7&cb=ucfimgc2&pid=1.7&rm=3'),
(18, 'Kawasaki Z900', 'ciudad', '948', 'alto', 125, 10, 210, 'https://th.bing.com/th/id/OIP.n6lx_pV3Ta0FikzPUWCVVgHaE8?w=290&h=193&c=7&r=0&o=7&cb=ucfimgc2&pid=1.7&rm=3'),
(19, 'Ducati Monster', 'ciudad', '937', 'alto', 111, 10, 166, 'https://th.bing.com/th/id/OIP.0v2QDixy9w2QQpQUr7mqYwHaE7?w=302&h=200&c=7&r=0&o=7&cb=ucfimgc2&pid=1.7&rm=3'),
(20, 'BMW S1000RR', 'deportiva', '999', 'alto', 207, 17, 197, 'https://th.bing.com/th/id/OIP.hwBMf7UsDvmsvuMdJP-IXAHaE8?w=278&h=185&c=7&r=0&o=7&cb=ucfimgc2&pid=1.7&rm=3'),
(21, 'Suzuki GSX-R750', 'deportiva', '750', 'alto', 148, 17, 190, 'https://th.bing.com/th/id/OIP.U_VnOBsvLIFHHxpb_EBj6wHaE7?w=257&h=180&c=7&r=0&o=7&cb=ucfimgc2&pid=1.7&rm=3'),
(22, 'KTM 1290 Super Duke R', 'ciudad', '1301', 'alto', 180, 10, 189, 'https://th.bing.com/th/id/OIP.kydFfao5E6aC9QoDhYppbwHaE7?w=271&h=181&c=7&r=0&o=7&cb=ucfimgc2&pid=1.7&rm=3'),
(23, 'Honda Gold Wing', 'todoterreno', '1833', 'alto', 125, 14, 365, 'https://th.bing.com/th/id/OIP.HM13IF0zkIo4Vb5fe8ypDwHaE8?w=269&h=180&c=7&r=0&o=7&cb=ucfimgc2&pid=1.7&rm=3'),
(24, 'Yamaha Tenere 700', 'todoterreno', '689', 'alto', 72, 14, 204, 'https://th.bing.com/th/id/OIP.LZjNBRX7pMGdnyl2L6NFJwHaE8?w=337&h=184&c=7&r=0&o=7&cb=ucfimgc2&pid=1.7&rm=3'),
(25, 'Royal Enfield Interceptor 650', 'ciudad', '648', 'medio', 47, 10, 202, 'https://th.bing.com/th/id/OIP.G3-vmZSBPJzHgwr0NtAAqwHaEK?w=335&h=187&c=7&r=0&o=7&cb=ucfimgc2&pid=1.7&rm=3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nombre_user` text NOT NULL,
  `contrasena` text NOT NULL,
  `tipo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_users`, `nombre_user`, `contrasena`, `tipo`) VALUES
(1, 'juan', '$2y$10$nKFBp/8sQFrpkjb.l//LrOxB1mTrDI6jNRwbdKZ6IQPHNlD.R5mJS', 'usuario'),
(2, 'galo', '$2y$10$qNWl2WNov1D.MsPYJxaFauYgEqngyjGZE8Sz2LHzsPV4AUc1q2AV6', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `motos`
--
ALTER TABLE `motos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `motos`
--
ALTER TABLE `motos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
