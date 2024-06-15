import pandas as pd
import matplotlib.pyplot as plt

# Leer los datos de los archivos Excel
general = 'C:/xampp/htdocs/Hackaton/DataAnalytics/TerriData_DimTurismo.xlsx'
especifico = 'C:/xampp/htdocs/Hackaton/DataAnalytics/anex-EGIT-2023-turismo.xlsx'

#almacenar los datos del excel y flitrarlos
#filtrado de datos de primera base de datos
turismoGeneral = pd.read_excel(general,usecols=['Departamento','Entidad','Indicador','Dato Numérico'])
turismoGeneral = turismoGeneral[turismoGeneral['Departamento'] == 'Boyacá']
# Convertir la columna 'Dato Numérico' a tipo numérico y eliminar filas con NaN
turismoGeneral['Dato Numérico'] = pd.to_numeric(turismoGeneral['Dato Numérico'], errors='coerce')
#turismoGeneral = turismoGeneral.dropna(subset=['Dato Numérico'])

# Filtrar las filas donde 'Dato Numérico' es mayor que 0
#filtered_data = turismoGeneral[turismoGeneral['Dato Numérico'] > 0]

#turismoInterno = pd.read_excel(especifico, sheet_name='2.Turismo interno')
#turismoMotivo = pd.read_excel(especifico, sheet_name='3.Turismo según motivo')
#turismoOrigenDestino = pd.read_excel(especifico, sheet_name='9.Turismo matriz origen-destino')
#turismoGastoPromediodia = pd.read_excel(especifico, sheet_name='15.Gasto promedio día turismo')
#turismoGastoPromedioViaje = pd.read_excel(especifico, sheet_name='16.Gasto promedio viaje turismo')
#turismoMotivoNoViajeCiu = pd.read_excel(especifico, sheet_name='30.Motivo de no viaje según ciu')
#turismoMotivoNoViajeEdu = pd.read_excel(especifico, sheet_name='32.Motivo de no viaje educación')
#turismoMotivoNoViajeLab  = pd.read_excel(especifico, sheet_name='33.Motivo de no viaje mer labor')

#mostrar tablas de resultado
print(turismoGeneral)
#print(turismoInterno)
#print(turismoMotivo)
#print(turismoOrigenDestino)
#print(turismoGastoPromediodia)
#print(turismoGastoPromedioViaje)
#print(turismoMotivoNoViajeCiu)
#print(turismoMotivoNoViajeEdu)
#print(turismoMotivoNoViajeLab)

#grafica
turismoGeneral.hist(bins=20)
plt.title('Datos de turismo en Boyacá')
plt.xlabel('Departamento')
plt.ylabel('Dato numerico')
plt.show()