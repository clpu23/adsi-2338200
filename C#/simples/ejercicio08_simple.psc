Proceso ejercicio08_simple
	//Dada la duración en minutos de una llamada calcular el costo, considerando
	// Hasta tres minutos el costo es 600
	//Por encima de tres minutos es 600 más 150 por cada minuto adicional a los tres primeros.
	
	//Declaracion de variables 
	
	Definir tiempo_llmada, costo_minutos, costo_llamada, minutos_extra Como Real;
	
	// salida
	Escribir "cuanto duto la llamada";
	Leer tiempo_llmada;
	costo_minutos=200;
	costo_llamada=costo_minutos*tiempo_llmada;
	si (tiempo_llmada>3)Entonces
		minutos_extra=(tiempo_llmada-3)*150;
		costo_llamada=costo_llamada+minutos_extra;
		Escribir "el costo de los minutos extra fueron ", minutos_extra;
	FinSi
	Escribir "su llamada duro: ",tiempo_llmada, "minutos","|"," el costo de la llamada es: ",costo_llamada;
	
FinProceso
