<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator HP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #f2f2f2, #d9e4f5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            width: 250px;
        }

        #layar {
            width: 100%;
            height: 50px;
            margin-bottom: 15px;
            font-size: 24px;
            text-align: right;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 8px;
        }

        .tombol {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        button {
            padding: 15px;
            font-size: 18px;
            border: none;
            border-radius: 8px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .operator {
            background-color: #ff5722;
        }

        .operator:hover {
            background-color: #e64a19;
        }

        .clear {
            background-color: #f44336;
        }

        .clear:hover {
            background-color: #d32f2f;
        }
    </style>

    <script>
        let layar = "";

        function tampil(value) {
            if (value === '×') {
                layar += '*';
            } else if (value === '÷') {
                layar += '/';
            } else {
                layar += value;
            }
            document.getElementById("layar").value = layar.replace(/\*/g, '×').replace(/\//g, '÷');
        }

        function hapus() {
            layar = "";
            document.getElementById("layar").value = "";
        }

        function hitung() {
            try {
                const hasil = eval(layar);
                document.getElementById("layar").value = hasil;
                layar = hasil.toString();
            } catch (e) {
                document.getElementById("layar").value = "Error";
                layar = "";
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <input type="text" id="layar" disabled>

        <div class="tombol">
            <button onclick="tampil('7')">7</button>
            <button onclick="tampil('8')">8</button>
            <button onclick="tampil('9')">9</button>
            <button class="operator" onclick="tampil('÷')">÷</button>

            <button onclick="tampil('4')">4</button>
            <button onclick="tampil('5')">5</button>
            <button onclick="tampil('6')">6</button>
            <button class="operator" onclick="tampil('×')">×</button>

            <button onclick="tampil('1')">1</button>
            <button onclick="tampil('2')">2</button>
            <button onclick="tampil('3')">3</button>
            <button class="operator" onclick="tampil('-')">-</button>

            <button onclick="tampil('0')">0</button>
            <button onclick="tampil('.')">.</button>
            <button onclick="hitung()">=</button>
            <button class="operator" onclick="tampil('+')">+</button>

            <button class="clear" onclick="hapus()" style="grid-column: span 4;">C</button>
        </div>
    </div>
</body>
</html>
