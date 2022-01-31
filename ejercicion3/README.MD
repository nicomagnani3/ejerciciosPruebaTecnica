 
 1) 
 Correr script schema.sql que contiene los script necesarios para poder crear la base de datos
 ejercicio3 con sus tablas correspondientes

 2) 
 modificar el .env
 db_user= usuario de mi base de datos
 db_password= password de mi mysql
 DATABASE_URL="mysql://db_user:db_password@localhost/ejercicio3"
 DATABASE_URL="mysql://root:nicolas123.@localhost/ejercicio3"

3) 
 Para levanar el proyecto es necesario tener composer
 en la raiz del proyecto pararse en ejercicion3
 cd ejercicion3
 levantar el proyecto php -S 127.0.0.1:8000 -t public
 accediendo a http://localhost:8000/api
 vamos a ver el swagger de api platform con los endpoints disponibles 

A la hora de crear las entidades use 
bin/console make:entity
Donde asignaba el nombre de la entidad y los campos que tenia cada una
y sus respectivas relaciones
realize la migracion:
 php bin/console make:migration
php bin/console doctrine:migrations:migrate
Bici la cree como clase abstracta ya que no se va a instanciar
si sus tipos (electrica,normal,antigua)


 Metodos Implementados: 

 Obtener el listado de bicicletas
Endpoint:api/bicicletas/get_listado_bicis
Controller BiciController
Metodo get_list_bicicleta
Descripcion: Con el orm de symfony de cada tipo de bici obtengo las disponibles
envio al servicio las disponibles para que arme la response de los datos


- Alquilar una determinada bicicleta durante un determinado periodo de tiempo
Endpoint: /api/alquilars
Parametros JSON
{
  "desde": "2022-01-30T22:25:48.432Z",
  "hasta": "2022-01-30T22:25:48.432Z",
  "esBase": true,
  "bicicleta": {
    "type":"bici_antigua"  
  },
  "cliente":1
}

esBase: se utiliza para determinar si es base o premium
type: determina el tipo de bici, parametros validos:bici_antigua,bici_normal,bici_electrica
cliente: id del cliente que corresponde el alquiler

Controller AlquilarController
Metodo alquilar_bicicleta
Descripcion: este controller consulta el tipo de bici que se paso en type (esto se podria mejorar ya
que se pregunta por el tipo lo ideal seria utilizar el serializer)
En la consulta busca segun el tipo si hay disponible, si no hay disponibles retorna con un mensaje
Si hay disponibles delega al servicio para que cree la instancia del alquiler y almacene los datos
este valida con Assert de api platform, saca como disponible esa bicicleta 
Calcula segun la instancia del tipo de bicicleta el precio del alquiler, los precios se calculan en la
entidad bici y en la electrica ya que normal y antigua lo resuelven de la misma manera, solo cambia el pack dias
de cada clase.


- Devolver una bicicleta alquilada y calcular los posibles sobrecostes si el alquiler
 excede el periodo de tiempo que establecía el alquiler

Endpoint: /api/alquilars/{id}
Method:PUT
Parametros JSON
{
  "fecha_devolucion": "2022-02-12"
}
fecha en que se devolvio la bicicleta
Controller AlquilarController
Metodo devolver_bicicleta
Descripcion: este controller se le pasa el id del alquiler por parametro y la fecha de devolucion
en el body 
calcula la cantidad de dias adicionales restando las fechas desde hasta
segun el tipo de bicic calcula el monto extra que se tiene que cobrar


 



