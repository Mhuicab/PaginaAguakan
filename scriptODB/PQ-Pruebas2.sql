CREATE OR REPLACE PACKAGE APP.LCTWEB AS

PROCEDURE Reg_ot (p_idtodt in APP.LCT_ORDENES.idtodt%type,
                  p_idtusrcre in APP.LCT_ORDENES.idtusrcre%type,
                  p_idtusrlct in APP.LCT_ORDENES.idtusrlct%type,
                  p_idtcntopr in APP.LCT_ORDENES.idtcntopr%type,
                  p_fchcre in APP.LCT_ORDENES.fchcre%type,
                  p_fchath in APP.LCT_ORDENES.fchath%type,
                  p_fchuac in APP.LCT_ORDENES.fchuac%type,
                  p_fchfin in APP.LCT_ORDENES.fchfin%type,
                  p_idtlotfac in APP.LCT_ORDENES.idtlotfac%type,
                  p_idttrntyp in APP.LCT_ORDENES.idttrntyp%type,
                  p_idtrtaloc in APP.LCT_ORDENES.idtrtaloc%type,
                  p_edoodt in APP.LCT_ORDENES.edoodt%type,
                  p_idtscri in APP.LCT_ORDENES.idtscri%type,
                  p_idtscru in APP.LCT_ORDENES.idtscru%type);

END LCTWEB;
/

CREATE OR REPLACE PACKAGE BODY APP.LCTWEB AS

PROCEDURE Reg_ot (p_idtodt in APP.LCT_ORDENES.idtodt%type,
                  p_idtusrcre in APP.LCT_ORDENES.idtusrcre%type,
                  p_idtusrlct in APP.LCT_ORDENES.idtusrlct%type,
                  p_idtcntopr in APP.LCT_ORDENES.idtcntopr%type,
                  p_fchcre in APP.LCT_ORDENES.fchcre%type,
                  p_fchath in APP.LCT_ORDENES.fchath%type,
                  p_fchuac in APP.LCT_ORDENES.fchuac%type,
                  p_fchfin in APP.LCT_ORDENES.fchfin%type,
                  p_idtlotfac in APP.LCT_ORDENES.idtlotfac%type,
                  p_idttrntyp in APP.LCT_ORDENES.idttrntyp%type,
                  p_idtrtaloc in APP.LCT_ORDENES.idtrtaloc%type,
                  p_edoodt in APP.LCT_ORDENES.edoodt%type,
                  p_idtscri in APP.LCT_ORDENES.idtscri%type,
                  p_idtscru in APP.LCT_ORDENES.idtscru%type)
IS

BEGIN

    insert into APP.LCT_ORDENES (idtusrcre,idtusrlct,idtcntopr,idtlotfac,idttrntyp,idtrtaloc)
    values (p_idtusrcre,p_idtusrlct,p_idtcntopr,p_idtlotfac,p_idttrntyp,p_idtrtaloc);


  EXCEPTION
  WHEN OTHERS THEN
  dbms_output.put_line('SE PRODUJO OTRA EXCEPCION');
END;

END LCTWEB;
/
