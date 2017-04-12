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

<body>
    <div class="row">
            <div class="col-md-12">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="results">Results</a></li>
                    <li><a href="/about">About</a></li>
                </ul>
            </div>
        </div>
        <h1 class="text-center">Compare Results</h1>
    <table id="results" class="table table-bordered table-striped tablesorter">
                    <thead>
                    <tr>

                        <th>Name</th>
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
                    </tr>
                    </thead>
                    <tbody>

<?php $results = DB::select('SELECT * FROM calc'); 
            foreach( $results as $row) {
                echo '
                        <tr>
                        <th>'.$row->title.'</th>
                        <th>'.$row->salary.'</th>
                        <th>'.$row->state.'</th>
                        <th>'.$row->salary * .28 .'</th>
                        <th>'.$row->salary * .05 .'</th>
                        <th>'.$row->salary .'</th>
                        <th>'.$row->insurance.'</th>
                        <th>'.$row->retirement * $row->salary / 100 .'</th>
                        <th>'.$row->distance.'</th>
                        <th>'.$row->hours.'</th>
                        <th>'.$row->oncall.'</th>
                        <th>'.$row->night.'</th>
                        </tr>';  

                 }
           ?>

</tbody>          
</table>

</body>