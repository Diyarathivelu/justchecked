<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Copy Code with Icon Inside Block</title>
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background-color: #f2f2f2;
    }

    .code-container {
      position: relative;
      max-width: 700px;
    }

    pre {
      position: relative;
      background-color: #272822;
      color: #f8f8f2;
      padding: 30px 10px 10px 10px; 
      border-radius: 8px;
      overflow-x: auto;
      white-space: pre-wrap;
      word-wrap: break-word;
      width: fit-content;
    }

    .copy-icon {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 18px;
      cursor: pointer;
      color: #ccc;
      background-color: #272822;
      padding: 4px;
      border-radius: 4px;
      z-index: 2;
    }

    .copy-icon:hover {
      color: #00bcd4;
    }

    .tooltip {
      position: absolute;
      top: 35px;  /* Just below the icon */
      right: 10px;
      background-color: #fff;
      color: #000;
      padding: 3px 8px;
      border-radius: 4px;
      font-size: 12px;
      display: none;
      z-index: 1;
    }
  </style>
</head>
<body>

  <h2>PHP Fibonacci Code</h2>

  <div class="code-container py-5">
    <pre id="code">
      <i class="fa-regular fa-clone copy-icon" onclick="copyCode()"></i>
      <div class="tooltip" id="tooltip">Copied!</div>
&lt;?php
$n = 10; // number of terms
$a = 0;
$b = 1;

echo "Fibonacci Series: ";

for ($i = 0; $i &lt; $n; $i++) {
    echo $a . " ";
    $next = $a + $b;
    $a = $b;
    $b = $next;
}
?&gt;
    </pre>
  </div>

  <script>
    function copyCode() {
      const code = document.getElementById("code").innerText;
      navigator.clipboard.writeText(code);

      const tooltip = document.getElementById("tooltip");
      tooltip.style.display = "block";

      setTimeout(() => {
        tooltip.style.display = "none";
      }, 2000);
    }
  </script>

</body>
</html>
