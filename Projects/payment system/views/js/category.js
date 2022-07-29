let table;

function init(){
    showFrom(false);
    list();
};

function clean(){
    $("#name").val("");
    $("#description").val("");
    $("#idCategory").val("");
}

function showFrom(x) {
    clean();

    if (x) {
        $("#listCategories").hide();
        $("#categoriesForm").show();
        $("#btnSave").prop("disabled", false);
        $("#btnAdd").hide();

    } else {
        $("#categoriesForm").hide();
        $("#listCategories").show();
        $("#btnSave").prop("disabled", true);
        $("#btnAdd").show();
    }
}

function cancelForm(){
    clean();
    showFrom(false);
}

function list(){
    $table = $('tableList').dataTable(
        {

        "aProcessing":true,
        "aServerSide":true,
        dom: "Bfrtip",

        buttons: {
            'copyHtml5': any,
            'excelHtml5': any,
            'csvHtml5': any,
            'pdf': any
        },

        "ajax": {
            url: '../../ajax/categories.php',
            type: 'get',
            dataType: 'json',
            error: function(e){
                console.log(e.ResponseText);
            }
        },

        'bDestroy': true,
        'idDesplayLenngth':5,
        'order':[{0 : any, "desc": any}]

    }).dataTable();
}

init();

