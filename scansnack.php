<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Check Your Snack</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background: #f7f9fc;
      color: #333;
    }
    h1 {
      text-align: center;
      color: #2e7d32;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }
    input[type="text"], input[type="number"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    button {
      margin-top: 20px;
      background: #2e7d32;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }
    button:hover {
      background: #1b5e20;
    }
    .result {
      margin-top: 20px;
      padding: 15px;
      border-radius: 6px;
    }
    .healthy {
      background: #c8e6c9;
      color: #2e7d32;
    }
    .unhealthy {
      background: #ffcdd2;
      color: #c62828;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Check Your Snack</h1>
    <label for="snackName">Nama Camilan:</label>
    <input type="text" id="snackName" placeholder="Contoh: Keripik Kentang">

    <label for="sugar">Kadar Gula (gram):</label>
    <input type="number" id="sugar" placeholder="Contoh: 15">

    <label for="fat">Lemak Total (gram):</label>
    <input type="number" id="fat" placeholder="Contoh: 10">

    <label for="calories">Kalori (kcal):</label>
    <input type="number" id="calories" placeholder="Contoh: 180">

    <button onclick="evaluateSnack()">Evaluasi Camilan</button>

    <div id="result" class="result"></div>
  </div>

  <script>
    function evaluateSnack() {
      const sugar = parseFloat(document.getElementById('sugar').value);
      const fat = parseFloat(document.getElementById('fat').value);
      const calories = parseFloat(document.getElementById('calories').value);
      const resultDiv = document.getElementById('result');

      let score = 0;

      // Simple logic: the lower the better
      if (sugar <= 5) score++;
      if (fat <= 5) score++;
      if (calories <= 150) score++;

      if (isNaN(sugar) || isNaN(fat) || isNaN(calories)) {
        resultDiv.innerHTML = 'Mohon isi semua kolom dengan angka yang valid.';
        resultDiv.className = 'result unhealthy';
        return;
      }

      if (score >= 2) {
        resultDiv.innerHTML = '✅ Camilan ini tergolong <strong>cukup sehat</strong>!';
        resultDiv.className = 'result healthy';
      } else {
        resultDiv.innerHTML = '⚠️ Camilan ini tergolong <strong>tidak sehat</strong>. Kurangi konsumsi berlebihan.';
        resultDiv.className = 'result unhealthy';
      }
    }
  </script>
</body>
</html>