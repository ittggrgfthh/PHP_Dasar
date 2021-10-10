<?php 

//tipe data string bisa menggunakan single quote atau double quote, depend on situation
//kelebihan double quote adalah bisa menggunakan \t, \n, dll.

echo ' ' ; //ini adalah string dengan isi spasi
echo 'Farhan Taqi Abdussalam'; //ini adalah tipe data string
echo "\n";

echo "Nama : ";
echo "Farhan\t Taqi\t Abdussalam\n";

echo <<<TAQI
Halo semua, saya sedang belajar PHP : Hypertext Preprocessor
ini adalah cara ke-3 membuat string 
ini adalah heredoc
TAQI;
//hati-hati dalam menggunakan heredoc, tidak boleh ada apapun setelah <<<TAQI, bahkan jika hanya spasi.
//TAG pembuka dan penutup tidak boleh berada di dalam baris (line) string

echo <<<'TAQI'
Halo semua, saya sedang belajar PHP : Hypertext Preprocessor
ini adalah cara ke-3 membuat string 
ini adalah heredoc
TAQI;
//hampir sama dengan heredoc
//nowdoc tidak memiliki kemampuan parsing seperti heredoc atau double quote
//parsing akan dibahas nantinya
?>
