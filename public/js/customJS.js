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
        url: '/getCustomers',
        success: function (data) {
            // alert(data);
            // $.each(JSON.parse(data), function (i, item) {
            //     var html =
            //         "<tr>" +
            //             "<td>"+ item.name + "</td>" +
            //             "<td>"+ item.email + "</td>" +
            //             "<td>"+ item.phone_no + "</td>" +
            //             "<td>"+ item.gender + "</td>" +
            //             "<td>"+ item.b_day + "</td>" +
            //             "<td>"+ item.vip + "</td>" +
            //         "</tr>";
            //     $('#customers-table tbody').append(html);
            //
            // } );
            $('#customers-table').DataTable({
                data: JSON.parse(data),
                responsive: true,
                columns: [
                    {data: "name"},
                    {data: "email"},
                    {data: "phone_no"},
                    {data: "gender"},
                    {data: "b_day"},
                    {data: "vip"},
                    {
                        "data": null,
                        "sortable": false,
                        "render": function (data, type, full, meta) {
                            return '<button id="edit-button" data-id="' + full.id + '" data-toggle="modal" data-target="#crm_edit_customer_modal" class="btn btn-primary"><i class="fa fa-cog" aria-hidden="true"></i></button>'
                        }
                    }
                ]
            });

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
            url: '/getCustomerInfo',
            data: {'customerID': customerID},
            success: function (data) {
                var resp = JSON.parse(data);
                $('#crm_edit_customer_modal').find('.modal-body').text(resp[0].id + resp[0].name);

            }

        });
    });
}





