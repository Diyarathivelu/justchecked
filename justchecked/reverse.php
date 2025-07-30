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
        $("#reverseForm").on('submit', function (e) {
            e.preventDefault();

            const input = $("#reverseInput").val().trim();

            if (input === '') {
                alert("Please enter a word or number");
                return;
            }

            $.ajax({
                url: "reversedata.php",
                type: "post",
                data: $(this).serialize(),
                success: function (response) {
                    const result = response.trim();
                    $("#reverseResult").text(result).css("color", "green");
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
        <h5>Reverse</h5>
        <hr>
    </div>
    <div class="row content-inside container-fluid">
        <div class="col-sm-4">
            <h6>Definition:</h6>
            <p>This tool reverses the entered word or number using PHP's `strrev()` function.</p>
            <h6>Examples:</h6>
            <ul>
                <li>madam → madam</li>
                <li>12345 → 54321</li>
                <li>hello → olleh</li>
            </ul>
        </div>

        <div class="col-sm-4">
            <h6>Program Logic:</h6>
            <p>
                &lt;?php <br>
                <span style="margin-left: 15px;">$input = "hello";</span><br>
                <span style="margin-left: 15px;">$reversed = strrev($input);</span><br>
                <span style="margin-left: 15px;">echo $reversed; // Output: olleh</span><br>
                ?&gt;
            </p>
        </div>

        <div class="col-sm-4">
            <h6>Process:</h6>
            <form id="reverseForm" method="post">
                <label for="reverseInput">Enter a word or number:</label>
                <input type="text" name="input" id="reverseInput" class="form-control" placeholder="e.g., hello or 12345">
                <div class="py-2">
                    <button type="submit" class="btn btn-primary">Reverse</button>
                </div>
            </form>
            <h6>Output:</h6>
            <p id="reverseResult"></p>
        </div>
    </div>
</div>
