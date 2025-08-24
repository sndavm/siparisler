<?php
session_start();
$tedarikciler = [
    "Snd"    => "snddestek@gmail.com",
    "Nilavm" => "snddestek@gmail.com"
];
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Sipariş Formu</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        form { max-width: 420px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; }
        label { display: block; margin-top: 15px; }
        input, textarea, select { width: 100%; padding: 8px; margin-top: 5px; }
        button { margin-top: 20px; padding: 10px 25px; }
        nav { text-align: center; margin-bottom: 30px; }
        nav a { margin: 0 10px; text-decoration: none; color: #337ab7; }
        nav a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">Anasayfa</a> |
        <a href="siparis.php">Sipariş Formu</a> |
        <a href="siparis_listesi.php">Sipariş Listesi</a>
    </nav>
    <h2>Sipariş Geçme Formu</h2>
    <form action="siparis_kaydet.php" method="post" enctype="multipart/form-data">
        <label for="tedarikci">Tedarikçi Seçiniz:</label>
        <select id="tedarikci" name="tedarikci" required>
            <option value="">-- Seçiniz --</option>
            <?php foreach ($tedarikciler as $isim => $mail): ?>
                <option value="<?php echo htmlspecialchars($isim); ?>"><?php echo htmlspecialchars($isim); ?></option>
            <?php endforeach; ?>
        </select>

        <label for="urun_adi">Ürün Adı:</label>
        <input type="text" id="urun_adi" name="urun_adi" required>

        <label for="adet">Adet:</label>
        <input type="number" id="adet" name="adet" min="1" required>

        <label for="aciklama">Açıklama:</label>
        <textarea id="aciklama" name="aciklama" rows="3"></textarea>

        <label for="kargo_sablonu">Kargo Şablonu Ekle (İsteğe Bağlı):</label>
        <input type="file" id="kargo_sablonu" name="kargo_sablonu" accept=".pdf,.jpg,.jpeg,.png,.doc,.docx">

        <button type="submit">Siparişi Gönder</button>
    </form>
</body>
</html>
