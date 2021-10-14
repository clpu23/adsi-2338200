Proceso ejercicio04_doble 
	//Hacer un algoritmo que imprima el nombre de un artículo, clave, precio original y su precio con
	//descuento. El descuento lo hace en base a la clave, si la clave es 1 el descuento es del 10% y si la
	//clave es 2 el descuento en del 20% (solo existen dos claves).
	
	//declaracion d variables 
	
	Definir articulo, clave como caracter;
	Definir precio, descuento Como Real;
	
	//salida
	Escribir "Escribe el nombre del articulo";
	leer articulo;
	Escribir "Escribe el precio del articulo";
	leer precio;        
	Escribir "Escribe la clave del producto";
	leer clave;
	
	//proseso
	si clave == "01"  o clave = "02" Entonces
		si clave = "01" Entonces
			descuento = precio * .10;
		SiNo
			descuento = precio * .20;
		FinSi
			Escribir "Producto: ",articulo;
			Escribir "Clave: ",clave;		
			Escribir "Precio original: ",precio;
			Escribir "Precio con descuento: ",precio - descuento;
		SiNo
			Escribir "una clave correcta";
		FinSi
		

FinProceso
