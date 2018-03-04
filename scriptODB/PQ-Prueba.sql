/*
SE CREA EL ENCABEZADO DEL PAQUETE.
 */
CREATE OR REPLACE PACKAGE APP.LCTWEB AS

  FUNCTION Reg_ot (p_idtodt in APP.LCT_ORDENES.idtodt%type, p_idtusrcre in APP.LCT_ORDENES.idtusrcre%type,
  p_idtcntopr in APP.LCT_ORDENES.idtcntopr%type, p_fchcre in APP.LCT_ORDENES.fchcre%type,
  p_fchath in APP.LCT_ORDENES.fchath%type,p_fchauc in APP.LCT_ORDENES.fchauc%type,
  p_fchfin in APP.LCT_ORDENES.fchfin%type, p_idtlotfac in APP.LCT_ORDENES.idtlotfac%type,
  p_idttrntyp in APP.LCT_ORDENES.idttrntyp%type, p_idtrtaloc in APP.LCT_ORDENES.idtrtaloc%type,
  p_edoodt in APP.LCT_ORDENES.edoodt%type, p_idtscri in APP.LCT_ORDENES.idtscri%type,
  p_idtscru in APP.LCT_ORDENES.idtscru%type)
  return varchar2;


END LCTWEB;
/*
FIN DEL ENCACEBZADO DEL PAQUETE
*/

/*
SE INICIA EL CUERPO DEL PAQUETE
 */
CREATE OR REPLACE PACKAGE BODY APP.LCTWEB AS

  PROCEDURE Reg_ot (p_idtodt in APP.LCT_ORDENES.idtodt%type, p_idtusrcre in APP.LCT_ORDENES.idtusrcre%type,
  p_idtcntopr in APP.LCT_ORDENES.idtcntopr%type, p_fchcre in APP.LCT_ORDENES.fchcre%type,
  p_fchath in APP.LCT_ORDENES.fchath%type, p_fchauc in APP.LCT_ORDENES.fchauc%type,
  p_fchfin in APP.LCT_ORDENES.fchfin%type, p_idtlotfac in APP.LCT_ORDENES.idtlotfac%type,
  p_idttrntyp in APP.LCT_ORDENES.idttrntyp%type, p_idtrtaloc in APP.LCT_ORDENES.idtrtaloc%type,
  p_edoodt in APP.LCT_ORDENES.edoodt%type, p_idtscri in APP.LCT_ORDENES.idtscri%type,
  p_idtscru in APP.LCT_ORDENES.idtscru%type, codanomal OUT varchar2)
  IS
  BEGIN
    insert into LCT_ORDENES(idtodt, idtusrcre, idtcntopr, fchcre, fchath, fchauc, fchfin, idttrntyp, idtrtaloc
    edoodt, idtscri, idtscru) values (p_idtodt, p_idtusrcre, p_idtcntopr, p_fchcre, p_fchath, p_fchauc, p_fchfin,
    p_idtlotfac, p_idttrntyp, p_idtrtaloc, p_edoodt, p_idtscri, p_idtscru);
  EXCEPTION
    when NO_DATA_FOUND then return null;
    when OTHERS then return null;
  END Reg_ot;

END LCTWEB;
/*
FIN DEL CUERPO DEL PAQUETE
 */
show errors