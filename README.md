# Pruebas-unitarias
Ejercicio relacionado a pruebas unitarias solicitadas backend.

# Descripción
# app/Order.php
Se crea una clase llamada ORDER dentro de la cual se tienen 4 funciones:

    contiene - Verifica si la orden contiene cierto item
    quitaUno - Elimina un item de la orden
    comienzaCon - Busca y regresa items que comiencen con la letra proporcionada, se puede tomar como un filtro
    agregaUno - Agrega un item a la orden

# TEST
# tests/BasicTest.php
Se crea una clase llamada BasicTest la cual contine 4 funciones para realizar pruebas:

    testOrdenContiene - Contiene 2 pruebas assertTrue() y assertFalse() mediante las cuales se puede verificar si un item existe en la orden, estos campos regresan TRUE o FALSE.
    
    testQuitaUnoDeCarrito - Contiene 2 pruebas assertEquals() y assertNull(), mediante el primer metodo se elimina de la orden el item que coincida con el nombre proporcinado, el segundo se asegura que para este caso, la orden haya quedado vacia ya que solo se instancio un item.
    
    testIniciaConLaLetra - Se pasa una letra como filtro de la orden, contiene 3 pruebas assertCount(), assertContains() y assertEmpty(), el primero se asegura que la respuesta contenga n cantidad de items, la segunda verifica que la orden contenga en sus resultados cierto item, la última prueba consiste en verificar que no existan datos con la letra proporcionada.
    
    testAgregaUnoACarrito - Agrega un item proporcionado a la orden, contiene la prueba assertGreaterThan() la cual validara si el item es agregado de forma correcta a la orden, regresa TRUE o FALSE y en este caso no se inicializa ningun item en el la orden.

# Uso
Se debe tener instalado un servidor de Apache y PHP.
Se debe tener instalado COMPOSER.

Para ejecutar las pruebas se debe ejecutar el comando

#php artisan test

![image](https://github.com/user-attachments/assets/3c98bd8b-83f0-4408-8c4d-22525e106c90)






    



    
