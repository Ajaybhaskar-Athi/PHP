Here's a common **regular expression pattern** for matching an email address:

### **Email Pattern:**
```php
$pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
```

### **Explanation:**

- **`^`**: Asserts the start of the string. This ensures that the pattern matches from the beginning of the string.

- **`[a-zA-Z0-9._%+-]+`**:
  - `[a-zA-Z0-9._%+-]`: This defines the **allowed characters** in the **username** (the part before the "@" symbol in an email).
    - `a-z`: matches lowercase letters.
    - `A-Z`: matches uppercase letters.
    - `0-9`: matches digits.
    - `._%+-`: matches some special characters that are commonly used in email addresses (e.g., `.`, `_`, `%`, `+`, and `-`).
  - `+`: Indicates **one or more** occurrences of the characters from the previous set (i.e., the username part must contain at least one character).

- **`@`**: Matches the literal **"@"** symbol. This separates the local part (username) from the domain part of the email address.

- **`[a-zA-Z0-9.-]+`**:
  - `[a-zA-Z0-9.-]`: This defines the **allowed characters** in the **domain** part of the email address (after the "@").
    - `a-z`: matches lowercase letters.
    - `A-Z`: matches uppercase letters.
    - `0-9`: matches digits.
    - `.-`: allows a dot `.` and hyphen `-` in the domain name.
  - `+`: Indicates **one or more** occurrences of the characters from the previous set (i.e., the domain part must contain at least one character).

- **`\.`**: Matches the literal **dot (`.`)** character. This is used to separate the domain from the top-level domain (TLD), like `.com`, `.org`, etc.

- **`[a-zA-Z]{2,}`**:
  - `[a-zA-Z]`: Matches **letters** (both uppercase and lowercase).
  - `{2,}`: This indicates that the **top-level domain** (TLD) must have **at least 2 characters** (e.g., `.com`, `.org`, `.net`).

- **`$`**: Asserts the **end** of the string. This ensures that the pattern matches the entire string and not just part of it.

### **Example Matches:**

- `example@email.com` (valid)
- `john.doe@sub.domain.co` (valid)
- `user123@domain.org` (valid)

### **Example Non-Matches:**

- `example@com` (invalid, because TLD must be at least 2 characters)
- `@example.com` (invalid, missing username part)
- `example@domain` (invalid, missing TLD)

### **Summary of the Pattern**:
- The pattern checks for a valid **username** (letters, digits, and some special characters), followed by an **"@"** symbol.
- It ensures a valid **domain name** with allowed characters and at least one dot to separate the domain and the top-level domain.
- The **top-level domain (TLD)** must be at least 2 characters long.
