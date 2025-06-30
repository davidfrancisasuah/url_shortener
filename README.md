# URL Shortener Web Application

A simple URL shortener web app built with PHP, jQuery, Bootstrap, and MySQL.

## Features

- Shorten long URLs to short codes
- Track number of redirects and last accessed time
- Admin panel for managing shortened URLs
- Domain name availability checker
- Responsive design using Bootstrap
- Copy shortened URLs to clipboard
- View metadata (title, description, image) for each URL

## Project Structure

```
admin.php                # Admin dashboard
domainchecker.php        # Domain name checker page
header.php               # Common header (CSS/JS includes)
home.php                 # Main app logic (admin home)
index.html               # Public landing page
logout.php               # Admin logout
Privacy-policy.php       # Privacy policy page
assets/                  # Static assets (CSS, JS, images, icons)
b/index.php              # Redirect handler for short URLs
classes/
  DBConnection.php       # Database connection class
  URLshortener.php       # Main URL shortener backend logic
  article.html           # Documentation/article
db/url_shortener.sql     # Database schema
```

## Installation

1. **Clone or Download** the repository to your local server directory (e.g., `htdocs` for XAMPP).
2. **Import the Database**  
   - Open [db/url_shortener.sql](db/url_shortener.sql) in phpMyAdmin and import it to create the required tables.
3. **Configure Database Connection**  
   - Edit [`classes/DBConnection.php`](classes/DBConnection.php) with your MySQL credentials if needed.
4. **Start Apache and MySQL** using XAMPP/WAMP.
5. **Access the App**  
   - Public page: [http://localhost/url_shortener/index.html](http://localhost/url_shortener/index.html)
   - Admin panel: [http://localhost/url_shortener/admin.php](http://localhost/url_shortener/admin.php)

## Usage

- **Shorten a URL:**  
  Enter a long URL on the landing page and click "Shorten". The app will generate a short link.
- **Admin Login:**  
  Go to `/admin.php`, enter the admin password to manage URLs.
- **Domain Checker:**  
  Use `/domainchecker.php` to check if a domain name is available.

## Dependencies

- PHP 7+
- MySQL
- [jQuery](assets/js/jquery-3.6.0.min.js)
- [Bootstrap](assets/css/bootstrap.min.css)
- [DataTables](assets/DataTables/datatables.min.js)
- [FontAwesome](assets/fontawesome-free/css/all.min.css)
- [Bootstrap Icons](assets/bootstrapIcon/bootstrap-icons.css)

## Credits

- Developed by [DavetheCoder](mailto:davidfrancis@bgworldent.com)
- Based on open-source and educational resources

## License

This project is for educational purposes only.

---

**Enjoy using the URL Shortener!**
![index1](https://github.com/user-attachments/assets/90c2943b-3f1e-4641-8eb6-3968e7fc6183)
![index2](https://github.com/user-attachments/assets/7ca6ef32-4511-4561-ad9b-b292471bcebc)
![index3](https://github.com/user-attachments/assets/e2167dec-5178-46f8-974d-19fb962ac9ff)
![index4](https://github.com/user-attachments/assets/2b6c4e04-02d0-4a23-a0bb-59300be8f22c)
![index5](https://github.com/user-attachments/assets/75a907b8-803b-4b99-9ebb-32265497c0f5)
![index6](https://github.com/user-attachments/assets/1174661e-b8e3-406d-9e05-e110074126c2)
