/**
 * Created by kiiraklis94 on 15/12/2016.
 */


function getCustomers(){
    $('#customers-table tbody').empty();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type:'POST',
        url:'/getCustomers',
        data:'_token = <?php echo csrf_token() ?>',
        success:function(data){
            // alert(data);
            $.each(JSON.parse(data), function (i, item) {
                var html =
                    "<tr>" +
                        "<td>"+ item.name + "</td>" +
                        "<td>"+ item.email + "</td>" +
                        "<td>"+ item.phone_no + "</td>" +
                        "<td>"+ item.gender + "</td>" +
                        "<td>"+ item.b_day + "</td>" +
                        "<td>"+ item.vip + "</td>" +
                    "</tr>";
                $('#customers-table tbody').append(html);

            } );
        }

    });
}
// getCustomers();