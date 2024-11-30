The `htmlspecialchars()` function in PHP is used to convert special characters in a string into their corresponding HTML entities. This is important for protecting against **Cross-Site Scripting (XSS)** attacks when displaying user input in a web page.

### **How It Works**
When a user submits input containing HTML tags or special characters, `htmlspecialchars()` ensures they are treated as plain text instead of being interpreted as HTML or JavaScript.

### **Examples**
#### Without `htmlspecialchars()`
```php
$input = "<script>alert('Hacked!');</script>";
echo $input;
```
**Output** (interpreted as actual code):  
This would execute the JavaScript and show an alert box.

---

#### With `htmlspecialchars()`
```php
$input = "<script>alert('Hacked!');</script>";
echo htmlspecialchars($input);
```
**Output** (treated as plain text):  
```html
&lt;script&gt;alert('Hacked!');&lt;/script&gt;
```
The browser displays the input as it is, without interpreting it.

---

### **Converted Characters**
Here are some commonly converted characters:

| Character | Converted To      |
|-----------|-------------------|
| `<`       | `&lt;`           |
| `>`       | `&gt;`           |
| `&`       | `&amp;`          |
| `"`       | `&quot;`         |
| `'`       | `&#039;`         |

---

### **Why Use It?**
1. **Prevent XSS Attacks**: Protects your website from malicious scripts injected into user inputs.
2. **Secure Output**: Ensures any special characters in user inputs are displayed as plain text, not interpreted by the browser.

### **Usage in Forms**
When displaying user-submitted data:
```php
<input type="text" value="<?php echo htmlspecialchars($userInput); ?>">
```

This ensures that if `$userInput` contains malicious or unexpected code, it won't affect your website's behavior.