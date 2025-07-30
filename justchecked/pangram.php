<style>
   
    .content-block {
        box-shadow: 0px 0px 3px 3px whitesmoke;
        text-align: justify;
    }
    .content-block p, .btn, label {
        font-size: 12px !important;
    }
    input, textarea ,li,pre{
        font-size: 12px !important;
    }
</style>

<script>
    $(document).ready(function () {
        $('#pangramForm').on('submit', function (e) {
            e.preventDefault();

            const text = $('#pangramText').val().trim();
            if (text === '') {
                alert("Please enter a sentence.");
                return;
            }

            $.ajax({
                url: 'pangramdata.php',
                type: 'POST',
                data: $(this).serialize(),
                success: function (response) {
                    $('#pangramResult').html(response);
                }
            });
        });
    });
</script>

<div class="content-block container mt-3 py-3 mb-5">
    <div class="title-header">
        <h5>Pangram </h5>
        <hr>
    </div>
    <div class="row content-inside container-fluid">
        <div class="col-sm-4">
            <h6>Definition:</h6>
            <p>A pangram is a sentence that contains every letter of the English alphabet at least once.</p>
            <h6>Example:</h6>
            <ul>
                <li>"The quick brown fox jumps over the lazy dog" → ✅</li>
                <li>"Hello World" → ❌</li>
            </ul>
        </div>
        <div class="col-sm-4">
            <h6>Program Logic:</h6>
            <p>
            &lt;?php <br>

           <p class="d-flex justify-content-center">
             $text = strtolower($input); <br>
            $letters = range('a', 'z'); <br>
            foreach ($letters as $ch) { <br>
                if (strpos($text, $ch) === false) { <br>
                    return false; <br>
                } <br>
            }
           </p>
            ?&gt;
            </p>
        </div>
        <div class="col-sm-4">
            <h6>Process:</h6>
            <form id="pangramForm" method="post">
                <textarea name="pangramText" id="pangramText" class="form-control" rows="3" placeholder="Enter a sentence..."></textarea>
                <button class="btn btn-primary mt-2" type="submit">Check</button>
            </form>
            <h6 class="mt-3">Output:</h6>
            <p id="pangramResult"></p>
        </div>
    </div>
</div>
