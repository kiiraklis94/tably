/**
 * Created by kiiraklis94 on 15/12/2016.
 */


var customerID;

function getCustomers() {
    // $('#customers-table tbody').empty();
    $('#customers-table').DataTable().destroy();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: 'crm/getCustomers',
        success: function (data) {
            $('#customers-table').DataTable({
                data: JSON.parse(data),
                responsive: true,
                columns: [
                    {data: "name", "width": "25%"},
                    {data: "email", "width": "25%"},
                    {data: "phone_no", "width": "10%"},
                    {data: "gender", "width": "10%"},
                    {data: "b_day", "width": "15%"},
                    {data: "vip", "width": "10%"},
                    {
                        "data": null,
                        "sortable": false,
                        "width": "5%",
                        "render": function (data, type, full, meta) {
                            return '<button id="edit-button" data-id="' + full.id + '" data-toggle="modal" data-target="#crm_edit_customer_modal" class="btn btn-primary"><i class="fa fa-cog" aria-hidden="true"></i></button>'
                        }
                    }
                ]
            });

            var table = $('#customers-table').DataTable();

            $('#container').css( 'display', 'block' );
            table.columns.adjust().draw();

        }

    });

    $('#crm_edit_customer_modal').on('show.bs.modal', function (e) {

        customerID = $(e.relatedTarget).attr('data-id');
        // $(this).find('.modal-body').text(customerID);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: 'crm/getCustomerInfo',
            data: {'customerID': customerID},
            success: function (data) {
                var resp = JSON.parse(data);
                $('#crm_edit_customer_modal').find('.modal-body').text(resp[0].id + resp[0].name);

            }

        });
    });
}





