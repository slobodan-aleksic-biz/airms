<?php

use App\Enums\EntityEnum;
use App\Enums\UserRoleEnum;
use Carbon\Carbon;
use Illuminate\Support\Str;

if (!function_exists('getLoginRedirection')) {
    function getLoginRedirection($entity)
    {
        return redirect()->route(getLoginRouteForUserRole($entity));
    }
}

if (!function_exists('getLoginPath')) {
    function getLoginPath($entity)
    {
        return route(getLoginRouteForUserRole($entity));
    }
}

if (!function_exists('getLoginRouteForUserRole')) {
    function getLoginRouteForUserRole($entity)
    {
        switch ($entity) {
            case EntityEnum::ADMIN:
                return 'api.admin.dashboard';
                break;
            case EntityEnum::PART_145:
                return 'api.part_145.dashboard';
                break;
            case EntityEnum::CAMO:
                return 'api.camo.dashboard';
                break;
            case EntityEnum::QA:
                return 'api.qa.dashboard';
                break;
            case EntityEnum::MCC:
                return 'api.mcc.dashboard';
                break;
            case EntityEnum::STOCK:
                return 'api.stock.dashboard';
                break;
            case EntityEnum::SCHOOL:
                return 'api.school.dashboard';
                break;
            case EntityEnum::CREW_MEMBER:
                return 'api.crewMember.dashboard';
                break;
            default:
                return 'api/auth/login';
        }
    }
}


if (!function_exists('makeSluggedValueWithTimestamp')) {
    function makeSluggedValueWithTimestamp($label)
    {
        $fieldSlug = Str::slug($label, '-');
        $timestamp = Carbon::now()->timestamp;
        $fieldKey = "{$fieldSlug}_{$timestamp}";

        return $fieldKey;
    }
}
