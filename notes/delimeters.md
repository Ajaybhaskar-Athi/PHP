Here are the two differences for your notes:

### 1. **`^` at the Start of the Pattern (Anchoring the Start of the String)**  
   - **Usage**: `^[a-c]`
   - **Meaning**: The `^` at the beginning of the regular expression asserts that the match must occur at the **start** of the string.
   - **Example**: `^[a-c]` matches strings that **start** with `a`, `b`, or `c`.
   - **Example Match**: `"apple"` (first character is `a`)
   - **Example No Match**: `"dog"` (first character is `d`)

### 2. **`^` Inside a Character Class (Negating the Character Class)**  
   - **Usage**: `[^a-c]`
   - **Meaning**: The `^` inside square brackets negates the character class, meaning it matches **any character except** the ones listed in the brackets.
   - **Example**: `[^a-c]` matches any character that is **not** `a`, `b`, or `c`.
   - **Example Match**: `"d"`, `"e"`, `"z"` (any character other than `a`, `b`, or `c`)
   - **Example No Match**: `"a"`, `"b"`, `"c"` (because they are excluded from the class)




 preg_grep()
Purpose: Filters elements of an array that match a pattern.
Syntax: preg_grep($pattern, $array)

preg_split()
Purpose: Splits a string into an array based on a pattern.
Syntax: preg_split($pattern, $string)

preg_replace()
Purpose: Replaces all occurrences of a pattern with a replacement string.
Syntax: preg_replace($pattern, $replacement, $string)


preg_match_all()
Purpose: Finds all matches of a pattern in a string.
Syntax: preg_match_all($pattern, $string, $matches)


 preg_match()
Purpose: Checks if a pattern exists in a string (returns true/false).
Syntax: preg_match($pattern, $string, $matches)
