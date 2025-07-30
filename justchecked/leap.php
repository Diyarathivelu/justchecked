<style>
    .content-block{
        box-shadow:0px 0px 3px 3px whitesmoke;
        text-align: justify;
    }
    .content-block p,.btn,label,li{
        font-size:13px !important;
    
    }
    table{
        font-size:12px;
    }
</style>

<script>
   $(document).ready(function() {
    $("#leap").on('submit', function(e) { 
        e.preventDefault();

        let hasvalue = true;
        const num = $("#number").val().trim();

        if (num === '') {
            alert("Enter Year to check");
            hasvalue = false;
        }

        if (hasvalue) {
            $.ajax({
                url: "leapdata.php",
                type: 'post',
                data: $(this).serialize(), 
                success: function(response) {
                    const result = response.trim();
                    if (result === "Leap year") {
                        $("#answer").text(' Leap year').css('color','green');
                    } else if (result === "Non-Leap year") {
                        $("#answer").text(' Non-Leap year').css('color','red');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error: ' + error);
                }
            });
        }
    });
});

</script>

<div class="content-block container mt-3 py-3 mb-5">
    <div class="title-header">
        <h5>Leap/Non-Leap year</h5>
        <hr>
    </div>
    <div class="row content-inside  container-fluid">
        <div class="col-sm-4">
           <h6 >Definition:</h6>
            <p >A leap year is a year that has 366 days instead of the usual 365 days.A year is a leap year if:It is divisible by 4 and not divisbile by 100 unless divisible by 400</p>
            <h6>Example:</h6>
             <table class="table table-bordered">
                <tr>
                    <th>Year</th>
                    <th>Divisibility</th>
                    <th> Leap/Non-Leap year</th>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>Divisible by 4 and not by 100</td>
                    <td>Leap year</td>
                </tr>
                <tr>
                    <td>1900</td>
                    <td>Divisible by 100 and not by 4</td>
                    <td> Non-Leap year</td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>Not divisible by 4 </td>
                    <td> Non-Leap year</td>
                </tr>
             </table>
        </div>
         <div class="col-sm-4 d-flex-align-items-right">
            <h6>Program Logic:</h6>
            <p>
                  &lt;?php <br>
                   <p class="d-flex justify-content-center">
                        $n=2023;<br>
                        if($n%4==0 && $n%100!=0){ <br>
                            echo "Leap Year"; <br>
                        }else{ <br>
                            echo "Non-Leap year" <br>
                        }
                    </p>
                ?&gt;
            </p>
            
        </div>
         <div class="col-sm-4 d-flex-align-items-left">
            <h6>Process:</h6>
            <label for="">Number to be checked</label>
            <form action="" method="post" id="leap">
            <div class="row py-2">
                <div class="col"><input type="text" class="form-control" id="number" name="number" placeholder="eg: 2025"  value=""></div>
                <div class="col" style=" display:flex;vertical-align:middle;"><button class="btn btn-primary"  type="submit" id="check">check</button></div>
            </div>
            </form>
            <h6>Output:</h6>
            <p id="answer"></p>
            
        </div>
    </div>
</div> 