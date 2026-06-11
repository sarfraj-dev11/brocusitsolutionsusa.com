<?php
/**
 * Helper functions — reads from config/config.php
 * Include via bootstrap.php, never directly.
 */

// ── URL / asset helpers ─────────────────────────────

/** Absolute URL to an asset, e.g. asset('css/style.css') */
function asset(string $path): string {
    return BASE_PATH . '/assets/' . ltrim($path, '/');
}

/** URL to an internal page, e.g. url('contact.php') */
function url(string $path = ''): string {
    return BASE_PATH . '/' . ltrim($path, '/');
}

// ── Page / navigation helpers ───────────────────────

/** Returns the slug of the current page (without .php) */
function currentPage(): string {
    return basename($_SERVER['PHP_SELF'], '.php') ?: 'index';
}

/** Returns $class if $slug matches the current page */
function activeClass(string $slug, string $class = 'sh-link--active'): string {
    return currentPage() === $slug ? $class : '';
}

// ── Contact helpers ─────────────────────────────────

function phoneLink(string $label = ''): string {
    $text = $label ?: PHONE_DISPLAY;
    return '<a href="tel:' . PHONE_TEL . '">' . htmlspecialchars($text) . '</a>';
}

function emailLink(string $label = ''): string {
    $text = $label ?: EMAIL_INFO;
    return '<a href="mailto:' . EMAIL_INFO . '">' . htmlspecialchars($text) . '</a>';
}

// ── Security helpers ────────────────────────────────

/** Generate a CSRF token (stored in session) */
function csrfToken(): string {
    if (session_status() === PHP_SESSION_NONE) session_start();
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/** Verify CSRF token from POST */
function verifyCsrf(): bool {
    if (session_status() === PHP_SESSION_NONE) session_start();
    $token = $_POST['csrf_token'] ?? '';
    return !empty($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

/** Sanitise a string input */
function clean(string $input): string {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}

/** Validate US phone number (basic) */
function validPhone(string $p): bool {
    return (bool) preg_match('/^\+?1?[\s\-\.]?\(?\d{3}\)?[\s\-\.]?\d{3}[\s\-\.]?\d{4}$/', $p);
}

// ── Meta / SEO helpers ──────────────────────────────

/** Output standard meta tags for a page */
function pageMeta(string $title, string $desc, string $canonical = ''): void {
    echo '<title>' . htmlspecialchars($title) . '</title>' . PHP_EOL;
    echo '<meta name="description" content="' . htmlspecialchars($desc) . '">' . PHP_EOL;
    echo '<meta property="og:title" content="' . htmlspecialchars($title) . '">' . PHP_EOL;
    echo '<meta property="og:description" content="' . htmlspecialchars($desc) . '">' . PHP_EOL;
    echo '<meta property="og:type" content="website">' . PHP_EOL;
    if ($canonical) {
        echo '<link rel="canonical" href="' . htmlspecialchars($canonical) . '">' . PHP_EOL;
    }
}

// ── Analytics ───────────────────────────────────────

function gaScript(): void {
    if (GA_ID && APP_ENV === 'production') {
        echo '<script async src="https://www.googletagmanager.com/gtag/js?id=' . GA_ID . '"></script>' . PHP_EOL;
        echo '<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag("js",new Date());gtag("config","' . GA_ID . '");</script>' . PHP_EOL;
    }
}

// ── JSON-LD structured data ─────────────────────────

function localBusinessSchema(): string {
    return json_encode([
        '@context' => 'https://schema.org',
        '@type'    => 'LocalBusiness',
        'name'     => SITE_NAME,
        'url'      => SITE_URL,
        'telephone'=> PHONE_DISPLAY,
        'email'    => EMAIL_INFO,
        'address'  => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => ADDR_LINE1,
            'addressLocality' => ADDR_CITY,
            'addressRegion'   => ADDR_STATE,
            'postalCode'      => ADDR_ZIP,
            'addressCountry'  => 'US',
        ],
        'openingHours' => ['Mo-Fr 09:00-18:00', 'Sa 10:00-16:00'],
        'priceRange'   => 'Free consultation',
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}
