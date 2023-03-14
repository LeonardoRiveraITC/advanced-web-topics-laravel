$(document).ready(function(){
    $('#myTable').DataTable({
        ajax: '/dt/contacts',
        destroy: true,
        columns: [
            { data: 'id' },
            { data: 'fullname' },
            { data: 'email' },
            { data: 'message' },
        ],
        columnDefs: [ {
            targets: 3,
            render: function ( data, type, row ) {
                return data.substr( 0, 10 ) + '...';
            }
        } ]
    });
    $('#btnSend').click(function(event){
        event.preventDefault();
        var formData = {
            fullName: $("#fullName").val(),
            email: $("#email").val(),
            message: $("#message").val(),
        };
        $.ajax({
            url: '/submitContact',
            type: 'post',
            data: formData,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
            dataType: 'json',
            success: function (response) {
                showAlert(response.message, "success", 5000);
                $('#contactForm').trigger("reset");
            },
            error: function (error) {
                console.log(error);
                $.each( error.responseJSON, function( key, value ) {
                    console.log(value)
                    //alert( key + ": " + value );
                    showAlert(value, "danger", 5000);
                });
            }
        });
    })
});
function showAlert(message, type, closeDelay) {

    var $cont = $("#alerts-container");

    if ($cont.length == 0) {
        // alerts-container does not exist, create it
        $cont = $('<div id="alerts-container">')
            .css({
                 position: "fixed"
                ,width: "50%"
                ,left: "25%"
                ,top: "10%"
            })
            .appendTo($("body"));
    }

    // default to alert-info; other options include success, warning, danger
    type = type || "info";    

    // create the alert div
    var alert = $('<div>')
        .addClass("fade in show alert alert-" + type)
        .append(
            $('<button type="button" class="close" data-dismiss="alert">')
            .append("&times;")
        )
        .append(message);

    // add the alert div to top of alerts-container, use append() to add to bottom
    $cont.prepend(alert);

    // if closeDelay was passed - set a timeout to close the alert
    if (closeDelay)
        window.setTimeout(function() { alert.alert("close") }, closeDelay);    
}