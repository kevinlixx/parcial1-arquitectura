
CREATE DATABASE gapVotacion;

USE gapVotacion;
--
-- Base de datos: `gapvotacion`


--
-- 1. Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL
) 


--
-- 2. Estructura de tabla para la tabla `candidato`
--

CREATE TABLE `candidato` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL
)


-- 2.1 Insertar datos en la tabla `candidato`
INSERT INTO `candidato` (`nombre`, `apellido`) VALUES
('Juan', 'Perez'),
('Maria', 'Lopez'),
('Pedro', 'Gomez');

-- Actualizar el nombre y apellido del candidato con ID 1
UPDATE candidato SET nombre = 'Rintaro', apellido = 'Okabe' WHERE id = 1;

-- Actualizar el nombre y apellido del candidato con ID 2
UPDATE candidato SET nombre = 'Shinichi', apellido = 'Izumi' WHERE id = 2;

-- Actualizar el nombre y apellido del candidato con ID 3
UPDATE candidato SET nombre = 'Pain', apellido = 'Nagato' WHERE id = 3;


SELECT * FROM `candidato`;


--
-- 3. Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `grado` varchar(255) DEFAULT NULL
)

-- 3.1 Insertar datos en la tabla `estudiante`
INSERT INTO `estudiante` (`nombre`, `apellido`, `grado`) VALUES
('Juan', 'Perez', '11'),
('Maria', 'Lopez', '10'),
('Pedro', 'Gomez', '9'),
('Luis', 'Garcia', '8'),
('Ana', 'Martinez', '7');

SELECT * FROM `estudiante`;

--
-- 4. Estructura de tabla para la tabla `votacion`
--
CREATE TABLE `votacion` (
  `id` int(11) NOT NULL,
  `estudianteId` int(11) DEFAULT NULL,
  `candidatoId` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT current_timestamp()
) 

-- 4.1 Insertar datos en la tabla `votacion`

INSERT INTO votacion (estudianteId, candidatoId, fecha) VALUES
(1, 2, '2022-03-01 12:00:00'),  -- El estudiante Juan Perez votó por Maria Lopez el 1 de marzo de 2022 a las 12:00
(2, 3, '2022-03-01 12:30:00'),  -- La estudiante Maria Lopez votó por Pedro Gomez el 1 de marzo de 2022 a las 12:30
(3, 1, '2022-03-01 13:00:00');  -- El estudiante Pedro Gomez votó por Juan Perez el 1 de marzo de 2022 a las 13:00

SELECT * FROM `votacion`;

-- --------------------------------------------------------

-- 5. Índices para tablas volcadas

-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

-- Indices de la tabla `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`id`);

-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`);

-- Indices de la tabla `votacion`
--
ALTER TABLE `votacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estudianteId` (`estudianteId`),
  ADD KEY `candidatoId` (`candidatoId`);

--
-- AUTO_INCREMENT de las tablas volcadas

-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `candidato`
--
ALTER TABLE `candidato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `votacion`
--
ALTER TABLE `votacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `votacion`
--
ALTER TABLE `votacion`
  ADD CONSTRAINT `votacion_ibfk_1` FOREIGN KEY (`estudianteId`) REFERENCES `estudiante` (`id`),
  ADD CONSTRAINT `votacion_ibfk_2` FOREIGN KEY (`candidatoId`) REFERENCES `candidato` (`id`);
COMMIT;



