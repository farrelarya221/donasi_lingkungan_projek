<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Donasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('hutan.jpg')no-repeat center;
            background-size: 100%; 
            margin: 500;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: rgba(254, 252, 252, 0.5); ;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        textarea {
        width: 90%;
        padding: 8px;
        margin-bottom: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        }

        textarea {
            height: 75px;
            resize: none;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="donasi_berhasil.php" method="post">
        <h2>Formulir Donasi</h2>
        
        <label for="firstName">Nama Depan </label>
        <input type="text" name="Nama_depan" placeholder="" maxlength="50" required>

        <label for="lastName">Nama Belakang</label>
        <input type="text" name="Nama_belakang" placeholder="" maxlength="50" required>

        <label for="email">Alamat Email</label>
        <input type="email" name="Email" placeholder="">

        <label for="phone">Nomor Telepon</label>
        <input type="text" name="nomer" placeholder="" maxlength="13">

        <label for="donationAmount">Jumlah Donasi</label>
        <input type="number" name="Nominal" placeholder="" min = "0">

        <label for="message">Pesan</label>
        <textarea name="pesan" placeholder="Tulis pesan disini"></textarea>

        <button type="submit" name="submit" value="kirim">Kirim Donasi</button>
        </form>
    </div>
</body>
</html>
