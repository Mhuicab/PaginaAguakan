/*									 	                    \\|//
										                      (O O)
======================================oOO==(_)====OOo==========================================================
plREF_PQ.sql: Procedimientos y funciones empleados por REF
===============================================================================================================*/
CREATE OR REPLACE PACKAGE APP.LCTWEB AS
/* ____________________________________________________________________________________________________________
PROCEDIMIENTOS Y FUNCIONES DE REFERENCIAS
27.02.2018 {1} -> AVS: Creación del scripts.
_______________________________________________________________________________________________________________*/

	FUNCTION DATAVAR (pidtvar IN APP.REF_VARS.idtvar%type) RETURN APP.REF_VARS.valor%type;
    FUNCTION SRVREF RETURN boolean;

END LCTWEB;
/

CREATE OR REPLACE PACKAGE BODY APP.LCTWEB AS
------------------------------------------------------------------------------------------------------------------------
-- Recupera el valor y descripción de una variable
------------------------------------------------------------------------------------------------------------------------
FUNCTION DATAVAR (pidtvar IN APP.REF_VARS.idtvar%type) RETURN APP.REF_VARS.valor%type IS
	res APP.REF_VARS.valor%type;
BEGIN
	select trim(valor) into res from APP.REF_VARS where idtvar=pidtvar;
	return res;
EXCEPTION
	when NO_DATA_FOUND then return null;
	when OTHERS then return null;
END;

------------------------------------------------------------------------------------------------------------------------
-- Recupera el valor y descripción de una variable
------------------------------------------------------------------------------------------------------------------------
FUNCTION SRVREF RETURN boolean IS
BEGIN
	if datavar('SRVREF') in ('0','OFF') then return false; else return true; end if;
END;

-- ---------------------------------------------------------------------------------------------------------------------

END LCTWEB;
/
