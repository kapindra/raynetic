# 🚀 COMPLETE AI PROMPT GUIDE

## Build a World-Class Outsourcing IT Company Website

### From Zero to Production — Everything an AI Needs to Know

---

> **HOW TO USE THIS FILE**
> Copy everything from the "MASTER PROMPT" section onward and paste it directly into your AI (Gemini, Claude, ChatGPT, etc.). Fill in every `[PLACEHOLDER]` with your real business details before submitting. The more you fill in, the better the output.

---

---

# ═══════════════════════════════════════════

# MASTER PROMPT — PASTE THIS INTO YOUR AI

# ═══════════════════════════════════════════

---

## ROLE & MISSION

You are a senior full-stack web developer and UI/UX designer with 15+ years of experience building high-performance corporate websites. Your task is to design and build a **complete, production-ready website** for an IT outsourcing company. This is not a prototype — every detail must be deployable to shared cPanel hosting as a static build or a lightweight PHP/Node CMS with no VPS required.

Read every section of this prompt carefully before writing a single line of code.

---

## 1. BUSINESS CONTEXT

```
Company Name:        [e.g. Raynatic Solutions]
Tagline:             [e.g. "Your Technology. Our Expertise."]
Industry:            IT Outsourcing & Managed Services
Founded:             [Year]
Headquarters:        [City, Country — e.g. Melbourne, Australia]
Target Markets:      [e.g. Australia, Europe, Southeast Asia]
Primary Services:    [e.g. Software Development, Cloud Migration, IT Support, Cybersecurity]
USP (Why choose us): [e.g. "Flat-rate pricing, dedicated account managers, 24/7 support"]
Brand Voice:         [e.g. Professional yet approachable. Not corporate-stiff. Confident.]
Brand Colors:        [e.g. Deep Navy #0A1628, Electric Teal #00D4C8, White #FFFFFF]
Brand Fonts:         [e.g. Display: Syne or Clash Display / Body: DM Sans]
Logo file:           [logo.svg — place in /assets/images/logo.svg]
Contact Email:       [hello@yourcompany.com]
Contact Phone:       [+61 X XXXX XXXX]
ABN/Company Reg:     [XX XXX XXX XXX]
Physical Address:    [Full address for footer/contact/structured data]
Social Links:        [LinkedIn, Twitter/X, GitHub, Facebook URLs]
```

---

## 2. TECHNOLOGY STACK & HOSTING CONSTRAINTS

### ⚠️ CRITICAL HOSTING CONSTRAINT

This website MUST work on **shared cPanel hosting** (no VPS, no Docker, no Node.js server processes). The final deliverable must be one of:

**Option A — Pure Static Site (Preferred for performance)**

- HTML5 + CSS3 + Vanilla JS (or compiled from a static site generator)
- Use **Eleventy (11ty)** or **Astro** as the static site generator
- Build command: `npm run build` → outputs to `/dist` folder
- Upload entire `/dist` contents to `public_html` via cPanel File Manager or FTP
- All CMS content managed via **Decap CMS** (formerly Netlify CMS) using Git-based editorial workflow, OR flat JSON/Markdown files edited through a simple admin panel

**Option B — PHP Flat-File CMS (If client needs in-browser editing)**

- Use **Grav CMS** or **Kirby CMS** (no database required, pure PHP flat files)
- Requires PHP 8.1+ (available on most cPanel hosts)
- Upload entire folder to `public_html` via FTP
- Admin panel accessible at `/admin`
- No MySQL database needed

**Recommended Stack for this project:**

```
Static Generator:  Astro 4.x
Styling:           Tailwind CSS 3.x + custom CSS for parallax/animations
CMS:               Decap CMS (Git-based, free) OR TinaCMS
Forms:             Formspree.io (free tier) or Web3Forms (no server needed)
Blog:              Markdown files in /src/content/blog/
Icons:             Lucide Icons or Phosphor Icons (self-hosted SVG)
Fonts:             Google Fonts (self-hosted via fontsource for GDPR)
Analytics:         Self-hosted Plausible snippet OR privacy-first Fathom
Cookie Consent:    Orejime or Cookiebot (free tier)
Sitemap:           Auto-generated via astro-sitemap plugin
Image Optimization:Astro built-in <Image /> component
Deployment:        npm run build → upload /dist to cPanel public_html
```

---

## 3. COMPLETE PAGE STRUCTURE & SITEMAP

Build ALL of the following pages. Every page must share a common header/nav and footer.

```
/                          → Home (Landing page with parallax hero)
/about                     → About Us
/services                  → Services Overview
/services/[slug]           → Individual Service pages (at least 4)
/blog                      → Blog Index (paginated, 6 per page)
/blog/[slug]               → Individual Blog Post
/case-studies              → Case Studies / Portfolio
/contact                   → Contact Us
/privacy-policy            → Privacy Policy (GDPR + Australian Privacy Act)
/terms                     → Terms of Service
/cookie-policy             → Cookie Policy (EU requirement)
/sitemap.xml               → Auto-generated XML sitemap
/robots.txt                → SEO robots file
/404                       → Custom 404 page
```

### Navigation Structure

```
Primary Nav:   Home | Services ▾ | About | Blog | Contact
Services Menu: Software Dev | Cloud & DevOps | IT Support | Cybersecurity | [others]
Footer Nav:    Company | Services | Legal | Social
```

---

## 4. DESIGN SYSTEM & VISUAL LANGUAGE

### Overall Aesthetic Direction

**Dark-dominant, luxury-tech aesthetic.** Think the visual language of Vercel, Linear, or Stripe — but warmer and more human. Deep backgrounds with luminous accent colors, generous white space, bold editorial typography, and subtle motion that feels earned, not gimmicky.

### Typography

```
Display/Hero Font:   "Clash Display" or "Syne" (Google Fonts)
                     — Use for H1, H2, hero text, section titles
                     — Weight: 600–800, letter-spacing: -0.02em to -0.04em

Body Font:           "DM Sans" or "Instrument Sans"
                     — Use for paragraphs, nav, buttons, labels
                     — Weight: 400/500, line-height: 1.65

Mono/Accent Font:    "JetBrains Mono" or "IBM Plex Mono"
                     — Use for code snippets, stat numbers, badges

NEVER use:           Arial, Helvetica, Roboto, Inter, system-ui as primary fonts
Self-host all fonts: Use fontsource npm packages for GDPR compliance (no Google CDN pings)
```

### Color Palette

```css
:root {
  /* Primary Brand */
  --color-bg: #0a0f1e; /* Near-black deep navy */
  --color-bg-2: #0f1729; /* Slightly lighter section bg */
  --color-surface: #151d35; /* Card/panel backgrounds */
  --color-border: #1e2a45; /* Subtle borders */

  /* Accent */
  --color-accent: #00d4c8; /* Electric teal — CTAs, links, icons */
  --color-accent-2: #7b61ff; /* Purple — secondary accent */
  --color-accent-warm: #ff6b35; /* Orange — used sparingly for urgency */

  /* Text */
  --color-text: #e8edf7; /* Primary body text */
  --color-text-muted: #8892a4; /* Secondary/muted text */
  --color-text-faint: #3d4e6b; /* Placeholder, disabled */

  /* Utility */
  --color-success: #22c55e;
  --color-warning: #f59e0b;
  --color-error: #ef4444;

  /* Gradients */
  --gradient-hero:
    radial-gradient(
      ellipse at 60% 0%,
      rgba(0, 212, 200, 0.12) 0%,
      transparent 60%
    ),
    radial-gradient(
      ellipse at 10% 80%,
      rgba(123, 97, 255, 0.08) 0%,
      transparent 50%
    );
  --gradient-cta: linear-gradient(135deg, #00d4c8, #7b61ff);
}
```

### Spacing Scale (8px base grid)

```
xs: 4px   sm: 8px   md: 16px   lg: 24px
xl: 32px  2xl: 48px  3xl: 64px  4xl: 96px  5xl: 128px
```

### Border Radius

```
sm: 4px   md: 8px   lg: 16px   xl: 24px   pill: 9999px
```

### Shadows & Depth

```css
--shadow-card: 0 1px 3px rgba(0, 0, 0, 0.4), 0 8px 32px rgba(0, 0, 0, 0.3);
--shadow-glow: 0 0 40px rgba(0, 212, 200, 0.15);
--shadow-hover:
  0 0 60px rgba(0, 212, 200, 0.25), 0 16px 48px rgba(0, 0, 0, 0.4);
```

---

## 5. ANIMATIONS & PARALLAX SYSTEM

### Parallax Implementation (CSS + Intersection Observer — NO heavy libraries)

```javascript
// Parallax layers — add data-parallax="0.2" to elements
// 0.0 = no movement, 0.5 = half scroll speed, 1.0 = full scroll speed
// Negative values move opposite to scroll

document.addEventListener("scroll", () => {
  const scrollY = window.scrollY;
  document.querySelectorAll("[data-parallax]").forEach((el) => {
    const speed = parseFloat(el.dataset.parallax);
    el.style.transform = `translateY(${scrollY * speed}px)`;
  });
});
```

### Required Animations

```
1. Hero entrance:     Staggered fade-up for headline, subtext, CTA button (0ms, 150ms, 300ms delays)
2. Scroll reveal:     Elements fade-up + slide from bottom as they enter viewport (IntersectionObserver)
3. Navbar:            Transparent on hero → frosted glass with backdrop-blur on scroll
4. Counter animation: Stats section numbers count up when they enter viewport
5. Card hover:        Subtle lift + glow border effect (transform + box-shadow transition)
6. Cursor glow:       Optional custom cursor — glowing dot that follows mouse
7. Background grid:   Subtle animated dot grid or line grid in hero background
8. Service cards:     Gradient border appears on hover (using ::before pseudo-element)
9. Blog cards:        Image scale on hover (transform: scale(1.03))
10. CTA section:      Pulsing gradient background animation (background-position keyframes)
```

### Performance Rules for Animations

- Use `will-change: transform` only on actively animating elements
- All animations use `transform` and `opacity` only (GPU-composited — never animate `top`, `left`, `width`, `height`)
- Respect `prefers-reduced-motion` media query:
  ```css
  @media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
      animation: none !important;
      transition: none !important;
    }
  }
  ```

---

## 6. PAGE-BY-PAGE CONTENT SPECIFICATIONS

### 6.1 HOME PAGE (`/`)

**Section 1 — Hero (Full viewport, parallax)**

```
Background:    Animated gradient mesh + subtle floating particle grid
Eyebrow text:  "IT Outsourcing Partner" (badge/pill style)
H1 Headline:   "[Company Name] — Where Technology Meets Results"
               (Large, bold, Clash Display, ~72px desktop / 40px mobile)
Subtext:       "We build, manage, and scale the technology infrastructure that powers
                ambitious businesses across Australia and globally."
CTA Buttons:   Primary: "Get a Free Consultation →"  (links to /contact)
               Secondary: "See Our Work ↓"  (smooth scrolls to services)
Visual:        Abstract 3D tech/network illustration or Lottie animation (right side)
Scroll cue:    Animated chevron/arrow below fold
```

**Section 2 — Trust Bar / Logos**

```
Heading:       "Trusted by forward-thinking companies"
Content:       6–8 client/partner logos (grayscale, full color on hover)
               Use placeholder SVG logos if real ones not provided
Style:         Horizontal scroll marquee animation on mobile
```

**Section 3 — Services Overview**

```
Eyebrow:       "What We Do"
Heading:       "End-to-End IT Solutions"
Subtext:       One sentence summary
Cards (4–6):   Each card has:
               - Icon (SVG, accent color)
               - Service name (H3)
               - 2-sentence description
               - "Learn more →" link to /services/[slug]
               - Hover: glowing border gradient animation
Services:      [List your 4–6 core services here]
```

**Section 4 — Stats / Social Proof**

```
Layout:        3–4 large stat numbers side by side
Stats:         "250+ Projects Delivered"  |  "98% Client Retention"  |
               "15+ Countries Served"     |  "24/7 Support Coverage"
Animation:     Count-up on scroll-into-view
```

**Section 5 — Why Choose Us / USP**

```
Heading:       "Why [Company Name]?"
Layout:        Left text + right visual (alternating on mobile)
Points (4):    Each with icon, heading, and 2-sentence explanation
               e.g. Flat-Rate Pricing / Dedicated Account Manager /
                    No Lock-in Contracts / ISO-Aligned Processes
```

**Section 6 — Process / How It Works**

```
Heading:       "How We Work"
Steps (4):     Numbered, connected by animated line
               1. Discovery Call  2. Proposal & SLA  3. Onboarding  4. Ongoing Support
```

**Section 7 — Testimonials**

```
Heading:       "What Our Clients Say"
Style:         Horizontal sliding carousel (CSS scroll snap)
Cards (3–5):   Quote | Client name | Title | Company | Star rating
```

**Section 8 — Latest Blog Posts**

```
Heading:       "Insights & Resources"
Cards (3):     Latest blog posts (image, category tag, title, date, read time, excerpt)
Link:          "View All Articles →"
```

**Section 9 — CTA Banner**

```
Background:    Full-width animated gradient
Heading:       "Ready to Transform Your IT Operations?"
Subtext:       "Get a free 30-minute consultation with no obligation."
Button:        "Book a Free Call →" (links to /contact)
```

**Section 10 — Footer**
(See Section 6.10 below)

---

### 6.2 ABOUT PAGE (`/about`)

```
Hero:          Page hero with title "About [Company Name]" + breadcrumb nav
Section 1:     Company Story — founding story, mission, vision (2–3 paragraphs)
Section 2:     Mission & Values — 4 value cards with icons
               e.g. Integrity | Innovation | Accountability | Partnership
Section 3:     Team Section — grid of team member cards
               Each card: photo (circular), name, title, LinkedIn icon link
               Add placeholder silhouettes if no photos provided
Section 4:     Certifications & Awards — logo grid (e.g. ISO 27001, Microsoft Partner, AWS Partner)
Section 5:     Company Timeline — horizontal/vertical milestone timeline
               e.g. 2018: Founded | 2020: First 50 clients | 2022: Expanded to EU | etc.
Section 6:     CTA — "Let's Work Together" banner
```

---

### 6.3 SERVICES PAGE (`/services`)

```
Hero:          "Our Services" with subtitle
Overview Grid: All services listed as cards with icon, title, short description, link
Individual service pages (/services/[slug]) must include:
  - Hero with service name
  - What is this service (overview)
  - What's included (feature list with checkmarks)
  - Who it's for (ideal client profile)
  - Process for this service (numbered steps)
  - Pricing tiers (if applicable) OR "Get a Custom Quote" CTA
  - Related case studies
  - FAQ accordion (3–5 questions)
  - CTA section
```

---

### 6.4 BLOG PAGE (`/blog`)

```
Blog Index (/blog):
  - Search bar (client-side JS filtering)
  - Category filter tabs
  - Featured post (large, top)
  - Post grid (3 columns desktop, 2 tablet, 1 mobile)
  - Pagination (6 posts per page)

Individual Post (/blog/[slug]):
  - Hero with cover image, category, title, author, date, read time
  - Article body (MDX/Markdown rendered with proper heading hierarchy)
  - Syntax highlighting for code blocks (Shiki or Prism)
  - Table of contents (sticky sidebar on desktop)
  - Author bio card at bottom
  - Social share buttons (copy link, LinkedIn, Twitter — no tracking pixels)
  - Related posts (3 cards)
  - Comment section (optional — use Giscus for GitHub-based comments)

CMS Instructions for Blog:
  Blog posts are Markdown (.md) files in /src/content/blog/
  Each file has frontmatter:
  ---
  title: "Post Title"
  slug: "post-slug"
  date: 2025-01-15
  author: "Author Name"
  category: "Cloud Computing"
  tags: ["aws", "devops", "cloud"]
  excerpt: "150-character summary for SEO meta description"
  coverImage: "/assets/blog/cover-image.jpg"
  readTime: "5 min read"
  draft: false
  ---
```

---

### 6.5 CONTACT PAGE (`/contact`)

```
Layout:        Two-column: form left, info right

Contact Form fields:
  - Full Name (required)
  - Business Email (required, validated)
  - Company Name (required)
  - Phone Number (optional, with country code selector)
  - Service Interested In (dropdown: all services + "Not sure / General inquiry")
  - Project Budget Range (dropdown: <$5k | $5k–$20k | $20k–$50k | $50k+ | Ongoing retainer)
  - Message / Project Details (textarea, min 20 chars)
  - [x] I agree to the Privacy Policy and consent to being contacted (required checkbox)
  - [ ] Subscribe to newsletter (optional checkbox)
  - Submit button: "Send Message →"

Form backend:
  Use Formspree (https://formspree.io) or Web3Forms — add form action URL as environment variable
  Show success state with animated checkmark after submission
  Show error state with clear message if submission fails
  Add honeypot field for spam protection (hidden input)
  Add reCAPTCHA v3 or hCaptcha (GDPR-compliant alternative)

Right column info:
  - Office address with embedded Google Map iframe (lazy-loaded)
  - Email address (clickable mailto)
  - Phone number (clickable tel)
  - Business hours
  - Response time promise: "We respond within 1 business day"
  - Social links
```

---

### 6.6 PRIVACY POLICY PAGE (`/privacy-policy`)

```
Generate a complete privacy policy covering ALL of the following:
The policy MUST comply with:
  ✓ GDPR (EU General Data Protection Regulation 2016/679)
  ✓ Australian Privacy Act 1988 + Australian Privacy Principles (APPs)
  ✓ UK GDPR (if serving UK clients)
  ✓ CCPA (California Consumer Privacy Act) if serving US clients

Required sections (with proper heading hierarchy):
  1.  Introduction & Who We Are
      - Company legal name, ABN, registered address
      - Data Controller identity (who decides how data is used)
      - Last updated date + version number

  2.  What Personal Data We Collect
      - Data collected automatically (IP, browser, device, cookies, analytics)
      - Data provided voluntarily (contact form, newsletter signup, account creation)
      - Data from third parties (social logins, analytics providers)
      - Special categories of data (state: we do NOT collect these)

  3.  How We Collect Personal Data
      - Directly (contact forms, email, phone)
      - Automatically (cookies, server logs, analytics)
      - From third parties (partners, referrals)

  4.  Legal Basis for Processing (GDPR Article 6)
      - Consent
      - Legitimate Interests
      - Contractual Necessity
      - Legal Obligation
      (Map each processing activity to its legal basis)

  5.  How We Use Your Data
      - Respond to inquiries
      - Provide services under contract
      - Send marketing (only with consent)
      - Analytics and website improvement
      - Legal obligations

  6.  Cookies & Tracking
      - Full cookie table:
        | Cookie Name | Type | Purpose | Duration | Provider |
        (Include: essential, functional, analytics, marketing)
      - Reference to Cookie Policy page
      - How to manage/withdraw consent

  7.  Data Sharing & Third Parties
      - List all processors: [e.g. Google Analytics, Formspree, Cloudflare, Mailchimp]
      - International transfers (Standard Contractual Clauses, adequacy decisions)
      - We never SELL personal data

  8.  Data Retention
      - Contact form data: 2 years
      - Analytics data: 14 months (Google Analytics default)
      - Contractual data: 7 years (Australian tax law)
      - Marketing data: Until consent withdrawn

  9.  Your Rights
      GDPR rights (for EU/UK subjects):
        ✓ Right to access your data (Subject Access Request)
        ✓ Right to rectification
        ✓ Right to erasure ("right to be forgotten")
        ✓ Right to restrict processing
        ✓ Right to data portability
        ✓ Right to object (including to direct marketing)
        ✓ Rights related to automated decision-making
      Australian APP rights:
        ✓ Access and correction rights
        ✓ Complaint resolution process (OAIC)
      How to exercise rights: email [privacy@yourcompany.com]
      Response timeframe: 30 days (GDPR) / reasonable time (APPs)

  10. Children's Privacy
      - Site not directed at children under 16
      - No knowing collection of children's data
      - COPPA reference if applicable

  11. Security Measures
      - Encryption in transit (TLS 1.3)
      - Encryption at rest
      - Access controls and staff training
      - Breach notification procedure (72 hours GDPR / OAIC notification)

  12. Links to Other Websites
      - Disclaimer of responsibility for third-party sites

  13. Changes to This Policy
      - How we notify users of material changes
      - Effective date tracking

  14. How to Complain
      - First: contact us at [privacy@yourcompany.com]
      - GDPR: Supervisory authority in your EU member state
      - Australia: Office of the Australian Information Commissioner (OAIC)
        www.oaic.gov.au | 1300 363 992

  15. Contact the Data Controller
      - Full contact details including postal address

Style: Legal pages must be clean and readable — proper heading hierarchy, no jargon overload.
Add a "Last Updated: [DATE]" notice at top and bottom.
Add a print-friendly stylesheet.
```

---

### 6.7 TERMS OF SERVICE PAGE (`/terms`)

```
Generate full Terms of Service covering:

  1.  Acceptance of Terms
  2.  Description of Services
  3.  Eligibility / Who May Use the Site
  4.  User Accounts (if applicable)
  5.  Acceptable Use Policy
      - Prohibited activities (scraping, spam, illegal use, impersonation)
  6.  Intellectual Property
      - Our content (copyright, trademarks)
      - Your content / license grant
  7.  Service Availability & Disclaimers
      - No uptime guarantee for the website itself
      - "As is" disclaimer
  8.  Limitation of Liability
      - Cap on damages
      - Exclusion of consequential damages
  9.  Indemnification
  10. Third-Party Links
  11. Governing Law & Jurisdiction
      - Laws of [State, Australia] govern
      - Disputes resolved in [State] courts
  12. Dispute Resolution
      - Good faith negotiation first
      - Mediation before litigation
  13. Changes to Terms
  14. Severability
  15. Contact Information

Note: Include Australian Consumer Law (ACL) protections statement.
     Consumers retain statutory rights that cannot be excluded by these terms.
```

---

### 6.8 COOKIE POLICY PAGE (`/cookie-policy`)

```
Required for EU ePrivacy Directive compliance. Include:

  1.  What Are Cookies
  2.  How We Use Cookies
  3.  Types of Cookies We Use:
      ┌─────────────────────────────────────────────────────┐
      │ Category   │ Name      │ Purpose    │ Duration      │
      ├────────────┼───────────┼────────────┼───────────────┤
      │ Essential  │ session   │ Site func  │ Session       │
      │ Essential  │ csrf_tok  │ Security   │ Session       │
      │ Analytics  │ _ga       │ GA4 stats  │ 2 years       │
      │ Analytics  │ _ga_XXXX  │ GA4 session│ 2 years       │
      │ Functional │ consent   │ Cookie pref│ 1 year        │
      │ Marketing  │ (none)    │ (opt-in)   │ N/A           │
      └─────────────────────────────────────────────────────┘
  4.  How to Control Cookies
      - Browser settings guide (Chrome, Firefox, Safari, Edge)
      - Our consent manager (click to open cookie preferences)
      - Opt-out links for specific services
  5.  Google Analytics Opt-Out
  6.  Changes to This Policy
  7.  Contact Us
```

---

### 6.9 404 PAGE (`/404`)

```
Creative, branded 404 page:
  - Large animated "404" number
  - Friendly copy: "Looks like this page went offline."
  - Subtext: "Don't worry — it happens to the best systems."
  - Navigation: links to Home, Services, Contact, Blog
  - Search bar (optional)
  - Subtle animation (floating glitch effect on the 404)
```

---

### 6.10 HEADER & FOOTER (Global Components)

**Header:**

```
- Logo (SVG, links to /)
- Primary navigation (see sitemap)
- Services dropdown mega-menu on hover
- CTA button: "Get a Quote" (accent color, pill shape)
- Mobile: hamburger menu → full-screen overlay with staggered link animation
- Scroll behavior: transparent → frosted glass (backdrop-filter: blur(16px)) after 80px
```

**Footer:**

```
Layout: 4-column grid (2 on tablet, 1 on mobile)

Column 1: Brand
  - Logo
  - Tagline
  - Short company description (2 sentences)
  - Social icons (LinkedIn, Twitter, GitHub)
  - [Country flag] Proudly based in [City, Country]

Column 2: Company
  - About Us
  - Services
  - Case Studies
  - Blog
  - Careers (even if placeholder)

Column 3: Services (quick links)
  - [List all services]

Column 4: Contact
  - Address
  - Email (clickable)
  - Phone (clickable)
  - Business hours

Footer Bottom Bar:
  - © [YEAR] [Company Name] Pty Ltd. All rights reserved.
  - ABN: [XX XXX XXX XXX]
  - Privacy Policy | Terms of Service | Cookie Policy
  - "Built with ♥ in [City]"
```

---

## 7. SEO — COMPLETE TECHNICAL REQUIREMENTS

### 7.1 On-Page SEO (Every Page)

```html
<!-- Required meta tags on every page -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>[Page Title] | [Company Name]</title>
<!-- Title format: Primary Keyword - Secondary Keyword | Brand (max 60 chars) -->
<meta
  name="description"
  content="[150-160 char description with primary keyword]"
/>
<meta name="keywords" content="[5-10 comma-separated keywords]" />
<meta name="author" content="[Company Name]" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="https://[domain.com]/[page-path]" />
```

### 7.2 Open Graph (Social Sharing)

```html
<meta property="og:type" content="website" />
<meta property="og:title" content="[Page Title]" />
<meta
  property="og:description"
  content="[Same or similar to meta description]"
/>
<meta
  property="og:image"
  content="https://[domain.com]/assets/og/og-[page].jpg"
/>
<!-- OG images must be 1200×630px -->
<meta property="og:url" content="https://[domain.com]/[page-path]" />
<meta property="og:site_name" content="[Company Name]" />
<meta property="og:locale" content="en_AU" />

<!-- Twitter/X Card -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@[TwitterHandle]" />
<meta name="twitter:title" content="[Page Title]" />
<meta name="twitter:description" content="[Description]" />
<meta
  name="twitter:image"
  content="https://[domain.com]/assets/og/og-[page].jpg"
/>
```

### 7.3 Structured Data (JSON-LD — Required)

```html
<!-- Organization schema (add to every page) -->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "[Company Name]",
    "url": "https://[domain.com]",
    "logo": "https://[domain.com]/assets/images/logo.png",
    "description": "[Company description]",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "[Street]",
      "addressLocality": "[City]",
      "addressRegion": "[State]",
      "postalCode": "[Postcode]",
      "addressCountry": "AU"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "[+61XXXXXXXXX]",
      "contactType": "customer service",
      "availableLanguage": ["English"]
    },
    "sameAs": [
      "https://www.linkedin.com/company/[handle]",
      "https://twitter.com/[handle]"
    ]
  }
</script>

<!-- LocalBusiness schema (add to contact/home page) -->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "[Company Name]",
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
        "opens": "09:00",
        "closes": "17:30"
      }
    ]
  }
</script>

<!-- WebSite schema with Sitelinks Searchbox -->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "[Company Name]",
    "url": "https://[domain.com]",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "https://[domain.com]/blog?q={search_term_string}",
      "query-input": "required name=search_term_string"
    }
  }
</script>

<!-- Blog posts use Article schema -->
<!-- Service pages use Service schema -->
<!-- FAQs use FAQPage schema with Question/Answer -->
```

### 7.4 Technical SEO Files

```
/robots.txt:
  User-agent: *
  Allow: /
  Disallow: /admin/
  Disallow: /api/
  Sitemap: https://[domain.com]/sitemap.xml

/sitemap.xml:
  Auto-generated by Astro sitemap plugin.
  Include: all HTML pages, blog posts, service pages
  Exclude: /admin/, /api/, /404, draft posts
  Add <lastmod> and <changefreq> to each URL
  Submit to Google Search Console and Bing Webmaster Tools
```

### 7.5 Core Web Vitals Targets (Google Page Experience)

```
LCP (Largest Contentful Paint):   < 2.5 seconds
INP (Interaction to Next Paint):  < 200 milliseconds
CLS (Cumulative Layout Shift):    < 0.1

Achieve these by:
  ✓ Serve hero image as WebP, preload with <link rel="preload">
  ✓ Set explicit width/height on all images (prevents CLS)
  ✓ Self-host fonts (prevent FOUT/CLS from font swap)
  ✓ Inline critical CSS in <head>
  ✓ Defer non-critical JS with async/defer
  ✓ Use srcset for responsive images
  ✓ Compress all images to WebP (85% quality max)
  ✓ Enable gzip/Brotli compression in .htaccess
  ✓ Set aggressive Cache-Control headers for static assets
  ✓ Minify HTML, CSS, JS in build step
```

### 7.6 htaccess for cPanel (Performance + Security)

```apache
# /public_html/.htaccess

# Enable Gzip compression
<IfModule mod_deflate.c>
  AddOutputFilterByType DEFLATE text/html text/plain text/css
  AddOutputFilterByType DEFLATE application/javascript application/json
  AddOutputFilterByType DEFLATE image/svg+xml font/woff2
</IfModule>

# Browser caching
<IfModule mod_expires.c>
  ExpiresActive On
  ExpiresByType image/webp              "access plus 1 year"
  ExpiresByType image/svg+xml          "access plus 1 year"
  ExpiresByType font/woff2             "access plus 1 year"
  ExpiresByType text/css               "access plus 6 months"
  ExpiresByType application/javascript "access plus 6 months"
  ExpiresByType text/html              "access plus 1 hour"
</IfModule>

# Security headers
<IfModule mod_headers.c>
  Header always set X-Content-Type-Options nosniff
  Header always set X-Frame-Options SAMEORIGIN
  Header always set X-XSS-Protection "1; mode=block"
  Header always set Referrer-Policy "strict-origin-when-cross-origin"
  Header always set Permissions-Policy "camera=(), microphone=(), geolocation=()"
  Header always set Strict-Transport-Security "max-age=31536000; includeSubDomains"
  Header always set Content-Security-Policy "default-src 'self'; script-src 'self' 'unsafe-inline' https://www.google-analytics.com https://www.googletagmanager.com; style-src 'self' 'unsafe-inline'; img-src 'self' data: https:; font-src 'self'; connect-src 'self' https://www.google-analytics.com;"
</IfModule>

# Remove .html extension from URLs
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^([^\.]+)$ $1.html [NC,L]

# Force HTTPS
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

# Custom 404
ErrorDocument 404 /404.html
```

---

## 8. GOOGLE METRICS & ANALYTICS INTEGRATION

### 8.1 Google Analytics 4 (GA4)

```html
<!-- Add to <head> of every page — replace G-XXXXXXXXXX with your Measurement ID -->
<!-- Obtain from: analytics.google.com → Admin → Data Streams -->

<!-- Google tag (gtag.js) -->
<script
  async
  src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"
></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() {
    dataLayer.push(arguments);
  }
  gtag("js", new Date());

  // GDPR: Only fire after consent is given
  // Default to denied — consent manager will update these
  gtag("consent", "default", {
    analytics_storage: "denied",
    ad_storage: "denied",
    wait_for_update: 500,
  });

  gtag("config", "G-XXXXXXXXXX", {
    anonymize_ip: true, // GDPR requirement
    cookie_flags: "SameSite=None;Secure",
    send_page_view: true,
  });
</script>
```

### 8.2 Google Tag Manager (GTM) — Recommended over raw GA4

```html
<!-- Add to <head> immediately after opening tag -->
<!-- Obtain GTM-XXXXXXX from: tagmanager.google.com -->
<script>
  (function (w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != "dataLayer" ? "&l=" + l : "";
    j.async = true;
    j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, "script", "dataLayer", "GTM-XXXXXXX");
</script>

<!-- Add immediately after <body> tag -->
<noscript
  ><iframe
    src="https://www.googletagmanager.com/ns.html?id=GTM-XXXXXXX"
    height="0"
    width="0"
    style="display:none;visibility:hidden"
  ></iframe
></noscript>
```

### 8.3 Google Search Console

```
Setup steps (document in README):
1. Verify site ownership:
   - Method 1: Upload google[verification-code].html to public_html root
   - Method 2: Add <meta name="google-site-verification" content="[code]"> to <head>
2. Submit sitemap: https://[domain.com]/sitemap.xml
3. Monitor: Coverage errors, Core Web Vitals, Search Performance
4. Set preferred domain (www vs non-www) as canonical
```

### 8.4 Consent-Gated Analytics (GDPR Compliance)

```javascript
// Cookie consent integration with GA4
// Fire this ONLY after user accepts analytics cookies

function enableAnalytics() {
  gtag("consent", "update", {
    analytics_storage: "granted",
  });
  // GTM trigger: custom event 'analytics_consent_granted'
  dataLayer.push({ event: "analytics_consent_granted" });
}

// Wire this to your cookie consent manager's "Accept" callback
// Example: Orejime onSave callback, Cookiebot onAccept, etc.
```

### 8.5 Key Events to Track in GTM/GA4

```
Event Name              | Trigger
──────────────────────────────────────────────────────
page_view               | Every page load (built-in)
contact_form_submit     | Form submission success
cta_click               | Any "Get a Quote" / "Book a Call" button
service_page_view       | /services/* page view
blog_article_read       | Scroll depth > 80% on /blog/*
phone_click             | Click on tel: link
email_click             | Click on mailto: link
download_brochure       | PDF download (if offered)
video_play              | Any embedded video play
outbound_link_click     | Click on external link
```

---

## 9. EUROPEAN UNION (EU) & INTERNATIONAL LEGAL REQUIREMENTS

### 9.1 GDPR Cookie Consent Banner

```
REQUIREMENT: Must appear on FIRST visit for EU/UK visitors.
             Do NOT set non-essential cookies until consent is given.

Implement using: Orejime (open source, GDPR-compliant)
OR: Cookiebot (free for single domain)
OR: Build custom implementation

Cookie Banner must have:
  ✓ Clear, plain-language explanation of cookie use
  ✓ Granular consent options (not just "Accept All"):
      □ Essential (always on, non-toggleable)
      □ Analytics/Performance (off by default)
      □ Marketing/Advertising (off by default)
  ✓ "Accept All" AND "Reject All" buttons (equal prominence — CJEU ruling)
  ✓ "Manage Preferences" link
  ✓ Link to full Cookie Policy and Privacy Policy
  ✓ Easy withdrawal of consent (link in footer: "Cookie Preferences")
  ✓ Consent stored for 12 months max, then re-prompt
  ✓ Consent record logging (store consent ID + timestamp in localStorage)

BANNED practices under GDPR:
  ✗ Pre-ticked checkboxes
  ✗ Dark patterns (making "Reject" harder than "Accept")
  ✗ Consent wall (blocking content unless cookies accepted)
  ✗ Bundling consent (making it all-or-nothing for essential+non-essential)
```

### 9.2 EU Accessibility (WCAG 2.1 AA / EN 301 549)

```
Required for sites serving EU users (European Accessibility Act 2025):

Color Contrast:
  Body text vs background:      ≥ 4.5:1
  Large text (18px+ or 14px bold): ≥ 3:1
  UI components & focus rings:  ≥ 3:1

Keyboard Navigation:
  All interactive elements reachable via Tab
  Visible focus indicator (outline: 2px solid var(--color-accent))
  Skip navigation link: <a href="#main-content">Skip to main content</a>
  Logical tab order throughout

Screen Reader Support:
  All images have meaningful alt="" text (decorative: alt="")
  Form inputs have <label> elements
  ARIA roles for custom components (nav, main, aside, etc.)
  Hamburger menu: aria-expanded, aria-controls attributes
  Dynamic content: aria-live="polite" for status messages

Other:
  No content flashes more than 3 times per second
  Text can be resized to 200% without horizontal scrolling
  Touch targets ≥ 44×44px on mobile
  <html lang="en"> declared on every page
```

### 9.3 Australian Privacy Act Compliance

```
Required under Privacy Act 1988 + Australian Privacy Principles:
  ✓ Privacy Policy published and linked in footer
  ✓ Collection notice at point of data collection (form tooltip/note)
  ✓ Only collect data that is reasonably necessary
  ✓ Secure storage of personal data
  ✓ Data breach notification procedure
  ✓ Cross-border disclosure provisions
  ✓ Access and correction rights provided
  ✓ Complaint handling process
  ✓ Privacy contact: privacy@[yourcompany.com.au]

If revenue > AUD $3M/year: Full APP compliance required
If handling health information or contractor for government: Full compliance regardless of revenue
```

---

## 10. CMS SETUP — FULL INSTRUCTIONS

### Option A: Decap CMS (Recommended — Git-based, free, works with Astro)

```
Setup:
1. Create /public/admin/index.html:
   ────────────────────────────────
   <!doctype html>
   <html>
   <head>
     <meta charset="utf-8">
     <title>Content Manager</title>
   </head>
   <body>
     <script src="https://unpkg.com/decap-cms@^3.0.0/dist/decap-cms.js"></script>
   </body>
   </html>

2. Create /public/admin/config.yml:
   ────────────────────────────────
   backend:
     name: git-gateway
     branch: main

   media_folder: "public/assets/uploads"
   public_folder: "/assets/uploads"

   collections:
     - name: "blog"
       label: "Blog Posts"
       folder: "src/content/blog"
       create: true
       slug: "{{slug}}"
       fields:
         - {label: Title, name: title, widget: string}
         - {label: Publish Date, name: date, widget: datetime}
         - {label: Author, name: author, widget: string}
         - {label: Category, name: category, widget: string}
         - {label: Excerpt, name: excerpt, widget: text}
         - {label: Cover Image, name: coverImage, widget: image}
         - {label: Body, name: body, widget: markdown}
         - {label: Draft, name: draft, widget: boolean, default: false}

     - name: "services"
       label: "Services"
       folder: "src/content/services"
       create: true
       fields:
         - {label: Title, name: title, widget: string}
         - {label: Icon, name: icon, widget: string}
         - {label: Short Description, name: excerpt, widget: text}
         - {label: Body, name: body, widget: markdown}

     - name: "settings"
       label: "Site Settings"
       files:
         - label: "General Settings"
           name: "general"
           file: "src/data/settings.json"
           fields:
             - {label: Site Title, name: siteTitle, widget: string}
             - {label: Tagline, name: tagline, widget: string}
             - {label: Contact Email, name: email, widget: string}
             - {label: Phone, name: phone, widget: string}

3. Authentication: Use Netlify Identity OR GitHub OAuth backend
4. Access CMS at: https://[yourdomain.com]/admin/

For pure cPanel (no Git):
  → Use Sveltia CMS (fork of Decap) with local backend
  → OR use TinaCMS with tina.io free cloud
```

### Option B: Grav CMS (PHP, no database, cPanel-friendly)

```
Installation on cPanel:
1. Download Grav + Admin from getgrav.org/downloads
2. Extract ZIP into public_html via cPanel File Manager
3. Set permissions: folders 755, files 644
4. Access admin at: https://[yourdomain.com]/admin
5. Default login: admin / [set on first run]

Content editing:
  - Blog posts: Pages → Add New → Blog Item
  - Services: Edit pages in Pages section
  - All content in Markdown with YAML frontmatter

Recommended Grav plugins:
  - SEO (sitemap, meta tags)
  - Breadcrumbs
  - Form (contact forms)
  - SmartyPants (typography)
  - TNTSearch (site search)
  - Pagination
  - RelatedPages

Theme: Create custom theme or adapt Quark theme
```

---

## 11. PERFORMANCE CHECKLIST

```
Build output requirements:
  □ HTML minified (remove whitespace, comments)
  □ CSS minified + purged (PurgeCSS removes unused Tailwind classes)
  □ JS minified + tree-shaken (Rollup/Vite in Astro handles this)
  □ All images converted to WebP (max 85% quality)
  □ Hero images: max 200KB
  □ All images have explicit width/height attributes
  □ Fonts: WOFF2 format, subset to used characters only
  □ Critical CSS inlined in <head>
  □ Non-critical CSS loaded async
  □ JavaScript deferred where not needed for initial render
  □ No render-blocking resources in <head>
  □ Favicon: /favicon.ico + /favicon.svg + apple-touch-icon.png
  □ Web App Manifest: /manifest.json (for PWA-readiness)

Target scores (Google PageSpeed Insights):
  Desktop:  Performance ≥ 95 | Accessibility ≥ 95 | Best Practices ≥ 100 | SEO ≥ 100
  Mobile:   Performance ≥ 85 | Accessibility ≥ 95 | Best Practices ≥ 100 | SEO ≥ 100
```

---

## 12. RESPONSIVE DESIGN BREAKPOINTS

```css
/* Mobile-first breakpoints */
/* xs: default (< 480px) */
@media (min-width: 480px)  { /* sm: large mobile */ }
@media (min-width: 768px)  { /* md: tablet */ }
@media (min-width: 1024px) { /* lg: desktop */ }
@media (min-width: 1280px) { /* xl: large desktop */ }
@media (min-width: 1536px) { /* 2xl: ultrawide */ }

/* Mobile-specific requirements */
  - Hamburger nav at < 1024px
  - Hero font: 36–40px on mobile (vs 64–80px desktop)
  - Single column layout on mobile for all grids
  - Touch-friendly tap targets: min 44×44px
  - No horizontal scroll at any viewport width
  - Sticky CTA bar at bottom on mobile (optional)
  - Services dropdown becomes accordion on mobile

/* Content max-width */
  --container-max: 1200px;
  --container-padding: clamp(16px, 4vw, 48px);
```

---

## 13. ACCESSIBILITY (WCAG 2.1 AA)

```
Semantic HTML:
  □ One <h1> per page
  □ Logical heading hierarchy (H1 → H2 → H3, no skipping)
  □ <main>, <nav>, <header>, <footer>, <aside> landmarks
  □ <article> for blog posts
  □ <section> with aria-label for unnamed sections

Forms:
  □ All inputs have associated <label> (not placeholder-only)
  □ Error messages associated with inputs via aria-describedby
  □ Required fields marked with aria-required="true"
  □ Success/error states announced to screen readers (aria-live)

Images:
  □ Informative images: descriptive alt text
  □ Decorative images: alt=""
  □ Complex images (charts, diagrams): long description via aria-describedby

Interactive:
  □ All buttons have accessible names
  □ Icon-only buttons have aria-label
  □ Focus visible on all interactive elements
  □ No keyboard traps
  □ Modals trap focus correctly and close on Escape
  □ Skip link: <a class="sr-only focus:not-sr-only" href="#main">Skip to main content</a>

Motion:
  □ prefers-reduced-motion respected (disable all animations)
```

---

## 14. SECURITY REQUIREMENTS

```
□ HTTPS enforced (SSL certificate — free Let's Encrypt via cPanel)
□ All HTTP → HTTPS redirects in .htaccess
□ Security headers set (see .htaccess section above)
□ Contact form: honeypot field + hCaptcha
□ No sensitive data in client-side JavaScript
□ Admin panel protected by HTTP auth (cPanel → Password Protect Directories)
□ File upload restrictions (if CMS allows uploads — validate file types)
□ No directory listing (Options -Indexes in .htaccess)
□ Dependency audit: npm audit before deployment
□ No console.log() statements in production build
□ CSP header blocks inline scripts where possible
```

---

## 15. DEPLOYMENT GUIDE (cPanel)

```
Step-by-step deployment to cPanel shared hosting:

PRE-DEPLOYMENT:
  1. Run: npm run build
  2. Verify: /dist folder contains all files
  3. Test locally: npx serve dist

UPLOAD METHODS:

Method A — File Manager (small sites):
  1. Compress /dist to dist.zip
  2. Login to cPanel → File Manager → public_html
  3. Upload dist.zip
  4. Extract in place
  5. Move all files from /dist subfolder to public_html root (if needed)

Method B — FTP (recommended for larger sites):
  1. cPanel → FTP Accounts → Create FTP user
  2. Connect via FileZilla or Cyberduck
  3. Upload contents of /dist to /public_html
  4. Verify .htaccess uploaded (it's a hidden file)

Method C — SSH + Git (if host supports SSH):
  1. cPanel → Terminal or SSH Access
  2. cd public_html
  3. git clone [repo] .
  4. npm install && npm run build
  5. cp -r dist/* ./
  Add to cron: 0 0 * * * cd ~/public_html && git pull && npm run build

POST-DEPLOYMENT CHECKLIST:
  □ Check all pages load correctly
  □ Submit sitemap to Google Search Console
  □ Test contact form (receive test email)
  □ Test on mobile (BrowserStack or real device)
  □ Run Google PageSpeed Insights
  □ Run WAVE accessibility checker (wave.webaim.org)
  □ Verify HTTPS working and padlock shows
  □ Check cookie consent banner appears
  □ Test 404 page
  □ Verify canonical URLs correct
  □ Check robots.txt accessible at /robots.txt
  □ Check sitemap accessible at /sitemap.xml
  □ Set up Google Search Console property
  □ Set up GA4 and verify data coming in
```

---

## 16. CONTENT TO CREATE (PLACEHOLDER TEXT)

If real content is not yet available, generate placeholder content for:

```
Blog posts (minimum 3 to launch):
  1. "The True Cost of IT Downtime for Australian SMBs" (~1200 words)
  2. "How to Choose the Right IT Outsourcing Partner in 2025" (~1500 words)
  3. "Cloud Migration Checklist: 12 Steps Before You Move" (~1000 words)

Each blog post must include:
  - Target keyword in title, H1, first paragraph, and 2–3 more times naturally
  - Meta description (150–160 chars)
  - 3–4 H2 subheadings
  - At least one internal link to a service page
  - At least one external link to a credible source
  - A call-to-action at the end (contact or related service)

Service page copy template:
  Headline:      "[Service Name] Services for Australian Businesses"
  Intro:         2 paragraphs — problem → solution
  Features:      6 bullet points with checkmarks
  Process:       4 numbered steps
  FAQ:           5 questions + answers
  CTA:           "Get a Free [Service] Assessment"
```

---

## 17. FOLDER STRUCTURE (Final Build)

```
project-root/
├── src/
│   ├── components/          # Reusable UI components
│   │   ├── Header.astro
│   │   ├── Footer.astro
│   │   ├── HeroSection.astro
│   │   ├── ServicesGrid.astro
│   │   ├── BlogCard.astro
│   │   ├── ContactForm.astro
│   │   ├── CookieConsent.astro
│   │   └── SEO.astro        # Meta tags component
│   ├── layouts/
│   │   ├── BaseLayout.astro  # HTML shell, SEO, GA
│   │   └── BlogLayout.astro  # Blog post layout
│   ├── pages/
│   │   ├── index.astro       # Home
│   │   ├── about.astro
│   │   ├── services/
│   │   │   ├── index.astro
│   │   │   └── [slug].astro  # Dynamic service pages
│   │   ├── blog/
│   │   │   ├── index.astro
│   │   │   └── [slug].astro
│   │   ├── contact.astro
│   │   ├── privacy-policy.astro
│   │   ├── terms.astro
│   │   ├── cookie-policy.astro
│   │   └── 404.astro
│   ├── content/
│   │   ├── blog/             # .md files for blog posts
│   │   └── services/         # .md files for services
│   └── styles/
│       ├── global.css        # CSS variables, reset, typography
│       └── animations.css    # Keyframes, parallax, transitions
├── public/
│   ├── assets/
│   │   ├── images/           # Logo, photos (WebP)
│   │   ├── icons/            # SVG icons
│   │   └── og/               # OG images (1200×630)
│   ├── admin/                # Decap CMS admin
│   │   ├── index.html
│   │   └── config.yml
│   ├── robots.txt
│   ├── favicon.ico
│   ├── favicon.svg
│   └── manifest.json
├── astro.config.mjs
├── tailwind.config.cjs
├── package.json
└── README.md                 # Deployment instructions
```

---

## 18. README — DEPLOYMENT INSTRUCTIONS TEMPLATE

```markdown
# [Company Name] Website

## Tech Stack

- Framework: Astro 4.x (Static Site Generator)
- Styling: Tailwind CSS 3.x
- CMS: Decap CMS (admin at /admin)
- Forms: Formspree / Web3Forms
- Hosting: cPanel Shared Hosting

## Prerequisites

- Node.js 18+
- npm 9+

## Development

npm install
npm run dev

# Site available at http://localhost:4321

## Build for Production

npm run build

# Output: /dist folder — upload ALL contents to cPanel public_html

## Environment Variables

Create a .env file (never commit this):
PUBLIC_GA_ID=G-XXXXXXXXXX
PUBLIC_GTM_ID=GTM-XXXXXXX
PUBLIC_FORMSPREE_ID=xxxxxxxxxxx
PUBLIC_RECAPTCHA_SITE_KEY=xxxxxxxxxx

## Deploying to cPanel

1. Run: npm run build
2. FTP/upload entire /dist folder contents to /public_html
3. Ensure .htaccess is present in /public_html root
4. SSL certificate must be active (Let's Encrypt via cPanel)

## Adding Blog Posts

Create a new file: /src/content/blog/your-post-slug.md
Follow the frontmatter template in existing posts.
Run build and redeploy, or use Decap CMS at /admin.

## Content Updates Without Rebuilding

Use the CMS at https://[yourdomain.com]/admin

## Support

[your-dev-email@company.com]
```

---

# END OF MASTER PROMPT

# ═══════════════════════════════════════════

---

## QUICK REFERENCE CHECKLIST

### Before Asking AI to Build

- [ ] Fill in all [PLACEHOLDER] values in Section 1
- [ ] Decide on stack (Option A static vs Option B PHP)
- [ ] Have logo ready (SVG preferred)
- [ ] Have brand colors confirmed
- [ ] Have at least 3 service descriptions written
- [ ] Have team photo URLs or placeholders agreed

### After AI Builds the Site

- [ ] Replace all placeholder text with real content
- [ ] Add real client testimonials
- [ ] Add real team photos
- [ ] Update Privacy Policy dates and company legal details
- [ ] Set up Formspree/Web3Forms and add real endpoint
- [ ] Add Google Analytics 4 Measurement ID
- [ ] Add Google Tag Manager container ID
- [ ] Set up Google Search Console
- [ ] Purchase and configure SSL certificate
- [ ] Test on 3+ real devices before launch
- [ ] Run accessibility audit (wave.webaim.org)
- [ ] Run security headers check (securityheaders.com)
- [ ] Run performance audit (pagespeed.web.dev)

---

_Guide version 1.0 — Created May 2026_
_Covers: GDPR, Australian Privacy Act 1988, WCAG 2.1 AA, Core Web Vitals 2025, EU Accessibility Act_
