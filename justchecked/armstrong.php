<style>
    .content-block{
        box-shadow:0px 0px 3px 3px whitesmoke;
        text-align: justify;
    }
    .content-block p,.btn,label,li{
        font-size:13px !important;
    
    }
    input{
        font-size:12px !important;
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
                url: "armstrongdata.php",
                type: 'post',
                data: $(this).serialize(), 
                success: function(response) {
                    const result = response.trim();
                    if (result === "Armstrong") {
                        $("#answer").text('The Number is Armstrong').css('color','green');
                    } else if (result === "not Armstrong") {
                        $("#answer").text('The Number is not Armstrong').css('color','red');
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
        <h5>Armstrong Number</h5>
        <hr>
    </div>
    <div class="row content-inside  container-fluid">
        <div class="col-sm-4">
           <h6 >Definition:</h6>
            <p >An Armstrong number (also known as a Narcissistic number or Pluperfect digital invariant) is a number that is equal to the sum of its own digits each raised to the power of the number of digits.</p>
            <h6>Example:</h6>
            <p>153 has 3 digits.</p>
            <p>Raise each digit to the power of 3 (the number of digits):</p>
            <ul>
                <li>1<sup>3</sup>=1</li>
                <li>5<sup>3</sup>=125</li>
                <li>3<sup>3</sup>=27</li>
            </ul>
            <p>sum:1+125+27=153.Since,the sum equals the original number, 153 is an Armstrong number</p>
        </div>
         <div class="col-sm-4 d-flex-align-items-right">
            <h6>Program Logic:</h6>
            <p>
                  &lt;?php <br>
                   <p class="d-flex justify-content-center">
                        $n=153;<br>
                        $sum=0;<br>
                        $org=$n;<br>

                       while($n>0){  <br>
                                     $a=$n%10; <br>
                                     $sum=$sum+$a*$a*$a; <br>
                                     $n=$n/10; <br>

                        }  <br>
                        if($sum==$org){ <br>
                            echo "Armstrong Number" <br>
                        } <br>
                        else{ <br>
                            echo "Not an Armstrong Number" <br>
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
                <div class="col"><input type="text" class="form-control" id="number" name="number"  value="" placeholder="eg:11"></div>
                <div class="col" style=" display:flex;vertical-align:middle;"><button class="btn btn-primary"  type="submit" id="check">check</button></div>
            </div>
            </form>
            <h6>Output:</h6>
            <p id="answer"></p>
            
        </div>
    </div>
</div> 