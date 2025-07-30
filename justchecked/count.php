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
        $("#countForm").on('submit', function (e) {
            e.preventDefault();

            const input = $("#countInput").val().trim();

            if (input === '') {
                alert("Please enter text or number");
                return;
            }

            $.ajax({
                url: "countdata.php",
                type: "post",
                data: $(this).serialize(),
                success: function (response) {
                    const result = response.trim();
                    $("#countResult").text(result).css("color", "green");
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
        <h5>Count</h5>
        <hr>
    </div>
    <div class="row content-inside container-fluid">
        <div class="col-sm-4">
            <h6>Definition:</h6>
            <p> To check/count the number of characters in a string or digits in a number.</p>
            <h6>Examples:</h6>
            <ul>
                <li>123 → 3 digits</li>
                <li>Hello → 5 characters</li>
                <li>Hello 123 → 9 characters (including space)</li>
            </ul>
        </div>

        <div class="col-sm-4">
            <h6>Program Logic:</h6>
            <p>
                &lt;?php <br>
                <span style="margin-left: 15px;">$input = "Hello123";</span><br>
                <span style="margin-left: 15px;">$length = strlen($input);</span><br>
                <span style="margin-left: 15px;">echo "Length: $length";</span><br>
                ?&gt;
            </p>
        </div>

        <div class="col-sm-4">
            <h6>Try It:</h6>
            <form id="countForm" method="post">
                <label for="countInput">Enter text or number:</label>
                <input type="text" name="input" id="countInput" class="form-control" placeholder="e.g., Hello123">
                <div class="py-2">
                    <button type="submit" class="btn btn-primary">Count</button>
                </div>
            </form>
            <h6>Output:</h6>
            <p id="countResult"></p>
        </div>
    </div>
</div>
