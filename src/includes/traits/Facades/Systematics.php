<?php
declare (strict_types = 1);
namespace WebSharks\WpSharks\s2MemberX\Pro\Traits\Facades;

use WebSharks\WpSharks\s2MemberX\Pro\Classes;
use WebSharks\WpSharks\s2MemberX\Pro\Interfaces;
use WebSharks\WpSharks\s2MemberX\Pro\Traits;
#
use WebSharks\WpSharks\s2MemberX\Pro\Classes\AppFacades as a;
use WebSharks\WpSharks\s2MemberX\Pro\Classes\SCoreFacades as s;
use WebSharks\WpSharks\s2MemberX\Pro\Classes\CoreFacades as c;
#
use WebSharks\WpSharks\Core\Classes as SCoreClasses;
use WebSharks\WpSharks\Core\Interfaces as SCoreInterfaces;
use WebSharks\WpSharks\Core\Traits as SCoreTraits;
#
use WebSharks\Core\WpSharksCore\Classes as CoreClasses;
use WebSharks\Core\WpSharksCore\Classes\Core\Base\Exception;
use WebSharks\Core\WpSharksCore\Interfaces as CoreInterfaces;
use WebSharks\Core\WpSharksCore\Traits as CoreTraits;

trait Systematics
{
    /**
     * @since 16xxxx Initial release.
     */
    public static function systematicPostIds(...$args)
    {
        return $GLOBALS[static::class]->Utils->Systematic->postIds(...$args);
    }

    /**
     * @since 16xxxx Initial release.
     */
    public static function systematicPostTypes(...$args)
    {
        return $GLOBALS[static::class]->Utils->Systematic->postTypes(...$args);
    }

    /**
     * @since 16xxxx Initial release.
     */
    public static function systematicRoleIds(...$args)
    {
        return $GLOBALS[static::class]->Utils->Systematic->roleIds(...$args);
    }

    /**
     * @since 16xxxx Initial release.
     */
    public static function systematicUriPatterns(...$args)
    {
        return $GLOBALS[static::class]->Utils->Systematic->uriPatterns(...$args);
    }
}