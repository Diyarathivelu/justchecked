<style>
    .content-block {
        box-shadow: 0px 0px 3px 3px whitesmoke;
        text-align: justify;
    }
    .content-block p, .btn, label {
        font-size: 13px !important;
    }
    input,li {
        font-size: 12px !important;
    }
</style>

<script>
    $(document).ready(function () {
        $("#lcmgcdForm").on('submit', function (e) {
            e.preventDefault();

            let num1 = $("#num1").val().trim();
            let num2 = $("#num2").val().trim();

            if (num1 === '' || num2 === '') {
                alert("Please enter both numbers.");
                return;
            }

            $.ajax({
                url: "lcmdata.php",
                type: "post",
                data: $(this).serialize(),
                success: function (response) {
                    $("#lcmgcdResult").html(response.trim());
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
        <h5>LCM & GCD Calculator</h5>
        <hr>
    </div>

    <div class="row content-inside container-fluid">
        <!-- Left Column -->
        <div class="col-sm-4">
            <h6>Definition:</h6>
            <p><strong>GCD</strong> (Greatest Common Divisor) is the largest number that divides two numbers.</p>
            <p><strong>LCM</strong> (Least Common Multiple) is the smallest number divisible by both numbers.</p>

            <h6>Examples:</h6>
            <ul>
                <li>GCD of 12 and 18 is 6</li>
                <li>LCM of 12 and 18 is 36</li>
            </ul>
        </div>

        <!-- Middle Column -->
        <div class="col-sm-4">
            <h6>Program  Logic:</h6>
            <p>
                &lt;?php <br>
                <p class="d-flex justify-content-center">
                    function gcd($a, $b) { <br>
                        if ($b == 0) { <br>
                            return $a; <br>
                        } else { <br>
                            return gcd($b, $a % $b); <br>
                        } <br>
                    } <br>

                    // Function to find LCM using formula: (a × b) / GCD  </br>
                    function lcm($a, $b) { <br>
                        return ($a * $b) / gcd($a, $b); <br>
                    } <br>
                    lcm(11,23); <br>
                    gcd(22,45);
                </p>
                ?&gt;
            </p>

        </div>

        <!-- Right Column -->
        <div class="col-sm-4">
            <h6>Process:</h6>
            <form id="lcmgcdForm" method="post">
                <label>First Number:</label>
                <input type="text" name="num1" id="num1" class="form-control" placeholder="e.g., 12">

                <label class="mt-2">Second Number:</label>
                <input type="text" name="num2" id="num2" class="form-control" placeholder="e.g., 18">

                <div class="py-2">
                    <button type="submit" class="btn btn-primary">Calculate</button>
                </div>
            </form>

            <h6>Output:</h6>
            <p id="lcmgcdResult"></p>
        </div>
    </div>
</div>
