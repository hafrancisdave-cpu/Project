<?php

$userRole   = "admin";
$department = "billing";

$panel       = "";
$permissions = "";

switch ($userRole) {
    case "admin":
        $permissions = "Full read/write/delete access";

        switch ($department) {
            case "billing":
                $panel = "Financial Admin Panel";
                break;
            case "tech":
                $panel = "System Admin Panel";
                break;
            default:
                $panel = "General Admin Panel";
                break;
        }
        break;

    case "editor":
        $permissions = "Read/write access to content";
        $panel       = "Editor Panel";
        break;

    case "viewer":
        $permissions = "Read-only access";
        $panel       = "Viewer Panel";
        break;

    default:
        http_response_code(403);
        echo "HTTP/1.1 403 Forbidden\n";
        echo "Access denied: unrecognized user role '{$userRole}'.\n";
        exit;
}

echo "User role: {$userRole}\n";
echo "Department: {$department}\n";
echo "Assigned panel: {$panel}\n";
echo "Base permissions: {$permissions}\n";