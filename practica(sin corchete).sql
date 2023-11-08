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
    apellido_estudiante NVARCHAR(50) NOT NULL
