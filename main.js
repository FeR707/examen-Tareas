(function(){
	var thead = document.getElementById("tabla-tareas"),
		tareaInput = document.getElementById("tareaInput"),
        alumnoText = document.getElementById("alumnoText"),
		btnNuevaTarea = document.getElementById("btn-agregar");

	var agregarTarea = function(){
		var tarea = tareaInput.value;
        var alumno = alumnoText.value,
        	tr = document.createElement("tr"),
			tdTarea = document.createElement("td"),
			tdAlumno = document.createElement("td"),
			completado = document.createElement("button"),
			tdEntregar = document.createElement("td"),
			entregar = document.createElement("button"),
			contenido = document.createTextNode("NO"),
			contenido2 = document.createTextNode("ENTREGAR");


		tdTarea.innerHTML = tarea;
		tdAlumno.innerHTML = alumno;
		completado.appendChild(contenido);
		entregar.appendChild(contenido2);

		completado.setAttribute("class", "completado");
		completado.setAttribute("id", "completo");

		entregar.setAttribute("class", "entrega");
		entregar.setAttribute("id", "entregar");
		tdEntregar.appendChild(entregar);

		tr.appendChild(tdTarea);
		tr.appendChild(tdAlumno);
		tr.appendChild(completado);
		tr.appendChild(tdEntregar);

		thead.appendChild(tr);


		tareaInput.value = "";
        alumnoText.value = "";



        entregar.addEventListener("click", function(){

        if (this.innerHTML == 'ENTREGAR'){
		  	Swal.fire({
			  position: 'top-end',
			  icon: 'success',
			  title: 'Trabajo Enviado',
			  showConfirmButton: false,
			  timer: 1500
			});
			this.innerHTML = "DESHACER ENTREGA";
		  	completado.style.backgroundColor = "#109c10";
		  	completado.innerHTML = "SI";
		  }
		else {
			Swal.fire({
			  title: 'Quieres deshacer la entrega?',
			  text: "Podras volver a entregarlo mas tarde!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Si, deshacer entrega'
			}).then((result) => {
			  if (result.isConfirmed) {
			    Swal.fire(
			      'Desecho!',
			      'Se a desecho la entrega.',
			      'success'
			    )

			    this.innerHTML = "ENTREGAR";
		  		completado.style.backgroundColor = "red";
		  		completado.innerHTML = "NO";
			  }
			});

		  }

        });

	};

	btnNuevaTarea.addEventListener("click", agregarTarea);

}());