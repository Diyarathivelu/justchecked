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
        $("#sumForm").on('submit', function (e) {
            e.preventDefault();

            const input = $("#sumInput").val().trim();

            if (input === '') {
                alert("Please enter a number");
                return;
            }

            $.ajax({
                url: "sumcheck.php",
                type: "post",
                data: $(this).serialize(),
                success: function (response) {
                    const result = response.trim();
                    $("#sumResult").text("Sum of Digits: " + result).css("color", "green");
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
        <h5>Sum of Digits </h5>
        <hr>
    </div>
    <div class="row content-inside container-fluid">
        <div class="col-sm-4">
            <h6>Definition:</h6>
            <p> To add all the digits of a given number.</p>
            <h6>Example:</h6>
            <ul>
                <li>123 → 1 + 2 + 3 = 6</li>
                <li>456 → 4 + 5 + 6 = 15</li>
            </ul>
        </div>

        <div class="col-sm-4">
            <h6>Program Logic:</h6>
            <p>
                &lt;?php <br>
                <span style="margin-left: 15px;">$num = 123;</span><br>
                <span style="margin-left: 15px;">$sum = 0;</span><br>
                <span style="margin-left: 15px;">while ($num > 0) {</span><br>
                <span style="margin-left: 30px;">$digit = $num % 10;</span><br>
                <span style="margin-left: 30px;">$sum += $digit;</span><br>
                <span style="margin-left: 30px;">$num = (int)($num / 10);</span><br>
                <span style="margin-left: 15px;">}</span><br>
                <span style="margin-left: 15px;">echo $sum; // Output: 6</span><br>
                ?&gt;
            </p>
        </div>

        <div class="col-sm-4">
            <h6>Process:</h6>
            <form id="sumForm" method="post">
                <label for="sumInput">Enter a number:</label>
                <input type="number" name="number" id="sumInput" class="form-control" placeholder="e.g., 123">
                <div class="py-2">
                    <button type="submit" class="btn btn-primary">Calculate</button>
                </div>
            </form>
            <h6>Output:</h6>
            <p id="sumResult"></p>
        </div>
    </div>
</div>
