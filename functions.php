<?php

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
}

function rich_text(string $value): string
{
    $allowedTags = "<p><br><i><em><strong><b><ul><ol><li>";
    $safeValue = strip_tags($value, $allowedTags);
    $safeValue = preg_replace_callback(
        "/<\/?(p|br|i|em|strong|b|ul|ol|li)\b[^>]*>/i",
        static fn(array $match): string => str_starts_with($match[0], "</") ? "</{$match[1]}>" : "<{$match[1]}>",
        $safeValue
    ) ?? "";

    return preg_replace("/\r\n?|\n/", "<br>", trim($safeValue)) ?? "";
}

function base_path(): string
{
    $scriptDirectory = str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"] ?? ""));

    return $scriptDirectory === "/" || $scriptDirectory === "." ? "" : rtrim($scriptDirectory, "/");
}

function url(string $path = ""): string
{
    $normalizedPath = "/" . ltrim($path, "/");

    return base_path() . ($normalizedPath === "/" ? "/" : $normalizedPath);
}

function request_path(): string
{
    $path = parse_url($_SERVER["REQUEST_URI"] ?? "/", PHP_URL_PATH) ?: "/";
    $basePath = base_path();

    if ($basePath !== "" && str_starts_with($path, $basePath)) {
        $path = substr($path, strlen($basePath)) ?: "/";
    }

    return "/" . trim($path, "/");
}

function dd(mixed $data): never
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}
