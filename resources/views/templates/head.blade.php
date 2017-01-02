<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

{{--CSS START--}}
{{--Bootstrap Core CSS--}}
<link href="/../css/bootstrap.css" rel="stylesheet">

{{--Metis Menu CSS--}}
<link href="/../css/metisMenu.min.css" rel="stylesheet">

{{--SB Admin 2 CSS--}}
<link href="/../css/sb-admin-2.css" rel="stylesheet">

{{--Morris CSS--}}
<link href="/../css/morris.css" rel="stylesheet" type="text/css">

{{--Datatables CSS--}}
<link href="/../css/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/../css/datatables/dataTables.responsive.css" rel="stylesheet" type="text/css">

{{--FontAwesome--}}
<link href="/../css/font-awesome.min.css" rel="stylesheet" type="text/css">
{{--CSS END--}}


{{--Javascript START--}}
{{--JQuery 1.9.1--}}
<script type="text/javascript" src="/../js/jquery-1.9.1.js"></script>

{{--Bootstrap Core JS--}}
<script type="text/javascript" src="/../js/bootstrap.js"></script>

{{--Metis Menu--}}
<script type="text/javascript" src="/../js/metisMenu.js"></script>

{{--Raphael JS--}}
<script type="text/javascript" src="/../js/raphael.min.js"></script>

{{--Morris--}}
<script type="text/javascript" src="/../js/morris.min.js"></script>


{{--Datatables--}}
<script type="text/javascript" src="/../js/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/../js/datatables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="/../js/datatables/dataTables.responsive.js"></script>

{{--SB Admin 2 Theme's JS--}}
<script type="text/javascript" src="/../js/sb-admin-2.js"></script>

{{--My custom scripts--}}
<script type="text/javascript" src="/../js/customJS.js"></script>

{{--Javascript END--}}

<!-- Scripts -->
<script>
    window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
    ]); ?>
</script>