CREATE DATABASE [practica2023_v7D]
use practica2023_v7D



 /****** PROBAR DE AQUI ******/
 
  /****** Creacion de tabla ESTADO-TURNO junto a sus claves primarias  ******/

  CREATE TABLE [dbo].[Estadoturno](
	[id_estado_turno] INT IDENTITY(1,1) PRIMARY KEY,
	[nombre_estado_turno] [nvarchar](25) NOT NULL,
 );



 /****** Creacion de tabla BOX junto a sus claves primarias  ******/
CREATE TABLE [dbo].[Box](
	[id_box] INT IDENTITY(1,1) PRIMARY KEY,
	[nombre_box] [nvarchar](10) NOT NULL,
	[id_estado_box] [nvarchar](10) NOT NULL,

 );

  /****** Creacion de tabla PERFIL-SISTEMA junto a sus claves primarias  ******/

 CREATE TABLE [dbo].[Perfilsistema](
	[id_perfil_sistema] INT IDENTITY(1,1) PRIMARY KEY,
	[nombre_perfil_sistema] [nvarchar](25) NOT NULL,
 );


   /****** Creacion de tabla ESPECIALIDAD junto a sus claves primarias  ******/

    CREATE TABLE [dbo].[Especialidad](
	[id_especialidad] INT IDENTITY(1,1) PRIMARY KEY,
	[nombre_especialidad] [nvarchar](25) NOT NULL,
 );


/****** SEGUNDA    PARTE ******/




 /****** Creacion de tabla EMPLEADO junto a sus claves primarias  ******/

 CREATE TABLE [dbo].[Empleado](
    [id_empleado] INT IDENTITY(1,1) PRIMARY KEY,
    [rut_empleado] [nvarchar](50) NOT NULL UNIQUE,
	[correo] [nvarchar](50) NOT NULL,
    [clave] [nvarchar](50) NOT NULL,
    [nombre_empleado] [nvarchar](50) NOT NULL,
    [apellido_empleado] [nvarchar](50) NOT NULL,
	[estadoempleado] [nvarchar](50) NOT NULL,
    [boxid] [int] NOT NULL,
	[perfilsistemaid] [int] NOT NULL,
	[especialidadid] [int] NOT NULL,
	CONSTRAINT FK_Empleado_Box FOREIGN KEY (boxid) REFERENCES Box(id_box),
	CONSTRAINT FK_Empleado_perfilsistema FOREIGN KEY (perfilsistemaid) REFERENCES Perfilsistema(id_perfil_sistema),
	CONSTRAINT FK_Empleado_especialidad FOREIGN KEY (especialidadid) REFERENCES Especialidad(id_especialidad)
);





 /****** Creacion de tabla ESTUDIANTE junto a sus claves primarias  ******/
 /*aqui podemos agregar año ingreso para sacar cuentas */
   CREATE TABLE [dbo].[Estudiante](
	[matricula] INT PRIMARY KEY,
	[rut_estudiante] [nvarchar](50) NOT NULL UNIQUE,
	[nombre_estudiante] [nvarchar](50)  NOT NULL,
	[apellido_estudiante] [nvarchar](50)  NOT NULL,
	[correo_estudiante] [nvarchar](50)  NOT NULL,
	[carrera] [nvarchar](50)  NOT NULL,
	[sede] [nvarchar](50)  NOT NULL,
	[estadomatricula] [nvarchar](50) NOT NULL
	
 );



 /******                parte                      3  ******/



   /****** Creacion de tabla TURNO junto a sus claves primarias  ******/
   CREATE TABLE [dbo].[Turno](
	[id_turno] INT IDENTITY(1,1) PRIMARY KEY,
	[numero_atencion] [nvarchar](50) NOT NULL UNIQUE,
	[matriculaid] INT  NOT NULL,
	[especialidadid] INT  NOT NULL,
	[fecha_hora] [datetime] NOT NULL,
	CONSTRAINT FK_Turno_Estudiante FOREIGN KEY (matriculaid) REFERENCES Estudiante(matricula),
	CONSTRAINT FK_Turno_Especialidad FOREIGN KEY (especialidadid) REFERENCES Especialidad(id_especialidad)
 );


   /****** Creacion de tabla TURNO-ESTODOTURNO junto a sus claves primarias  ******/
   CREATE TABLE [dbo].[Turno_estadoturno](
	[id_turno_estadoturno] INT IDENTITY(1,1) PRIMARY KEY,
	[turnoid] INT  NOT NULL,
	[estadoturnoid] INT  NOT NULL,
	[empleadoid] INT NOT NULL,
	[fecha] [datetime] NOT NULL,
	CONSTRAINT FK_Turno_estadoturno_Turno FOREIGN KEY (turnoid) REFERENCES Turno(id_turno),
	CONSTRAINT FK_Turno_estadoturno_Estadoturno FOREIGN KEY (estadoturnoid) REFERENCES Estadoturno(id_estado_turno),
	CONSTRAINT FK_Turno_estadoturno_empleado FOREIGN KEY (empleadoid) REFERENCES Empleado(id_empleado)
 );

  /****** Creacion de tabla TURNO-Empleadoespecialidad junto a sus claves primarias  ******/
  /* CREATE TABLE [dbo].[Turno_Empleado](
	[id_turno_empleado] INT IDENTITY(1,1) PRIMARY KEY,
	[empleadoid] INT  NOT NULL,
	[idturno] INT  NOT NULL,
	CONSTRAINT FK_Turno_Empleado_Empleado FOREIGN KEY (empleadoid) REFERENCES Empleado(id_empleado),
	CONSTRAINT FK_Turno_Empleado_Turno FOREIGN KEY (idturno) REFERENCES Turno(id_turno)
 );*/






