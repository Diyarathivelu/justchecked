<style>
    .content-block{
        box-shadow:0px 0px 3px 3px whitesmoke;
        text-align: justify;
    }
    .content-block p,.btn,label,li{
        font-size:13px !important;
    
    }
    table{
        font-size:12px;
    }
    textarea ,span{
        font-size:12px !important;
    }
</style>




<script>
    $(document).ready(function () {
        $('#vowelForm').on('submit', function (e) {
            e.preventDefault();

            const text = $('#vowelText').val().trim();
            if (text === '') {
                alert("Please enter a word or sentence.");
                return;
            }

            $.ajax({
                url: 'vowelsdata.php',
                type: 'POST',
                data: $(this).serialize(),
                success: function (response) {
                    $('#vowelResult').html(response);
                }
            });
        });
    });
</script>

<div class="content-block container mt-3 py-3 mb-5">
    <div class="title-header">
        <h5>Vowel and Consonant</h5>
        <hr>
    </div>
    <div class="row content-inside container-fluid">
        <div class="col-sm-4">
            <h6>Definition:</h6>
            <p>To count the number of vowels and consonants in the given text.</p>
            <h6>Example:</h6>
            <p>"Hello World"</p>
            <ul>
                <li>Vowels: 3</li>
                <li>Consonants: 7</li>
            </ul>
        </div>
        <div class="col-sm-4">
            <h6>Program Logic:</h6>
            <span> &lt;?php <br>
            <p class="d-flex justify-content-center">
                
                   $text = strtolower($_POST['vowelText']);<br>
    $vowels = ['a', 'e', 'i', 'o', 'u'];<br>
    $vc = 0; <br>
    $cc = 0; <br>

    for ($i = 0; $i < strlen($text); $i++) { <br>
        $char = $text[$i]; <br>
        if (ctype_alpha($char)) { <br>
            if (in_array($char, $vowels)) { <br>
                $vc++; <br>
            } else { <br>
                $cc++; <br>
            } <br>
        } <br>
    } <br>

    echo "Vowels: $vc | Consonants: $cc"; <br>
 
            </p>
?&gt;</span>
           
        </div>
        <div class="col-sm-4">
            <h6>Process:</h6>
            <form id="vowelForm" method="post">
                <textarea name="vowelText" id="vowelText" class="form-control" rows="3" placeholder="Enter text..."></textarea>
                <button class="btn btn-primary mt-2" type="submit">Count</button>
            </form>
            <h6 class="mt-3">Result:</h6>
            <p id="vowelResult"></p>
        </div>
    </div>
</div>
