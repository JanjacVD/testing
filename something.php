<script>
var mysql = require('mysql');
var connection = mysql.createConnection({
  host     : 'LOCALHOST',
  user     : 'root',
  password : '',
  database : 'data'
});

con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT time from tbl_reservations WHERE date='var selectDate'", function (err,result,field) {
    if (err) throw err;
    console.log(result);
  });
});connection.end();
</script>



<div class="form-field col-lg-6 ">
        <div class='input-group date' id='datetimepicker1'>
        <span class="input-group-addon">
                    <input type='text'class="form-control input-text js-input" id="date" name="date" onchange="return getDate()"/>
                    </span>
                </div>
         <label class="label" for="date"></label>
      </div>
      <div class="form-field col-lg-6">
      <select id="time" style="color:rgb(255,255,255,0.8)" class="input-text js-input" required>
      <option style="display:none">Time</option>
      <option id="16" value="16">16:00</option>
      <option id="17" value="17">17:00</option>
      <option id="18" value="18">18:00</option>
      <option id="19" value="19">19:00</option>
      <option id="20" value="20">20:00</option>
      <option id="21" value="21">21:00</option>
      </select>



<script>
    function getDate(){
        var selectDate = document.getElementById('date');
        var userInput = selectDate.options(selectDate.selectedIndex).value
    }
</script>