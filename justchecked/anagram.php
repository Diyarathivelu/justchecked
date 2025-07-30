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
        $("#anagramForm").on('submit', function (e) {
            e.preventDefault();

            const word1 = $("#word1").val().trim();
            const word2 = $("#word2").val().trim();

            if (word1 === '' || word2 === '') {
                alert("Please enter both words");
                return;
            }

            $.ajax({
                url: "anagramdata.php",
                type: "post",
                data: $(this).serialize(),
                success: function (response) {
                    const result = response.trim();
                    $("#anagramResult").text(result);

                    if (result.toLowerCase().includes("not")) {
                        $("#anagramResult").css("color", "red");
                    } else {
                        $("#anagramResult").css("color", "green");
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
        <h5>Anagram</h5>
        <hr>
    </div>
    <div class="row content-inside container-fluid">
        <div class="col-sm-4">
            <h6>Definition:</h6>
            <p>Two words are anagrams if they contain the same letters but in a different order.</p>
           <h6>Examples:</h6>
                <ul>
                    <li>listen ↔ silent ✔</li>
                    <li>triangle ↔ integral ✔</li>
                    <li>123 ↔ 321 ✔</li>
                    <li>123 ↔ 322 ❌</li>
                    <li>hello ↔ world ❌</li>
                </ul>

        </div>

        <div class="col-sm-4">
            <h6>Program Logic:</h6>
            <p>
                &lt;?php <br>
                <span style="margin-left: 15px;">$w1 = strtolower("listen");</span><br>
                <span style="margin-left: 15px;">$w2 = strtolower("silent");</span><br>
                <span style="margin-left: 15px;">if (count_chars($w1, 1) == count_chars($w2, 1)) {</span><br>
                <span style="margin-left: 30px;">echo "Anagram";</span><br>
                <span style="margin-left: 15px;">} else {</span><br>
                <span style="margin-left: 30px;">echo "Not an anagram";</span><br>
                <span style="margin-left: 15px;">}</span><br>
                ?&gt;
            </p>
        </div>

        <div class="col-sm-4">
            <h6>Process:</h6>
            <form id="anagramForm" method="post">
                <label for="word1">Enter first word/digit:</label>
                <input type="text" name="word1" id="word1" class="form-control" placeholder="e.g., listen">
                <label class="mt-2" for="word2">Enter second word/digit:</label>
                <input type="text" name="word2" id="word2" class="form-control" placeholder="e.g., silent">
                <div class="py-2">
                    <button type="submit" class="btn btn-primary">Check</button>
                </div>
            </form>
            <h6>Output:</h6>
            <p id="anagramResult"></p>
        </div>
    </div>
</div>
