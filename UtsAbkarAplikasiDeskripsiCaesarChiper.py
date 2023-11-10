def caesar_decrypt(ciphertext, shift):
    decrypted_text = ""
    for char in ciphertext:
        if char.isalpha():
            if char.isupper():
                decrypted_text += chr((ord(char) - shift - 65) % 26 + 65)
            else:
                decrypted_text += chr((ord(char) - shift - 97) % 26 + 97)
        else:
            decrypted_text += char
    return decrypted_text

def main():
    ciphertext = input("Masukkan teks terenkripsi: ")
    
    try:
        shift = int(input("Masukkan nilai pergeseran: "))
    except ValueError:
        print("Nilai pergeseran harus berupa angka.")
        return

    decrypted_text = caesar_decrypt(ciphertext, shift)
    print("Teks terdekripsi:", decrypted_text)

if __name__ == "__main__":
    main()
if __name__ == "__main__":
    main()
