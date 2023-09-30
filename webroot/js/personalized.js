$( document ).ready(function() {

    console.log( "Ready!" );

    $.fn.select2.defaults.set('language', 'es');

    $('.select2').select2({
        language: "es",
    });

    $(".select2").change(function() {
        $(this).parsley().validate();
    });


    new DataTable('#dataTable', {
    language: {
            url: "js/i18d/Spanish.json"
    },
    responsive: {
            details: {
                display: DataTable.Responsive.display.modal({
                    header: function (row) {
                        var data = row.data();
                        return 'Details for ' + data[0] + ' ' + data[1];
                    }
                }),
                renderer: DataTable.Responsive.renderer.tableAll()
            }
        }
    });


});