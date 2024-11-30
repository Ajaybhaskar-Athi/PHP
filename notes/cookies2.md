### Cookies and Cross-Domain Behaviour

- **Cookies are Site-Specific**: 
  Cookies set by one website (e.g., your PHP site) are **domain-specific**. They will only be sent along with requests to that same website. For example, after logging in to your PHP site, the cookies (like your username or authentication token) will only be available on your site and not on other websites such as YouTube.

- **Same-Origin Policy**: 
  Browsers enforce the **same-origin policy**, which ensures that one website cannot access the cookies set by another website. This means cookies set on `yourwebsite.com` will not be accessible by YouTube or other websites, as each domain’s cookies are isolated from others for security and privacy reasons.

- **Cross-Domain Cookies**: 
  Cookies can only be shared across different subdomains (e.g., `app.yourwebsite.com` and `www.yourwebsite.com`) if they are set to be accessible across the same root domain. However, cookies are **not** shared between completely different domains like `yourwebsite.com` and `youtube.com`.

- **Third-Party Authentication (OAuth)**: 
  To share login details across different websites, a common authentication system like **OAuth** is required. OAuth allows users to log in once via a provider (like Google), and then they can access multiple services (like YouTube) that support the same login method. This is why you may find that logging into Google services (e.g., Gmail) also logs you into YouTube, as both use Google's authentication system.

- **Sharing Cookies Across Websites**: 
  If YouTube were to know your login details from your website, it would require a shared authentication system, like **Google Sign-In** or **OAuth**, which allows multiple websites or services to use the same login credentials.

- **Summary**: 
  After logging into your PHP site, **your login details will not be shared with YouTube** unless both sites use a common authentication provider (e.g., Google). Cookies are restricted to their respective domains, and for cross-domain sharing of login data, a **third-party authentication system** (like OAuth) must be used.