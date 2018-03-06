/*
SE CREA EL ENCABEZADO DEL PAQUETE.
 */
CREATE OR REPLACE PACKAGE APP.LCTWEB AS
PROCEDURE Reg_ot (p_idtodt in NUMBER, p_idtusrcre in NUMBER,
p_idtcntopr in VARCHAR2, p_fchcre in DATE,
p_fchath IN DATE, p_fchauc in DATE,
p_fchfin in DATE, p_idtlotfac in VARCHAR2,
p_idttrntyp in VARCHAR2, p_idtrtaloc in NUMBER,
p_edoodt in VARCHAR2, p_idtscri in VARCHAR2,
p_idtscru in VARCHAR2);

END;
/*
FIN DEL ENCACEBZADO DEL PAQUETE
*/
/*
SE INICIA EL CUERPO DEL PAQUETE
 */
CREATE OR REPLACE PACKAGE BODY APP.LCTWEB AS

PROCEDURE Reg_ot (p_idtodt in NUMBER, p_idtusrcre in NUMBER,
p_idtcntopr in VARCHAR2, p_fchcre in DATE,
p_fchath IN DATE, p_fchauc in DATE,
p_fchfin in DATE, p_idtlotfac in VARCHAR2,
p_idttrntyp in VARCHAR2, p_idtrtaloc in NUMBER,
p_edoodt in VARCHAR2, p_idtscri in VARCHAR2,
p_idtscru in VARCHAR2)
IS
BEGIN
  if p_idtodt <> idtodt
  then
    insert into  APP.LCT_ORDENES () values (p_idtodt, p_idtusrcre, p_idtcntopr, p_fchcre, p_fchath, p_fchauc, p_fchfin,
    p_idtlotfac, p_idttrntyp, p_idtrtaloc, p_edoodt, p_idtscri, p_idtscru);
  else
      update APP.LCT_ORDENES set idtusrcre = p_idtusrcre, idtcntopr = p_idtcntopr, fchcre = p_fchcre, fchath = p_fchath,
      fchauc = p_fchauc, fchfin = p_fchfin, idtlotfac = p_idtlotfac, idttrntyp = p_idttrntyp, idtrtaloc = p_idtrtaloc,
      edoodt = p_edoodt, idtscri = p_idtscri, idtscru = p_idtscru where idtodt = p_idtodt;
  end if;


  EXCEPTION
  WHEN OTHERS THEN
  dbms_output.put_line('NO SE CREO EL PROCEDIMEINTO');
END Reg_ot;

END;
/*
FIN DEL CUERPO DEL PAQUETE
 */
