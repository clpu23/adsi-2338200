Proceso ejercicio06_simple 
	//En un supermercado se hace una promoción, mediante la cual el cliente obtiene un descuento
	//dependiendo de un número que se escoge al azar. Si el numero escogido es menor que 74 el
	//descuento es del 15% sobre el total de la compra, si es mayor o igual a 74 el descuento es del 20%.
	//Obtener cuánto dinero se le descuenta.
	
	//declaracion de variables 
	Definir num_azar, descuento, valorcompra, total_pagar como real;
	
	//salida 
	Escribir "Escribe el valor de la compra";
	leer valorcompra;
	
	num_azar = azar(100);
	
	Escribir "el numero al azar asignado es ", num_azar;
	
	descuento = valorcompra * 0.15;
	si num_azar > 74 Entonces
		descuento = valorcompra * 0.20;
	FinSi
	total_pagar = valorcompra - descuento; 
	Escribir  "su descuento es de ". descuento, "y su total a pagar es ", total_pagar;

	
FinProceso
