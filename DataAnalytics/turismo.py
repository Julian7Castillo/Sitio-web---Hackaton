import pandas as pd

general = 'C:/xampp/htdocs/Hackaton/DataAnalytics/TerriData_DimTurismo.xlsx'
especifico = 'C:/xampp/htdocs/Hackaton/DataAnalytics/anex-EGIT-2023-turismo.xlsx'

turismoGeneral = pd.read_excel(general,usecols=['Departamento','Entidad','Indicador','Dato Numérico'])
turismoInterno = pd.read_excel(especifico, sheet_name='2.Turismo interno')
turismoMotivo = pd.read_excel(especifico, sheet_name='3.Turismo según motivo')
turismoOrigenDestino = pd.read_excel(especifico, sheet_name='9.Turismo matriz origen-destino')
turismoGastoPromediodia = pd.read_excel(especifico, sheet_name='15.Gasto promedio día turismo')
turismoGastoPromedioViaje = pd.read_excel(especifico, sheet_name='16.Gasto promedio viaje turismo')
turismoMotivoNoViajeCiu = pd.read_excel(especifico, sheet_name='30.Motivo de no viaje según ciu')
turismoMotivoNoViajeEdu = pd.read_excel(especifico, sheet_name='32.Motivo de no viaje educación')
turismoMotivoNoViajeLab  = pd.read_excel(especifico, sheet_name='33.Motivo de no viaje mer labor')

#print(turismoGeneral)
print(turismoInterno)
#print(turismoMotivo)
#print(turismoOrigenDestino)
#print(turismoGastoPromediodia)
#print(turismoGastoPromedioViaje)
#print(turismoMotivoNoViajeCiu)
#print(turismoMotivoNoViajeEdu)
#print(turismoMotivoNoViajeLab)