
# Installasi

BDAPS untuk saat ini bisa diakses melalui link (...)

* instalasi lokal di GNU/Linux Mint

`$ git clone https://github.com/cynetzhan/bdaps`

`$ sudo mkdir /var/www/bdaps`

`$ sudo cp -r * /var/www/bdaps && cd /var/www/bdaps`

`$ sudo chmod -R 755 *`

setelah itu, buka phpMyAdmin 
buat database db_bdaps
lalu edit file `koneksi.php`

* USERNAME: nama pengguna database
* PASSWORD: password database
* DATABASE: nama database

**BDAPS MENGGUNAKAN MYSQL SEBAGAI DATABASE ENGINE**

```
<?php
	$koneksi = mysqli_connect("localhost",<USERNAME>,<PASSWORD>);
	mysqli_select_db($koneksi, DATABASE);
	if(!$koneksi){
	die("could not connect ".mysqli_error($koneksi));
}
?>
```

buka <$IP>/bdaps
