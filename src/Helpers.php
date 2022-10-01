<?php 

function site(string $param = NULL): string {
	if ($param && !empty(SITE["$param"]))
		return SITE["$param"];

	return SITE["root"];
}

function asset(string $path): string {
	return SITE["root"]."/views/assets/{$path}";
}

function flash(string $type = NULL, string $message = NULL): ?string {
	if ($type && $message) {
		$_SESSION["flash"] = [
			"type" => $type,
			"message" => $message
		];

		return NULL;
	}

	if (!empty($_SESSION["flash"]) && $flash = $_SESSION["flash"]) {
		unset($_SESSION["flash"]);
		return "<div class=\"message {$flash["type"]}\">{$flash["message"]}</div>";
	}

	return NULL;
}