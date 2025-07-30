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
        $("#perfectForm").on('submit', function (e) {
            e.preventDefault();

            const number = $("#perfectInput").val().trim();

            if (number === '') {
                alert("Please enter a number");
                return;
            }

            $.ajax({
                url: "perfectnumberdata.php",
                type: "post",
                data: $(this).serialize(),
                success: function (response) {
                    const result = response.trim();
                    $("#perfectResult").text(result);

                    if (result.toLowerCase().includes("not")) {
                        $("#perfectResult").css("color", "red");
                    } else {
                        $("#perfectResult").css("color", "green");
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
        <h5>Perfect Number </h5>
        <hr>
    </div>
    <div class="row content-inside container-fluid">
        <div class="col-sm-6">
            <h6>Definition:</h6>
            <p>A perfect number is a positive integer that is equal to the sum of its proper divisors (excluding itself).</p>
            <h6>Example:</h6>
            <p>6 → 1 + 2 + 3 = 6 ✔</p>
            <p>28 → 1 + 2 + 4 + 7 + 14 = 28 ✔</p>
        </div>

        <div class="col-sm-6">
            <h6>Check Number:</h6>
            <form id="perfectForm" method="post">
                <label for="perfectInput">Enter a number:</label>
                <input type="text" name="number" id="perfectInput" class="form-control" placeholder="e.g., 6" />
                <div class="py-2">
                    <button type="submit" class="btn btn-primary">Check</button>
                </div>
            </form>
            <h6>Output:</h6>
            <p id="perfectResult"></p>
        </div>
    </div>
</div>
