var tableinsumo;
function listar_insumo() {
    tableinsumo = $("#tabla_insumo").DataTable({
        "ordering": false,
        "bLengthChange": false,
        "searching": { "regex": false },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 20,
        "destroy": true,
        "async": false,
        "processing": true,
        "ajax": {
            "url": "../controlador/insumo/controlador_insumo_listar.php",
            type: 'POST'
        },
        "order": [[1, 'asc']],
        "columns": [
            { "defaultContent": "" },
            { "data": "insumo_nombre" },
            { "data": "insumo_stock" },
            { "data": "insumo_fregistro" },
            {
                "data": "insumo_estatus",
                render: function (data, type, row) {
                    if (data == 'ACTIVO') {
                        return "<span class='label label-success'>" + data + "</span>";
                    } else if(data == 'INACTIVO') {
                        return "<span class='label label-danger'>" + data + "</span>";
                    }else{
                        return "<span class='label label-balck' style='background-color:black;'>" + data + "</span>";
                    }
                    
                }
            },
            { "defaultContent": "<button style='font-size:13px;' type='button' class='editar btn btn-primary'><i class='fa fa-edit'></i></button>&nbsp;<button style='font-size:13px;' type='button' class='desactivar btn btn-danger'><i class='fa fa-trash'></i></button>&nbsp;<button style='font-size:13px;' type='button' class='activar btn btn-success'><i class='fa fa-check'></i></button>" }
        ],

        "language": idioma_espanol,
        select: true
    });
    document.getElementById("tabla_insumo_filter").style.display = "none";
    $('input.global_filter').on('keyup click', function () {
        filterGlobal();
    });
    $('input.column_filter').on('keyup click', function () {
        filterColumn($(this).parents('tr').attr('data-column'));
    });
    //codigo para el contador de numero de registros
    tableinsumo.on('draw.dt', function () {
        var PageInfo = $('#tabla_insumo').DataTable().page.info();
        tableinsumo.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
}

$('#tabla_insumo').on('click', '.activar', function () {
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

$('#tabla_insumo').on('click', '.desactivar', function () {
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

$('#tabla_insumo').on('click', '.editar', function () {
    var data = tableinsumo.row($(this).parents('tr')).data();
    if (tableinsumo.row(this).child.isShown()) {
        var data = tableinsumo.row(this).data();
    }
    $("#modal_editar").modal({ backdrop: 'static', keyboard: false })
    $("#modal_editar").modal('show');
    $("#txtidinsumo").val(data.insumo_id );
    $("#txt_insumo_editar").val(data.insumo_nombre);
    $("#txt_stock_editar").val(data.insumo_stock);
    $("#cbm_estatus_editar").val(data.insumo_estatus).trigger("change");
})

function filterGlobal() {
    $('#tabla_insumo').DataTable().search(
        $('#global_filter').val(),
    ).draw();
}

function Registrar_Insumo() {
    var nombre = $("#txt_insumo").val();
    var stock = $("#txt_stock").val();
    var status = $("#cbm_estatus").val();
    if (nombre.length == 0 || stock.length==0 ) {
        return Swal.fire("Mensaje De Advertencia", "Llene los campos vacios", "warning");
    }

    $.ajax({
        "url": "../controlador/insumo/controlador_insumo_registro.php",
        type: 'POST',
        data: {
            nombre: nombre,
            stock: stock,
            status:status
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
            id:id,
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

function soloNumeros(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8){
        return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
function soloLetras(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";
    tecla_especial = false
    for(var i in especiales){
        if(key == especiales[i]){
            tecla_especial = true;
            break;
        }
    }
    if(letras.indexOf(tecla)==-1 && !tecla_especial){
        return false;
    }
}