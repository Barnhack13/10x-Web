$(document).ready(function() {
    //lists-products
    $("#table_products").DataTable({
        "ajax":{
            "url":"./tools/list_products.php",
            "dataSrc":"",
            "mDataProp":""                
        },          
    });

    //lists-contacts
    $("#table_contacts").DataTable({
        "ajax":{
            "url":"./tools/list_contacts.php",
            "dataSrc":"",
            "mDataProp":""                
        },          
    });
});
