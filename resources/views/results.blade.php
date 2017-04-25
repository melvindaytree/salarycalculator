

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script type="text/javascript" src="{{ url('/js/tablesorter-master/jquery-latest.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/tablesorter-master/jquery.tablesorter.js') }}"></script>
    <script type="text/javascript">
    
            $(document).ready(function() 
            { 
                $("#results").tablesorter(); 
            } 
        ); 
    </script>

</head>
@extends('layouts.app')


        <h1 class="text-center font">Compare Results</h1>
    <table id="results" class="table table-bordered table-striped tablesorter">
                    <thead>
                    <tr>

                        <th>Title</th>
                        <th>Salary</th>
                        <th>State</th>
                        <th>FED Taxes</th>
                        <th>State Taxes</th>
                        <th>Income</th>
                        <th>Insurance</th>
                        <th>401k Contribution</th>
                        <th>Distance(m)</th>
                        <th>Hours</th>
                        <th>On Call</th>
                        <th>Night</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

<?php 

$id = Auth::user()->id;
$results = DB::select('SELECT * FROM calcd where user = '.$id.''); 
            foreach( $results as $row) {

                $fedTaxes = $row->salary * .28;
                $stateTaxes = $row->salary * .05;
                $afterTaxes = $row->salary - ($row->salary * .28) - ($row->salary * .05);
                $retirement = $row->retirement / 100 * $row->salary ;
                $oncall = $row->oncall;
                $night = $row->night;
                if ( $oncall != "on" ) {
                    $oncall = "off";
                }
                if ( $night != "on" ) {
                    $night = "off";
                }

                echo '
                        <tr>
                        <th>'.$row->title.'</th>
                        <th>'.$row->salary.'</th>
                        <th>'.$row->state.'</th>
                        <th>'.$fedTaxes.'</th>
                        <th>'.$stateTaxes.'</th>
                        <th>'.$afterTaxes.'</th>
                        <th>'.$row->insurance.'</th>
                        <th>'.$retirement.'</th>
                        <th>'.$row->distance.'</th>
                        <th>'.$row->hours.'</th>
                        <th>'.$oncall.'</th>
                        <th>'.$night.'</th>
                        <th class="text-center"><a href="/delete/'.$row->id.'">x</a></th>
                        </tr>';  
                 }
           ?>

</tbody>          
</table>

</body>