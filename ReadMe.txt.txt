			MATERI
		MEMBUAT SISTEM LOGIN
================================================================
Intro :
	Yang akan dibahas dalam materi kali ini
	- Login & Registrasi
	- User Access Level
	- Menu Management
	- User Management
	- User Activation
	- Forgot Password
	
	Tools yang harus disiapkan
	- Code Editor
	- Web Server
	- Web Browser
	
	Komponen
	- Codeigniter
	- Bootstrap
	- SBAdmin
	- Font Awesome
================================================================
Persiapan :
	- Download semua tools
	- Extract Codeigniter ke xampp
	- Buat file assets dan vendor di dalam 
	  file CI
	- Extract file SBAdmin ke dalam folder
	  vendor
	- Setting konfigurasi
	  * buka file config.php pada folder config
	  * isi base_url dengan http://localhost/wpu-Login
	  * hapus isi dari index_page
	  * buat .htaccess di folder root lalu isikan
	    mod_rewrite yang ada di dokumentasi CI
	- Setting autoload
	  * buka file autoload.php pada folder config
	  * aktifkan library database, email, dan session
	  * aktifkan helper url, file, security
	- Setting routes
	  * ubah isi default_controller pada file config menjadi auth
	- Setting Controller & View
=================================================================
User Registration :
	- Buat database dengan nama wpu_login
	- Buat table user dengan colom 8
	- Buat table user_role dengan colom 2
	  * isi role dengan Administrator dan Member
	-
================================================================= 
Login :
	-
=================================================================
User & Admin Page :
	- 