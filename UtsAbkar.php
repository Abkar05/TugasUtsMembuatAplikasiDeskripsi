<?php
 //
function caesarDecrypt($cipherText, $shift) {
    $plainText = '';

    $cipherText = strtoupper($cipherText); // Konversi teks menjadi huruf besar

    for ($i = 0; $i < strlen($cipherText); $i++) {
        $char = $cipherText[$i];

        // Periksa apakah karakter adalah huruf alfabet
        if (ctype_alpha($char)) {
            // Hitung indeks karakter sebelum penggeseran
            $index = ord($char) - $shift;

            // Periksa batasan untuk memastikan indeks tetap dalam rentang huruf alfabet
            if (ctype_upper($char)) {
                if ($index < ord('A')) {
                    $index += 26;
                }
            } else {
                if ($index < ord('a')) {
                    $index += 26;
                }
            }

            // Konversi indeks kembali menjadi karakter dan tambahkan ke teks biasa
            $plainText .= chr($index);
        } else {
            // Jika bukan huruf alfabet, tambahkan karakter asli ke teks biasa
            $plainText .= $char;
        }
    }

    return $plainText;
}

// Contoh penggunaan
$cipherText = "WKLVLVDSDFN"; // Misalnya, teks terenkripsi
$shift = 3; // Misalnya, pergeseran sebanyak 3 karakter

$decryptedText = caesarDecrypt($cipherText, $shift);
echo "Teks Terenkripsi: $cipherText<br>";
echo "Pergeseran: $shift<br>";
echo "Teks Terdekripsi: $decryptedText";

?>
