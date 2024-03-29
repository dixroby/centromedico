function VerificarCita() {
    var idmedico = $("#txtidmedico").val();
    var idespecialidad = $("#txtidespecialidad").val();
    var medico = $("#txtmedico").val();

    $.ajax({
        url: '../../controlador/medico/controlador_verificar_medico.php',
        type: 'POST',
        data: {
            idmedico: idmedico
        }
    }).done(function (resp) {
        if (resp == 0) {
            return Swal.fire("Mensaje De Advertencia", "Medico no disponible por el momento", "warning");
        } else {
            var data = JSON.parse(resp);
            alert(resp);
            $.ajax({
                url: '../../controlador/medico/controlador_crear_session.php',
                type: 'POST',
                data: {
                    idmed: data[0][0],
                    medico_nombre: data[0][1],
                    medico_apepat: data[0][2],
                    medico_apemat: data[0][3],
                    especialidad: data[0][13]
                }
            }).done(function (resp) {
                let timerInterval
                Swal.fire({
                    title: 'ASIGNANDOLE A UNA CITA ...',
                    html: 'Usted sera redireccionado en <b></b> milisegundos.',
                    timer: 2000,
                    timerProgressBar: true,
                    onBeforeOpen: () => {
                        Swal.showLoading()
                        timerInterval = setInterval(() => {
                            const content = Swal.getContent()
                            if (content) {
                                const b = content.querySelector('b')
                                if (b) {
                                    b.textContent = Swal.getTimerLeft()
                                }
                            }
                        }, 100)
                    },
                    onClose: () => {
                        clearInterval(timerInterval)
                    }
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        location.reload();
                    }
                })
            })

        }
    })
}
var tableinsumo;
function listar_Citas() {
    tableinsumo = $("#tabla_citas_frontend").DataTable({
        "ordering": false,
        "bLengthChange": false,
        "searching": { "regex": false },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 20,
        "destroy": true,
        "async": false,
        "processing": true,
        "ajax": {
            "url": "../../controlador/citasfrontend/controlador_citas_listar.php",
            type: 'POST'
        },
        "order": [[1, 'asc']],
        "columns": [
            { "defaultContent": "" },
            { "data": "cita_estatus" },
            { "data": "cita_fregistro" },
            { "data": "paciente_id" },
            { "data": "medico_id" },

            { "defaultContent": "<button style='font-size:13px;' type='button' class='editar btn btn-primary'><i class='fa fa-edit'></i></button>&nbsp;<button style='font-size:13px;' type='button' class='desactivar btn btn-danger'><i class='fa fa-trash'></i></button>&nbsp;<button style='font-size:13px;' type='button' class='activar btn btn-success'><i class='fa fa-check'></i></button>" }
        ],
        "language": idioma_espanol,
        //"language":  {
        //   "url": "json/Spanish.json"
        //  },
        select: true
    });
    document.getElementById("tabla_citas_frontend_filter").style.display = "none";
    $('input.global_filter').on('keyup click', function () {
        filterGlobal();
    });
    $('input.column_filter').on('keyup click', function () {
        filterColumn($(this).parents('tr').attr('data-column'));
    });
    //codigo para el contador de numero de registros
    tableinsumo.on('draw.dt', function () {
        var PageInfo = $('#tabla_citas_frontend').DataTable().page.info();
        tableinsumo.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            if (i + 1 + PageInfo.start=='1') {
                cell.innerHTML = "Tu Turno";
                //cell.innerHTML = i + 1 + PageInfo.start;
            }
           else if (i + 1 + PageInfo.start=='2') {
                cell.innerHTML = "Eres el siguiente";
                //
            }
            else{
                cell.innerHTML = i + 1 + PageInfo.start;
            }
            
        });
    });
}

$('#tabla_citas_frontend').on('click', '.activar', function () {
    var data = table.row($(this).parents('tr')).data();
    if (table.row(this).child.isShown()) {
        var data = table.row(this).data();
    }
    Swal.fire({
        title: 'Esta seguro de activar al usuario?',
        text: "Una vez hecho esto el usuario  tendra acceso al sistema",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si'
    }).then((result) => {
        if (result.value) {
            Modificar_Estatus(data.usu_id, 'ACTIVO');
        }
    })
})

$('#tabla_citas_frontend').on('click', '.desactivar', function () {
    var data = table.row($(this).parents('tr')).data();
    if (table.row(this).child.isShown()) {
        var data = table.row(this).data();
    }
    Swal.fire({
        title: 'Esta seguro de desactivar al usuario?',
        text: "Una vez hecho esto el usuario no tendra acceso al sistema",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si'
    }).then((result) => {
        if (result.value) {
            Modificar_Estatus(data.usu_id, 'INACTIVO');
        }
    })
})

$('#tabla_citas_frontend').on('click', '.editar', function () {
    var data = tableinsumo.row($(this).parents('tr')).data();
    if (tableinsumo.row(this).child.isShown()) {
        var data = tableinsumo.row(this).data();
    }
    $("#modal_editar").modal({ backdrop: 'static', keyboard: false })
    $("#modal_editar").modal('show');
    $("#txtidinsumo").val(data.insumo_id);
    $("#txt_insumo_editar").val(data.insumo_nombre);
    $("#txt_stock_editar").val(data.insumo_stock);
    $("#cbm_estatus_editar").val(data.insumo_estatus).trigger("change");
})

function filterGlobal() {
    $('#tabla_citas_frontend').DataTable().search(
        $('#global_filter').val(),
    ).draw();
}

function Registrar_Cita() {
    var medicoid = $("#txtidusuario").val();
    var txt_apellido = $("#txtapellido").val();
    var txt_dni = $("#cbm_dni").val();
    if (txt_apellido.length == 0 ) {
        $("#txtapellido").focus();
        return Swal.fire("Mensaje De Advertencia", "Ingrese Apellido Paterno", "warning");
    }

    $.ajax({
        "url": '../../controlador/medico/verificar_paciente.php',
        type: 'POST',
        data: {
            txt_apellido: txt_apellido,
            txt_dni: txt_dni
        }
    }).done(function (resp) {
        if (resp > 0) {
            Swal.fire("Mensaje De Error", "Lo sentimos, no se pudo completar el registro", "error");
            
        } else {

            $.ajax({
                "url": '../../controlador/medico/controlador_registrar_paciente.php',
                type: 'POST',
                data: {
                    medicoid:medicoid,
                    txt_apellido: txt_apellido,
                    txt_dni: txt_dni
                }
            }).done(function (resp) {
                if (resp > 0) {
                    if (resp == 1) {
                        
                        $("#modal_registro").modal('hide');
                        Swal.fire("Mensaje De Confirmacion", "Datos correctamente, Nuevo Insumo Registrado", "success")
                            .then((value) => {
                                LimpiarRegistro();
                                tableinsumo.ajax.reload();
                            });
                    } else {
                        return Swal.fire("Mensaje De Advertencia", "Lo sentimos, el insumo ya se encuentra en registrada en nuestra base de datos", "warning");
                    }
                } else {
                    Swal.fire("Mensaje De Error", "Lo sentimos, no se pudo completar el registro", "error");
                }
            })
        }
    })
}

function LimpiarRegistro() {
    $("#txt_insumo").val("");
    $("#txt_stock").val("");
}

function Modificar_Insumo() {
    var id = $("#txtidinsumo").val();
    var insumo = $("#txt_insumo_editar").val();
    var stock = $("#txt_stock_editar").val();
    var estatus = $("#cbm_estatus_editar").val();

    if (insumo.length == 0 || stock.length == 0) {
        return Swal.fire("Mensaje De Advertencia", "Llene los campos vacios", "warning");
    }

    $.ajax({
        "url": "../controlador/insumo/controlador_insumo_modificar.php",
        type: 'POST',
        data: {
            id: id,
            insumo: insumo,
            stock: stock,
            estatus: estatus
        }
    }).done(function (resp) {
        if (resp > 0) {
            $("#modal_editar").modal('hide');
            Swal.fire("Mensaje De Confirmacion", "Datos actualizados correctamente.", "success")
                .then((value) => {
                    listar_insumo();
                    tableinsumo.ajax.reload();
                });
        } else {
            Swal.fire("Mensaje De Error", "Lo sentimos, no se pudo completar la actualización", "error");
        }
    })
}

function soloNumeros(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla == 8) {
        return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron = /[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";
    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }
    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}
function cerrar_Session() {

    $.ajax({
        url: '../../controlador/usuario/controlador_cerrar_session.php',
        type: 'POST'

    }).done(function (resp) {

        

        Swal.fire({
            title: 'Cancelar cita?',
            text: "¡Se cancelara su cita en esta area!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Cancelar cita!'
          }).then((result) => {
            if (result.value) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Cita cancelado con exito',
                    showConfirmButton: false,
                    timer: 3500,

                  }),
                  window.location = 'index.php'
              
              
            }
          })

    })
}
function AbrirModalRegistro() {
    $("#modal_registro").modal('show');
}
function listar_combo_dni() {
    $.ajax({
        "url": "../../controlador/medico/controlador_combo_dni_listar.php",
        type: 'POST'
    }).done(function (resp) {
        var data = JSON.parse(resp);
        var cadena = "";
        if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
                cadena += "<option value='" + data[i][0] + "'>" + data[i][1] + "</option>";
            }
            $("#cbm_dni").html(cadena);
        } else {
            cadena += "<option value=''>NO SE ENCONTRARON REGISTROS</option>";
            $("#cbm_dni").html(cadena);
        }
    })
}