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
        $("#primeForm").on('submit', function (e) {
            e.preventDefault();

            const number = $("#primeInput").val().trim();

            if (number === '') {
                alert("Please enter a number");
                return;
            }

            $.ajax({
                url: "primedata.php",
                type: "post",
                data: $(this).serialize(),
                success: function (response) {
                    const result = response.trim();
                    $("#primeResult").text(result);

                    if (result.toLowerCase().includes("not")) {
                        $("#primeResult").css("color", "red");
                    } else {
                        $("#primeResult").css("color", "green");
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
        <h5>Prime Number </h5>
        <hr>
    </div>
    <div class="row content-inside container-fluid">
        <div class="col-sm-6">
            <h6>Definition:</h6>
            <p>A prime number is a number greater than 1 that has no positive divisors other than 1 and itself.</p>
            <h6>Examples:</h6>
            <ul>
                <li>2 → Prime</li>
                <li>3 → Prime</li>
                <li>4 → Not Prime (divisible by 2)</li>
                <li>7 → Prime</li>
                <li>9 → Not Prime (divisible by 3)</li>
            </ul>
        </div>

        <div class="col-sm-6">
            <h6>Check Number:</h6>
            <form id="primeForm" method="post">
                <label for="primeInput">Enter a number:</label>
                <input type="text" name="number" id="primeInput" class="form-control" placeholder="e.g., 7" />
                <div class="py-2">
                    <button type="submit" class="btn btn-primary">Check</button>
                </div>
            </form>
            <h6>Output:</h6>
            <p id="primeResult"></p>
        </div>
    </div>
</div>
