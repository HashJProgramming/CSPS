function showSweetAlert(title, text, icon, timer) {
    let timerInterval;
    Swal.fire({
        title: title,
        text: text,
        icon: icon,
        timer: timer,
        timerProgressBar: true,
        willClose: () => {
            clearInterval(timerInterval);
        },
    });
}

function initializeDataTable(api, data, processing, serverSide, dom, id) {

    var parsedData = JSON.parse(data); 

    if ($.fn.DataTable.isDataTable(id)) {
        $(id).DataTable().destroy();
    }

    new DataTable(id, {
        ajax: api,
        data: parsedData.data,
        processing: processing,
        serverSide: serverSide,
        dom: dom,
        columns: [
            { title: "ID", data: 0 },
            { title: "First Name", data: 1 },
        ],
        buttons: [
            {
                extend: "excel",
                title: "Class Schedule Plotting System",
                className: "btn btn-primary",
                text: '<i class="fa fa-file-excel"></i> EXCEL',
            },
            {
                extend: "pdf",
                title: "Class Schedule Plotting System",
                className: "btn btn-primary",
                text: '<i class="fa fa-file-pdf"></i> PDF',
            },
            {
                extend: "print",
                className: "btn btn-primary",
                text: '<i class="fa fa-print"></i> Print',
                title: "Class Schedule Plotting System",
                autoPrint: true,
                exportOptions: {
                    columns: ":visible",
                },
                customize: function (win) {
                    $(win.document.body)
                        .find("table")
                        .addClass("display")
                        .css("font-size", "9px");
                    $(win.document.body)
                        .find("tr:nth-child(odd) td")
                        .each(function (index) {
                            $(this).css("background-color", "#D0D0D0");
                        });
                    $(win.document.body).find("h1").css("text-align", "center");
                },
            },
        ],
        responsive: {
            details: {
                display: DataTable.Responsive.display.modal({
                    header: function (row) {
                        var data = row.data();
                        return "Details for " + data[1];
                    },
                }),
                renderer: DataTable.Responsive.renderer.tableAll({
                    tableClass: "table",
                }),
            },
        },
    });
}

function clearForm(id) {
    const form = document.getElementById(id);
    const inputs = form.getElementsByTagName('input');
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].value = '';
    }
}

function submitForm(formId) {
    $(formId).submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');
        $.ajax({
            type: 'POST',
            url: url,
            data: form.serialize(),
            success: function(data) {
                var result = JSON.parse(data);
                showSweetAlert("Success!", result.message, result.status, 2000);
                clearForm(formId);
            },
            error: function(data) {
                var result = JSON.parse(data);
                showSweetAlert("Error!", result.message, result.status, 2000);
                clearForm(formId);
            }
        });
    });
}

function submitLoginForm(formId) {
    $("#"+formId).submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var url = 'assets/php/functions/auth/sign-in.php';
        $.ajax({
            type: 'POST',
            url: url,
            data: form.serialize(),
            success: function(data) {
                var result = JSON.parse(data);
                showSweetAlert(result.status.toUpperCase(), result.message, result.status, 500);
                clearForm(formId);
                if (result.status == 'success') {
                    setTimeout(function() {
                        window.location.href = 'dashboard.php';
                    }, 500);
                }
            },
            error: function(data) {
                var result = JSON.parse(data);
                showSweetAlert(result.status.toUpperCase(), result.message, result.status, 2000);
                clearForm(formId);
            }
        });
    });
}



