We are using **sessions** in this example for the following reasons:

### 1. **Tracking the Logged-In User**
   - **Sessions** provide a way to track the user's activity across different pages in the application after they log in. 
   - When a user logs in, we set a session variable like `$_SESSION['username']` to store the logged-in user's username.
   - This allows us to identify whether the user is logged in or not, even when they navigate to different pages like the **welcome page** or other pages after logging in.

### 2. **Security**
   - **Cookies** can be manipulated or deleted by users, which means if we rely only on cookies to track the logged-in state, it could be insecure.
   - **Sessions** are stored server-side, which means the user cannot modify or delete the session data (unless they have access to the server).
   - When the user logs in, their login status is stored in the **session**. If they try to access the **welcome page** or any page where authentication is required without a valid session, they can be redirected back to the login page.

### 3. **Preventing Unauthorized Access**
   - By using sessions, we can easily check whether a user is logged in before displaying any page that requires authentication.
   - For example, on the **welcome page** (`welcome.php`), we check if `$_SESSION['username']` is set. If it's not, it means the user is not logged in, and we redirect them to the login page.
   - This ensures that only logged-in users can access certain pages, improving both security and the user experience.

### 4. **User-Friendly Experience**
   - Sessions allow the user to stay logged in even when they move from one page to another. Without sessions, each page load would need to check the cookies, and we'd have to revalidate the user's credentials frequently.
   - Once the user logs in and their session is created, they don't need to keep entering their credentials again on every page request.

### Example Flow:
   - After the user logs in, their **username** is saved in the session (`$_SESSION['username']`).
   - On the **welcome page**, we check if `$_SESSION['username']` exists. If it does, we show the welcome message.
   - If the user tries to directly access the welcome page without logging in, they will be redirected back to the login page because the session is not set.
   - When the user logs out, the session is destroyed, and they are redirected to the login page.

### Why Not Just Use Cookies?
- **Cookies** store data on the user's browser, which is accessible to them and can be manipulated or deleted by them. 
- **Sessions**, on the other hand, are stored on the server and provide more secure and reliable storage for sensitive information like the user's login state.
- **Sessions** are designed to track user states across different pages of a website and are generally more secure for managing authentication.

### Example Without Session (Not Secure or Ideal):
If we didn't use a session, we would have to check the cookies each time to see if the user is logged in. However, the user could easily delete or modify the cookies, causing potential issues for authentication.

With **sessions**, you ensure a safer, more reliable way to handle user login states and protect sensitive information from being tampered with by the user.

### Summary:
- **Session** is used here to **securely track** if the user is logged in, **prevent unauthorized access** to protected pages, and ensure a **smooth user experience** without asking for login credentials repeatedly.
