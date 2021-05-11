$(document).ready(function () {
    $('#btnLoadData').click(function () { 
        console.log('load data...');

        $('#dataTable_people').DataTable({
            "ajax": "http://192.168.100.161:8080/",
            "columns":[
                {"data":"id"},
                {"data":"first_name"},
                {"data":"last_name"},
                {"data":"gender"},
                {"data":"ip_address"},
                {"data":"email"}
            ],
            "destroy": true,
        });
        
    });
});