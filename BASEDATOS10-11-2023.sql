
 /****** PROBAR DE AQUI ******/
 
  /****** Creacion de tabla ESTADO-TURNO junto a sus claves primarias  ******/

 CREATE TABLE Estadoturno (
    id_estado_turno INT AUTO_INCREMENT PRIMARY KEY,
    nombre_estado_turno NVARCHAR(25) NOT NULL
);

CREATE TABLE Box (
    id_box INT AUTO_INCREMENT PRIMARY KEY,
    nombre_box NVARCHAR(10) NOT NULL,
    id_estado_box NVARCHAR(10) NOT NULL
);

CREATE TABLE Perfilsistema (
    id_perfil_sistema INT AUTO_INCREMENT PRIMARY KEY,
    nombre_perfil_sistema NVARCHAR(25) NOT NULL
);

CREATE TABLE Especialidad (
    id_especialidad INT AUTO_INCREMENT PRIMARY KEY,
    nombre_especialidad NVARCHAR(25) NOT NULL
);

CREATE TABLE Empleado (
    id_empleado INT AUTO_INCREMENT PRIMARY KEY,
    rut_empleado NVARCHAR(50) NOT NULL UNIQUE,
    correo NVARCHAR(50) NOT NULL,
    clave NVARCHAR(50) NOT NULL,
    nombre_empleado NVARCHAR(50) NOT NULL,
    apellido_empleado NVARCHAR(50) NOT NULL,
    estadoempleado NVARCHAR(50) NOT NULL,
    boxid INT NOT NULL,
    perfilsistemaid INT NOT NULL,
    especialidadid INT NOT NULL,
    CONSTRAINT FK_Empleado_Box FOREIGN KEY (boxid) REFERENCES Box (id_box),
    CONSTRAINT FK_Empleado_perfilsistema FOREIGN KEY (perfilsistemaid) REFERENCES Perfilsistema (id_perfil_sistema),
    CONSTRAINT FK_Empleado_especialidad FOREIGN KEY (especialidadid) REFERENCES Especialidad (id_especialidad)
);

CREATE TABLE Estudiante (
    matricula INT PRIMARY KEY,
    rut_estudiante NVARCHAR(50) NOT NULL UNIQUE,
    nombre_estudiante NVARCHAR(50) NOT NULL,
    apellido_estudiante NVARCHAR(50) NOT NULL,
    correo_estudiante NVARCHAR(50) NOT NULL,
    carrera NVARCHAR(50) NOT NULL,
    sede NVARCHAR(50) NOT NULL,
    estadomatricula NVARCHAR(50) NOT NULL
);

CREATE TABLE Turno (
    id_turno INT AUTO_INCREMENT PRIMARY KEY,
    numero_atencion NVARCHAR(50) NOT NULL UNIQUE,
    matriculaid INT NOT NULL,
    especialidadid INT NOT NULL,
    fecha_hora DATETIME NOT NULL,
    CONSTRAINT FK_Turno_Estudiante FOREIGN KEY (matriculaid) REFERENCES Estudiante (matricula),
    CONSTRAINT FK_Turno_Especialidad FOREIGN KEY (especialidadid) REFERENCES Especialidad (id_especialidad)
);

CREATE TABLE Turno_estadoturno (
    id_turno_estadoturno INT AUTO_INCREMENT PRIMARY KEY,
    turnoid INT NOT NULL,
    estadoturnoid INT NOT NULL,
    empleadoid INT NOT NULL,
    fecha DATETIME NOT NULL,
    CONSTRAINT FK_Turno_estadoturno_Turno FOREIGN KEY (turnoid) REFERENCES Turno (id_turno),
    CONSTRAINT FK_Turno_estadoturno_Estadoturno FOREIGN KEY (estadoturnoid) REFERENCES Estadoturno (id_estado_turno),
    CONSTRAINT FK_Turno_estadoturno_empleado FOREIGN KEY (empleadoid) REFERENCES Empleado (id_empleado)
);





