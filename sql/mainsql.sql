create table usuario (
ID_USER int(4) primary key AUTO_INCREMENT,
nome varchar(50),
senha varchar(50)
);

select * from `usuario`;

INSERT INTO `usuario` (nome,senha)
values("adminfrr","adminfrr");

SELECT * FROM usuario
 WHERE nome = 'adminfrr' AND `senha` = 'adminfrr';
 
 DELIMITER $$
 
 CREATE PROCEDURE busca_cd (
	nome_cd varchar(50),
    senha_cd varchar(50) 
    )
    BEGIN
		SELECT * FROM usuario
		WHERE nome = nome_cd AND SENHA = senha_cd;
    end $$
DELIMITER ;


DELIMITER $$

CREATE PROCEDURE cadastro (
nome_rg varchar (50),
senha_rg varchar (50),
OUT saida varchar (50)
)
BEGIN
	IF EXISTS(SELECT * FROM usuario WHERE nome = nome_rg) THEN
		BEGIN
			SET saida = 'Login ja cadastrado';
        END;
	ELSE 
		INSERT INTO usuario(nome,senha)
        VALUES (nome_rg,senha_rg);
        
        IF ROW_COUNT()= 0 THEN
			SET saida ='ERRO!, Usuario não cadastrado';
		ELSE
			SET saida = 'Usuario cadastrado com Sucesso';
		END IF;
	END IF;
		SELECT saida;
END$$
DELIMITER ;


CALL cadastro('usertest','123456',@saida);

select * from usuario;

