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
        $("#palindromeForm").on('submit', function (e) {
            e.preventDefault();
            const input = $("#inputString").val().trim();

            if (input === '') {
                alert("Please enter a word or number");
                return;
            }

            $.ajax({
                url: "palindromedata.php",
                type: "post",
                data: $(this).serialize(),
                success: function (response) {
                    const result = response.trim();
                    
                    $("#palindromeResult").text(result);
                    
                    if (result.toLowerCase().includes("not")) {
                        $("#palindromeResult").css("color", "red");
                    } else {
                        $("#palindromeResult").css("color", "green");
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
        <h5>Palindrome </h5>
        <hr>
    </div>
    <div class="row content-inside container-fluid">
        <div class="col-sm-4">
            <h6>Definition:</h6>
            <p>A palindrome is a word, number, or sequence that reads the same backward as forward.</p>
            <h6>Examples:</h6>
            <ul>
                <li>madam</li>
                <li>121</li>
                <li>racecar</li>
                <li>noon</li>
            </ul>
        </div>

        <div class="col-sm-4">
            <h6>Program Logic:</h6>
            <p>
                &lt;?php <br>
                <span style="margin-left: 15px;">$input = "madam";</span><br>
                <span style="margin-left: 15px;">$reverse = strrev($input);</span><br>
                <span style="margin-left: 15px;">if ($input === $reverse) {</span><br>
                <span style="margin-left: 30px;">echo "Palindrome";</span><br>
                <span style="margin-left: 15px;">} else {</span><br>
                <span style="margin-left: 30px;">echo "Not a palindrome";</span><br>
                <span style="margin-left: 15px;">}</span><br>
                ?&gt;
            </p>
        </div>

        <div class="col-sm-4">
            <h6>Process:</h6>
            <label>Enter a word or number to check:</label>
            <form id="palindromeForm" method="post">
                <div class="py-2">
                    <input type="text" name="inputString" id="inputString" class="form-control" placeholder="Enter text or number">
                </div>
                <div class="py-2">
                    <button type="submit" class="btn btn-primary">Check</button>
                </div>
            </form>
            <h6>Output:</h6>
            <p id="palindromeResult"></p>
        </div>
    </div>
</div>
