create database BD_Clinica;
use BD_Clinica;

create table Mascota
(
IdMascota int primary key auto_increment, 
NombrePropietario  varchar (60) NOT NULL, 
Telefono	       varchar (48) NOT NULL,
NombreMascota     varchar (60) NOT NULL, 
Sexo               varchar(10) NOT NULL,
EdadMascota        int(10) NOT NULL,
RazaMascota        varchar(60) NOT NULL,
Especie            varchar(50) NOT NULL,
Enfermedades       varchar(100) NOT NULL,
Alergias           varchar(100) NOT NULL,
CorreoElectronico  varchar(300) NOT NULL,
Contraseña         varchar(100) NOT NULL
);

insert into  Mascota (NombrePropietario, Telefono, NombreMascota, Sexo, EdadMascota, RazaMascota, Especie, Enfermedades, Alergias,
CorreoElectronico, Contraseña) values  ( "Jesus", "6531658510", "tobi", "Macho", 3, "Chihuahua", "Canino", "Problema cardíaco", 
"ninguna", "jesusramon@gmail.com", "12345678"), 
 ( "Gerardo", "6531075336", "Loppy", "Macho", 7, " Holland Lop", "Mamiferos", "Mixomatosis", 
"Alergia al heno", "gerardoreyes@gmail.com", "12345678"),
  ( "Hector", "6531746960", "Sunny", "Hembra", 10, "Guacamayo Azul", "Aves", "Psitacosis", 
"ninguna", "hectornavarro@gmail.com", "12345678"),
 ( "Lluvia", "6531644381", "Burbujas", "Macho", 1, "Guppy Endler", "Peces", "Ninguna", 
"reacciones alérgicas", "lluviakim@gmail.com", "12345678"),
 ( "Lucero", "6862316316", "Hoppy", "Hembra", 3, "No especifico", "Anfibios", "Ninguna", 
"ninguna", "lucerogarcia@.com", "12345678"),
  ( "Ricardo", "6531474337", "Spike", "Macho", 5, "Dragón Barbudo", "Reptiles", "Ninguna", 
"alérgico al polen", "ricardolara@gmail@.com", "12345678"),
  ( "Oscar", "6531461449", "Scratchy", "Macho", 2, "Arácnido ficticio", "Atropodos", "portadores de parásitos", 
"ninguna", "oscarcortez@gmail.com", "12345678"),
 ( "Jose", "6531612476", "Buddy", "Macho", 4, "Labrador Retriever", "Vertebrados", "Problema cardíaco", 
"alergia alimentaria a los productos lácteos", "josereyes@gmail@.com", "12345678");

-- eliminar una mascota 
delimiter //
create procedure deleteMascota(_idmascota int)
begin
	delete from mascota where IdMascota = _idmascota ;
end//
delimiter ;
call deleteMascota(16);

CREATE TABLE medico
(
	IdMedico	 int primary key auto_increment ,
    NombreMedico 	varchar (255) NOT NULL,
	Especialidad	varchar (255) NOT NULL,
    NumTelefono		Varchar (20),
    CorreoElectronico	Varchar (255),
    Contrasena      varchar(100),
    HorarioDetrabajo	Varchar (100) NOT NULL,
    direccion	Varchar (255),
    Experiencia		int NOT NULL
);

Insert into medico (NombreMedico, Especialidad, NumTelefono, CorreoElectronico, Contrasena, HorarioDeTrabajo, direccion, Experiencia) Values ('Dr. Smith', 'Cardiologia', '6531128732', 'gr2344346@gmail.com', '12345','Lunes a Viernes 8:00 AM - 4:00 PM', 'libertad y 42,', '10');
Insert into medico (NombreMedico, Especialidad, NumTelefono, CorreoElectronico, Contrasena, HorarioDeTrabajo, direccion, Experiencia) Values ('Dra sanchez', 'oncologia', '65376510982', 'DraSanchez4@gmail.com', '12345', 'Lunes a Jueves 9:00 AM - 5:00 PM', 'Oaxaca y 40,', '8');
Insert into medico (NombreMedico, Especialidad, NumTelefono, CorreoElectronico, Contrasena, HorarioDeTrabajo, direccion, Experiencia) Values ('Dr. Gutierrez', 'Fisioterapia', '6531075334', 'Gutierrez1@gmail,com',  '12345', 'Martes a sabado 10:00 AM - 6:00 PM', 'Sinaloa y 34', 9);
Insert into medico (NombreMedico, Especialidad, NumTelefono, CorreoElectronico, Contrasena, HorarioDeTrabajo, direccion, Experiencia) Values ('Dr. Alonso', 'Rehabilitacion ', '6533247812', 'Alonso80@gmail.com',  '12345', 'Lunes a Sabado 7:00 AM  - 1:00 PM', 'Sonora y 20', 10);
Insert into medico (NombreMedico, Especialidad, NumTelefono, CorreoElectronico, Contrasena, HorarioDeTrabajo, direccion, Experiencia) Values ('Dr. Felix', 'Fauna Silvestre ', '6531874321', 'Felix50@gmail.com', '12345', 'miercoles a domingo 11:00 AM  - 7:00 PM', 'Zacatecas y 15', 5);
Insert into medico (NombreMedico, Especialidad, NumTelefono, CorreoElectronico, Contrasena, HorarioDeTrabajo, direccion, Experiencia) Values ('Dra. Miriam', 'Imagenologia ', '6531278790', 'MiriamImag20@gmail.com', '12345', 'Lunes a Viernes 11:00 AM  - 7:00 PM', 'Zacatecas y 15', 5);
Insert into medico (NombreMedico, Especialidad, NumTelefono, CorreoElectronico, Contrasena, HorarioDeTrabajo, direccion, Experiencia) Values ('Dra. Araceli', 'Medico ', '65312785653', 'AraceliImag20@gmail.com', '12345', 'Lunes a Viernes 11:00 AM  - 5:00 PM', 'Zacatecas y 23', 7);
Insert into medico (NombreMedico, Especialidad, NumTelefono, CorreoElectronico, Contrasena, HorarioDeTrabajo, direccion, Experiencia) Values ('Dra. Salazar', 'Cartologia ', '6531238967', 'Salazar22@gmail.com',  '12345','Lunes a sabado 12:00 PM  - 7:00 PM', 'Nayarit y 41', 10);


create table citas
(
IdCitas int primary key auto_increment , 
Fecha date NOT NULL, 
Hora time NOT NULL, 
-- FK deben llamarse igual, de preferencia, a la tabla original- Y también falta poner la referencia a la llave foranea
IdMascota int, 
IdMedico	 int,
Motivocita varchar(200),
NombreMedico varchar(100),
FechaDeCancelacion date,
foreign key (IdMascota) references Mascota (IdMascota),
foreign key (idmedico) references medico (idmedico)
);

insert into citas (IdCitas, Fecha, Hora, idmascota, idMedico, Motivocita, NombreMedico, FechaDeCancelacion)
 values
 (1, "12-10-23", "10:00", "1", "2", "tos", "Dr. Smith-Cardiologia","13-10-23"),
 (2, "13-10-23", "11:00", "3", "4", "gripe","Dra. Sanchez-Oncologia", null), 
 (3, "15-10-23", "3:00", "5", "6", "chequeo rutinal", "Dr. Smith-Cardiologia",null),
 (4, "16-10-23", "4:00", "8", "1", "quebrada de huesos","Dr. Gutierrez-Fisioterapia",null), 
 (5, "17-10-23", "5:00", "2", "3", "accidente","Dr. Alonso-Rehabilitacion", null),
 (6, "18-10-23", "6:00", "4", "5", "embarazo", "Dr. Felix-Fauna Silvestre",null),
 (7, "19-10-23", "7:00", "6", "7", "cancer", "Dra. Miriam-Imagenologia ",null),
 (8, "20-10-23", "8:00", "8", "1", "sida", "Dr. Smith-Cardiologia", null),
 (9, "22-10-23", "9:00", "2", "3", "estornudos","Dra. Araceli-Medico general","23-10-23"),
 (10, "23-10-23", "10:00", "4", "5", "ojos llorosos","Dra. Salazar-Cartologia", null),
 (11, "25-10-23", "11:00", "2","3", "pulgas","Dr. Jose Reyes","26-10-23"),
 (12, "26-10-23", "10:00", "4", "5","moquillo", "Dr. Jesus Escobedo",null),
 (13, "27-10-23", "11:00", "6", "7", "cita diaria", "Dr. Gerardo Reyes","28-10-23"), 
 (14, "28-10-23", "1:00", "8", "1", "tristesa", "Dr. Lucero Garcia","30-10-23"),
 (15, "31-10-23", "02:00", "2", "3", "Enfermedad hemorrágica epizoótica","Dr. LLuvia kim","01-11-23"),
 (16, "02-11-23", "03:00", "4", "5", "fiebre","Dr. Ricardo Lara",null),
 (17, "04-11-23", "05:00", "6", "7", "situacion de calle","Dr. Carlos Garcia","05-11-23"),
 (18, "06-11-23", "06:00", "8", "1", "brucelosis","Dr. Oscar Cortez","07-11-23"),
 (19, "07-11-23", "07:00", "2", "3", "bronquitis","Dr. Julian Uriarte","08-11-23"), 
 (20, "08-11-23", "08:00", "4", "5", "vertigo","Dr. JoseLuis valenzuela", null);
 
--  Procedimiento Almacenado para Insertar Mascota
drop procedure if exists insertMascota;
delimiter // 
create procedure insertMascota( nombrepropietario varchar(100), telefono varchar(10), nombremascota varchar(60), sexo varchar(10), edadmascota varchar(2), 
razamascota varchar(60), especie varchar(50) , enfermedades varchar(100) , alergias varchar(100) , correoelectronico varchar(200), contraseña varchar(50) )
begin
    insert into mascota values (  nombrepropietario, telefono, nombremascota, sexo, edadmascota, 
razamascota , especie, enfermedades, alergias, correoelectronico, contraseña);
end//
delimiter ;


-- Procedimiento Almacenado para Validar Mascota
delimiter //
create procedure ValidarMascota(_Correoelectronico varchar(200), _contraseña varchar(50))
begin
     select * from  mascota where CorreoElectronico =_Correoelectronico and Contraseña =_contraseña;
end//
delimiter ; 

-- Procedimiento Almacenado para Validar Medico
delimiter //
create procedure ValidarMedico(_CorreoElectronico varchar(200), _contrasena varchar(50))
begin
     select * from  medico where CorreoElectronico =_CorreoElectronico and Contrasena =_contrasena;
end//
delimiter ; 





-- Stored Procedure para mostrar un registro de citas del día al ingresar a la cuenta
DELIMITER //
CREATE PROCEDURE SP_MostrarCitasDelDia(in Idmedico int)
begin
    select *
    from citas
    where Idmedico = Idmedico and FechaCita = CURDATE();
end //
DELIMITER ;

-- Stored Procedure para el Reporte 01: Pacientes con similitudes en las enfermedades
DELIMITER //
create procedure SP_Reporte01PacientesSimilitudEnfermedades(in enfermedad VARCHAR(255))
begin
   select *
    from pacientes
    where Enfermedades like CONCAT('%', enfermedad, '%');
    
end //
DELIMITER ;

-- Stored Procedure para el Reporte 02: Pacientes por filtro en el género y/o nombre
delimiter //
create procedure SP_Reporte02PacientesFiltro(in genero varchar(10), in nombre varchar(100))
BEGIN
    if genero is not null and nombre is not null then
        -- Ambos parámetros están presentes
        select *
        from mascota
        where Genero = genero and nombre like CONCAT('%', nombre, '%');
    elseif genero is not null then
        -- Solo el parámetro de género está presente
        select *
        from mascota
        where Genero = genero;
    elseif nombre is not null then
        -- Solo el parámetro de nombre está presente
        select *
        from mascota
        where nombre LIKE CONCAT('%', nombre, '%');
    else
        -- Ningún parámetro presente, seleccionar todos los registros
        select *
        from mascota;
    end if;
end //
delimiter ;


-- Crear una vista para el Reporte 03: Top 5 de los pacientes que más cancelan citas
create view V_Top5PacientesCancelan as
select m.NombrePropietario, Nombremascota, m.CorreoElectronico, Telefono, COUNT(C.IdCitas) as NumCitasCanceladas
from mascota m
inner join citas C on m.IdMascota = C.IdMascota
where Fechadecancelacion is not null
group by m.IdMascota
order by NumCitasCanceladas desc
limit 5;

DELIMITER //
create procedure PerfilPaciente(in _nombreMascota VARCHAR(60))
begin
    SELECT IdCitas, Fecha, Hora, NombreMascota, NombreMedico, FechaDeCancelacion
    FROM citas
    WHERE IdMascota = (select idmascota from mascota where nombreMascota = _nombremascota);
end //
-- hacer un join 
DELIMITER ;

call PerfilPaciente('tobi');
-- ------------------------------------------------------------------------------------------------------------------------------------------

DELIMITER //


create procedure InsertarCita(
Fecha DATE,
Hora TIME,
IdMascota INT,
NombreMedico INT,
Motivocita VARCHAR(255)
)
BEGIN
    declare cita_existente INT;

    select COUNT(*)
    INTO cita_existente
    FROM citas
    WHERE Fecha = _Fecha AND Hora = _Hora AND NombreMedico= _NombreMedico;
   
    if cita_existente = 0 THEN
        insert into citas (Fecha, Hora, IdMascota, NombreMedico)
        VALUES (_Fecha, _Hora, _IdMascota, _NombreMedico);
    END IF;
END //
DELIMITER ;
-- -----------------------------------------------------------------------------------------------------------------------------
DELIMITER //

drop procedure if exists insertCitas;
delimiter // 
create procedure insertCitas( IdMascota int, NombreMedico varchar(100), Fecha date, Hora time, MotivoCita varchar(200) )
begin
    insert into citas values ( IdMascota, NombreMedico, Fecha,  Hora, MotivoCita);
end//
delimiter ;

delimiter //
create procedure ConsultarCitasPorDia(
    in p_Fecha date
)
begin
    select c.IdCitas, c.Hora, m.NombreMedico, mas.NombreMascota
    from citas c
    join medico m on c.IdMedico = m.IdMedico
    join mascota mas on c.IdMascota = mas.IdMascota
    where c.Fecha = p_Fecha;
end //

DELIMITER ;



call InsertarCita('2023-11-10', '15:00:00', 1, 1, @resultado);
select @resultado;

call ConsultarCitasPorDia('2023-11-10');




delimiter //
create procedure deleteCitas(_idCitas int)
begin 
     delete from Citas where idCitas= _idCitas;
end //
delimiter ; 



