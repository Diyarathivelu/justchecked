<style>
    .content-block {
        box-shadow: 0px 0px 3px 3px whitesmoke;
        text-align: justify;
    }
    .content-block p, .btn, label, li {
        font-size: 13px !important;
    }
    input {
        font-size: 12px !important;
    }
</style>

<script>
    $(document).ready(function () {
        $("#strongForm").on('submit', function (e) {
            e.preventDefault();

            const input = $("#strongInput").val().trim();

            if (input === '') {
                alert("Please enter a number");
                return;
            }

            $.ajax({
                url: "strongdata.php",
                type: "post",
                data: $(this).serialize(),
                success: function (response) {
                    const result = response.trim();
                    $("#strongResult").text(result);

                    if (result.toLowerCase().includes("not")) {
                        $("#strongResult").css("color", "red");
                    } else {
                        $("#strongResult").css("color", "green");
                    }
                },
                error: function (xhr, status, error) {
                    console.error("Error: " + error);
                }
            });
        });
    });
</script>

<div class="content-block container mt-3 py-3 mb-5">
    <div class="title-header">
        <h5>Strong Number</h5>
        <hr>
    </div>
    <div class="row content-inside container-fluid">
        <div class="col-sm-4">
            <h6>Definition:</h6>
            <p>A strong number is a number in which the sum of the factorial of its digits equals the original number.</p>
            <h6>Example:</h6>
            <p>145 → 1! + 4! + 5! = 1 + 24 + 120 = 145 </p>
        </div>

        <div class="col-sm-4">
            <h6>Program Logic:</h6>
            <p>
                &lt;?php <br>
                <span style="margin-left: 15px;">$num = 145;</span><br>
                <span style="margin-left: 15px;">$sum = 0; $temp = $num;</span><br>
                <span style="margin-left: 15px;">while ($temp > 0) {</span><br>
                <span style="margin-left: 30px;">$digit = $temp % 10;</span><br>
                <span style="margin-left: 30px;">$fact = 1;</span><br>
                <span style="margin-left: 30px;">for ($i = 1; $i &lt;= $digit; $i++)</span><br>
                <span style="margin-left: 45px;">$fact *= $i;</span><br>
                <span style="margin-left: 30px;">$sum += $fact;</span><br>
                <span style="margin-left: 30px;">$temp = (int)($temp / 10);</span><br>
                <span style="margin-left: 15px;">}</span><br>
                 <span style="margin-left:15px;"> if($sum == $num)</span><br>
                 <span style="margin-left:30px;">{</span><br>
                    <span style="margin-left:30px;"> echo"Strong Number";</span><br>
                  <span style="margin-left:30px;">}else{</span> <br>
                    <span style="margin-left:30px;"> echo" Not a Strong Number";</span><br>
                   <span style="margin-left:15px;">}</span>  <br>
                ?&gt;
            </p>
        </div>

        <div class="col-sm-4">
            <h6>Process:</h6>
            <form id="strongForm" method="post">
                <label for="strongInput">Enter a number:</label>
                <input type="text" name="number" id="strongInput" class="form-control" placeholder="e.g., 145">
                <div class="py-2">
                    <button type="submit" class="btn btn-primary">Check</button>
                </div>
            </form>
            <h6>Output:</h6>
            <p id="strongResult"></p>
        </div>
    </div>
</div>
