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
                url: "factorialdata.php",
                type: 'post',
                data: $(this).serialize(), 
                success: function(response) {
                    const result = response.trim();
                    $("#answer").text(result).css('color','green');
                   
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
        <h5>Factorial of Number</h5>
        <hr>
    </div>
    <div class="row content-inside  container-fluid">
        <div class="col-sm-4">
           <h6 >Definition:</h6>
            <p>The factorial of a non-negative integer n, written as n!, is the product of all positive integers less than or equal to n.</p>
            <p> Mathemtical Formula : n! = n × (n − 1) × (n − 2) × ... × 3 × 2 × 1</p>
           <h6>Example:</h6>
           
            <ul>
                <li>5! = 5 × 4 × 3 × 2 × 1 = 120</li>
                <li>4! = 4 × 3 × 2 × 1 = 24</li>
                <li>3! = 3 × 2 × 1 = 6</li>
                <li> 1! = 1</li>
                <li>0! = 1</li>
           </ul>
        </div>
         <div class="col-sm-4 d-flex-align-items-right">
            <h6>Program Logic:</h6>
            <p>
                  &lt;?php <br>
                   <p class="d-flex justify-content-center">
                        function factorial($n) { <br>
                            if ($n == 0 || $n == 1) { <br>
                                return 1; <br>
                            } <br>
                            return $n * factorial($n - 1); <br>
                         } <br>

                        $number = 5; <br>
                        echo "Factorial of $number is: " . factorial($number);
                    </p>
                ?&gt;
            </p>
            
        </div>
         <div class="col-sm-4 d-flex-align-items-left">
            <h6>Process:</h6>
            <label for="">Number to find Factorial</label>
            <form action="" method="post" id="armstrong">
            <div class="row py-2">
                <div class="col"><input type="text" class="form-control" id="number" name="number" placeholder="eg:5"  value=""></div>
                <div class="col" style=" display:flex;vertical-align:middle;"><button class="btn btn-primary"  type="submit" id="check">Find</button></div>
            </div>
            </form>
            <h6>Output:</h6>
            <p id="answer"></p>
            
        </div>
    </div>
</div> 