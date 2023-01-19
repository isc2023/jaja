

const eliminar = (id) =>{
    Swal.fire({
    title: 'Estas seguro de eliminar el registro',
    text: "Ya no se podra recuperar el registro",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar'
    }).then((result) => {
        if (result.isConfirmed) {
            var url = "../modelo/ejecutarconsultas.php";
            var formdata = new FormData();
            formdata.append('eliminar');
            formdata.append('id', id);
            fetch(url, {
                method: 'post',
                body: formdata
            }).then(data => data.json())
            .then(data => {
                console.log('Success:', data)
                pintar_tabla_resultados(data);
                Swal.fire(
                'Eliminado', 
                'El registro se elimino correctamente.',
                'success'
                )
            })
            .catch(error => console.error('Error:', error));
           
        }
    })
}

const editar = (id) => {

    //alert(id);
    var url = "../modelo/ejecutarconsultas.php";
    var formData = new FormData();
    formData.append('editar');
    formData.append('id',id);
    fetch(url,{
        method:'post',
        body:formData
    })
    .then(data => data.json())
    .then(data => {
        console.log('success', data);
        for(let item of data){
            var id = item.id;
            var nom = item.nombre;
            var correo = item.correo;
            var tusu = item.tusu;
            
        }


        Swal.fire({
            title: 'Actualizar información',
            html: `
              <form id="update_form">
                <input type="text" value="update" name="tipo_operacion" hidden="true">
                <input type="number" value="${id}"   hidden="true" name="idu" class="form-control" placeholder="id de la persona">
                <hr>
                <input type="text" value="${nom}"   name="nombreu" class="form-control" placeholder="nombre">
                <hr>
                <input type="text" value="${ape}" name="apellidosu"  class="form-control" placeholder="apellidos">
                <hr>
                ${sex}
              </form>  
            
            `,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Aceptar'
            }).then((result) => {
            if (result.value) {
                const datos = document.querySelector("#update_form");
                const datos_actualizar = new FormData(datos);
                var url = "../modelo/ejecutarconsultas.php";
                fetch(url, {
                    method: 'post',
                    body: datos_actualizar
                })
                .then(data => data.json())
                .then(data =>{ 
                    console.log('Success:', data);
                    pintar_tabla_resultados(data);
                    Swal.fire(
                        'Exito',
                        'Se actualizo con exito',
                        'success'
                    )
                      
                })
                .catch(function(error){
                    console.error('Error:', error)
                }); 

            }
        })
             
    })
    .catch(function (error){
        console.error('error',error);
    }); 
}

