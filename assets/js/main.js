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

function initializeDataTable(api, columns) {

    if ($.fn.DataTable.isDataTable('#dataTable')) {
        $('#dataTable').DataTable().destroy();
    }

    new DataTable('#dataTable', {
        ajax: api,
        processing: true,
        serverSide: true,
        dom: '<"top"Bfrtip<"clear">',
        columns: columns,
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
                    columns: ":not(:last-child)"
                },
                customize: function (win) {
                    // Add logo and institution information
                    var logoAndInfo = '<div class="row">' +
                        '<div class="col-md-8 col-xl-7 text-center text-primary mx-auto">' +
                        '<img src="assets/img/print.png" width="100em">' +
                        '<h4 class="mt-1"><strong>WEST PRIME HORIZON INSTITUTE, Inc.</strong></h4>' +
                        '<p class="w-lg-50">V. Sagun cor. M. Roxas St. San Francisco Dist. Pagadian City<br>' +
                        'Call No. : <strong>0920-798-3228(</strong>Smart)/<strong>0977-804-7489</strong>(Globe)</p>' +
                        '</div>' +
                        '</div>';
                    $(win.document.body).prepend(logoAndInfo);
                    var table = $(win.document.body).find('table');
                    table.prepend('<thead><tr><th colspan="15" style="text-align: center; font-size: 10px;"> Class Schedule Plotting System </th></tr><tr><th colspan="15" style="text-align: right;" id="dateTimeHeader"> Date: ' + new Date().toLocaleString() + '</th></tr></thead>');
                    // Style adjustments
                    $(win.document.body)
                        .find("table")
                        .addClass("display")
                        .css("font-size", "9px");
                    $(win.document.body)
                        .find("tr:nth-child(odd) td")
                        .each(function (index) {
                            $(this).css("background-color", "#D0D0D0");
                        });
                    $(win.document.body).find("h1").css({
                        "text-align": "center",
                        "margin-top": "10px",
                        "display": "none"
                    });
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

function clearForm(form) {
    $(form).find('input, textarea, select').val('');
}

function submitForm(formId, api, columns) {
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
                showSweetAlert(result.status.toUpperCase(), result.message, result.status, 2000);
                clearForm(form);
                initializeDataTable(api, columns);
            },
            error: function(data) {
                var result = JSON.parse(data);
                showSweetAlert(result.status.toUpperCase(), result.message, result.status, 2000);
                clearForm(form);
            }
        });
    });
}

function submitLoginForm(formId) {
    $(formId).submit(function(e) {
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
                clearForm(form);
                if (result.status == 'success') {
                    setTimeout(function() {
                        window.location.href = 'dashboard.php';
                    }, 500);
                }
            },
            error: function(data) {
                var result = JSON.parse(data);
                showSweetAlert(result.status.toUpperCase(), result.message, result.status, 2000);
                clearForm(form);
            }
        });
    });
}

