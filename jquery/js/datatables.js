$(document).ready(function () {
    $('#btnLoadData').click(function () { 
        console.log('load data...');

        $('#dataTable_people').DataTable({
            "ajax": "http://127.0.0.1:8080/",
            "columns":[
                {"data":"id"},
                {"data":"first_name"},
                {"data":"last_name"},
                {"data":"gender"},
                {"data":"ip_address"},
                {"data":"email"},
                {"data":"salary"}
            ],
            "footerCallback": function ( row, data, start, end, display ) {
                var api = this.api(), data;
     
                // Remove the formatting to get integer data for summation
                var intVal = function ( i ) {
                    return typeof i === 'string' ?
                        i.replace(/[\$,]/g, '')*1 :
                        typeof i === 'number' ?
                            i : 0;
                };
     
                // Total over all pages
                total = api
                    .column( 6 )
                    .data()
                    .reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0 );
     
                // Total over this page
                pageTotal = api
                    .column( 6, { page: 'current'} )
                    .data()
                    .reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0 );
     
                // Update footer
                $( api.column( 6 ).footer() ).html(
                    '$'+pageTotal +' ( $'+ total +' total)'
                );
            },
            "destroy": true,
        });
        
    });
});
