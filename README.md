# AstaRCMS - A Raw PHP Blog Project
AstaRCMS is a raw PHP blog project created by me during my early days of learning PHP in 2021. As my first significant undertaking, this project represents an essential milestone in my journey towards mastering web development.

## Key Features
- **Simple and Intuitive Interface:** AstaRCMS boasts a straightforward and user-friendly interface, making it easy for visitors to navigate through the blog's content seamlessly.
- **Basic CRUD Operations:** The blog incorporates essential CRUD (Create, Read, Update, Delete) operations, allowing the author to effortlessly create new blog posts, edit existing ones, delete unwanted content, and showcase their writing prowess.
- **Responsive Design:** Understanding the importance of a mobile-friendly website, the developer ensured that AstaRCMS is responsive, ensuring a seamless experience for users across various devices.
- **Commenting System:** Foster meaningful discussions while combating spam with the comment system featuring an Image CAPTCHA. Genuine users can leave comments, while automated bots are kept at bay.
- **Categories:** To better organize blog posts and improve discoverability, implemented categories, enabling readers to explore related articles with ease.
- **Search Module:** Allow readers to find content quickly with the powerful search module. Search through blog posts, titles, categories, and tags to deliver relevant results and enhance user experience.
- **User Authentication:** As security is paramount, used a basic user authentication system to manage access to the CMS (Content Management System) and control authorship rights.
- **Contact Form:** Engage with your audience effortlessly through a user-friendly contact form. Enable visitors to reach out to you directly, enhancing communication and building connections.
- **Ads Section:** Monetize your blog by integrating an ads section. Display advertisements and generate revenue while maintaining a balance between content and ads for a pleasant user experience.
- **XML Sitemap Generation:** Improve your blog's search engine visibility with automatic XML sitemap generation. Help search engines discover and index your content, potentially boosting SEO rankings.

## Setup
- Open ```include/config.php``` file and update database information.
```php
<?php
$hostname = "YOURDBHOST"; // your hostname here
$db_username = "YOURDBUSER"; // your database username here
$db_password = "YOURDBPASS"; // your database password here
$db_name = "YOURDBNAME"; // your database name here
...
```
- Admin login url ```https://yoursitename.com/admin```
- Default login information:
```
Email: admin@admin.com
Password: admin
```
- Chnage login information from ```Admin Settings```

## Technology Stack
- **Front-end:** HTML, CSS, Bootstrap, JavaScript
- **Back-end:** PHP (Native, without frameworks)
- **Database:** MySQL

## Screenshots
<p align="center" width="100%">
    <img width="30%" src="https://raw.githubusercontent.com/alsayeedar/php-blog-astarcms/main/Screenshots/Screenshot-01.png"/>
    <img width="30%" src="https://raw.githubusercontent.com/alsayeedar/php-blog-astarcms/main/Screenshots/Screenshot-02.png"/>
    <img width="30%" src="https://raw.githubusercontent.com/alsayeedar/php-blog-astarcms/main/Screenshots/Screenshot-03.png"/>
</p>
<p align="center" width="100%">
    <img width="30%" src="https://raw.githubusercontent.com/alsayeedar/php-blog-astarcms/main/Screenshots/Screenshot-04.png"/>
    <img width="30%" src="https://raw.githubusercontent.com/alsayeedar/php-blog-astarcms/main/Screenshots/Screenshot-05.png"/>
    <img width="30%" src="https://raw.githubusercontent.com/alsayeedar/php-blog-astarcms/main/Screenshots/Screenshot-06.png"/>
</p>

## Credits
- [Al Sayeed](https://github.com/alsayeedar/)

## Changelog
- 1.0: Release date: Jan 17, 2021
    - Initial release.
