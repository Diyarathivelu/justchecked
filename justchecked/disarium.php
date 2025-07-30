<style>
    .content-block{
        box-shadow:0px 0px 3px 3px whitesmoke;
        text-align: justify;
    }
    .content-block p,.btn,label,li{
        font-size:13px !important;
    
    }
   
</style>

<script>
   $(document).ready(function() {
    $("#armstrong").on('submit', function(e) { 
        e.preventDefault();

        let hasvalue = true;
        const num = $("#number").val().trim();

        if (num === '') {
            alert("Enter Number to check");
            hasvalue = false;
        }

        if (hasvalue) {
            $.ajax({
                url: "disariumdata.php",
                type: 'post',
                data: $(this).serialize(), 
                success: function(response) {
                    const result = response.trim();
                    if (result === "Disarium") {
                        $("#answer").text('It is Disarium Number').css('color','green');
                    } else if (result === "not Disarium") {
                        $("#answer").text('It is not Disarium Number').css('color','red');
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
        <h5>Disarium  Number</h5>
        <hr>
    </div>
    <div class="row content-inside  container-fluid">
        <div class="col-sm-4">
           <h6 >Definition:</h6>
            <p >A Disarium number is a number in which the sum of its digits powered with their respective positions is equal to the number itself.</p>
            <h6>Example:</h6>
            89
            <p> Break it down</p>
            <p>Raise each digit to the power of their respective position</p>
            <ul>
                <li>8<sup>1</sup>=8</li>
                <li>9<sup>2</sup>=81</li>
           </ul>
            <p>Sum = 8 + 81 = 89 → Yes, it's a Disarium number</p>
        </div>
         <div class="col-sm-4 d-flex-align-items-right">
            <h6>Program Logic:</h6>
            <p>
                  &lt;?php <br>
                   <p class="d-flex justify-content-center">
                        $number=89;<br>
                        $sum = 0; <br>
                        $num = $number; <br>

                        $number = strval($number); <br>
                        $len = strlen($number); <br>

                        for ($i = 0; $i < $len; $i++) { <br>
                            $digit = (int)$number[$i];  <br>
                            $sum += pow($digit, $i + 1);  <br>
                        } <br>

                        if ($sum == $num) { <br>
                            echo "Disarium"; <br>
                        } else { <br>
                            echo "Not Disarium"; <br>
                        } <br>
                    </p>
                ?&gt;
            </p>
            
        </div>
         <div class="col-sm-4 d-flex-align-items-left">
            <h6>Process:</h6>
            <label for="">Number to be checked</label>
            <form action="" method="post" id="armstrong">
            <div class="row py-2">
                <div class="col"><input type="text" class="form-control" id="number" name="number" placeholder="eg:6"  value=""></div>
                <div class="col" style=" display:flex;vertical-align:middle;"><button class="btn btn-primary"  type="submit" id="check">check</button></div>
            </div>
            </form>
            <h6>Output:</h6>
            <p id="answer"></p>
            
        </div>
    </div>
</div> 