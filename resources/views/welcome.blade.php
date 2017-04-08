<!DOCTYPE html>
<html>
    <head>
        <title>Salary Calculator</title>

        <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Salary Calculator</div>
            </div>
            <form method="POST" action="/about">

            <span class="col-md-12">Job Title: <input name="title" type="text"></span>
            <span class="col-md-12">Total Salary: <input name="salary" type="text"></span>
            <span class="col-md-12">State of Job: <input list="states"></span>
            <span class="col-md-12">Insurance Benefits: <input type="text"></span>
            <span class="col-md-12">401k Contribution (%): <input type="text"></span>
            <span class="col-md-12">Distance from Job: <input type="text"></span>
            <span class="col-md-12">Total Hours: <input type="text"></span>
            <span class="col-md-12">On call?: <input type="checkbox"></span>
            <span class="col-md-12">Work Nights?: <input type="checkbox"></span>
            <span class="col-md-12"><button type="submit">Calculate</button></span>
            </form>

           <?php $results = DB::select('SELECT * FROM calc'); 
            foreach( $results as $row) {
                echo "<p>" . $row->name . "&nbsp;" . $row->id . "</p><hr>";
                 }
           ?>
        </div>
    </body>
</html>


<datalist id="states">
  <option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</datalist>