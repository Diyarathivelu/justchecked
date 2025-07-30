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
    $("#fibnocci").on('submit', function(e) { 
        e.preventDefault();

        let hasvalue = true;
         const num = $("#number").val().trim();

        if (num === '') {
            alert("Enter Number ");
            hasvalue = false;
        }
        const num1 = $("#number1").val().trim();

        if (num1 === '') {
            alert("Enter Number 1");
            hasvalue = false;
        }
        const num2 = $("#number1").val().trim();

        if (num2 === '') {
            alert("Enter Number 2");
            hasvalue = false;
        }

        if (hasvalue) {
            $.ajax({
                url: "fibnoccidata.php",
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
        <h5>Fibnocci series</h5>
        <hr>
    </div>
    <div class="row content-inside  container-fluid">
        <div class="col-sm-4">
           <h6 >Definition:</h6>
            <p>The Fibonacci Series is a sequence of numbers where each number is the sum of the two preceding numbers.</p>
           <h6>Example:</h6>
           <p>0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ...</p>
            <p>Here’s how it's formed:</p>
            <ul>
                <li>Start with 0 and 1</li>
                <li>Next number = 0 + 1 = 1</li>
                <li>Next number = 1 + 1 = 2</li>
                <li>Next number = 1 + 2 = 3</li>
                <li>Next number = 2 + 3 = 5</li>
                <li>And so on...</li>
            </ul>

        </div>
         <div class="col-sm-4 d-flex-align-items-right">
            <h6>Program:</h6>
            <p >
                


    &lt;?php <br>
    <p class="d-flex justify-content-center">
        $n = 10; // number of terms <br>
    $a = 0; <br>
    $b = 1; <br>

    echo "Fibonacci Series: "; <br>

    for ($i = 0; $i &lt; $n; $i++) { <br>
        echo $a . " "; <br>
        $next = $a + $b; <br>
        $a = $b; <br>
        $b = $next; <br>
    } <br>
    </p>
    ?&gt;

  



  

            </p>
            
        </div>
         <div class="col-sm-4 d-flex-align-items-left">
            <h6>Process:</h6>
            <label for="">Number to generate Fibnocci series </label>
            <form action="" method="post" id="fibnocci">
                <div class="py-2 row">
                     <div class="col">
                    <input type="text" name="number" id="number" class="form-control" placeholder="Total Numbers to be generated">
                </div>
                </div>
            <div class="row py-2">
               
                <div class="col">
                    <input type="text" class="form-control" id="number1" name="number1"  value="" placeholder="number1"> 
                </div>
                <div class="col">
                    <input type="text" name="number2" value="" id="number2" placeholder="number2" class="form-control">
                </div>
                <div class="col" style=" display:flex;vertical-align:middle;"><button class="btn btn-primary"  type="submit" id="check">Generate</button></div>
            </div>
            </form>
            <h6>Output:</h6>
            <p id="answer"></p>
            
        </div>
    </div>
</div> 