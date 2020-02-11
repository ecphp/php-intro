## Security

- OWASP security guide
- Common Vulnerability Scoring System
- Validate input
- SQL injection
- XSS
- Check dependencies

---

### OWASP

[OWASP Top 10 Application Security Risks](https://www.owasp.org/images/7/72/OWASP_Top_10-2017_%28en%29.pdf.pdf)

- Injection
- Broken authentication
- Data exposure
- Cross-Site scripting
- Using components with known vulnerabilities
- ...

---

### CVSS

A way to capture the principal characteristics of a vulnerability and produce a numerical score reflecting its severity.

Calculator: https://www.first.org/cvss/calculator/3.1

---

### Validate input

Never trust input coming from an HTTP client !

Always validate and escape output.

```
<?php
echo '<div>' . htmlspecialchars($_GET['input']) . '</div>';
?>
```

```
<?php
$input = urlencode($_GET['input']);
echo '<a href="http://example.com/page?input="' . $input . '">Link</a>';
?>
```

---

### SQL injection

SQL injection flaws are introduced when a dynamic database query includes user supplied input.

```
<?php
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE user_name='" . $username
       . "' AND user_password='" . $password . "';";
?>
```

This code reveals another issue in the application: users' passwords are stored in the database in plain text.

---

### XSS

```
<?php
$name = $_GET['name'];
echo "Welcome $name<br>";
?>
```

```
index.php?name=guest<script>alert('hacked')</script>
```

---

### Check dependencies

- FriendsOfPHP/security-advisories

```
symfony security:check /path/to/composer.lock
```

- Roave/SecurityAdvisories

```
composer require --dev roave/security-advisories:dev-master
```
