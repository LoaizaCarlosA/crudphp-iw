CREATE TABLE `orden` (
    `codigo_id` int(11) NOT NULL,
    `fecha_orden` datetime NOT NULL,
    `id_cte` int(10) NOT NULL,
    `id_pdto` int(10) NOT NULL,
    `cantidad` float(5, 2) NOT NULL,
    `creado` datetime NOT NULL
);