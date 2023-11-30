API REGISTRAR CLIENTES
-----------------------
URL: http://localhost:60/web_electiva_ii_base/api/clientesCrear.php
JSON BODY REQUEST
{
  "ced": 123456,
  "nom": "Jestrens Beans",
  "dir": "calle 45 carrera 30",
  "tel": 234568,
  "wat": 565457
}
METHOD: POST
JSON RESPONSE
{
  "data": null,
  "error": "0",
  "msg": "Operación satisfactoria"
}

=======================
API CONSULTAR CLIENTES
-----------------------
OBTENER TODOS LOS REGISTROS
URL: http://localhost:60/web_electiva_ii_base/api/clientesGet.php
OBTENER 1 CLIENTE
URL: http://localhost:60/web_electiva_ii_base/api/clientesGet.php?id=1
JSON BODY RESPONSE
{
  "idc": "4",                     CODIGO DEL CLIENTE
  "cc": "677897",                 
  "name": "Rester Wesyus",        NOMBRE DEL CLIENTE
  "addr": "calle 45 carrera 30",  DIRECCION
  "phone": "234568",      
  "what": "565457",
  "datec": null                   FECHA DE CREACION DEL REGISTRO
}
METHOD: GET

=======================
API ACTUALIZAR CLIENTES
-----------------------
URL: http://localhost:60/web_electiva_ii_base/api/clientesUpdate.php
JSON BODY REQUEST
{
  "idc": 3,
  "ced": 88888,
  "nom": "Cliente Actual",
  "dir": "calle 86",
  "tel": 4567777,
  "wat": 4788888
}
METHOD: PUT
JSON RESPONSE
{
  "data": null,
  "error": "0",
  "msg": "Operación satisfactoria"
}


=======================
API ELIMINAR CLIENTES
-----------------------
URL: http://localhost:60/web_electiva_ii_base/api/clientesDelete.php
JSON BODY REQUEST
{
  "idc": 3,
}
METHOD: DELETE
JSON RESPONSE
{
  "data": null,
  "error": "0",
  "msg": "Operación satisfactoria"
}
