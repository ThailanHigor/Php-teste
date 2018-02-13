CREATE TABLE Usuarios(
ID_Usuario int AUTO_INCREMENT PRIMARY KEY, 
Nome VARCHAR(30) NOT NULL,
Status BOOLEAN NOT NULL default 0,
Login VARCHAR(20),
Senha VARCHAR(20),
Disponibilidade BOOLEAN NOT NULL default 0
);


CREATE TABLE notas(
ID_Nota int AUTO_INCREMENT PRIMARY KEY,
Cod_Nota int NOT NULL,
Vendedor VARCHAR(20) NOT NULL,
Cliente VARCHAR(20) NOT NULL,
Observacao VARCHAR(200)
);

CREATE TABLE notas_separadas(
ID_NS int AUTO_INCREMENT PRIMARY KEY,
Separador_NS VARCHAR(20) NOT NULL,
Status_NS BOOLEAN NOT NULL default 0,
Data_NS DATE NOT NULL,
Hora_NS TIME NOT NULL,
ID_Nota int NOT NULL,
ID_Usuario int NOT NULL
);

ALTER TABLE notas_separadas
ADD CONSTRAINT FK_NOTAS_NOTASSEPARADAS
FOREIGN KEY(ID_Nota)
REFERENCES notas(ID_Nota);

ALTER TABLE notas_separadas
ADD CONSTRAINT FK_USUARIOS_NOTASSEPARADAS
FOREIGN KEY(ID_Usuario)
REFERENCES Usuarios(ID_Usuario);


INSERT INTO Usuarios values(null,"Thailan",0,"th","th",0);

INSERT INTO notas values(null,578493,"Devanir","Balcao",null);
INSERT INTO notas values(null,578494,"Reinaldo","Balcao",null);
INSERT INTO notas values(null,578495,"Edson","Balcao","Cliente vem Buscar");

INSERT INTO notas_separadas
values(null,'Aldo',0,'0000-00-00','00:00:00',1,1);