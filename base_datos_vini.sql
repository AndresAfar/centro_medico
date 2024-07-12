-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2024 a las 19:43:15
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
-- Base de datos: `base_datos_vini`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `IdCita` int(11) NOT NULL,
  `citFecha` date NOT NULL,
  `citHora` datetime(5) NOT NULL,
  `citLugar` varchar(45) NOT NULL,
  `citIdPaciente` int(11) NOT NULL,
  `citIdMedico` int(11) NOT NULL,
  `citIdConsultorio` int(11) NOT NULL,
  `medico_idMedico` int(11) NOT NULL,
  `medico_tratamientoMedico_idTratamiento` varchar(45) NOT NULL,
  `medico_tratamientoMedico_paciente_empleado_idEmpleado` int(11) NOT NULL,
  `paciente_empleado_idEmpleado` int(11) NOT NULL,
  `consultorio_idConsultorio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorio`
--

CREATE TABLE `consultorio` (
  `idConsultorio` int(12) NOT NULL,
  `citConNumeroConsultorio` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `empNombres` varchar(45) NOT NULL,
  `empApellidos` varchar(45) NOT NULL,
  `empSexo` varchar(45) NOT NULL,
  `empFechaNacimiento` int(11) NOT NULL,
  `empEdad` int(11) NOT NULL,
  `empTelefono` varchar(13) NOT NULL,
  `empCiudad` varchar(45) NOT NULL,
  `empDireccionEmpleado` varchar(45) NOT NULL,
  `empSalario` varchar(45) NOT NULL,
  `empCargo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamento`
--

CREATE TABLE `medicamento` (
  `idMedicamento` int(11) NOT NULL,
  `mediNombre` varchar(45) NOT NULL,
  `mediContraindicaciones` varchar(100) NOT NULL,
  `mediMarcaMediacamento` varchar(45) NOT NULL,
  `mediFechaCaducidad` date NOT NULL,
  `mediCantidadPresentacion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `idMedico` int(12) NOT NULL,
  `medNombres` varchar(45) NOT NULL,
  `medApellidos` varchar(45) NOT NULL,
  `medTelefono` int(12) NOT NULL,
  `medEspecialidad` varchar(50) NOT NULL,
  `medSalario` decimal(7,0) NOT NULL,
  `usuarios_idusuarios` int(11) NOT NULL,
  `medCorreo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `pacNombres` varchar(45) NOT NULL,
  `pacApellidos` varchar(45) NOT NULL,
  `pacSexo` varchar(45) NOT NULL,
  `pacFechaNacimiento` date NOT NULL,
  `pacEdad` int(11) NOT NULL,
  `pacTelefono` varchar(13) NOT NULL,
  `pacCiudad` varchar(45) NOT NULL,
  `pacDireccionPaciente` varchar(100) NOT NULL,
  `empleado_idEmpleado` int(11) NOT NULL,
  `usuarios_idusuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `rolNombreRol` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamientomedico`
--

CREATE TABLE `tratamientomedico` (
  `idTratamiento` int(12) NOT NULL,
  `traIdPaciente` int(12) NOT NULL,
  `traIdMedico` int(12) NOT NULL,
  `traFormulaMedica` varchar(300) NOT NULL,
  `traDiagnostico` varchar(200) NOT NULL,
  `traIdMedicamento` int(100) NOT NULL,
  `medico_idMedico` int(11) NOT NULL,
  `paciente_empleado_idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `usuLogin` varchar(15) NOT NULL,
  `usuPassword` varchar(60) NOT NULL,
  `usuEstado` enum('Activo','Inactivo','Pendiente') NOT NULL,
  `usuRol` text NOT NULL,
  `roles_id_rol` int(11) NOT NULL,
  `Rol_id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`IdCita`),
  ADD KEY `fk_cita_medico1_idx` (`medico_idMedico`,`medico_tratamientoMedico_idTratamiento`,`medico_tratamientoMedico_paciente_empleado_idEmpleado`),
  ADD KEY `fk_cita_paciente1_idx` (`paciente_empleado_idEmpleado`),
  ADD KEY `fk_cita_consultorio1_idx` (`consultorio_idConsultorio`);

--
-- Indices de la tabla `consultorio`
--
ALTER TABLE `consultorio`
  ADD PRIMARY KEY (`idConsultorio`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`idMedicamento`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`idMedico`),
  ADD KEY `fk_medico_usuarios1_idx` (`usuarios_idusuarios`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`empleado_idEmpleado`),
  ADD KEY `fk_paciente_usuarios1_idx` (`usuarios_idusuarios`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `tratamientomedico`
--
ALTER TABLE `tratamientomedico`
  ADD PRIMARY KEY (`idTratamiento`),
  ADD KEY `fk_tratamientoMedico_medico1_idx` (`medico_idMedico`),
  ADD KEY `fk_tratamientoMedico_paciente1_idx` (`paciente_empleado_idEmpleado`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`),
  ADD KEY `fk_usuarios_Rol_idx` (`Rol_id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  MODIFY `idMedicamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `fk_cita_consultorio1` FOREIGN KEY (`consultorio_idConsultorio`) REFERENCES `consultorio` (`idConsultorio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cita_medico1` FOREIGN KEY (`medico_idMedico`) REFERENCES `medico` (`idMedico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cita_paciente1` FOREIGN KEY (`paciente_empleado_idEmpleado`) REFERENCES `paciente` (`empleado_idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `fk_medico_usuarios1` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `fk_paciente_usuarios1` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tratamientomedico`
--
ALTER TABLE `tratamientomedico`
  ADD CONSTRAINT `fk_tratamientoMedico_medico1` FOREIGN KEY (`medico_idMedico`) REFERENCES `medico` (`idMedico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tratamientoMedico_paciente1` FOREIGN KEY (`paciente_empleado_idEmpleado`) REFERENCES `paciente` (`empleado_idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_Rol` FOREIGN KEY (`Rol_id_rol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
