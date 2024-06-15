
import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
import seaborn as sns
import plotly.express as px
#import statsmodels.api as sm

#Cargar el archivo de Excel
archivo = './DataAnalytics/TerriData_Filtrado.xlsx'
df = pd.read_excel(archivo)

df = df[df['Departamento'] == 'Boyacá']
df = df[df['Indicador'] == 'Visitantes a Parques Nacionales Naturales']
print (df)

#1. Análisis estadísticos
promedio = round(df['Dato_Num'].mean(),2)
varianza = round(df['Dato_Num'].var(),2)
desviacion_estandar = round(df['Dato_Num'].std(),2)
moda = df['Dato_Num'].mode()[0]

#Resultados de las estadísticas descriptivas
estadisticas = pd.DataFrame({
    'Promedio': [promedio],
    'Varianza': [varianza],
    'Desviación Estándar': [desviacion_estandar],
    'Moda': [moda]
})


estadisticas_html = estadisticas.to_html(index=False)
#Guardar la tabla HTML en un archivo
with open('Dato_Num_hackaton.html', 'w') as f:
    f.write(estadisticas_html)

#Resultados de las estadísticas descriptivas
print(f"Promedio: {promedio}")
print(f"Varianza: {varianza}")
print(f"Desviación Estándar: {desviacion_estandar}")
print(f"Moda: {moda}")



#2. Análisis de tendencias
#Agrupar por fecha y sumar las ventas
visitas_por_anio = df.groupby('Año')['Dato_Num'].sum().reset_index()

#3. Gráfico de tendencias a lo largo del tiempo - Suma el total de las visitas por año de todos los indicadores
plt.figure(figsize=(14, 7))
plt.plot(visitas_por_anio['Año'], visitas_por_anio['Dato_Num'], marker='o')
plt.title('Tendencias de visitantes a parques naturales por año')
plt.xlabel('Año')
plt.ylabel('Dato_Num')
plt.grid(True)
plt.savefig('tendencias_visitas_parques_hackaton.png')  # Guardar la imagen
plt.show()


# #Distribuciones
# #Histograma de la distribución de las ventas
# plt.figure(figsize=(10, 6))
# sns.histplot(df['Dato_Num'], bins=30, kde=True)
# plt.title('Distribución de las Ventas')
# plt.xlabel('Dato_Num')
# plt.ylabel('Departamento')
# plt.savefig('distribucion_visitas_hackaton.png')  # Guardar la imagen
# plt.show()


# #Visualizaciones interactivas
# #Gráfico de tendencias interactivo
# fig = px.line(ventas_por_fecha, x='Fecha', y='Venta', title='Tendencias de Ventas a lo Largo del Tiempo')
# fig.write_html('tendencias_ventas_interactivo.html')  # Guardar la visualización interactiva
# fig.show()

# #Agregar las imágenes al HTML
# html_con_imagenes = f"""
# <html>
# <head>
# <title>Tabla de Ventas</title>
# </head>
# <body>
# <h2>Resultados de Estadísticas Descriptivas</h2>
# {estadisticas_html}
# <br><br>
# <h2>Gráfico de Regresión de Ventas a lo Largo del Tiempo</h2>
# <img src="tendencias_ventas.png" alt="Gráfico de Regresión">
# <br><br>
# <h2>Histograma de la Distribución de las Ventas</h2>
# <img src="distribucion_ventas.png" alt="Histograma de Ventas">
# </body>
# </html>
# """
# #Guardar el HTML con imágenes
# with open('resumen_ventas.html', 'w') as f:
#     f.write(html_con_imagenes)




