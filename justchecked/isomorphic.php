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
        $("#isomorphicForm").on('submit', function (e) {
            e.preventDefault();

            const s1 = $("#string1").val().trim();
            const s2 = $("#string2").val().trim();

            if (s1 === '' || s2 === '') {
                alert("Please enter both strings");
                return;
            }

            $.ajax({
                url: "isomorphicdata.php",
                type: "post",
                data: $(this).serialize(),
                success: function (response) {
                    const result = response.trim();
                    $("#isomorphicResult").text(result);

                    if (result.toLowerCase().includes("not")) {
                        $("#isomorphicResult").css("color", "red");
                    } else {
                        $("#isomorphicResult").css("color", "green");
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
        <h5>Isomorphic</h5>
        <hr>
    </div>
    <div class="row content-inside container-fluid">
        <div class="col-sm-4">
            <h6>Definition:</h6>
            <p>Two strings are isomorphic if the characters in one string can be replaced to get the second string with a one-to-one mapping.</p>
            <h6>Examples:</h6>
            <ul>
                <li>egg ↔ add ✔</li>
                <li>paper ↔ title ✔</li>
                <li>foo ↔ bar ❌</li>
            </ul>
        </div>

        <div class="col-sm-4">
            <h6>Program Logic:</h6>
            <p>
                &lt;?php <br>
                <span style="margin-left: 15px;">function isIsomorphic($s, $t) {</span><br>
                <span style="margin-left: 30px;">if (strlen($s) != strlen($t)) return false;</span><br>
                <span style="margin-left: 30px;">$map1 = [];</span><br>
                <span style="margin-left: 30px;">$map2 = [];</span><br>
                <span style="margin-left: 30px;">for ($i = 0; $i &lt; strlen($s); $i++) {</span><br>
                <span style="margin-left: 45px;">if (($map1[$s[$i]] ?? null) !== ($map2[$t[$i]] ?? null)) return false;</span><br>
                <span style="margin-left: 45px;">$map1[$s[$i]] = $i;</span><br>
                <span style="margin-left: 45px;">$map2[$t[$i]] = $i;</span><br>
                <span style="margin-left: 30px;">}</span><br>
                <span style="margin-left: 30px;">return true;</span><br>
                <span style="margin-left: 15px;">}</span><br>
                ?&gt;
            </p>
        </div>

        <div class="col-sm-4">
            <h6>Process:</h6>
            <form id="isomorphicForm" method="post">
                <label for="string1">Enter first string:</label>
                <input type="text" name="string1" id="string1" class="form-control" placeholder="e.g., egg">
                <label class="mt-2" for="string2">Enter second string:</label>
                <input type="text" name="string2" id="string2" class="form-control" placeholder="e.g., add">
                <div class="py-2">
                    <button type="submit" class="btn btn-primary">Check</button>
                </div>
            </form>
            <h6>Output:</h6>
            <p id="isomorphicResult"></p>
        </div>
    </div>
</div>
