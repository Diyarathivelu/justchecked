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
    $("#composite").on('submit', function(e) { 
        e.preventDefault();

        let hasvalue = true;
        const num = $("#number").val().trim();

        if (num === '') {
            alert("Enter Number to check");
            hasvalue = false;
        }

        if (hasvalue) {
            $.ajax({
                url: "compositedata.php",
                type: 'post',
                data: $(this).serialize(), 
                success: function(response) {
                    const result = response.trim();
                    if (result === "Composite number") {
                        $("#answer").text('The Number is Composite').css('color','green');
                    } else if (result === "Not Composite number") {
                        $("#answer").text('The Number is not Composite').css('color','red');
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
        <h5>Composite Number</h5>
        <hr>
    </div>
    <div class="row content-inside  container-fluid">
        <div class="col-sm-4">
           <h6 >Definition:</h6>
            <p >A composite number is a positive integer that has more than two factors.In other words, a composite number can be divided evenly (with no remainder) by:
                    <ul>
                        <li>1</li>
                        <li>itself</li>
                        <li>At least one another</li>
                    </ul>
            </p>
            <h6>Example:</h6>
            <p>Composite Number</p>
            <ul>
                <li>4 → factors: 1, 2, 4 → composite</li>
                <li>6 → factors: 1, 2, 3, 6 → composite</li>
                <li>9 → factors: 1, 3, 9 → composite</li>
                <li>12 → factors: 1, 2, 3, 4, 6, 12 → composite</li>
            </ul>
            <p>Non-Composite Number</p>
            <ul>
                <li>Prime numbers(2,3,5,7...) has two factors such as 1 and itself.</li>
                <li>1 is not composite number because it is divisible by itself</li>
                <li>0 is not a composite Number because composite number should be positive and greater than 1.</li>
            </ul>
        </div>
         <div class="col-sm-4 d-flex-align-items-right">
            <h6>Program Logic:</h6>
            <p>
                  &lt;?php <br>
                       <p class="d-flex justify-content-center">
                         if($number==1 || $number==0){  <br>
                                    echo "Not Composite Number"; <br>
                        }else if($number>1){ <br>
                                    $count=0; <br>
                                    for($i=1;$number>$i;$i++){ <br>
                                            if($number%$i==0){  <br>
                                            $count++; <br>
                                            } <br>
                                            
                                    } <br>
                                    if($count>2){ <br>
                                                echo "Composite Number";<br>
                                        } <br>
                                    else{ <br>
                                        echo "Not Composite number"; <br>
                                    } <br>
                                
                                }else{ <br>
                                    echo "Not Composite Number"; <br>
                                } <br>
                       </p>
                  ?&gt;
            </p>
            
        </div>
         <div class="col-sm-4 d-flex-align-items-left">
            <h6>Process:</h6>
            <label for="">Number to be checked</label>
            <form action="" method="post" id="composite">
            <div class="row py-2">
                <div class="col"><input type="text" class="form-control" id="number" name="number" placeholder="eg: 4"  value=""></div>
                <div class="col" style=" display:flex;vertical-align:middle;"><button class="btn btn-primary"  type="submit" id="check">check</button></div>
            </div>
            </form>
            <h6>Output:</h6>
            <p id="answer"></p>
            
        </div>
    </div>
</div> 