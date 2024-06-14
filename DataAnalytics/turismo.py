import pandas as pd

general = 'TerriData_DimTurismo.xlsx'
especifico = 'anex-EGIT-2023-turismo.xlsx'

turismoGeneral = pd.read_excel(general)
turismoEspecifico = pd.read_excel(especifico)

print(turismoGeneral.head())
